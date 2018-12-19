<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Mail;
// 导入验证码
use Gregwar\Captcha\CaptchaBuilder;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 退出
        $request->session()->pull('email');
        $request->session()->pull('password');

        header('refresh:3;url=/homeindex');
        echo "退出成功3s后自动跳转到首页";

        
    }

    // 验证码
    public function code(){
        // 生成校验码代码
        ob_clean();//清除操作
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        session(['vcode'=>$phrase]);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
          
    }

    // 发送纯文本的 视图和数据 $email接收方 $id注册用户 $token校验参数
   public function sendMail($id,$token,$mail){
        //在闭包函数内部使用闭包函数外部的变量 必须use 导入 a 是模板
        Mail::send('Home.a',['id'=>$id,'token'=>$token],
        function($message)use($mail){
            //发送主题
            $message->subject('密码找回');
            //接收方
            $message->to($mail);
        });
    }
      // 找回密码
    public function forget(){
        return view('Home.forget');
    }

     public function doforget(Request $request){
        // 获取email
        $email=$request->input('email');
        // dd($email);
        // 获取数据库的信息
        $info=DB::table("home_user")->where("email",'=',$email)->first();
        // 发送邮件找回密码
       $result = $this->sendMail($info->id,$info->token,$email);
            echo "邮件发送成功请查看邮箱";
    }

    // 邮件重置密码
     public function reset(Request $request){
        $id=$request->input('id');
        // 获取数据
        $info=DB::table('home_user')->where('id','=',$id)->first();
        $token=$request->input('token');
        if($token==$info->token){
        return view('Home.reset',['id'=>$id]);
        }
    }

    public function doreset(Request $request){
         // 获取id
        $id=$request->input('id');
        // 修改密码
        $data['password']=Hash::make($request->input('password'));
        $data['token']=str_random(30);
        if(DB::table('home_user')->where("id","=",$id)->update($data)){
                header('refresh:3;url=/homeindex');
                echo "登录成功3s后自动跳转到商品首页面";
        }
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Home.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取输入的验证码
        $fcode=$request->input('fcode');
        // 获取系统的验证码
        $vcode=session('vcode');
        if($fcode==$vcode){
            // echo ok;
            // 获取邮箱
            $email =$request->input('email');
            // 获取密码
            $password=$request->input('password');
            // 检测邮箱
            $res=DB::table('home_user')->where('email','=',$email)->first();
            if($res){
                // 检测密码
                if(Hash::check($password,$res->password)){
                    //把用户信息写入到session
                    session(['email'=>$res->email]);
                    session(['password'=>$res->password]);
               
                    // 判读状态
                    if($res->status==1){
                        session(['email'=>$email]);
                         header('refresh:3;url=/homeindex');
                         echo "登录成功3s后自动跳转到商品首页面";
                    }else{
                        return back()->with('error','用户为激活请联系客户');
                    }
                }else{
                    return back()->with('error','密码不正确');
                }
            }else{
                return back()->with('error','用户不存在');
            }
        }else{  
            return back()->with('error','验证码不正确')->withInput();
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
}
