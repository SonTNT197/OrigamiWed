<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name_origami'=>'bail|required|unique:tblorigami,name_origami',
            'img_origami'=> 'bail|required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category'=>'bail|required',
            'level'=>'bail|required'
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
