<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //与模型关联的数据表
	protected $table = 'home_user';
	
	// 该模型是否被自动维护时间戳
	public $timestamps = false;
	// 可以被批量赋值的属性。
	protected $fillable = ['name,phone,password,email,token,status,created_at,updated_at'];

	// 状态
	public function getStatusAttribute($value){
		$status=[0=>"以禁用",1=>"以激活"];
		return $status[$value];
	}

	// 获取关联的数据表一对一
	public function info(){
		return $this->hasOne('App\Model\Userinfo','user_id');
	}
}
