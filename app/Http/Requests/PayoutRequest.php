<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PayoutRequest extends FormRequest
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
            'amount'=>'required',
            'payment_method'=>'required',
            'paypal_email'=>'required_if:payment_method,Paypal|email',
            'bank_account_name'=>'required_if:payment_method,Bank',
            'bank_account_number'=>'required_if:payment_method,Bank',
            'bank_swift_code'=>'required_if:payment_method,Bank',
            'bank_name'=>'required_if:payment_method,Bank',
            'bank_iban'=>'required_if:payment_method,Bank',
        ];
    }
}
