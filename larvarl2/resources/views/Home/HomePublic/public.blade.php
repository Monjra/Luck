<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="必要C2M商城是全球性价比最高的电子商务平台，是全球第一家用户直连制造（Customer To Manufactory）的平台，通过平台建立消费者与品质制造商的桥梁，将消费者的需求直接发送到工厂，按需生产模式既满足了消费者个性化的需求，又短路了复杂的商品流通环节，真正让消费者享受到专属且高品质的商品。目前，商品覆盖高跟鞋、眼镜、饰品、运动鞋、运动服、女士包包等品类，未来会按照消费者需求来增加新的产品类目。"/>
    <meta name="Keywords" content="必要;必要商城;必要平台;必要电商;C2M商城;工业4.0;定制平台;定制商城;奢侈品定制;定制鞋;定制包;定制眼镜;定制饰品;定制运动服;定制运动鞋" />
    <meta property="qc:admins" content="35713343766211176375747716" />
    <title>@yield('title')</title>
    <link href="/static/Home/pc/favicon.ico" rel="shortcut icon"
          type="image/x-icon" />
    <link href="/static/Home/pc/favicon.ico" rel="icon"
          type="image/x-icon" />
    <script type="text/javascript">
        window.ApiSite = "http://api.biyao.com";
        window.ControllerSite="";
        window.loginUserId=0;
        window.__pageType="other";

        if (window.loginUserId!=""){
            window.WebIMSite="http://webim.idstaff.com";
        }
        else
        {
            window.WebIMSite="http://webim.idstaff.com";
        }
    </script>
      <link type="text/css" href="/static/Home/pc/www/css/myCenter.css?v=biyao_5976431"
          rel="stylesheet" />
    <link href="/static/Home/pc/common/css/common.css?v=biyao_1227846" rel="stylesheet" />
    <link href="/static/Home/pc/www/css/cm_www.css?v=biyao_3f1d92e" rel="stylesheet" />
    <script type="text/javascript"></script>
    <link type="text/css" href="/static/Home/pc/www/css/editor_by.css?v=biyao_a7abbbd" rel="stylesheet" />
    <link type="text/css" href="/static/Home/pc/www/cssnew/noModel.css?v=biyao_6a5d800" rel="stylesheet" /><script type="text/javascript" src="/static/Home/pc/common/js/lazyload.js?v=biyao_80d4f78"></script>
    <script type="text/javascript" src="/static/Home/pc/common/js/jquery-1.8.3.js?v=biyao_7d074dc"></script>
    <script type="text/javascript" src="/static/Home/pc/common/js/jquery.extention.js?v=biyao_98daa33"></script>
    <script type="text/javascript" src="/static/Home/pc/common/js/lazyload.js?v=biyao_80d4f78"></script>
    <script type="text/javascript" src="/static/Home/pc/minisite/byshoes/js/jquery.cookie.js?v=biyao_a5283b2"></script>
    <script type="text/javascript">
        function GetRequest() {
            var url = location.search; //获取url中"?"符后的字串     
            var theRequest = new Object();
            if (url.indexOf("?") != -1) {
                var str = url.substr(1);
                strs = str.split("&");
                for (var i = 0; i < strs.length; i++) {
                    theRequest[strs[i].split("=")[0]] = unescape(strs[i].split("=")[1]);
                }
            }
            return theRequest;
        }
        var Request = new Object();
        Request = GetRequest();
        if(!$.cookie("source")){
            $.cookie('source', Request['source'],{domain:"biyao.com",path:"/"});
        }
    </script>
