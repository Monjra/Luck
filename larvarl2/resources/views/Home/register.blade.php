
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="必要C2M商城是全球性价比最高的电子商务平台，是全球第一家用户直连制造（Customer To Manufactory）的平台，通过平台建立消费者与品质制造商的桥梁，将消费者的需求直接发送到工厂，按需生产模式既满足了消费者个性化的需求，又短路了复杂的商品流通环节，真正让消费者享受到专属且高品质的商品。目前，商品覆盖高跟鞋、眼镜、饰品、运动鞋、运动服、女士包包等品类，未来会按照消费者需求来增加新的产品类目。"/>
    <meta name="Keywords" content="必要;必要商城;必要平台;必要电商;C2M商城;工业4.0;定制平台;定制商城;奢侈品定制;定制鞋;定制包;定制眼镜;定制饰品;定制运动服;定制运动鞋" />
    <meta property="qc:admins" content="35713343766211176375747716" />
    <title>注册</title>
    <link href="static/Home/pc/favicon.ico" rel="shortcut icon"
          type="image/x-icon" />
    <link href="static/Home/pc/favicon.ico" rel="icon"
          type="image/x-icon" />

     <link href="/static/Home/pc/common/css/common.css?v=biyao_1227846" rel="stylesheet" />
    <link href="/static/Home/pc/www/css/cm_www.css?v=biyao_3f1d92e" rel="stylesheet" />
    <script type="text/javascript"  src="/static/Home/pc/common/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript"  src="/static/Home/pc/common/js/jquery-1.8.3.js?v=biyao_7d074dc"></script>
    <script type="text/javascript"  src="/static/Home/pc/common/js/jquery.extention.js?v=biyao_98daa33"></script>
    <script type="text/javascript" src="/static/Home/pc/common/js/lazyload.js?v=biyao_80d4f78"></script>
    <script type="text/javascript" src="/static/Home/pc/minisite/byshoes/js/jquery.cookie.js?v=biyao_a5283b2"></script>
    
</head>
<body id="pagebody">

<html>
<head>
</head>
<body>
<div class="bd_bottom_ea">
    <div class="wrap pub_logo_box clearfix">
        <div class="pub_logo f_l"><a href="/index"><img alt="" src="/static/Home/pc/www/img/logo.png?v=biyao_4637d54"></a></div>
        <div class="f_r">
            <ul class="sizeZero merchant_info_box">
                <li class="inline mg_l40 mg_t40">
                    <span class="inline col_8c8">欢迎来到必要，请 </span><a class="col_8c8 inline mg_l5" href="/login">登录 </a><span class="col_8c8 mg_l5 mg_r5 inline">|</span><span class="col_8c8 inline">注册</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- <div class="login_tw" align="center"> -->
