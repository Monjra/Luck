<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Session;
//引入表单验证
 use App\Http\Requests\UserLogin;
//引入验证码所需的类
use Gregwar\Captcha\CaptchaBuilder; 
use Gregwar\Captcha\PhraseBuilder;

/**
 * 作者:邹金华 
 * 后台登陆.成功 存用户id,用户名到session,return view('admin'); 失败 return false;
 * 相关文件 login.blade.php,UserLogin.php  
 */
class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //加载登陆
        return view('Admin.login');
        

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->session()->pull('id');
        $request->session()->pull('username');
        $request->session()->pull('nodelist');
        return redirect("/admin/login");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\UserLogin  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserLogin $request)
    {
        // dd(123);
        //获取表单提交的所有数据
        $data = $request->all();
        //判断验证码是否正确
        // if($data['captcha'] != session::get('milkcaptcha')) {
        //     return back()->with('error','验证码错误');
        // }
        //提交的密码
        $pass = $data['password'];
        //根据用户名查询数据库
        $users= DB::table('admin_user')->where('username','=',$data['username'])->first();
        //判断用户名是否存在
        if($users){
            //验证密码是否正确
            if(Hash::check($pass, $users->password)){
                //把后台用户id存在session
                session(['id' => $users->id]);
                session(['name'=>$users->username]);
                //1.获取后台登录用户 junge 的所有权限列表信息
                $list=DB::select("select n.name,n.mname,n.aname from user_role as ur,role_node as rn,node as n where ur.rid=rn.rid and rn.nid=n.id and uid={$users->id}");
                // dd($list);
                //2.初始化权限信息
                //把后台首页权限写入到权限信息列表里
                $nodelist['AdminController'][]="index";
                
                //遍历
                foreach($list as $v){
                    $nodelist[$v->mname][]=$v->aname;
                    //如果有create 添加store方法
                    if($v->aname=="create"){
                        $nodelist[$v->mname][]="store";
                    }
                    //如果有edit 方法 添加update方法
                    if($v->aname=="edit"){
                        $nodelist[$v->mname][]="update";
                    }
                }
                // dd($nodelist);
                //3.登录用户所有权限列表信息存储在session里
                session(['nodelist'=>$nodelist]);
                //重定向到后台首页
                return redirect("/admins")->with('success','登录成功');
            } else {
                //密码错误,返回登陆页
                return back()->with('error','密码错误');
            }
        } else {
            //用户名不存在.返回登陆页
            return back()->with('error','用户名不存在');
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
    /**
     * @param int $tmp 整型
     * @return 验证码图;通过路由调用
    */
    //验证码类
    public function captcha($temp)
    {
        $builder = new CaptchaBuilder();
        $builder->build(144,36);
        $phrase = $builder->getPhrase();
        //把内容存入session
        Session::flash('milkcaptcha', $phrase); //存储验证码
        ob_clean();
        return response($builder->output())->header('Content-type','image/jpeg');
    }
}
