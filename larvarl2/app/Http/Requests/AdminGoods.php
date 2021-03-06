<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminGoods extends FormRequest
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
            //
            'goods_name'=>'required|regex:/^[\x80-\xff_a-zA-Z0-9]+$/',

        ];
    }
    public function message()
    {
        return [
            'goods_name.required'=>'商品名不能为空',
            'goods_name.regex'=>'商品名不能有特殊字符',

        ];
    }
}
