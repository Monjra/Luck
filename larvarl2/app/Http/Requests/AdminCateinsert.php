<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCateinsert extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'keywords'=>'regex:/^[\x80-\xff_a-zA-Z0-9]+$/',
        ];
    }

     public function messages(){
        return [
            'keywords.regex'=>'不能为特殊符号',
        ];
    }
}