<!-- 	<div class="loginLogo"> -->
<!-- 		<div class="login_Wz" align="right"> -->
<!-- 		</div> -->
<!-- 	</div> -->
<!-- </div> -->
<div class="wrap">
    <div class="loginItem auto ">
     
        <form method="post" action="/register" >
              <div class="loginBox">
                <div class="inline loginTitBox"><i class="inline loginListBg spIcon mg_r10"></i><span class="inline">新用户注册</span></div>
                <dl class="mg_t20">
                    <dd class="inline mg_r5">
                        <label style="font-size:18px;">手机号码：&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" value="{{old('phone')}}"  class=" loginTxt  col_999" name="phone"  autocomplete="off" id="inp1" width="800px" /><font id="myfont1"></font>
                    </dd>
                </dl>

                <dl class="mg_t20">
                    <!-- <dt class="inline">确认密码：</dt> -->
                    <dd class="inline mg_r5">
                        <label style="font-size:18px;">邮箱：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text"  value="{{old('email')}}"  class=" loginTxt  col_999" name="email"  autocomplete="off" id="inp2" width="800px" /><font id="myfont2"></font>
                    </dd>
                    <dd class="inline col_f90 J_validate" id="error2"></dd>
                </dl>

                 <dl class="mg_t20">
                    <!-- <dt class="inline">确认密码：</dt> -->
                    <dd class="inline mg_r5">
                        <label style="font-size:18px;">密码：</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="password"    class=" loginTxt  col_999" name="password"  autocomplete="off" id="inp3" width="800px" /><font id="myfont3"></font>
                    </dd>
                   
                </dl>
                 <dl class="mg_t20">
                    <!-- <dt class="inline">确认密码：</dt> -->
                    <dd class="inline mg_r5">
                        <label style="font-size:18px;">确认密码：</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="password"   class=" loginTxt  col_999" name="repassword"  autocomplete="off" id="inp4" width="800px" /><font id="myfont4"></font>
                    </dd>
                    <dd class="inline col_f90 J_validate" id="error2"></dd>
                </dl>
                <dl class="mg_t20">
                    <!-- <dt class="inline">确认密码：</dt> -->
                    <dd class="inline mg_r5">
                        <label ><span style="font-size:18px;">验证码：</span></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <img src="/code"  onclick="this.src=this.src+'?a=1'">&nbsp;&nbsp;看不清请点击图片换一张
                    </dd>
                    <dd class="inline col_f90 J_validate" id="error2"></dd>
                </dl>
               
                  <dl class="mg_t20">
                    <!-- <dt class="inline">确认密码：</dt> -->
                    <dd class="inline mg_r5">
                        <label style="font-size:18px;">输入验证码：</label>
                        <input id="" type="text" value=""  class=" loginTxt   border col_999" name="fcode" width="500px" autocomplete="off" id="inp5" /><font id="myfont5" color="red">&nbsp;&nbsp;&nbsp;
                        @if(session('error'))
                            {{session('error')}}
                        @endif
                        </font>  
                    </dd>
                    <dd class="inline col_f90 J_validate" id="error2"></dd>
                </dl>
                <dl class="mg_t20">
                    <!--   <dt class="inline">&nbsp</dt> -->
                    <dd class="inline">
                        <label class="inline col_666 mg_r10 checked" id="ckfw"><i class="openIcon inline mg_r10"></i><span name="consent-agreement" class="inline col_8a8a8a">我已阅读并同意</span></label>
                        <a href="pc/www/html/xieyi.html" target="_blank" class="inline col_link mg_r10"  id="linkServiceAgreement">《必要服务协议》</a><span class="isxt"></span>
                    </dd>
                </dl>
                {{csrf_field()}}
                <input href="javascript:;" type="submit" class="loginBtn w400 inline t_c mg_t20" value="注册"/>
                <div class="pop_mark" style="display:none"></div>
                <div class="pop pd_b30" style="width:600px;top:90px;left:50%;margin-left:-300px; display: none;">
                    <div class="pop_hd"><span class="pop_close"></span> 必要服务协议</div>
                    <
                    <div class="t_c mg_t20">
                        <a href="javascript:;" class="confirm_btn">同意协议并继续</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
