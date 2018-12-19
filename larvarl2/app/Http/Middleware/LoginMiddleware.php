<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->session()->has('id')) {
            //4.用访问模块的控制器和方法 权限列表 对比
            //获取访问控制器的方法
            //获取访问模块方法名
            $action=$request->route()->getActionMethod();
            //获取访问模块控制器的名字
            $actions=explode('\\', \Route::current()->getActionName());
            //或$actions=explode('\\', \Route::currentRouteAction());
            $modelName=$actions[count($actions)-2]=='Controllers'?null:$actions[count($actions)-2];
            $func=explode('@', $actions[count($actions)-1]);
            //控制器名字
            $controller=$func[0];
            $actionName=$func[1];
            // echo $controller.":".$action;
            //获取权限信息
            $nodelist=session('nodelist');
            // dd($nodelist);
            //和权限列表做对比
            if(empty($nodelist[$controller])||!in_array($action,$nodelist[$controller])){
                // echo $action;
                return redirect("/admin")->with('error',"抱歉,您没有权限访问该模块,请联系超级管理员");
            }
                // echo $next($request);
                return $next($request);
            }else{
            //跳转到登录界面
            return redirect('/admin/login');
        }
    }
}
