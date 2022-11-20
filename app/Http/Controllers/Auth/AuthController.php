<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\UpdatePasswordRequest;
use App\Http\Requests\Auth\UpdateProfileRequest;
use App\Http\Requests\BillingAddressRequest;
use App\Http\Resources\Auth\AuthResource;
use App\Http\Resources\EloquentResource;
use App\Jobs\WelcomeEmailJob;
use App\Models\Ads\Ads;
use App\Models\Ads\Audition;
use App\Models\Ads\AuditionHistory;
use App\Models\Auth\BillingAddress;
use App\Models\Auth\Role;
use App\Models\Auth\User;
use App\Models\Auth\UserProfile;
use App\Models\Auth\UserRole;
use App\Models\Notification;
use App\Models\Otp;
use App\Models\Package\UserPackage;
use App\Models\PayoutHistory;
use App\Models\Share\Country;
use App\Repositories\Auth\UserRepository;
use App\Rules\MatchOldPassword;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AuthController extends ApiController
{
    protected UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login(LoginRequest $request): JsonResponse
    {
        if (!Auth::attempt($request->only('email','password'))) {
            return $this->error('Invalid Credentials or user not exist', 401);
        }
        if (!Auth::user()->is_active){
            return $this->error('Account is not Active!');
        }

        if (isset($request->device_token)){
            auth()->user()->device_token = $request->device_token;
            auth()->user()->save();
        }

        $tokenName = 'adminAuthToken';
        return $this->success('Login Success', [
//            'access_token' => auth()->user()->createToken($tokenName)->plainTextToken, // for sanctum
            'access_token' => auth()->user()->createToken($tokenName)->accessToken,
            'token_type' => 'Bearer'
        ]);
    }

    public function register(RegisterRequest $request){
        $otp = Otp::where('mobile',$request->mobile)->where('token',$request->token)->first();
        if (!isset($otp) && $request->type == 'User'){
            return $this->error('Invalid OTP');
        }
        DB::beginTransaction();
        try {

            $user = new User();
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->type = $request->type;
            $user->occupation = $request->occupation;
            $user->job_title = $request->job_title;
            $user->gender = $request->gender;
            $user->mobile = $request->mobile;
            $user->email = $request->email;
            $user->address = $request->address;
            $user->country_id = $request->country_id;
            $user->password = Hash::make($request->password);
            $user->save();

            $userProfile = new UserProfile();
            $userProfile->user_id = $user->id;
            $userProfile->company_name = $request->profile['company_name'];
            $userProfile->company_size = $request->profile['company_size'];
            $userProfile->company_info = $request->profile['company_info'];
            $userProfile->industry = $request->profile['industry'];
            $userProfile->work_phone = $request->profile['work_phone'];
            $userProfile->no_of_employee = $request->profile['no_of_employee'];
            $userProfile->avg_call_receive_day = $request->profile['avg_call_receive_day'];
            $userProfile->state = $request->profile['state'];
            $userProfile->city = $request->profile['city'];
            $userProfile->zipcode = $request->profile['zipcode'];
            $userProfile->annual_income = $request->profile['annual_income'];
            $userProfile->annual_budget = $request->profile['annual_budget'];
            $userProfile->mobile_service_provider = $request->profile['mobile_service_provider'];
            $userProfile->phone_model = $request->profile['phone_model'];
            $userProfile->personality = $request->profile['personality'];
            $userProfile->no_of_handset = $request->profile['no_of_handset'];
            $userProfile->payment_period = $request->profile['payment_period'];
            $userProfile->ad_line_interest = $request->profile['ad_line_interest'];
            $userProfile->intend_countries = $request->profile['intend_countries'];
            $userProfile->save();

            $billingAddress = new BillingAddress();
            $billingAddress->user_id = $user->id;
            $billingAddress->country_id = $user->country_id;
            $billingAddress->first_name = $user->first_name;
            $billingAddress->last_name = $user->last_name;
            $billingAddress->company_name = $request->profile['company_name'];
            $billingAddress->email = $user->email;
            $billingAddress->address = $user->address;
            $billingAddress->city = $request->profile['city'];
            $billingAddress->zipcode = $request->profile['zipcode'];
            $billingAddress->save();

            $role = Role::where('slug',Str::lower($request->type))->firstOrFail();
            $userRole = new UserRole();
            $userRole->user_id = $user->id;
            $userRole->role_id = $role->id;
            $userRole->save();

            dispatch(new WelcomeEmailJob($user));
            if ($request->type == 'User'){
                $otp->delete();
            }
            DB::commit();
            return $this->success('Sign up successful');
        } catch (\Exception $exception){
            DB::rollBack();
            Log::info($exception);
            return $this->error('Sign up failed',[
                $exception->getMessage()
            ]);
        }
    }


    public function logout(Request $request): JsonResponse
    {
        auth()->user()->tokens()->delete();

        return $this->success('Logout Successfully');
    }

    public function info(Request $request)
    {
        return $this->success('Auth User Info',[
            'user'=>new AuthResource(Auth::guard('api')->user())
        ]);
    }

    public function updateProfile(UpdateProfileRequest $request){
        $user = $this->userRepository->updateProfile($request,Auth::guard('api')->user());
        return $this->success('Profile updated successfully',[
            'user'=>$user
        ]);

    }

    public function billingAddress(): JsonResponse
    {
        return $this->success("Billing Address",[
            'item'=>Auth::guard('api')->user()->billing_address->formatResponse()
        ]);
    }
    public function saveBillingAddress(BillingAddressRequest $request): JsonResponse
    {
        $billing_address = BillingAddress::where('user_id',Auth::guard('api')->id())->first();
        if (!isset($billing_address)){
            $billing_address = new BillingAddress();
        }
        $billing_address->user_id = Auth::guard('api')->id();
        $billing_address->country_id = $request->country_id;
        $billing_address->first_name = $request->first_name;
        $billing_address->last_name = $request->last_name;
        $billing_address->company_name = $request->company_name;
        $billing_address->email = $request->email;
        $billing_address->address = $request->address;
        $billing_address->city = $request->city;
        $billing_address->zipcode = $request->zipcode;
        $billing_address->save();
        return $this->success('Billing address saved');
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        User::find(Auth::guard('api')->id())->update(['password'=> Hash::make($request->new_password)]);
        return $this->success('Successfully Change Password');

    }

    public function adminDashboard(){
        $users = User::where('type','User')->latest()->get();
        $advertisers = User::where('type','Advertiser')->get();
        $providers = User::where('type','Provider')->get();
        $ads = Ads::where('status_id',1)->latest()->get();
        $user_packages = UserPackage::where('status_id',1)->get();
        $auditions = Audition::all();
        $auditionsGrp = $auditions->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('Y-m-d');
        });
        $auditionReport = array();

        foreach ($auditionsGrp as $key => $audition){
            $auditionReport['labels'][] = Carbon::parse($key)->format('d M');
            $auditionReport['data'][] = $audition->count();
        }

        $users = User::where('type','User')->get();
        return $this->success('Dashboard',[
            'summary'=>[
                'active_users'=>$users->where('status_id',1)->count(),
                'ads'=>$ads->count(),
                'advertisers'=>$advertisers->count(),
                'providers'=>$providers->count(),
                'plans'=>$user_packages->count(),
                'earnings'=>num_format(get_percentage($auditions->sum('cpa'),25)),
            ],
            '$auditionsGrp'=>$auditionsGrp,
            'auditionReport'=>$auditionReport,
            'latest_ads'=>new EloquentResource($ads->take(20)),
            'latest_users'=>new EloquentResource($users)
        ]);
    }

