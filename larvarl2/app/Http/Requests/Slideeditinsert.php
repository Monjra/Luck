<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Slideeditinsert extends FormRequest
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
            'name'=>'required|regex:/^[\x80-\xff_a-zA-Z0-9]+$/',
            'status'=>'required',
            'descride'=>'required|regex:/^[\x80-\xff_a-zA-Z0-9]+$/',


        ];
    }

     public function messages(){
        return [
            'name.required'=>'轮播图名不能为空',
            'name.regex'=>'轮播图名不能有特殊符号',
            'status.required'=>'状态不能为空',
            'descride.required'=>'内容不能为空',
            'descride.regex'=>'内容不能有特殊符号',
        ];
    }
}
