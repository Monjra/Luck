<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield("title")</title>
    <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/admin/css/form.css">
    <link rel="stylesheet" href="/static/admin/css/my.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/static/admin/css/font.css">
	<link rel="stylesheet" href="/static/admin/css/xadmin.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
    <script src="/static/admin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/static/admin/js/xadmin.js"></script>

</head>
<body>
    <!-- 顶部开始 -->
    <div class="container">
        <div class="logo"><a href="/admin">X-ADMIN V1.1</a></div>
        <div class="open-nav"><i class="iconfont">&#xe699;</i></div>
        <ul class="layui-nav right" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;">admin</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
              <!-- <dd><a href="">个人信息</a></dd> -->
              <dd><a href="/admin/login/create">切换帐号</a></dd>
              <dd><a href="/admin/login/create">退出</a></dd>
            </dl>
          </li>
          <li class="layui-nav-item"><a href="/">前台首页</a></li>
        </ul>
    </div>
    <!-- 顶部结束 -->
    <!-- 中部开始 -->
    <div class="wrapper">
        <!-- 左侧菜单开始 -->
        <div class="left-nav">
          <div id="side-nav">
            <ul id="nav">
                <li class="list" current>
                    <a href="/admin">
                        <i class="iconfont">&#xe761;</i>
                        欢迎页面
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                </li>
                <li class="list">
                    <a href="javascript:;">
                        <i class="iconfont">&#xe70b;</i>
                        会员管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/member">
                                <i class="iconfont">&#xe6a7;</i>
                                会员列表
                            </a>
                        </li>   
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        分类管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/admin_cate">
                                <i class="iconfont">&#xe6a7;</i>
                                分类列表
                            </a>
                        </li>
                        <li>
                            <a href="/admin_cate/create">
                                <i class="iconfont">&#xe6a7;</i>
                                分类添加
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        商品管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="/goods">
                                <i class="iconfont">&#xe6a7;</i>
                                商品列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        评论管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="/comments">
                                <i class="iconfont">&#xe6a7;</i>
                                评论列表
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        轮播管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="/admin_slide">
                                <i class="iconfont">&#xe6a7;</i>
                                轮播列表
                            </a>
                        </li>
                        <li>
                            <a href="/admin_slide/create">
                                <i class="iconfont">&#xe6a7;</i>
                                轮播图添加
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        管理员管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="/adminsuser">
                                <i class="iconfont">&#xe6a7;</i>
                                管理员列表
                            </a>
                        </li>
                        <li>
                            <a href="/adminrole">
                                <i class="iconfont">&#xe6a7;</i>
                                角色管理
                            </a>
                        </li>
                        <li>
                            <a href="/adminpermission">
                                <i class="iconfont">&#xe6a7;</i>
                                权限管理
                            </a>
                        </li>
                    </ul>
                </li>
                  <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        订单管理
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="/order">
                                <i class="iconfont">&#xe6a7;</i>
                                订单列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list" >
                    <a href="javascript:;">
                        <i class="iconfont">&#xe6a3;</i>
                        系统设置
                        <i class="iconfont nav_right">&#xe697;</i>
                    </a>
                    <ul class="sub-menu" style="display:none">
                        <li>
                            <a href="./banner-list.html">
                                <i class="iconfont">&#xe6a7;</i>
                                轮播列表
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
          </div>
        </div>
        <!-- 左侧菜单结束 -->
        <!-- 右侧主体开始 -->
        <div class="page-content">
          <div class="content">
             
                    <!-- 成功 -->
                   @if(session('success'))
                   <div class="mws-form-message success">
                        {{session('success')}}
                   </div> 
                   @endif
                   <!-- 失败 -->
                    @if(session('error'))
                    <div class="mws-form-message warning">
                       {{session('error')}}
                   </div>
                   @endif
            <!-- 右侧内容框架，更改从这里开始 -->
            @section("admin")
            @show
            
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
        </div>
        <!-- 右侧主体结束 -->
    </div>
    <!-- 中部结束 -->
    <!-- 底部开始 -->
    <div class="footer">
        <!-- <div class="copyright">Copyright ©2017 x-admin v2.3 All Rights Reserved. 本后台系统由X前端框架提供前端技术支持</div>   -->
    </div>
    <!-- 底部结束 -->
    <!-- 背景切换开始 -->
	<div class="bg-changer">
        <div class="swiper-container changer-list">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="item" src="/static/admin/images/a.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/static/admin/images/b.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/static/admin/images/c.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/static/admin/images/d.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/static/admin/images/e.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/static/admin/images/f.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/static/admin/images/g.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/static/admin/images/h.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/static/admin/images/i.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/static/admin/images/j.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/static/admin/images/k.jpg" alt=""></div>
                <div class="swiper-slide"><span class="reset">初始化</span></div>
            </div>
        </div>
        <div class="bg-out"></div>
        <div id="changer-set"><i class="iconfont">&#xe696;</i></div>   
    </div>
    <!-- 背景切换结束 -->
</body>
<script>
        $('.success').click(function(){
            $(this).toggle();
        });
</script>
</html>