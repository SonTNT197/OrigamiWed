<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'name'=>'bail|required|',
            'email'=> 'bail|email|unique:admins,name',
            'password'=>'bail|required|min:8|confirmed',
            'password_confirmation'=>'required',
            'authority'=>'bail|required'
        ];
    }

    public function messages()
    {
        return [
            'required'=>':attribute must be not null',
            'integer'=>'Please integer character'
        ];
    }
    
}
