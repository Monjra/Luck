<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
// 导入模型
use App\Model\order;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 订单列表
    public function index(Request $request)
    {    
        // 获取搜索的关键字
        $k=$request->input('username');
        // 调用数据库
        $order = order::where("user_name",'like','%'.$k.'%')->paginate(2);
        // dd($order);
        // 分配
        return view('Admin.Order.order',['order'=>$order,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 添加页面
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // 执行添加
    public function store(Request $request)
    {
        //
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
        // echo $id;
        // 获取修改的数据
        $order=order::find($id);
        // dd($order);
        // 加载添加页面
        return view('Admin.Order.edit',['order'=>$order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 执行修改
    public function update(Request $request, $id)
    {
        // dd($request->all());
        // 筛选需要的字段
        $data=$request->except(['pay_time','status','created_at','_token','_method','updated_at']);
        // 写入数据库
         if(order::where('id','=',$id)->update($data)){
            // alert("修改成功");
            return redirect('/order')->with('success', '修改成功');
        }else{
            return redirect('/edit')->with('error','修改失败');
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
     
    }

    public function del(Request $request){
        $id=$request->input('id');
        // dd($id);
        if(DB::table("order")->where('id','=',$id)->delete()){
            echo 1;
        }
    }

    public function status(Request $request){
        $id=$request->input('id');
        // 筛选需要的字段
        $data=$request->except(['user_name','address','pay_time','created_at','_token','_method','updated_at','money','order_sn','phone']);
        $data['status']=3;
        // dd($id);
        if(DB::table("order")->where('id','=',$id)->update($data)){
            echo 3;
        }
    }
}
