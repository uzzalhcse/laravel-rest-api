<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Auth\UserRequest;
use App\Http\Requests\PurchasePackageRequest;
use App\Http\Resources\Acl\PermissionResource;
use App\Http\Resources\EloquentResource;
use App\Http\Resources\Auth\UserResource;
use App\Interfaces\Auth\UserRepositoryInterface;
use App\Jobs\WelcomeEmailJob;
use App\Models\Acl\Module;
use App\Models\Auth\User;
use App\Models\Package\Package;
use App\Models\Package\UserPackage;
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
        $user = Auth::user();
        $amount = abs($request->amount);
        if (isset($user->billboard_package) && isset($user->advertisement_package)){
            return $this->error('Package already exist');
        }
        $package = Package::findOrFail($request->id);

        DB::beginTransaction();
        try {

            $userPackage = new UserPackage();
            $userPackage->user_id = $user->id;
            $userPackage->package_id = $package->id;
            $userPackage->amount = $amount;
            $userPackage->audition_limit = floor($amount * $package->cpa);
            $userPackage->expired_at = $package->type == 'Billboard' ? Carbon::now()->addDays(floor($amount * $package->cpa)) : Carbon::now();
            $userPackage->save();


            $transaction = new Transaction();
            $transaction->user_id = $user->id;
            $transaction->trxid = Str::random(6);
            $transaction->sub_total = $request->amount;
            $transaction->discount = 0;
            $transaction->tax = 0;
            $transaction->total = $request->amount;
            $transaction->payment_method = $request->payment_method;
            $transaction->type = $request->type;
            $transaction->status_id = $request->payment_method == 'Bank' ? 3 : 1;
            $transaction->save();
            DB::commit();
            return $this->success('Purchase completed');

        } catch (\Exception $exception){
            DB::rollBack();
            return $this->error('Purchase failed',[$exception]);
        }

    }
}
