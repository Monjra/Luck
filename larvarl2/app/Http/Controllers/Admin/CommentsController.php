<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comments=DB::table('comments')
                    ->join('user','comments.user_id','=','user.id')
                    ->join('goods','comments.goods_id','=','goods.id')
                    ->select('comments.*','user.username','goods.goods_name')
                    ->get();
                    
        // var_dump($comments);
        return view('Admin.Comments.Comments',['comments'=>$comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        //
        $comments=DB::table('comments')->where('id','=',$id)->first();
        // var_dump($comments);
        return view('Admin.Comments.add',['comments'=>$comments]);
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
        // echo $id;
        $reply=$request->except(['_method','_token']);
        // var_dump($reply);
        if(DB::table("comments")->where("id","=",$id)->update($reply)){
            return redirect("/comments")->with('success','添加成功');
        }else{
            return redirect("/comments")->with('error','添加成功');
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
}
