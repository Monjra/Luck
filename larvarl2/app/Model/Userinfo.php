<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Userinfo extends Model
{
    //定义模型
    //定义与模型关联的数据表
		protected $table="user_info";
		//主键
		protected $primaryKey="id";
		//设置是否需要自动维护时间戳 created_at updated_at
		public $timestamps =false;
		/**
		* 可以被批量赋值的属性。
		*
		* @var array
		*/
		protected $fillable = ['hobby','sex','users_id','head_pic'];
}
