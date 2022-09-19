<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdsRequest extends FormRequest
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
            'title'=> 'required',
            'description'=> 'required',
            'country_ids'=> 'required',
            'provider_ids'=> 'required',
            'male_age_range'=> 'required',
            'female_age_range'=> 'required',
            'preferred_gender'=> 'required',
        ];
    }
}
