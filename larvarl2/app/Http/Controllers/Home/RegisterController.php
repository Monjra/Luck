<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// 导入邮箱
use Mail;
// 导入验证码
use Gregwar\Captcha\CaptchaBuilder;
// 导入Hash类
use Hash;
use DB;
class RegisterController extends Controller
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
       

        return view('Home.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phone=$request->input('phone');
        //获取输入的验证码
        $fcode=$request->input('fcode');
        // 获取存系统session的验证码
        $vcode=session('vcode');
        // 挑选数据
        $data = $request->except('repassword','_token','fcode');
        $data['name']=str_random(4);
        $data['status']=1; //0未激活 1已激活
        $data['password']=Hash::make($data['password']);
        $data['token']=str_random(30);
        $data['created_at']=date('Y-m-d H:i:s');
        $data['updated_at']=date('Y-m-d H:i:s');
        // dd($data);
       // 判断验证码是否一致
        if($fcode==$vcode){
            if(DB::table('home_user')->where('phone','=',$phone)->first()){
                return back()->with('error','手机已经被注册');
            }
           if(DB::table('home_user')->insert($data)){ 
                header('refresh:3;url=/login');
                echo "添加成功3s后自动跳转到登录页面";
           }
        }else{
            return back()->with('error','验证码有误请重新输入')->withInput();
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

    // 邮箱验证
    public function send(){
        // echo 11;
        Mail::raw('你好2',function ($message){
            // 发送的主题是
            $message->subject('xgh');
            // 接收方
            $message->to('xgh1242658354@163.com');
        });
    }

    // 发送纯文本的 视图和数据 $email接收方 $id注册用户 $token校验参数
   public function sendMail($id,$token,$mail){
        //在闭包函数内部使用闭包函数外部的变量 必须use 导入 a 是模板
        Mail::send('Home.a',['id'=>$id,'token'=>$token],
        function($message)use($mail){
            //发送主题
            $message->subject('用户激活');
            //接收方
            $message->to($mail);
        });
    }

    // // 调用sendMail
    // public function send1(){
    //     $this->sendMail(1,'xxxx','xgh1242658354@163.com');

    // }

    // //激活方法
    // public function acti(Request $request){
    //     //获取id和token
    //     $id=$request->input('id');
    //     $token=$request->input('token');
    // }

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

    // 找回密码
    public function forget(){
        return view('Home.forget');
    }

}