<script type="text/javascript">
    //手机验证
    // 找对象
    var inp1=document.getElementById('inp1');
    var myfont1=document.getElementById('myfont1');
    // alert(inp);

    inp1.onfocus=function(){
        // console.log('获取焦点');
        myfont1.innerHTML='&nbsp;&nbsp;&nbsp;请输入正确的手机号码';
        myfont1.color="#666666";
        myfont1.size=2;
    }
    // 失去焦点的时候
    inp1.onblur = function(){
      
        //获取input里面输入的值
        str=this.value;
        //str.match()----->null 没有匹配到
        if(str.match(/^1[34578]\d{9}$/)==null){
            myfont1.innerHTML = '&nbsp;&nbsp;&nbsp;手机号码不正确';
            myfont1.color="red";
        }else{
            //alert('匹配成功');
            myfont1.innerHTML ='&nbsp;&nbsp;&nbsp;正确';
             myfont1.color="green";
        }

    }
        // 邮箱
        var inp2=document.getElementById('inp2');
        var myfont2=document.getElementById('myfont2');

        // 获取焦点
        inp2.onfocus=function(){

            // console.log('获取焦点');
            myfont2.innerHTML='&nbsp;&nbsp;&nbsp;请输入正确的邮箱地址';
            myfont2.color="#666666";
            myfont2.size=2;
    }
        inp2.onblur=function(){
            // 获取里面的值
            str=this.value;
            if(str.match(/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/)==null){
                myfont2.innerHTML='&nbsp;&nbsp;&nbsp;邮箱不正确';
                myfont2.color='red';
            }else{
                myfont2.innerHTML='&nbsp;&nbsp;&nbsp;正确';
                myfont2.color='green';
            }
        }

        // 密码
        var inp3= document.getElementById('inp3');
        var myfont3=document.getElementById('myfont3');

        inp3.onfocus=function(){
            myfont3.innerHTML='&nbsp;&nbsp;&nbsp;密码必须为6-16位的任意数字 字母 下划线';
            myfont3.color="#666666";
            myfont3.size=2;
        }

        inp3.onblur=function(){
            // 获取input值
            str1=this.value;
            if(str1.match(/^[a-zA-Z0-9_-]{4,16}$/)==null){
                myfont3.innerHTML='&nbsp;&nbsp;&nbsp;密码必须为6-16位的任意数字 字母 下划线';
                myfont3.color='red';
            }else{
                myfont3.innerHTML='&nbsp;&nbsp;&nbsp;正确';
                myfont3.color='green';
            }
            
        }

        // 确认密码
        var inp4=document.getElementById('inp4');
        var myfont4=document.getElementById('myfont4');
        inp4.onfocus=function(){
            myfont4.innerHTML='&nbsp;&nbsp;&nbsp;密码必须为6-16位的任意数字 字母 下划线';
            myfont4.color="#666666";
            myfont4.size=2;
        }

        inp4.onblur=function(){
            // 获取input值
            str2=this.value;
            if(str1!=str2){
                myfont4.innerHTML='&nbsp;&nbsp;&nbsp;两次密码不正确';
                myfont4.color='red';
            }else{
                myfont4.innerHTML='&nbsp;&nbsp;&nbsp;正确';
                myfont4.color='green';
            }
            
        }

</script>
</html>
<script src="/static/Home/pc/common/js/ui/validate.js?v=biyao_8c8263d"></script>
<script src="/static/Home/pc/common/js/common.js?v=biyao_c83c46d"></script>
<script src="/static/Home/pc/common/js/ui/dialog.js?v=biyao_130c013"></script>
<script src="/static/Home/pc/www/js/mycenter/registNew.js?v=biyao_d929892"></script>
<script src="/static/Home/pc/www/js/login/regval.js?v=biyao_f57c0c6"></script>
<script>
    validateUserName();
    LT.registNew();
    LT.findpassword();
    LT.controller.findPassword({
        interval: 60000
    });
    $(function () {
        $('.loginItem').css('min-height',($(window).height()-315)+'px');
        $('#ckfw').on('click', function () {
            if ($(this).hasClass('checked')){
                $(this).removeClass('checked');
            }
            else{
                $(this).addClass('checked');
                $('.isxt').html('');
            }
        });
        $("#linkServiceAgreement").click(function() {
            /* $(".pop").show();
             $(".pop_mark").show(); */
        });
        $(".pop_close").click(function() {
            $(".pop").hide();
            $(".pop_mark").hide();
        });
        $(".confirm_btn").click(function() {
            $(".pop").hide();
            $(".pop_mark").hide();
            if (!$('#ckfw').hasClass('checked')){
                $('#ckfw').click();
            }
        });
    });
</script><div data-selector="J_im" id="webIM_showDiv"></div>

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
            <p class="col_999 lineH18 mg_t10"><i class="gwab_icon inline"></i><a class="col_999 inline mg_r5" href="www.beian.gov.cn/portal/registerSystemInfo?recordcode=44049102496139" target="_blank">粤公网安备44049102496139号</a> <a class="col_999 inline" href="www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">粤ICP备13088531号</a>
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
<script src="static/Home/pc/common/js/common.js?v=biyao_c83c46d" type="text/javascript"></script>
<script type="text/javascript"	src="static/Home/pc/www/js/common.js?v=biyao_bd8bd36"></script>
</body>
<script type="text/javascript" src="static/Home/pc/common/js/bytrack.js?v=biyao_8b3cc7e"></script>
</html>