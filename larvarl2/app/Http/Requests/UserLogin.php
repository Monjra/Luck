<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLogin extends FormRequest
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
            //会员名做规则设置
            'username'=>'required|regex:/\w{4,8}/',
            //密码和重复密码
            'password'=>'required|regex:/\w{4,16}/',
            //验证码
        ];
    }

    //自定义错误消息
    public function messages(){
        return[
            'username.required'=>'用户名不能为空',
            'username.regex'=>'用户名必须为4-8位的任意数字字母下划线',
            'username.unique'=>'用户名重复',
            'password.required'=>'密码不能为空',
            'password.regex'=>'密码必须为8-16位的任意数字字母下划线',
        ];
    }
    

}
