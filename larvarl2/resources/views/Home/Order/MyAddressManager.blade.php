@extends('Home.HomePublic.public')
@section('home')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title>个人中心-管理收货地址 – 我要的，才是必要的 – 必要biyao.com</title> 
  <script type="text/javascript" src="static/Home/pc/common/js/jquery-1.8.3.js?v=biyao_7d074dc"></script> 
  <script type="text/javascript" src="static/Home/pc/minisite/byshoes/js/jquery.cookie.js?v=biyao_a5283b2"></script> 
  <script type="text/javascript" src="static/Home/pc/common/js/jquery.extention.js?v=biyao_98daa33"></script> 
  <script type="text/javascript" src="static/Home/pc/common/js/ui/dialog.js?v=biyao_130c013"></script> 
  <link href="static/Home/pc/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
  <link href="static/Home/pc/favicon.ico" rel="icon" type="image/x-icon" /> 
  <script type="text/javascript">
        window.ApiSite = "http://api.biyao.com";
        window.ControllerSite="";
    </script> 
  <link href="static/Home/pc/common/css/common.css?v=biyao_1227846" rel="stylesheet" /> 
  <link href="static/Home/pc/www/css/cm_www.css?v=biyao_3f1d92e" rel="stylesheet" /> 
  <link type="text/css" href="static/Home/pc/www/css/myCenter.css?v=biyao_5976431" rel="stylesheet" /> 
 </head> 
 <body> 
  <div class="pub_nav topBanner slideUp"> 
   <div class="wrap clearfix bg_333"> 
    <div class="f_l"> 
     <ul class="pub_nav_list sizeZero"> 
      <li class="inline"><a href="index.html">首页</a><span class="bg"></span></li> 
      <li class="inline"><a href="sjzx.html">商家中心</a><span class="bg"></span></li> 
      <li class="inline"><a href="sjzx.html">平台政策</a><span class="bg"></span></li> 
      <!--                  <li class="inline last"><a href="list.html#complaint/toAddComplaint">非法信息投诉</a><span class="bg"></span></li> --> 
      <li class="inline last newapp"> <a href="#">必要手机版</a> 
       <div class="app_box"> 
        <span class="inline upArre"></span> 
        <div class="con"> 
         <p class="sj_evm"></p> 
         <p class="lineH24 col_666 f14">必要手机版</p> 
        </div> 
       </div> </li> 
     </ul> 
    </div> 
    <div class="f_r"> 
     <ul class="pub_nav_list sizeZero"> 
      <li class="inline"> <a class="login" href="MyOrder.html"> Hi,by_3444810 </a> <a class="regist mg_l10" href="/account/logout">[ 退出 ]</a> <span class="bg"></span> </li> 
      <li class="inline last"> <a href="javascript:void(0);" class="">个人中心<i class="inline pep_bg mg_l10"></i></a> 
       <div class="app_box"> 
        <span class="inline upArre"></span> 
        <div class="bg_fff down_list_box"> 
         <a class="inline" href="MyOrder.html">我的订单</a> 
         <a class="inline" href="Profile.html">个人设置</a> 
        </div> 
       </div> </li> 
      <li class="inline last pd_r0 shopping_cart vTop"> <a class="inline sizeZero" href="shopcars.html"> <i class="inline"></i> <span id="shopcarNumID" class="inline">购物车 0</span> </a> </li> 
     </ul> 
    </div> 
   </div> 
  </div> 
  <div class="index_bg_fff"> 
   <div class="wrap pub_logo_box clearfix"> 
    <div class="pub_logo f_l">
     <a href="/home/index.html"><img alt="" src="static/Home/pc/common/img/logo.png?v=biyao_4637d54" /></a>
    </div> 
    <div class="f_r"> 
     <ul class="sizeZero menu_nav_list"> 
      <li class="inline "> <a href="javascript:;">眼镜</a> 
       <div class="sub_nav_list pos_pub"> 
        <span class="sub_nav_jd"></span> 
        <a href="list.html#/man/index.html?f_upd=fc-27" class="escp ">男士</a> 
        <a href="list.html#/women/index.html?f_upd=fc-28" class="escp last">女士</a> 
       </div> </li> 
      <li class="inline "> <a href="javascript:;">男装</a> 
       <div class="sub_nav_list pos_pub"> 
        <span class="sub_nav_jd"></span> 
        <a href="product.html#/1300935002130200001-0.html?f_upd=fc-283" class="escp ">Bland单西</a> 
        <a href="list.html#/socks/index.html?f_upd=fc-278" class="escp ">RZLZL袜子</a> 
        <a href="list.html#polo/index.html?f_upd=fc-237" class="escp ">亓口男装</a> 
        <a href="list.html#belt/index.html?f_upd=fc-223" class="escp ">皮具</a> 
        <a href="list.html#mknitwear/index.html?f_upd=fc-214" class="escp ">针织短T</a> 
        <a href="product.html#/1300590001010100001-0.html?f_upd=fc-137" class="escp ">内裤</a> 
        <a href="list.html#man/index.html?f_upd=fc-161" class="escp ">G＆M男装</a> 
        <a href="list.html#man/index.html?f_upd=fc-164" class="escp ">G&amp;M商务长裤</a> 
        <a href="list.html#jeans/index.html?f_upd=fc-116" class="escp ">牛仔</a> 
        <a href="list.html#man/index.html?f_upd=fc-122" class="escp last">GCMT POLO衫</a> 
       </div> </li> 
      <li class="inline "> <a href="javascript:;">户外</a> 
       <div class="sub_nav_list pos_pub"> 
        <span class="sub_nav_jd"></span> 
        <a href="list.html#man/index.html?f_upd=fc-258" class="escp ">RC男士户外服</a> 
        <a href="list.html#women/index.html?f_upd=fc-257" class="escp ">RC女士户外服</a> 
        <a href="list.html#outside/index.html?f_upd=fc-224" class="escp last">户外鞋</a> 
       </div> </li> 
      <li class="inline "> <a href="javascript:;">运动</a> 
       <div class="sub_nav_list pos_pub"> 
        <span class="sub_nav_jd"></span> 
        <a href="list.html#shoes/index.html?f_upd=fc-111" class="escp last">运动休闲鞋</a> 
       </div> </li> 
      <li class="inline "> <a href="javascript:;">鞋靴</a> 
       <div class="sub_nav_list pos_pub"> 
        <span class="sub_nav_jd"></span> 
        <a href="list.html#menshoes/index.html?f_upd=fc-44" class="escp ">VIZ男鞋</a> 
        <a href="list.html#womenshoes/index.html?f_upd=fc-45" class="escp ">C&amp;M女鞋</a> 
        <a href="list.html#womenshoes/index.html?f_upd=fc-232" class="escp last">VIZ女鞋</a> 
       </div> </li> 
      <li class="inline "> <a href="javascript:;">个人护理</a> 
       <div class="sub_nav_list pos_pub"> 
        <span class="sub_nav_jd"></span> 
        <a href="list.html#toothbrush/index.html?f_upd=fc-264" class="escp ">电动牙刷</a> 
        <a href="list.html#shaver/index.html?f_upd=fc-110" class="escp ">男士剃须刀</a> 
        <a href="product.html#/1300510001000000010-0.html?f_upd=fc-222" class="escp last">女士刮毛刀</a> 
       </div> </li> 
      <li class="inline "> <a href="javascript:;">箱包</a> 
       <div class="sub_nav_list pos_pub"> 
        <span class="sub_nav_jd"></span> 
        <a href="list.html#belt/index.html?f_upd=fc-290" class="escp ">男士钱包</a> 
        <a href="product.html#/1300895007050000001-0.html?f_upd=fc-265" class="escp ">RC双肩包</a> 
        <a href="list.html#backpack/index.html?f_upd=fc-218" class="escp ">stayalive双肩包</a> 
        <a href="list.html#backpack/index.html?f_upd=fc-66" class="escp ">airleaf箱包</a> 
        <a href="list.html#suitcase/index.html?f_upd=fc-148" class="escp last">GRIFFIN LAND拉杆箱</a> 
       </div> </li> 
      <li class="inline "> <a href="javascript:;">女装</a> 
       <div class="sub_nav_list pos_pub"> 
        <span class="sub_nav_jd"></span> 
        <a href="list.html#/socks/index.html?f_upd=fc-279" class="escp ">RZLZL袜子</a> 
        <a href="list.html#women/index.html?f_upd=fc-268" class="escp ">春风女装</a> 
        <a href="list.html#jeanswomen/index.html?f_upd=fc-206" class="escp ">牛仔</a> 
        <a href="list.html#skirt/index.html?f_upd=fc-204" class="escp ">女裙</a> 
        <a href="list.html#knitwear/index.html?f_upd=fc-215" class="escp ">针织短T</a> 
        <a href="list.html#women/index.html?f_upd=fc-205" class="escp ">POLO衫</a> 
        <a href="list.html#women/index.html?f_upd=fc-203" class="escp ">婚纱礼服</a> 
        <a href="list.html#children/index.html?f_upd=fc-261" class="escp ">儿童公主裙</a> 
        <a href="list.html#scarf/index.html?f_upd=fc-221" class="escp ">围巾</a> 
        <a href="list.html#women/index.html?f_upd=fc-246" class="escp last">内衣</a> 
       </div> </li> 
      <li class="inline last"> <a href="javascript:;">家居生活</a> 
       <div class="sub_nav_list pos_pub_last"> 
        <span class="sub_nav_jd"></span> 
        <a href="http://straford.biyao.com/kettle/index.html?f_upd=fc-282" class="escp ">STRAFORD水具</a> 
        <a href="list.html#kitchen/index.html?f_upd=fc-167" class="escp ">厨具</a> 
        <a href="list.html#textiles/index.html?f_upd=fc-271" class="escp ">融暄家纺</a> 
        <a href="list.html#textiles/index.html?f_upd=fc-201" class="escp ">必柔家纺</a> 
        <a href="list.html#textiles/index.html?f_upd=fc-240" class="escp ">M&amp;N家纺</a> 
        <a href="list.html#lamp/index.html?f_upd=fc-183" class="escp ">灯具</a> 
        <a href="list.html#mattress/index.html?f_upd=fc-209" class="escp ">床垫</a> 
        <a href="list.html#bedroom/index.html?f_upd=fc-155" class="escp ">卧室家具</a> 
        <a href="list.html#livingroom/index.html?f_upd=fc-77" class="escp ">客厅家具</a> 
        <a href="list.html#diningroom/index.html?f_upd=fc-78" class="escp ">餐厅家具</a> 
        <a href="list.html#studyroom/index.html?f_upd=fc-79" class="escp last">书房家具</a> 
       </div> </li> 
     </ul> 
    </div> 
   </div> 
  </div> 
  <div class="wrap  posR mg_t20 mH810 pd_b40"> 
   <div class="per_left"> 
    <div class="per_leftbox  pd_t14"> 
     <ul class="per_leftul"> 
      <li class="t_c"> <a href="Profile.html"> <img src="static/Home/pc/www/img/avatar/head_150.png" alt="" onerror="javascript:this.src='static/Home/pc/www/img/avatar/head_150.png'" style="width: 150px; height: 150px" /> </a> </li> 
      <li class="f14 col_fff mg_t10 t_c">by_3444810</li> 
     </ul> 
    </div> 
    <div class="per_leftbox"> 
     <div class="perleft_menu pdtb_20"> 
      <ul> 
       <li class=" "><a href="MyOrder.html"><i class="f_r mcMIcon3 inline"></i>我的订单</a> </li> 
       <li class=" "><a href="MyRefunds.html"><i class="f_r mcMIcon4 inline"></i>退款管理</a></li> 
       <!--<li class=" "><a href="/MyCenter/MyIncomeRules.html" ><i class="f_r mcMIcon5 inline"></i>我的收益</a></li>--> 
       <li class="a_check "><a href="Profile.html"><i class="f_r mcMIcon8 inline"></i>个人设置</a></li> 
       <!-- <div class="div_line"></div> --> 
       <!-- <a href="#"><i class="f_r mcMIcon9 inline"></i>设计师主页</a> <a
                        href="#"><i class="f_r mcMIcon10 inline"></i>设计师提现</a> --> 
      </ul> 
     </div> 
    </div> 
   </div> 
   <div class="per_right_out backg_fff"> 
    <div class="per_right "> 
     <div class=""> 
      <div class="relative"> 
       <h4 class="nTitle">个人设置</h4> 
       <h3 class="per_title"> <a href="Profile.html"><span>个人信息</span></a> <a class="a_checked" href="MyAddressManager.html"><span>管理收货地址</span></a> <a class="bd_r_none" href="Profile.html" id="forgetPasswordID"><span>修改密码</span></a> </h3> 
      </div> 
      <form method="post" id="formAddress"> 
       <div class="pd10"> 
        <input type="hidden" data-highlight="highlight" maxlength="16" value="0" name="isUpdate" /> 
        <input class="J_hide" type="hidden" id="hid_province" name="province" /> 
        <input class="J_hide" type="hidden" id="hid_city" name="city" /> 
        <input class="J_hide" type="hidden" id="hid_area" name="areaId" /> 
        <table border="0" cellspacing="0" class="per_table th80"> 
         <tbody>
          <tr> 
           <th> <span class="col_ee5b47"></span>收货人姓名： </th> 
           <td> <input type="text" data-highlight="highlight" maxlength="64" value="" name="receiver" class="inpCom w200 permy" /> </td> 
          </tr> 
          <tr> 
           <th> <span class="col_ee5b47"></span>省市： </th> 
           <td> 
            <div class="J_province w120 mg_r10 posR f_l permy">
             <div class="J_select">
              <span class="sel_span" data-value="">--请选择--</span>
              <div class="sel_div" style="height: 0px;">
               <ul class="sel_ul">
                <li data-value="" data-hover="hover">--请选择--</li>
                <li data-value="110000" data-hover="hover">北京市</li>
                <li data-value="120000" data-hover="hover">天津市</li>
                <li data-value="130000" data-hover="hover">河北省</li>
                <li data-value="140000" data-hover="hover">山西省</li>
                <li data-value="150000" data-hover="hover">内蒙古自治区</li>
                <li data-value="210000" data-hover="hover">辽宁省</li>
                <li data-value="220000" data-hover="hover">吉林省</li>
                <li data-value="230000" data-hover="hover">黑龙江省</li>
                <li data-value="310000" data-hover="hover">上海市</li>
                <li data-value="320000" data-hover="hover">江苏省</li>
                <li data-value="330000" data-hover="hover">浙江省</li>
                <li data-value="340000" data-hover="hover">安徽省</li>
                <li data-value="350000" data-hover="hover">福建省</li>
                <li data-value="360000" data-hover="hover">江西省</li>
                <li data-value="370000" data-hover="hover">山东省</li>
                <li data-value="410000" data-hover="hover">河南省</li>
                <li data-value="420000" data-hover="hover">湖北省</li>
                <li data-value="430000" data-hover="hover">湖南省</li>
                <li data-value="440000" data-hover="hover">广东省</li>
                <li data-value="450000" data-hover="hover">广西壮族自治区</li>
                <li data-value="460000" data-hover="hover">海南省</li>
                <li data-value="500000" data-hover="hover">重庆市</li>
                <li data-value="510000" data-hover="hover">四川省</li>
                <li data-value="520000" data-hover="hover">贵州省</li>
                <li data-value="530000" data-hover="hover">云南省</li>
                <li data-value="540000" data-hover="hover">西藏自治区</li>
                <li data-value="610000" data-hover="hover">陕西省</li>
                <li data-value="620000" data-hover="hover">甘肃省</li>
                <li data-value="630000" data-hover="hover">青海省</li>
                <li data-value="640000" data-hover="hover">宁夏回族自治区</li>
                <li data-value="650000" data-hover="hover">新疆维吾尔自治区</li>
               </ul>
               <div class="scr_com sel_scroll" style="height: 0px;">
                <div class="scr_monsemove sel_scroll_btn"></div> 
               </div>
              </div>
             </div> 
             <input type="hidden" name="province" id="hid_province" class="J_hide" /> 
             <input type="text" class="absolute hidden_input2" name="J_sel_input" />
            </div> 
            <div class="J_city w120 mg_r10 posR f_l permy">
             <div class="J_select">
              <span class="sel_span" data-value="">--请选择--</span>
              <div class="sel_div" style="height: 0px;">
               <ul class="sel_ul">
                <li data-value="" data-hover="hover">--请选择--</li>
               </ul>
               <div class="scr_com sel_scroll" style="height: 0px;">
                <div class="scr_monsemove sel_scroll_btn"></div> 
               </div>
              </div>
             </div> 
             <input type="hidden" name="city" id="hid_city" class="J_hide" /> 
             <input type="text" class="absolute hidden_input2" name="J_sel_input" />
            </div> 
            <div class="J_area w140 f_l posR permy permyre">
             <div class="J_select">
              <span class="sel_span" data-value="">--请选择--</span>
              <div class="sel_div" style="height: 0px;">
               <ul class="sel_ul">
                <li data-value="" data-hover="hover">--请选择--</li>
               </ul>
               <div class="scr_com sel_scroll" style="height: 0px;">
                <div class="scr_monsemove sel_scroll_btn"></div> 
               </div>
              </div>
             </div> 
             <input type="hidden" name="addr_area_id" id="hid_area" class="J_hide" /> 
             <input type="text" class="absolute hidden_input2" name="J_sel_input" />
            </div> </td> 
          </tr> 
          <tr> 
           <th> <span class="col_ee5b47"></span>街道地址： </th> 
           <td> <input type="text" data-highlight="highlight" maxlength="128" value="" class="inpCom w380 permy" name="address" /> </td> 
          </tr> 
          <tr> 
           <th> <span class="col_ee5b47"></span>手机号码： </th> 
           <td> <input type="text" data-highlight="highlight" maxlength="64" value="" class="inpCom w200 permy" name="phone" /> </td> 
          </tr> 
          <tr> 
           <th></th> 
           <td> <label class="checked J_default_address"> <i class="openIcon inline"> </i>&nbsp;设为默认地址 </label> </td> 
          </tr> 
          <tr> 
           <th></th> 
           <td colspan="2"><a id="btn_SaveAddress" href="#" class="btnCom1 btnComS btnBg2 btnH1 w80 inline J_save"><span>确 定</span></a></td> 
          </tr> 
         </tbody>
        </table> 
       </div> 
      </form> 
      <h3 class="perTitle col_523 lineH24">已保存的地址</h3> 
      <table border="0" cellspacing="0" cellpadding="0" class="perTableTitle1"> 
       <tbody>
        <tr> 
         <td width="9%"><span class="inline">收货人</span></td> 
         <td width="20%"><span class="inline">所在省市</span></td> 
         <td width="30%"><span class="inline">街道地址</span></td> 
         <td width="10%"><span class="inline">手机</span></td> 
         <td width="10%"><span class="inline"></span></td> 
         <td width="10%"><span class="inline">操作</span></td> 
        </tr> 
       </tbody> 
      </table> 
      <table border="0" cellspacing="1" cellpadding="0" class="J_table per_list1  bg_fff"> 
       <tbody> 
        <tr data-addressid="476683"> 
         <td width="9%" class="J_td2">阿茂</td> 
         <td width="20%" class="J_td3"> 北京市西城区<input type="hidden" value="110000" data-text="北京市" /> <input type="hidden" value="110100" data-text="市辖区" /> <input type="hidden" value="110102" data-text="西城区" /> </td> 
         <td width="30%" align="left" class="J_td2">网路1</td> 
         <td width="11%" class="J_td2">13303032929</td> 
         <td width="10%" type="true" class="J_td"> <span class="col_ee5b47">默认地址</span></td> 
         <td width="10%"><a class="J_edit col_link">修改</a> / <a class="J_dele col_link">删除</a></td> 
        </tr> 
       </tbody> 
      </table> 
     </div> 
    </div> 
   </div> 
   <script type="text/javascript">
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i=0; i<ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1);
                if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
            }
            return "";
        }
        if((typeof(getCookie("__qc__k"))!="undefined"&&getCookie("__qc__k")!="")||(typeof(getCookie("mobileNO"))!="undefined"&&getCookie("mobileNO")!="")){
            $("#forgetPasswordID").html("");
        }
    </script>
  </div> 
  <div data-selector="J_im" id="webIM_showDiv"></div> 
  <div class="footer_links clearfix J_1200 auto"> 
   <div class="content wrap sizeZero"> 
    <div class="footer_nav_box inline"> 
     <ul class="footer_nav_list clearfix"> 
      <li> <a target="_blank" href="list.html#minisite/ljby">关于必要</a> <span class="bg_line"></span> </li> 
      <li> <a target="_blank" href="list.html#help/8.html">加入必要</a> <span class="bg_line"></span> </li> 
      <li> <a target="_blank" href="tel.html">联系我们</a> <span class="bg_line"></span> </li> 
      <li class="none"> <a target="_blank" href="list.html#list/39/list-1.html">网站地图</a> </li> 
      <li> <a target="_blank" href="tel.html">官方微博</a> <span class="bg_line"></span> </li> 
     </ul> 
     <p class="col_999 lineH18 mg_t10">◎BIYAO.COM 2015 版权所有 </p> 
     <p class="col_999 lineH18 mg_t10"><i class="gwab_icon inline"></i><a class="col_999 inline mg_r5" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=44049102496139" target="_blank">粤公网安备44049102496139号</a> <a class="col_999 inline" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">粤ICP备13088531号</a> </p> 
    </div> 
    <div class="footer_evm sizeZero inline"> 
     <div class="inline mg_r40 footer_evm_img"> 
      <div class="an_bg inline mg_r15"></div> 
      <div class="inline evm_tit_msg"> 
       <span class="col_333 f14">扫描二维码下载</span>
       <br /> 
       <span class="col_724 f14">必要手机客户端</span> 
      </div> 
     </div> 
     <div class="inline mg_r10 footer_evm_img"> 
      <div class="weixin_bg inline mg_r15"></div> 
      <div class="inline evm_tit_msg"> 
       <span class="col_333 f14">扫描二维码关注</span>
       <br /> 
       <span class="col_724 f14">必要官方微信</span> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
  <script type="text/javascript" src="static/Home/pc/common/js/lazyload.js?v=biyao_80d4f78"></script> 
  <script type="text/javascript" src="static/Home/pc/common/js/common.js?v=biyao_c83c46d"></script> 
  <script type="text/javascript" src="static/Home/pc/common/js/ui/select.js?v=biyao_1dcaa7c"></script> 
  <script type="text/javascript" src="static/Home/pc/common/js/ui/autocomplete.js?v=biyao_bd4725d"></script> 
  <script type="text/javascript" src="static/Home/pc/common/js/ui/jquery.pagination.js?v=biyao_1a0a135"></script> 
  <script type="text/javascript" src="static/Home/pc/common/js/ui/pages.js?v=biyao_5fd7a00"></script> 
  <script type="text/javascript" src="static/Home/pc/common/js/ui/jquery.validate.js?v=biyao_20c474d"></script> 
  <script type="text/javascript" src="static/Home/pc/www/js/mycenter/mycenter.js?v=biyao_63cad99"></script> 
  <script type="text/javascript" src="static/Home/pc/www/js/common.js?v=biyao_bd8bd36"></script> 
  <script src="static/Home/pc/www/js/mycenter/personal_deliveryAddress.js?v=biyao_df0f94c"></script> 
  <script src="static/Home/pc/common/js/ui/loadmask.js?v=biyao_5aac5cc" type="text/javascript"></script> 
  <script type="text/javascript">
    $(function () {
        var selector = '.J_default_address';
        LT.setRadioEffect(selector);
    });
</script> 
 </body>
</html>
@endsection
section('tilte','管理收货地址')