<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\RoleAdd;
class AdminRoleController extends Controller
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
       $role=DB::table("role")->where("name",'like',"%".$k."%")->paginate(5);
       //加载模板
       return view('Admin.role.index',['role'=>$role,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.role.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleAdd $request)
    {
        $data = $request->All();
        // dd($data);
        $data=$request->except(['_token']);
        $num = DB::table('role')->insert($data);
        if($num) {
            return redirect("/adminrole")->with('success','添加成功');
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
        //根据id查询数据
        $res = DB::table('role')->where('id','=',$id)->first();
        //加载模板
        return view('Admin.role.edit',['res'=>$res]);
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
        $data = $request->all();
        $data = $request->except(['_token','_method']);
        $num = DB::table('role')->where('id','=',$id)->update($data);
        if ($num) {
            return redirect("/adminrole")->with('success','修改成功');
        } else { 
            return redirect("/adminrole/$id/edit")->with('error','修改失败');
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
        $num = DB::table('role')->delete($id);
        if($num) {
            return '1';
        } else {
            return '0';
        }
    }
    //分配权限
    public function auth($id){
    // echo $id;
        // dd($id);
        //获取当前角色信息
        $role=DB::table("role")->where("id",'=',$id)->first();
        //获取所有的权限信息
        $auth=DB::table("node")->get();
        //获取当前角色已有的权限信息
        $data=DB::table("role_node")->where("rid",'=',$id)->get();
        if(count($data)){
            //遍历
            foreach($data as $v){
                $nids[]=$v->nid;
            }
            //加载模板
            return view("Admin.Role.auth",['role'=>$role,'auth'=>$auth,'nids'=>$nids]);
        }else{
            return view("Admin.Role.auth",['role'=>$role,'auth'=>$auth,'nids'=>array()]);
            }
        }
    //保存权限
    public function saveauth(Request $request){
        //获取分配的权限信息
        $nid=$_POST['nids'];
        // echo "<pre>";
        // var_dump($nid);
        //获取角色id
        $rid=$request->input('rid');
        //删除当前角色已有的权限信息
        DB::table("role_node")->where('rid','=',$rid)->delete();
        // echo $rid;
        //遍历$nid
        foreach($nid as $v){
            //封装需要插入的数据
            $data['rid']=$rid;
            $data['nid']=$v;
            //执行插入
            DB::table("role_node")->insert($data);
        }
        //跳转
        return redirect("/admin")->with('success','权限分配成功');
    }
}
