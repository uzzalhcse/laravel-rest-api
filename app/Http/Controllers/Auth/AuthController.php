<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\UpdatePasswordRequest;
use App\Http\Requests\Auth\UpdateProfileRequest;
use App\Http\Resources\Auth\AuthResource;
use App\Models\Auth\Role;
use App\Models\Auth\User;
use App\Models\Auth\UserProfile;
use App\Models\Auth\UserRole;
use App\Repositories\Auth\UserRepository;
use App\Rules\MatchOldPassword;
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
            return $this->error('Credentials not match', 401);
        }
        if (!Auth::user()->is_active){
            return $this->error('Account is not Active!');
        }
        $tokenName = 'adminAuthToken';
        return $this->success('Login Success', [
            'access_token' => auth()->user()->createToken($tokenName)->plainTextToken,
            'token_type' => 'Bearer'
        ]);
    }

    public function register(RegisterRequest $request){
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

            $role = Role::where('slug',Str::lower($request->type))->firstOrFail();
            $userRole = new UserRole();
            $userRole->user_id = $user->id;
            $userRole->role_id = $role->id;
            $userRole->save();

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
            'user'=>new AuthResource(Auth::user())
        ]);
    }

    public function updateProfile(UpdateProfileRequest $request){
        $user = $this->userRepository->updateProfile($request,Auth::user());
        return $this->success('Profile updated successfully',[
            'user'=>$user
        ]);

    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        User::find(Auth::id())->update(['password'=> $request->new_password]);
        return $this->success('Successfully Change Password');

    }


}
