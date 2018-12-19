@extends('Home.HomePublic.public_login_pwd')
@section('home')
<div class="wrap">
    <div class="loginItem  auto h580">
        <div class="loginBox">
            <form id="J_phone" method="post" action="/findpwd/validate">
                <input type="hidden" id="k" name="k">
                <input type="hidden" name="returnUrl" value="index.html">
                <div class="inline loginTitBox"><i class="inline findwd_bg spIcon mg_r10"></i><span class="inline">找回密码</span></div>
                <dl class="mg_t20">
                    <!--    <dt class="inline">手机号：</dt> -->
                    <dd class="inline mg_r5">
                        <input type="text" name="username" id="username" class="loginTxt  w360 col_999" value="请输入您的手机号码">
                    </dd>
                    <dd class="inline col_f90 J_validate" id="J_validate"></dd>
                </dl>
                <dl class="mg_t20">
                    <!--    <dt class="inline">验证码：</dt> -->
                    <dd class="inline mg_r5">
                        <input type="text" name="txtVCode" id="txtVCode" class="loginTxt w160 inline col_999 mg_r20 " value="请填写右侧的验证码">
                        <img id="imgVCode" src="" sid="" alt="" class="inline h40 w120 ">
                        <div class="inline mg_l15"><a id="btnChangeVCode" href="javascript:;" class="col_999 unLine">看不清<br>换一张</a></div>
                    </dd>
                    <dd class="inline col_f90 J_validate"></dd>
                </dl>
                <dl class="mg_t20">
                    <!--  <dt class="inline">&nbsp;</dt> -->
                    <dd class="inline mg_r5">
                        <a id="btnNextStep" href="javascript:;" class="J_release loginBtn w400  inline t_c" style="line-height:50px">获取手机验证码</a>
                    </dd>
                </dl>
            </form>
        </div>
    </div>
</div>
@endsection
@section('title','安全中心|找回密码')
