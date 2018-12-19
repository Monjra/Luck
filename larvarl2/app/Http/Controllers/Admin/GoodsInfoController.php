<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Config;
class GoodsInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // var_dump($_GET);
        return view("Admin.GoodsInfo.goodsinfoadd");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=$request->except('_token');
       
        if($request->hasFile('picture')){

            //上传文件后缀名
            $extension=$request->file('picture')->getClientOriginalExtension();

            $s=time()+rand(1,99999);
            $request->file('picture')->move(Config::get('app.app_upload'),$s.".".$extension);
            $data['picture']=trim(Config::get('app.app_upload')."/".$s.".".$extension,'.');
            if(DB::table('inventory')->insert($data)){
                $goods=DB::table('goods')->where("id","=",$data['goods_id'])->first();
                $goodss=DB::select('select * from inventory where goods_id = '.$data['goods_id']);
                return view("Admin.GoodsInfo.goodsinfo",['goods'=>$goods,'goodss'=>$goodss]);
            }else{
                $goods=DB::table('goods')->where("id","=",$data['goods_id'])->first();
                $goodss=DB::select('select * from inventory where goods_id = '.$data['goods_id']);
                return redirect("/goodss/id={$data['goods_id']}")->with('error','添加失败');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // echo $id;
        $goods=DB::table('goods')->where("id","=",$id)->first();
        $goodss=DB::select('select * from inventory where goods_id = '.$id);
        // var_dump($goodss);
        // var_dump($goods);
        return view("Admin.GoodsInfo.goodsinfo",['goods'=>$goods,'goodss'=>$goodss]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // echo "123";
        $goodss=DB::table('inventory')->where('id','=',$id)->first();
        // dd($goodss);
        return view("Admin.GoodsInfo.goodsinfoedit",['goodss'=>$goodss]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // echo $id;
        // var_dump($_POST);
        $arr=DB::table('inventory')->where('id','=',$id)->first();
        
        // $picture='.'.$arr->picture;
        $data=$request->except(['_token','_method']);
        // var_dump($data);
        if($request->hasFile("picture")){//判断是否有文件上传
            $name=time()+rand(1,9999);
            //拿后缀
            $jpg=$request->file('picture')->getClientOriginalExtension();

            $request->file('picture')->move('./Uploads/GoodsInfo/'.date('Y-m-d'),$name.".".$jpg);//移动文件

            $data['picture']="/Uploads/GoodsInfo/".date('Y-m-d').'/'.$name.".".$jpg;


            if(DB::table("inventory")->where("id",'=',$id)->update($data)){
                //干掉老图
                unlink(".".$arr->picture);
                $goods=DB::table('goods')->where("id","=",$data['goods_id'])->first();
                $goodss=DB::select('select * from inventory where goods_id = '.$data['goods_id']);
                return view("Admin.GoodsInfo.goodsinfo",['goods'=>$goods,'goodss'=>$goodss]);
             }
        }else{
            if(DB::table("inventory")->where("id",'=',$id)->update($data)){
                $goods=DB::table('goods')->where("id","=",$data['goods_id'])->first();
                $goodss=DB::select('select * from inventory where goods_id = '.$data['goods_id']);
                return view("Admin.Goodss.goodsinfo",['goods'=>$goods,'goodss'=>$goodss]);
             }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function del(Request $request)
    {
        // echo "1";
        $id=$request->input('id');
        $data=DB::table('inventory')->where('id','=',$id)->first();
        $picture=".".$data->picture;
        if(DB::table("inventory")->where("id",'=',$id)->delete()){
            unlink($picture);
            echo "1";
        }
    }
}
