<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'type' => 'required',
//            'occupation' => 'required_if:type,User',
//            'job_title' => 'required_if:type,Advertiser',
//            'gender' => 'required',
            'mobile' => 'required_if:type,User',
            'email' => ['required', Rule::unique('users')->whereNull('deleted_at')],
            'address' => 'required',
            'country_id' => 'required',
            'password' => 'required|between:8,255|confirmed',
            'profile' => 'present|array',
//            'profile.company_name' => 'required',
//            'profile.company_size' => 'required_if:type,User',
//            'profile.company_info' => 'required_if:type,Advertiser',
            'profile.industry' => 'required',
            'profile.work_phone' => 'required',
            'profile.no_of_employee' => 'required_if:type,Advertiser',
            'profile.avg_call_receive_day' => 'required_if:type,User',
            'profile.state' => 'required',
            'profile.city' => 'required',
            'profile.zipcode' => 'required',
//            'profile.annual_income' => 'string',
//            'profile.annual_budget' => 'required',
            'profile.mobile_service_provider' => 'required_if:type,User',
            'profile.phone_model' => 'required_if:type,User',
//            'profile.personality' => 'required',
//            'profile.no_of_handset' => 'required',
//            'profile.payment_period' => 'required',
//            'profile.ad_line_interest' => 'required',
//            'profile.intend_countries' => 'required',
        ];
    }
}