</head>
<body id="pagebody">
<div class="pub_nav topBanner slideUp">
    <div class="wrap clearfix bg_333">
        <div class="f_l">
            <ul class="pub_nav_list sizeZero">

                <li class="inline"><a href="homeindex">首页</a><span class="bg"></span></li>
                <li class="inline"><a href="">商家中心</a><span class="bg"></span></li>
                <li class="inline"><a href="">平台政策</a><span class="bg"></span></li>
                <!--                         <li class="inline last"><a href="list.html#complaint/toAddComplaint">非法信息投诉</a><span class="bg"></span></li> -->
                <li class="inline last newapp">
                    <a href="#">必要手机版</a>
                    <div class="app_box">
                        <span class="inline upArre"></span>
                        <div class="con">
                            <p class="sj_evm"></p>
                            <p class="lineH24 col_666 f14">必要手机版</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="f_r">
            <ul class="pub_nav_list sizeZero">
            @if(session('email'))
                <li class="inline" id="welcomID"><span class="col_aaa mg_r10">欢迎来到必要</span><a class="col_8c8 inline" href="/login/create">{{session('email')}}</a><span class="bg"></span></li>
                <li class="inline" id="messageID"><a class="col_8c8 inline" href="/login">退出</a><span class="bg"></span></li>
                
            @else
                <li class="inline" id="welcomID"><span class="col_aaa mg_r10">欢迎来到必要</span><a class="col_8c8 inline" href="/login/create">登录</a><span class="bg"></span></li>
                <li class="inline" id="messageID"><a class="col_8c8 inline" href="/register/create">注册</a><span class="bg"></span></li>
            @endif
                <li class="inline last">
                    <a href="javascript:void(0);" class="">个人中心<i class="inline pep_bg mg_l10"></i></a>
                    <div class="app_box">
                        <span class="inline upArre"></span>
                        <div class="bg_fff down_list_box">
                            <a class="inline" href="">我的订单</a>
                            <a class="inline" href="">个人设置</a>

                        </div>
                    </div>
                </li>
                <li class="inline last pd_r0 shopping_cart vTop">
                    <a class="inline sizeZero" href="shopcars.html">
                        <i class="inline"></i>
                        <span id="shopcarNumID" class="inline">购物车 0</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="index_bg_fff">
    <div class="wrap pub_logo_box clearfix">
        <div class="pub_logo f_l"><a href="//Home/index.html"><img alt="" src="/static/Home/pc/common/img/logo.png?v=biyao_4637d54"></a></div>
        <div class="f_r">
        <form style="padding-top: 27px;" action="" method="">
            <input type="text" style="width:178px;height:28px;vertical-align: top;" ><button style="width:31px;height:31px;vertical-align: top;"><img src="/static/Home/pc/common/img/search.png"></button>
        </form>
            <ul class="sizeZero menu_nav_list">
            @foreach($type as $row)
                <li class="inline ">
                    <a href="javascript:;">{{$row->type_name}}</a>
                    @if(count($row->dev))
                    <div class="sub_nav_list pos_pub">
                        <span class="sub_nav_jd"></span>
                        @foreach($row->dev as $rows)
                        <a href="list.html#/man/index.html?f_upd=fc-27" class="escp ">{{$rows->type_name}}</a>
                        @endforeach
                    </div>
                    @endif
                </li>
            @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- 主体占位 -->
@section('home')
@show

<!-- 尾部 -->
<div class="footer_links clearfix J_1200 auto">
    <div class="content wrap sizeZero">
        <div class="footer_nav_box inline">
            <ul class="footer_nav_list clearfix">
                <li>
                    <a target="_blank" href="sjzx.html">关于必要</a>
                    <span class="bg_line"></span>
                </li>
                <li>
                    <a target="_blank" href="sjzx.html">加入必要</a>
                    <span class="bg_line"></span>
                </li>
                <li>
                    <a target="_blank" href="tel.html">联系我们</a>
                    <span class="bg_line"></span>
                </li>
                <li class="none">
                    <a target="_blank" href="tel.html">网站地图</a>
                </li>
                <li>
                    <a target="_blank" href="tel.html">官方微博</a>
                    <span class="bg_line"></span>
                </li>

            </ul>
            <p class="col_999 lineH18 mg_t10">◎BIYAO.COM 2015 版权所有
            </p>
            <p class="col_999 lineH18 mg_t10"><i class="gwab_icon inline"></i><a class="col_999 inline mg_r5" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44049102496139" target="_blank">粤公网安备44049102496139号</a> <a class="col_999 inline" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">粤ICP备15017094号</a>
            </p>
        </div>
        <div class="footer_evm sizeZero inline">
            <div class="inline mg_r40 footer_evm_img">
                <div class="an_bg inline mg_r15"></div>
                <div class="inline evm_tit_msg">
                    <span class="col_333 f14">扫描二维码下载</span><br/>
                    <span class="col_724 f14">必要手机客户端</span>
                </div>
            </div>
            <div class="inline mg_r10 footer_evm_img">
                <div class="weixin_bg inline mg_r15"></div>
                <div class="inline evm_tit_msg">
                    <span class="col_333 f14">扫描二维码关注</span><br/>
                    <span class="col_724 f14">必要官方微信</span>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/static/Home/pc/common/js/common.js?v=biyao_c83c46d" type="text/javascript"></script>
<script type="text/javascript"     src="/static/Home/pc/www/js/common.js?v=biyao_bd8bd36"></script>
<script type="text/javascript" src="/static/Home/pc/common/js/ui/dialog.js?v=biyao_130c013"></script>
<script type="text/javascript" src="/static/Home/pc/common/js/ui/select.js?v=biyao_1dcaa7c"></script>
<script type="text/javascript" src="/static/Home/pc/common/js/ui/jquery.pagination.js?v=biyao_1a0a135"></script>
<script type="text/javascript" src="/static/Home/pc/common/js/ui/pages.js?v=biyao_5fd7a00"></script>
<script type="text/javascript" src="/static/Home/pc/www/js/product/fcode.js?v=biyao_1810c31"></script>
<script type="text/javascript" src="/static/Home/pc/www/js//Home/checkbook.js?v=biyao_8351fee"></script>
<script type="text/javascript" src="/static/Home/pc/common/js/jquery.lazyload.min.js?v=biyao_75578ef"></script>
<script type="text/javascript" src="/static/Home/pc/www/js//Home/newhome.js?v=biyao_3ea3ba3" ></script>
</body>
<script type="text/javascript" src="/static/Home/pc/common/js/bytrack.js?v=biyao_8b3cc7e"></script>

</html>