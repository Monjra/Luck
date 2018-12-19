<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Slideinsert;
use App\Http\Requests\Slidekeyinsert;
use App\Http\Requests\Slideeditinsert;
use DB;
class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 轮播图列表
    public function index(Slidekeyinsert $request)
    {
        // 获取数据
        $slide = DB::table("slide")->select(DB::raw('*'))->where('name','like',"%".$request->input('keywords')."%")->paginate(5);

        $counts=DB::table('slide')->select(DB::raw('*'))->get();
        // 获取总条数
        $num=count($counts);
        // 加载模板
        return view('Admin.Slide.index',['slide'=>$slide,'request'=>$request->all(),'num'=>$num]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 轮播图添加
    public function create()
    {
        // 加载模板
        return view('Admin.Slide.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // 执行添加
    public function store(Slideinsert $request)
    {
        // 获取需要的数据
        $data = $request->only('name','descride','status');

        if($request->hasFile('url')){
            // 初始化名字
            $name = time()+rand(1,10000);
            // 获取上传文件后缀
            $ext = $request->file("url")->getClientOriginalExtension();
            // 移动到指定的目录下（提前在public下新建uploads目录）
            $request->file("url")->move("./uploads/lun",$name.".".$ext);
            $data['url']="/uploads/lun/".$name.".".$ext;
        }
        
        $data['createtime']=time();
        
        if(DB::table('slide')->insert($data)){
            return redirect('/admin_slide')->with('success','添加成功');
        }else{
            
            return back()->with('error','添加失败');
            unlink("./uploads/lun",$name.".".$ext);
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
    // 修改
    public function edit($id)
    {
        $slide = DB::table('slide')->where('id','=',$id)->first();
        return view('Admin.Slide.edit',['slide'=>$slide]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 执行修改
    public function update(Slideeditinsert $request, $id)
    {
        // 获取需要修改的数据
        $info=DB::table('slide')->where('id','=',$id)->first();
        $m='.'.$info->url;
        // 获取参数
        $data=$request->except('_token','_method');
        // 获取需要的id
        
        if($request->hasFile('url')){
            // 初始化名字
            $name = time()+rand(1,10000);
            // 获取上传文件后缀
            $ext = $request->file("url")->getClientOriginalExtension();
            // 移动到指定的目录下（提前在public下新建uploads目录）
            $request->file("url")->move("./uploads/lun",$name.".".$ext);
            $data['url']="/uploads/lun/".$name.".".$ext;

            $data['createtime']=time();
        
            if(DB::table('slide')->where('id','=',$id)->update($data)){
                unlink($m);
                return redirect('/admin_slide')->with('success','添加成功');
            }else{
                
                return back()->with('error','添加失败');
                unlink("./uploads/lun",$name.".".$ext);
            }
        }else{
            if(DB::table('slide')->where('id','=',$id)->update($data)){
                return redirect('/admin_slide')->with('success','修改成功');
                }else{
                return redirect('/admin_slide')->with('with','修改失败');
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

    // Ajax修改停用
    public function editstop(Request $request){
        $id = $request->input('id');
        if(DB::table("slide")->where("id",'=',$id)->update(['status'=>1])){
            echo 1;
        }else{
            echo 0;
        }
    }
    // Ajax修改启用
    public function editstart(Request $request){
        $id = $request->input('id');
        if(DB::table("slide")->where("id",'=',$id)->update(['status'=>0])){
                echo 1;
            }else{
                echo 0;
            }

    }

    public function del(Request $request){
        $id = $request->input('id');
        if(DB::table("slide")->where("id",'=',$id)->delete()){
            echo 1;
        }else{
            echo 2;
        }
    }
}
