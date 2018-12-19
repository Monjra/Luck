<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Goods;
use DB;
use App\Http\Requests\AdminGoods;
use App\Http\Requests\AdminGoodsSelect;


class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *商品模块 关联表goods
     * @return \Illuminate\Http\Response
     */
    public function index(AdminGoodsSelect $request)
    {
        $k=$request->input('keywords');
        $goods=DB::table('goods')->select(DB::raw('*'))->where("goods_name",'like',"%".$k."%")->paginate(2);
        $good=DB::table('goods')->get();
        // var_dump($goods);
        return view("Admin.Goods.list of goods",['goods'=>$goods,'request'=>$request->all(),'good'=>$good]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("Admin.Goods.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //执行添加
    public function store(AdminGoods $request)
    {
        //
        $arr=$request->except('_token');
        // var_dump(expression)($arr);
        if(DB::table("goods")->insert($arr)){
            return redirect("/goods")->with('success','添加成功');
        }else{
           return redirect("/goods")->with('error','添加失败');
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
        $goods=DB::table("goods")->where("id",'=',$id)->first();
        // var_dump($goods); 
        return view("Admin.Goods.edit",['goods'=>$goods]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminGoods $request, $id)
    {
        //
        // var_dump($_POST);
        $goods=$request->except(['_method','_token']);
        // var_dump($goods);
        if(DB::table("goods")->where("id","=",$id)->update($goods)){
            return redirect("/goods")->with('success','添加成功');
        }else{
            return redirect("/goods")->with('error','添加成功');
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
    public function del(Request $request){
        // dd($request);
        $id=$request->input('id');
        // echo $id;
        if(DB::table("goods")->where("id",'=',$id)->delete()){
            echo 1;
        }
    }
    public function status(Request $request){
        $status=$request->input('status');
        

        $id=$request->input('id');
        
        if ($status==1) {
            if(DB::table('goods') ->where('id','=', $id) ->update(['goods_status' => 0])){
                echo 0;
            }else{
                DB::table('goods') ->where('id','=', $id) ->update(['goods_status' => 1]);
                echo 1;
            }
        }else{
            if(DB::table('goods') ->where('id','=', $id) ->update(['goods_status' => 1])){
                echo  1 ;
            }else{
                DB::table('goods') ->where('id','=', $id) ->update(['goods_status' => 1]);
                echo  0 ;
            }
            
        }

    }
}
