@extends('Home.HomePublic.public_order')
@section('home')
<div class="bd_bottom_ea">
    <div class="wrap pub_logo_box clearfix">
        <div class="pub_logo"><a href="index.html"><img alt="" src="/static/Home/pc/common/img/logo.png?v=biyao_3251680"></a></div>
    </div>
</div>
</div><div class="wrap relative">
    <div class="shopStepBox">
        <div class="publicStepsbox">
            <div class="car_step_icon car_step1"></div>
            <ul class="clearfix car_step_txt">
                <li class="checked">查看购物车</li>
                <li>确认订单信息</li>
                <li>在线付款</li>
                <li>收货并评价</li>
            </ul>
        </div>
    </div>
</div>
<div class="wrap  h580">
    <div class="sop_nothingbox">
        <img src="http://static.biyao.com/pc/buy/img/shoppingcart.png?v=biyao_456d613" />
        <p class="inline">
            <span id="loginTip" class="sop_span inline">您的购物车还是空的</span>
            <span id="unloginTip" class="sop_span inline">您的购物车还是空的，<a onclick='LT.login_uri("http://www.biyao.com/account/login.html")' class="col_link">登录</a>后，将显示您之前加入的商品。</span><br />
        </p>
    </div>
    <div class="toindex" align="center">
        <a href="http://www.biyao.com/home/index.html">马上购物</a>
    </div>

</div>
<script type="text/javascript">
    window.MainSite = "http://www.biyao.com";
</script>
<script type="text/javascript"
        src="/static/Home/pc/common/js/common.js?v=biyao_52bff81"></script>
<script type="text/javascript"
        src="/static/Home/pc/common/js/ui/dialog.js?v=biyao_ba57fb5"></script>
<script type="text/javascript"
        src="/static/Home/pc/common/js/ui/select.js?v=biyao_1dcaa7c"></script>
<script type="text/javascript"
        src="/static/Home/pc/common/js/ui/autocomplete.js?v=biyao_bd4725d"></script>
<script type="text/javascript"
        src="/static/Home/pc/common/js/ui/jquery.pagination.js?v=biyao_1a0a135"></script>
<script type="text/javascript"
        src="/static/Home/pc/common/js/ui/pages.js?v=biyao_5fd7a00"></script>
<script type="text/javascript"
        src="/static/Home/pc/www/js/utility/qrcode.js?v=biyao_8c0b79c"></script>
<script type="text/javascript"
        src="/static/Home/pc/buy/js/shopcarDes.js?v=biyao_ba3e6ae"></script>
<script type="text/javascript"
        src="/static/Home/pc/www/js/product/lazyloadIM.js?v=biyao_c5ce53c"></script>

<script type="text/javascript" src="/static/Home/pc/common/js/lazyload.js?v=biyao_80d4f78"></script>

<script type="text/javascript" src="/static/Home/pc/buy/js/materiallistDes.js?v=biyao_21283ab"></script>
<script type="text/template" id="materialsOfProductTemplate">
    <div class="pop_bd pd_t15 clearfix">
        <ul class="sizeZero ml_list">
        </ul>
    </div>
</script><div data-selector="J_im" id="webIM_showDiv"></div>
@endsection
@section('title','购物车没有商品的状态')