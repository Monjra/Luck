<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台登录-X-admin1.1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./static/admin/css/font.css">
	<link rel="stylesheet" href="./static/admin/css/xadmin.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
    <script src="./static/admin/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="./static/admin/js/xadmin.js"></script>

</head>
<body>
    
    
        
    <div class="login-logo"><h1>X-ADMIN V1.1</h1></div>
    <div class="login-box">
        <form class="layui-form layui-form-pane" action="/admin/login" method="post">
              
            <h3>登录你的帐号</h3>
            <label class="login-title" for="username">帐号</label>
            <div class="layui-form-item">
                <label class="layui-form-label login-form"><i class="iconfont">&#xe6b8;</i></label>
                <div class="layui-input-inline login-inline">
                  <input type="text" name="username" lay-verify="required" placeholder="请输入你的帐号" autocomplete="off" class="layui-input">
                  {{csrf_field()}}
                </div>
              
            </div>
            <label class="login-title" for="password">密码</label>
            <div class="layui-form-item">
                <label class="layui-form-label login-form"><i class="iconfont">&#xe82b;</i></label>
                <div class="layui-input-inline login-inline">
                  <input type="text" name="password" lay-verify="required" placeholder="请输入你的密码" autocomplete="off" class="layui-input">
                </div>
            </div>
                    <input name="captcha" type="text" placeholder="验证码" lay-verify="required" autocomplete="off" class="layui-input">  
                    <a onclick="javascript:re_captcha();">  
                    <img src="{{ URL('/code/captcha/1') }}" id="127ddf0de5a04167a9e427d883690ff6">  
                    </a> 
                    @if(session('error'))
                        <div class="mws-form-message warning">
                        <li style="color:red">{{session('error')}}</li>
                        </div>
                    @endif
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li style="color:red">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                 @endif
            <div class="form-actions">
                <button class="btn btn-warning pull-right" lay-submit lay-filter="login"  type="submit">登录</button> 
            </div>
        </form>
      
    </div>
	<div class="bg-changer">
        <div class="swiper-container changer-list">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="item" src="./static/admin/images/a.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="./static/admin/images/b.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="./static/admin/images/c.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="./static/admin/images/d.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="./static/admin/images/e.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="./static/admin/images/f.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="./static/admin/images/g.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="./static/admin/images/h.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="./static/admin/images/i.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="./static/admin/images/j.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="./static/admin/images/k.jpg" alt=""></div>
                <div class="swiper-slide"><span class="reset">初始化</span></div>
            </div>
        </div>
        <div class="bg-out"></div>
        <div id="changer-set"><i class="iconfont">&#xe696;</i></div>   
    </div>
    
    <script type="text/javascript">  
        function re_captcha() {  
            $url = "{{ URL('/code/captcha') }}";
            $url = $url + "/" + Math.random();
                document.getElementById('127ddf0de5a04167a9e427d883690ff6').src = $url;
            }
</script> 
</body>
</html>