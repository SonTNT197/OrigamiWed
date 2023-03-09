<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class categoryRequest extends FormRequest
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
            'name_category'=>'bail|required|unique:tblcategory,name_category',
            'img_category'=> 'bail|required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
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
