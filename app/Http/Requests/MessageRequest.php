<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'receiver_id'=>'required',
            'body'=>'required',
            'type'=>'required',
            'file'=>'required_if:type,image,file|mimes:png,jpg,jpeg,pdf|max:2048',
        ];
    }
}
