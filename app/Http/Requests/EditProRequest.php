<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name_origami'=>'bail|required|',
            'img_origami'=> 'bail|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
