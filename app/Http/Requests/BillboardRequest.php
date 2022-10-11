<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillboardRequest extends FormRequest
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
        $fileRules = 'required';
        if (request()->isMethod('put')){
            $fileRules = 'sometimes';
        }
        return [
            'title'=>'required',
            'thumbnail_file'=> $fileRules.'|mimes:png,jpg,jpeg|max:1024',
//            'thumbnail'=>'required'
        ];
    }
}
