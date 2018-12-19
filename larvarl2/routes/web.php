<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*邹金华*/
//加载路由
// 验证码
Route::get('/code/captcha/{tmp}', 'Admin\AdminLoginController@captcha');
//后台登陆
Route::resource('admin/login','Admin\AdminLoginController');
Route::group(["middleware"=>'login'],function(){
    //搭建后台
    Route::resource("/admins","Admin\AdminController");
    //管理员管理
    Route::resource("/adminsuser","Admin\AdminUserController");
    //角色分配
    Route::get("/adminroles/{id}","Admin\AdminUserController@rolelist");
    //角色保存
    Route::post("/adminsaverole","Admin\AdminUserController@saverole");
    //删除管理员ajax
    Route::get('/adminsuserdel',"Admin\AdminUserController@del");
    //角色管理
    Route::resource("/adminrole","Admin\AdminRoleController");
    //删除角色
    Route::get('/adminroledel',"Admin\AdminRoleController@del");
    //分配权限
    Route::get("/adminauth/{id}","Admin\AdminRoleController@auth");
    //保存权限
    Route::post("/saveauth","Admin\AdminRoleController@saveauth");
    //权限管理
    Route::resource("/adminpermission","Admin\AdminPermissionController");
    //删除权限
    Route::get('/adminpermissiondel',"Admin\AdminPermissionController@del");

    /*苏英杰*/
    // 分类管理
    Route::resource("/admin_cate","Admin\CateController");
    // Ajax分类删除
    Route::get('/admin_catedel',"Admin\CateController@del");
    // Ajax停用
    Route::get('/admin_catestop',"Admin\CateController@editstop");
    // Ajax启用
    Route::get('/admin_catestart',"Admin\CateController@editstart");
    //轮播图管理
    Route::resource('/admin_slide','Admin\SlideController');
    // Ajax停用
    Route::get('/admin_slidestop',"Admin\SlideController@editstop");
    // Ajax启用
    Route::get('/admin_slidestart',"Admin\SlideController@editstart");
    // Ajax删除
    Route::get('/admin_slidedel','Admin\SlideController@del');

    // 许国辉
    //订单管理
    Route::resource("/order","Admin\OrderController");
    // 订单列表
    Route::get("/orderdel","Admin\OrderController@del");
    Route::get("/ss","Admin\OrderController@status");
    // 会员管理
    Route::resource("/member","Admin\UsersController");
    // 会员状态修改
    Route::get("/ms","Admin\UsersController@off");

    
    //徐铭坚
    Route::resource('/goods','Admin\GoodsController');
    //ajax删除
    Route::get("/goodsdel","Admin\GoodsController@del");
    //ajax修改用户状态
    Route::get("/goodsstatus","Admin\GoodsController@status");
    //商品详情
    Route::resource('/goodss','Admin\GoodsInfoController');
    //AJAX删除
    Route::get("/goodssdel","Admin\GoodsInfoController@del");
    //评论
    Route::resource("/comments","Admin\CommentsController");

});

// 许国辉
//前台路由组
Route::group([],function(){
    
    //注册
    Route::resource('register','Home\RegisterController');
    //测试邮件发送1
    Route::get('/send','Home\RegisterController@send');
    // 邮件2
    // Route::get("/send1","Home\RegisterController@send1");
    // Route::get("/acti","Home\RegisterController@acti");
    // 验证码
    Route::get('/code',"Home\RegisterController@code");
    // 登录
    // Route::resource('/login','Home\LoginController');
    // 找回密码
    Route::get('/forget','Home\LoginController@forget');
    Route::post('/doforget','Home\LoginController@doforget');
    // 调用邮箱找回密码
    Route::get('/reset','Home\LoginController@reset');
    Route::post('/doreset','Home\LoginController@doreset');

    
    //前台首页
    Route::get('/homeindex','Home\indexController@index')->name('index');
});