//    public function addCoverage(Country $country){
//        $country->has_coverage = 1;
//        $country->save();
//        return $this->success('Country coverage updated');
//    }

    public function advertiserDashboard(){
        $myAuditions = Audition::where('advertiser_id', Auth::guard('api')->id())->get();
        $myAds = Ads::where('user_id', Auth::guard('api')->id())->get();
        $total_spend = $myAuditions->sum('cpa');
        $total_audition = $myAuditions->count();
        $total_ads = $myAds->count();
        $remainingAudition = 0;
        if (Auth::guard('api')->user()->advertisement_package){
            $remainingAudition = \auth()->guard('api')->user()->advertisement_package->audition_limit - $myAuditions->where('package_id',\auth()->guard('api')->user()->advertisement_package->package_id)->count();
        }

        $auditionsGrp = $myAuditions->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('Y-m-d');
        });;
        $auditionReport = array();

        foreach ($auditionsGrp as $key => $audition){
            $auditionReport['labels'][] = Carbon::parse($key)->format('d M');
            $auditionReport['data'][] = $audition->count();
        }

        return $this->success('Advertiser dashboard',[
            'summary'=>[
                'total_spend'=>num_format($total_spend),
                'total_audition'=>$total_audition,
                'total_ads'=>$total_ads,
                'remaining_audition'=>$remainingAudition,
            ],
            'auditionReport'=>$auditionReport,
            'advertisement_package'=>Auth::guard('api')->user()->advertisement_package,
        ]);
    }
    public function portalDashboard(){
        $myAuditions = Audition::where(is_provider() ? 'provider_id' : 'user_id', Auth::guard('api')->id())->get();
        $myAuditionHistories = AuditionHistory::where('user_id', Auth::guard('api')->id())->get();
        $total_audition = $myAuditions->count();
        $total_earned = $myAuditionHistories->sum('amount');
        $pending_balance = $myAuditionHistories->where('is_pending',1);
        $total_pending_balance = $pending_balance->sum('amount');
        $total_payout = PayoutHistory::where('user_id',Auth::guard('api')->id())->get()->sum('amount');

        $auditionsGrp = $myAuditions->groupBy(function($date) {
            return Carbon::parse($date->created_at)->format('Y-m-d');
        });;
        $auditionReport = array();

        foreach ($auditionsGrp as $key => $audition){
            $auditionReport['labels'][] = Carbon::parse($key)->format('d M');
            $auditionReport['data'][] = $audition->count();
        }

        return $this->success('Portal dashboard',[
            'summary'=>[
                'total_earned'=>num_format($total_earned),
                'total_audition'=>num_format($total_audition),
                'total_pending_balance'=>num_format($total_pending_balance),
                'total_payout'=>num_format($total_payout),
            ],
            'auditionReport'=>$auditionReport,
        ]);
    }

    public function getPaymentIndent(){
        return $this->success('Payment Intent',[
            'indent'=> Auth::guard('api')->user()->createSetupIntent()
        ]);
    }

    public function myNotifications(){
        $notifications = Auth::guard('api')->user()->my_notifications()->latest('created_at');
        return $this->success('My notifications',[
            'notification'=>new EloquentResource(paginate_if_required($notifications))
        ]);

    }
    public function deleteMyAccount(){
        Auth::guard('api')->user()->delete();
        return $this->success('Account deleted successfully');
    }

}
