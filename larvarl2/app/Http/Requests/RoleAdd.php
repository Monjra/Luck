<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleAdd extends FormRequest
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
            'name'=>'unique:role|regex:/^[\x80-\xff_a-zA-Z0-9]+$/',

        ];
    }

    //自定义错误消息
    public function messages(){
        return[
            'name.required'=>'用户名不能为空',
            'name.unique'=>'用户名重复',
            'name.regex'=>'不能输入特殊字符',
            'name.min'=>'最少4个字符',
            'name.max'=>'最多16个字符',
        ];
    }
    

}
