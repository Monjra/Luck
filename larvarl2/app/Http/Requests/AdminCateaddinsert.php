<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCateaddinsert extends FormRequest
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
            'type_name'=>'required|regex:/^[\x80-\xff_a-zA-Z0-9]+$/',
            'type_status'=>'required',
            'type_pid'=>'required',
        ];
    }

     public function messages(){
        return [
            'type_name.required'=>'分类名不能为空',
            'type_name.regex'=>'分类名不能有特殊符号',
            'type_status.required'=>'状态不能为空',
            'type_pid.required'=>'父类不能为空',
        ];
    }
}
