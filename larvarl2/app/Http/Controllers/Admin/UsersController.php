<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
// 导入Hsah
use Hash;
// 导入模型类
use App\Model\User;
//导入校验类
use App\Http\Requests\AdminUserinsert;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   

        // 获取关键字
        $name = $request->input('name');
         $user = User::where('name','like','%'.$name.'%')->paginate(2);
        return view('Admin.User_menber.index',['user'=>$user,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 添加页面
    public function create()
    {
        return view('Admin.User_menber.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminUserinsert $request)
    {
        // dd($request->all());
        // 筛选不需要的字段
        $data=$request->except(['repassword','_token']);
        $data['password']=Hash::make($data['password']);
        // 封装需要的字段
        $data['status']=0;
        $data['token']=str_random(50);
        $data['created_at']=date('Y-m-d H:i:s');
        $data['updated_at']=date('Y-m-d H:i:s');
        // dd($data);
        if(DB::table('home_user')->insert($data)){
            return redirect('/member')->with('success','添加成功');
         }else{
            return redirect('/member/create')->with('error','添加失败');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 获取单条会员详细
    public function show($id)
    {
        // echo $id;
        $info=User::find($id)->info;
       
        //加载模板 分配数据
        return view("Admin.User_menber.user_info",['info'=>$info]);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // 获取查询的数据
         $member=User::find($id);
         
        return view('Admin.Admin.User_menber.edit',['member'=>$member]);
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

   // ajax修改状态
    public function off(Request $request){
      
        $id = $request->input('id');
     
        $data=$request->except(['name','phone','password','email','token','created_at','updated_at','_token','_method']);
        $data['status']=0;
          if(DB::table("home_user")->where('id','=',$id)->update($data)){
            echo 1;
        }
    }
}
