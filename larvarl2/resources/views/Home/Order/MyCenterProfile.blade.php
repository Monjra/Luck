@extends('Home.HomePublic.public')
@section('home')
<html>
 <head></head>
 <body>
  <div class="wrap  posR mg_t20 mH810 pd_b40"> 
   <div class="per_left"> 
    <div class="per_leftbox  pd_t14"> 
     <ul class="per_leftul"> 
      <li class="t_c"> <a href="Profile.html"> <img src="/static/Home/pc/www/img/avatar/head_150.png" alt="" onerror="javascript:this.src='/static/Home/pc/www/img/avatar/head_150.png'" style="width: 150px; height: 150px" /> </a> </li> 
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
       <h3 class="per_title"> <a class="a_checked" href="#"><span>个人信息</span></a> <a href="MyAddressManager.html"><span>管理收货地址</span></a> <a class="bd_r_none" href="Profile.html" id="forgetPasswordID"><span>修改密码</span></a> </h3> 
      </div> 
      <div class="pd10 bd_b_eee"> 
       <h4 class="f14 col_666 mg_t20">基本信息</h4> 
       <form method="post" id="submitForm" action=""> 
        <table cellspacing="0" cellpadding="0" border="0" class="per_table th80"> 
         <tbody> 
          <tr> 
           <th>账户名：</th> 
           <td id="txtEmail">13737301354</td> 
          </tr> 
          <tr> 
           <th>昵　称：</th> 
           <td><input type="text" onkeyup="$(this).css('color','#000')" value="by_3444810" class="inpCom w200" maxlength="10" name="nickname" id="txtNickname" /> <span class="col_b76 inline" id="nicknameHint"></span></td> 
          </tr> 
          <tr> 
           <th>性　别：</th> 
           <td class="J_gender_select"><label class="  col_666 cursor mg_r10"> <i class="radioIcon inline" name="needRefund" value="1" type="radio"> <input type="radio" class="none" value="-1" name="gender" /> </i> &nbsp;保密 </label> <label class="checked col_666 cursor mg_r10"> <i class="radioIcon inline" value="2" name="needRefund" type="radio"> <input type="radio" class="none" value="0" name="gender" /> </i> &nbsp;男 </label> <label class=" col_666 cursor mg_r10"> <i class="radioIcon inline" value="2" name="needRefund" type="radio"> <input type="radio" class="none" value="1" name="gender" /> </i> &nbsp;女 </label></td> 
          </tr> 
         </tbody> 
        </table> 
       </form> 
      </div> 
      <div class="per_upfileImgBox clearfix"> 
       <h4 class="f14 col_666 mg_b30">头像设置</h4> 
       <div class="bigImgArea posR"> 
        <ul class="upBtn_tip"> 
         <li> 
          <form action="/MyCenter/UploadAvatar" target="uploadfile" method="post" enctype="multipart/form-data"> 
           <a href="javascript:void(0)" class="inline  relative upLoading_btn"> <span class="">上传头像</span> <input type="file" name="userfile" class="J_uploadfile_btn fileInput upbox1" id="ff" /> </a> 
          </form> <iframe width="0" height="0" frameborder="0" name="uploadfile" id="uploadfile" src="" scrolling="no" style="display: none;"></iframe> </li> 
         <li>仅支持JPG，GIF，PNG，且文件小于2M</li> 
        </ul> 
       </div> 
       <div class="showImgArea clearfix"> 
        <p class="per_imgp  clearfix">你上传的图片自动生成三种尺寸，请注意大中小尺寸的头像是否清晰</p> 
        <dl class="clearfix"> 
         <dt> 
          <div class="bigimg"> 
           <img width="150" height="150" onerror="javascript:this.src='/static/Home/pc/www/img/avatar/head_150.png'" src="/static/Home/pc/www/img/avatar/head_150.png" /> 
          </div> 
          <p class="per_imgp">大尺寸头像 150*150像素</p> 
         </dt> 
         <dd class="mb_20"> 
          <div class="middleimg"> 
           <img width="60" height="60" onerror="javascript:this.src='/static/Home/pc/www/img/avatar/head_150.png'" src="/static/Home/pc/www/img/avatar/head_150.png" /> 
          </div> 
          <p class="per_imgp">中尺寸头像 60*60像素</p> 
         </dd> 
         <dd> 
          <div class="smallimg"> 
           <img width="32" height="32" onerror="javascript:this.src='/static/Home/pc/www/img/avatar/head_150.png'" src="/static/Home/pc/www/img/avatar/head_150.png" /> 
          </div> 
          <p class="per_imgp">小尺寸头像 32*32像素</p> 
         </dd> 
        </dl> 
       </div> 
      </div> 
      <div class="per_upfileImgBox clearfix" style="display: none"> 
       <div class="bigImgArea J_bigImgArea falls_loading posR"> 
        <div> 
         <form action="/MyCenter/UploadAvatar" target="uploadfile2" method="post" enctype="multipart/form-data"> 
          <div class="per_imgReupfile"> 
           <span class="posR">重新选择图片<input type="file" name="userfile" class="J_uploadfile_btn fileInput upbox1 " /></span> 
          </div> 
         </form> 
         <iframe width="0" height="0" frameborder="0" name="uploadfile2" id="uploadfile2" src="" scrolling="no" style="display: none;"></iframe> 
        </div> 
        <div> 
         <div class="head_img_t J_head_img_t"></div> 
         <div class="head_img_b J_head_img_b"></div> 
         <div class="head_img_l J_head_img_l"></div> 
         <div class="head_img_r J_head_img_r"></div> 
         <div class="head_img_mark J_drag"> 
          <div class="head_img_mark_btn J_drag_bottomright"></div> 
         </div> 
        </div> 
        <img src="" class="J_drag_img" id="J_drag_img" /> 
       </div> 
       <div class="showImgArea"> 
        <p class="per_imgp  clearfix">你上传的图片自动生成三种尺寸，请注意大中小尺寸的头像是否清晰</p> 
        <dl class="clearfix"> 
         <dt> 
          <div class="bigimg posR"> 
           <img src="" /> 
          </div> 
          <p class="per_imgp">大尺寸头像 150*150像素</p> 
         </dt> 
         <dd class="mb_20"> 
          <div class="middleimg posR"> 
           <img src="" /> 
          </div> 
          <p class="per_imgp">中尺寸头像 60*60像素</p> 
         </dd> 
         <dd> 
          <div class="smallimg posR"> 
           <img src="" /> 
          </div> 
          <p class="per_imgp">小尺寸头像 32*32像素</p> 
         </dd> 
        </dl> 
       </div> 
      </div> 
      <p class="per_imgp clearfix mg_l40"> <a href="javascript:;" class="btnCom1 btnComS btnBg2 btnH1 w80 inline J_save"><span>保 存</span></a> </p> 
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
 </body>
</html>
@endsection
@section('title','个人中心—个人设置')