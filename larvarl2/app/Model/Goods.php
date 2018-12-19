<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    //
    protected $table="goods";
    protected $primaryKey="id";
    public $timestamps =flase;
    protected $fillable = ['goods_name','goods_status','pid'];
    public function getStatusAttribute($value){
		$status=[1=>"禁用",2=>"开启"];
		return $status[$value];
	}

}
