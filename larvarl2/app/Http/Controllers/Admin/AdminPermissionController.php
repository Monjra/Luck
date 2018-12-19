<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class AdminPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取搜索关键词
        $k=$request->input('keywords');
        //获取数据
        $res=DB::table("node")->where("name",'like',"%".$k."%")->paginate(5);
        //加载模板
        return view('Admin.Permission.index',['res'=>$res,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Permission.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data=$request->except(['_token']);
        $num = DB::table('node')->insert($data);
        if($num) {
            return redirect("/adminpermission")->with('success','添加成功');
        } else {
            return back()->with('error','添加失败');
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //根据id查询数据
        $res = DB::table('node')->where('id','=',$id)->first();
        //加载模板
        return view('Admin.Permission.edit',['res'=>$res]);
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
        // dd($id);
        $data = $request->all();
        $data = $request->except(['_token','_method']);
        $num = DB::table('node')->where('id','=',$id)->update($data);
        if ($num) {
            return redirect("/adminpermission")->with('success','修改成功');
        } else { 
            return redirect("/adminpermission/$id/edit")->with('error','修改失败');
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
        $id = $request->input('id');
        $num = DB::table('node')->delete($id);
        if($num) {
            return '1';
        } else {
            return '0';
        }
    }
}
