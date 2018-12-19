<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Session;
//引入表单验证
use App\Http\Requests\UserAdd;
use App\Http\Requests\UserUpdate;
class AdminuserController extends Controller
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
        $admin=DB::table("admin_user")->where("username",'like',"%".$k."%")->paginate(5);
        //加载模板
        return view('Admin.user.user',['admin'=>$admin,'request'=>$request->all()]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.user.useradd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserAdd $request)
    {
        $data = $request->all();
        if($data['password'] != $data['repass']) {
            // session::get('error','两次输入密码不一致');
            return back()->with('error','密码不一致');
        }
        $data=$request->except(['repass','_token']);
        $data['password']=Hash::make($data['password']);
        $stmt = DB::table('admin_user')->insert($data);
        if($stmt) {
            return redirect("/adminsuser")->with('success','添加成功');
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
    public function edit(Request $request, $id)
    {
        //根据id查询数据
        $res = DB::table('admin_user')->where('id','=',$id)->first();
        // $res = $request->except(['password','id']);
        //加载模板
        return view('Admin.user.edit',['res'=>$res]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdate $request, $id)
    {
        $data = $request->all();
        if ($data['pass'] !=$data['password']) {
            $data = $request->except(['_token','_method','pass']);
            $data['password']=Hash::make($data['password']);
        } else {
            $data = $request->except(['_token','_method','pass']);
        }
        $num = DB::table('admin_user')->where('id','=',$id)->update($data);
        if ($num) {
            return redirect("/adminsuser")->with('success','修改成功');
        } else { 
            return redirect("/adminsuser/$id/edit")->with('error','修改失败');
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
    //删除用户
    public function del(Request $request) 
    {
        $id = $request->input('id');
        $num = DB::table('admin_user')->delete($id);
        if($num) {
            return '1';
        } else {
            return '0';
        }
    }
    //分配角色
    public function rolelist($id){
        //获取管理员用户信息
        $info=DB::table("admin_user")->where("id",'=',$id)->first();
        // dd($info);
        //获取所有的角色信息
        $role=DB::table("role")->get();
        //获取当前管理员已有的角色信息
        $data=DB::table("user_role")->where("uid",'=',$id)->get();
        if (count($data)) {
            //遍历
            foreach($data as $v){
                $rids[]=$v->rid;
            }
            return view("Admin.user.role",['info'=>$info,'role'=>$role,'rids'=>$rids]);
        } else {
            return view("Admin.user.role",['info'=>$info,'role'=>$role,'rids'=>array()]);
            }
    }
    //保存角色
    public function saverole(Request $request){
        //获取rids 参数 选中的角色id
        $rids=$_POST['rids'];
        //获取id
        $uid=$request->input('uid');
        //删除当前用户已有的角色信息
        DB::table("user_role")->where("uid",'=',$uid)->delete();
        //遍历数组$rids
        foreach($rids as $v){
            //封装需要插入的数据
            $data['rid']=$v;
            $data['uid']=$uid;
            //执行插入
            DB::table("user_role")->insert($data);
        }
        return redirect("/adminsuser")->with('success','角色分配成功');
    }
}
