<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //与模型关联的数据表
	protected $table = 'order';
	// 该模型是否被自动维护时间戳
	public $timestamps = true;
	// 可以被批量赋值的属性。
	protected $fillable = ['user_name,address,monty,pay_time,status,order_sn,phone,created_at,updated_at,goods_id'];

	//对数据status做自动处理 
	public function getStatusAttribute($value){
		$status=[0=>'待付款',1=>'付款成功',2=>'点击发货',3=>'发货成功',4=>'退货'];
		return $status[$value];
	}
}
	
