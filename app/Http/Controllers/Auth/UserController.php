<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Auth\UserRequest;
use App\Http\Requests\PayoutRequest;
use App\Http\Requests\PurchasePackageRequest;
use App\Http\Resources\Acl\PermissionResource;
use App\Http\Resources\EloquentResource;
use App\Http\Resources\Auth\UserResource;
use App\Interfaces\Auth\UserRepositoryInterface;
use App\Jobs\WelcomeEmailJob;
use App\Models\Acl\Module;
use App\Models\Ads\Ads;
use App\Models\Ads\Audition;
use App\Models\Auth\User;
use App\Models\Package\Package;
use App\Models\Package\UserPackage;
use App\Models\PayoutHistory;
use App\Models\Share\Status;
use App\Models\Share\Transaction;
use App\Repositories\Auth\UserRepository;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserController extends ApiController
{

    protected UserRepositoryInterface $userRepository;

    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->success('User lists',[
            'items'=> new EloquentResource(is_admin()? $this->userRepository->getUsersByRole() : $this->userRepository->getActiveItems())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest $request
     * @return JsonResponse
     */
    public function store(UserRequest $request): JsonResponse
    {
        $user = $this->userRepository->store($request);
        $this->userRepository->saveAcl($user,$request->role_ids,$request->permissions);

        dispatch(new WelcomeEmailJob($user));
        return $this->success('User Saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show(Request $request, User $user): JsonResponse
    {
        $request->merge([
            'user_id'=>[$user->id]
        ]);

        $modules = Module::with('features.permissions')->where('is_enabled',1)->get();
        return $this->success('User Info',[
            'user'=> $user->formatResponse(),
            'modules'=> PermissionResource::collection($modules),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(UserRequest $request, User $user): JsonResponse
    {
        $this->userRepository->update($request,$user);
        $this->userRepository->saveAcl($user,$request->role_ids,$request->permissions);
        return $this->success('User Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return JsonResponse
     */
    public function destroy(User $user): JsonResponse
    {
        $this->userRepository->delete($user);
        return $this->success('User deleted');
    }

    public function updateStatus(User $user, $status): JsonResponse
    {
        $res = $this->userRepository->updateStatus($user, $status);
        return $res ? $this->success('Status Updated') : $this->error('Status Update Failed');
    }

    public function purchasePackage(PurchasePackageRequest $request): JsonResponse
    {
        $user = Auth::guard('api')->user();
        $amount = abs($request->amount);
//        if (isset($user->billboard_package) && isset($user->advertisement_package)){
//            return $this->error('Package already exist');
//        }
        $package = Package::findOrFail($request->id);
        if ($request->payment_type == 'Card'){
            try {
                $user->createOrGetStripeCustomer();
                $user->updateDefaultPaymentMethod($request->payment_method);
                $user->charge($amount * 100, $request->payment_method);
            } catch (\Exception $exception) {
                return $this->error('Purchase failed',[$exception->getMessage()]);
            }
        }
        DB::beginTransaction();
        try {

            $transaction = new Transaction();
            $transaction->user_id = $user->id;
            $transaction->trxid = Str::random(6);
            $transaction->sub_total = $amount;
            $transaction->discount = 0;
            $transaction->tax = 0;
            $transaction->total = $amount;
            $transaction->payment_type = $request->payment_type;
            $transaction->type = $package->type;
            $transaction->status_id = $request->payment_type == 'Bank' ? Status::Pending : Status::Completed;
            $transaction->save();


            $userPackage = UserPackage::with('package')->whereHas('package', function ($p) use ($package) {
                $p->where('type',$package->type);
            })->where('user_id',$user->id)->first();
            if (isset($userPackage)){
                $userPackage->status_id = Status::Suspend;
                $userPackage->save();
            }
            $userPackage = new UserPackage();
            $userPackage->user_id = $user->id;
            $userPackage->package_id = $package->id;
            $userPackage->amount = $amount;
            $userPackage->audition_limit = floor($amount / $package->cpa);
            $userPackage->expired_at = $package->type == 'Billboard' ? Carbon::now()->addDays(floor($amount * $package->cpa)) : Carbon::now()->addYear(10);
            $userPackage->status_id = $request->payment_type == 'Bank' ? Status::Pending : Status::Active;;
            $userPackage->transaction_id = $transaction->id;
            $userPackage->save();

            send_notification([$user->id],'Package Purchase',"Thanks for purchasing package.");
            DB::commit();
            return $this->success('Purchase completed');

        } catch (\Exception $exception){
            DB::rollBack();
            return $this->error('Purchase failed',[$exception]);
        }

    }

    public function payoutRequest(PayoutRequest $request){
        $user = Auth::guard('api')->user();
        $amount = abs($request->amount);
        if ($amount > $user->available_balance){
            return $this->error('Insufficient Balance',[$user->available_balance]);
        }

        $payoutHistory = new PayoutHistory();
        $payoutHistory->user_id = $user->id;
        $payoutHistory->amount = $amount;
        $payoutHistory->payment_method = $request->payment_method;
        $payoutHistory->paypal_email = $request->paypal_email;
        $payoutHistory->bank_account_name = $request->bank_account_name;
        $payoutHistory->bank_account_number = $request->bank_account_number;
        $payoutHistory->bank_swift_code = $request->bank_swift_code;
        $payoutHistory->bank_name = $request->bank_name;
        $payoutHistory->bank_iban = $request->bank_iban;
        $payoutHistory->status_id = Status::Pending;
        $payoutHistory->save();
        send_notification([$user->id],'Payout request',"Your payment is in progress");
        return $this->success('Payout request submitted successfully');
    }

    public function payoutHistory(Request $request){
        $items = PayoutHistory::where('user_id',Auth::guard('api')->id())->latest();
        return $this->success('Payout History',[
            'items'=>new EloquentResource(paginate_if_required($items))
        ]);
    }


    public function allPayoutHistory(Request $request, User $user){
        $items = PayoutHistory::where('user_id',$user->id)->latest();
        return $this->success('Payout History',[
            'items'=>new EloquentResource(paginate_if_required($items))
        ]);
    }

    public function userProfile(User $user){
        return $this->success('User profile',[
            'user'=> $user->getInfo()
        ]);
    }

}
