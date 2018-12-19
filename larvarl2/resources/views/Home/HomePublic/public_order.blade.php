
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta property="wb:webmaster" content="8eabb156d1a9cb46">
    <title>必要平台-订单确认 – 我要的，才是必要的 – 必要biyao.com</title>
    <link href="static/Home/pc/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="static/Home/pc/favicon.ico" rel="icon" type="image/x-icon" />
    <link href="static/Home/pc/common/css/common.css?v=biyao_9cf87cc" rel="stylesheet"/>
    <link href="static/Home/pc/www/css/cm_www.css?v=biyao_c0d1bd0" rel="stylesheet"/>
    <link href="static/Home/pc/buy/css/newBuy.css?v=biyao_dac4785" rel="stylesheet"/>
    <script type="text/javascript">
        window.basePath = "";
        window.ControllerSite = "http://www.biyao.com";
        var ua = navigator.userAgent.toLowerCase();
        var isiOS = navigator.userAgent.match('iPad')||navigator.userAgent.match('iPhone')||navigator.userAgent.match('iPod'),isAndroid=navigator.userAgent.match('Android'),isDesktop = !isiOS&&!isAndroid;
        if (isiOS||isAndroid) {
            if(window.location.href.toString().indexOf("www.biyao.com/product/")>0){//如果现在进的是编辑器页
                var designId=(window.location.href.toString()).substr(parseInt(window.location.href.toString().indexOf("www.biyao.com/product/"))+"www.biyao.com/product/".length,4);//获得样例ID
                window.location.href="http://m.biyao.com/product/show?designid="+designId;
            }
        }
    </script>
    <script type="text/javascript" src="static/Home/pc/common/js/jquery-1.8.3.js?v=biyao_7d074dc"></script>
    <script type="text/javascript" src="static/Home/pc/common/js/jquery.extention.js?v=biyao_98daa33"></script>
    <script type="text/javascript" src="static/Home/pc/common/js/jquery.cookie.js?v=biyao_a5283b2"></script>
    <script type="text/javascript" src="static/Home/pc/common/js/common.js?v=biyao_52bff81"></script>
    <script type="text/javascript" src="static/Home/pc/common/js/ui/dialog.js?v=biyao_ba57fb5"></script>
    <script type="text/javascript" src="static/Home/pc/common/js/ui/select.js?v=biyao_1dcaa7c"></script>
    <script type="text/javascript" src="static/Home/pc/common/js/ui/loadmask.js?v=biyao_5aac5cc"></script>
    <script type="text/javascript" src="static/Home/pc/buy/js/commonre.js?v=biyao_27f335b"></script>
    <script type="text/javascript" src="static/Home/pc/minisite/byshoes/js/jquery.cookie.js?v=biyao_a5283b2"></script>

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
            $.cookie('source', Request['source'],{domain:"127.0.0.54/",path:"/"});
        }
    </script>
</head>
<body>

<!-- 新版首页 -->
<div class="pub_nav">
    <div class="wrap clearfix">
        <div class="f_l">
            <ul class="pub_nav_list sizeZero">
                <li class="inline"><a href="index.html">首页</a><span class="bg"></span></li>
                <li class="inline"><a href="sjzx.html">商家中心</a><span class="bg"></span></li>
                <li class="inline"><a href="sjzx.html">平台政策</a><span class="bg"></span></li>
                <!--   					<li class="inline last"><a href="list.html#complaint/toAddComplaint">非法信息投诉</a></li> -->
                <li class="inline last newapp">
                    <a href="#">必要手机版</a>
                    <div class="app_box">
                        <span class="inline upArre"></span>
                        <div class="con">
                            <p class="sj_evm"></p>
                            <p class="lineH24 col_999">必要手机版</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="f_r">
            <ul class="pub_nav_list sizeZero">
                <li class="inline">
                    <a class="login"  href="MyOrder.html">
                        Hi,by_3444810
                    </a>
                    <a class="regist mg_l10" href="list.html#account/logout">[ 退出 ]</a><span class="bg"></span>
                </li>
                <li class="inline last ">
                    <a href="javascript:void(0);" class="">个人中心<i class="inline pep_bg mg_l10"></i></a>
                    <div class="app_box">
                        <span class="inline upArre"></span>
                        <div class="bg_fff down_list_box">
                            <a class="inline" href="MyOrder.html">我的订单</a>
                            <!-- <a class="inline" href="list.html#MyCenter/MyWorksList.html">我的作品集</a> -->
                            <!-- <a class="inline" href="list.html#MyCenter/MyCoupon.html">我的红包</a> -->
                            <a class="inline" href="Profile.html">个人设置</a>
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
<!-- 占位 -->
@section('home')
@show

<!-- 尾部 -->
<div class="footer_links clearfix J_1200 auto">
    <div class="content wrap sizeZero">
        <div class="footer_nav_box inline">
            <ul class="footer_nav_list clearfix">
                <li>
                    <a target="_blank" href="list.html#minisite/ljby">关于必要</a>
                    <span class="bg_line"></span>
                </li>
                <li>
                    <a target="_blank" href="list.html#help/8.html">加入必要</a>
                    <span class="bg_line"></span>
                </li>
                <li>
                    <a target="_blank" href="tel.html">联系我们</a>
                    <span class="bg_line"></span>
                </li>
                <li class="none">
                    <a target="_blank" href="list.html#list/39/list-1.html">网站地图</a>
                </li>
                <li>
                    <a target="_blank" href="tel.html">官方微博</a>
                    <span class="bg_line"></span>
                </li>

            </ul>
            <p class="col_999 lineH18 mg_t10">◎BIYAO.COM 2015 版权所有
            </p>
            <p class="col_999 lineH18 mg_t10"><i class="gwab_icon inline"></i><a class="col_999 inline mg_r5" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44049102496139" target="_blank">粤公网安备44049102496139号</a> <a class="col_999 inline" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">粤ICP备13088531号</a>
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
</div><script type="text/javascript" src="static/Home/pc/www/js/common.js?v=biyao_2bb680a"></script>
<script type="text/javascript" src="static/Home/pc/common/js/bytrack.js"></script>
</body>

</html>