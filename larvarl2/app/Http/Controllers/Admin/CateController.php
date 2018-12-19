<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminCateinsert;
use App\Http\Requests\AdminCateaddinsert;
use DB;

class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function gettype(){
        
        //连贯方法
        $type=DB::table('type')->select(DB::raw('*,concat(type_path,",",type_id) as paths'))->orderBy('paths')->get();
        //遍历
        foreach($type as $key=>$value){
            // 转换为数组
            $arr = explode(",",$value->type_path);
            // 获取逗号个数
            $len = count($arr)-1;
            // 字符串重复函数
            $type[$key]->type_name=str_repeat("--|",$len).$value->type_name;
        }
        return $type;
    }

    //分类列表
    public function index(AdminCateinsert $request)
    {

        $type=DB::table('type')->select(DB::raw('*,concat(type_path,",",type_id) as paths'))->where('type_name','like',"%".$request->input('keywords')."%")->orderBy('paths')->paginate(5);
        
        $counts=DB::table('type')->select(DB::raw('*,concat(type_path,",",type_id) as paths'))->get();
        // 获取总条数
        $num=count($counts);
        if($type){
            //遍历
            foreach($type as $key=>$value){
                // 转换为数组
                $arr = explode(",",$value->type_path);
                // 获取逗号个数
                $len = count($arr)-1;
                // 字符串重复函数
                $type[$key]->type_name=str_repeat("--|",$len).$value->type_name;
            }
            //加载模板 分配数据
            return view("Admin.Cate.index",['type'=>$type,'request'=>$request->all(),'num'=>$num]);
        }else{
            return back()->with('error','查询失败');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    //分类添加
    public function create()
    {
        $type=$this->gettype();
        return view("Admin.Cate.add",['type'=>$type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // 执行添加
    public function store(AdminCateaddinsert $request)
    {
        
        // 获取需要添加的数据
        $data=$request->only('type_name','type_pid','type_status');
        // 获取type_pid
        $pid = $request->input("type_pid");

        // 添加顶级分类
        if($pid==0){
            // 拼接path
            $data['type_path']='0';
        }else{
            // 获取父类
            $info = DB::table("type")->where('type_id','=',$pid)->first();
            // 拼接path
            $data['type_path'] = $info->type_path.",".$info->type_id;
        }
        // dd($data);
        // 执行数据库的插入
        if(DB::table('type')->insert($data)){
            return redirect('/admin_cate')->with('success','添加成功');
        }else{
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
    // 修改
    public function edit($id)
    {
        $type=$this->gettype();
        // 获取数据
        $cate = DB::table('type')->where('type_id','=',$id)->first();
        
        return view("Admin.Cate.edit",['type'=>$type,'cate'=>$cate]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 执行修改
    public function update(AdminCateaddinsert $request, $id)
    {
        // 获取需要添加的数据
        $data=$request->only('type_name','type_pid','type_status');
        // 获取PID
        $pid = $request->input("type_pid");

        if($pid==0){
            // 拼接path
            $data['type_path']='0';
        }else{
            // 获取父类
            $info = DB::table("type")->where('type_id','=',$pid)->first();
            // 拼接path
            $data['type_path'] = $info->type_path.",".$info->type_id;
        }
        if(DB::table('type')->where('type_id','=',$id)->update($data)){
            return redirect('/admin_cate')->with('success','修改成功');
        }else{
            return back()->with('error','修改失败');
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
    // Ajax删除
    public function del(Request $request){
        //获取id
        $id = $request->input('id');
        // 获取删除子类的个数
        $res=DB::table("type")->where('type_pid','=',$id)->count();
        if($res>0){
            echo 2;
            exit;
        }
        //执行删除
        if(DB::table("type")->where("type_id",'=',$id)->delete()){
            echo 1;
        }else{
            echo 0;
        }
    }
    // Ajax修改停用
    public function editstop(Request $request){
        $id = $request->input('id');
            if(DB::table("type")->where("type_id",'=',$id)->update(['type_status'=>1])){
                echo 1;
            }else{
                echo 0;
            }
    }
    // Ajax修改启用
    public function editstart(Request $request){
        $id = $request->input('id');

        if(DB::table("type")->where("type_id",'=',$id)->update(['type_status'=>0])){
                echo 1;
            }else{
                echo 0;
            }

    }
}
