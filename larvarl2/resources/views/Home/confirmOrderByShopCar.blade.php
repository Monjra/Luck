@extends('Home.HomePublic.public_order')
@section('home')
<html>
 <head></head>
 <body>
  <div class="bd_bottom_ea"> 
   <div class="wrap pub_logo_box clearfix"> 
    <div class="pub_logo">
     <a href="index.html"><img alt="" src="static/Home/pc/common/img/logo.png?v=biyao_3251680" /></a>
    </div> 
   </div> 
  </div> 
  <script>
    var couponList = [];
    var unCouponList= [];
    var selectCoupon={code:"",amount:0};
</script> 
  <div class="wrap relative"> 
   <div class="shopStepBox"> 
    <div class="publicStepsbox"> 
     <div class="car_step_icon car_step2"></div> 
     <ul class="clearfix car_step_txt"> 
      <li>查看购物车</li> 
      <li class="checked">确认订单信息</li> 
      <li>在线付款</li> 
      <li>收货并评价</li> 
     </ul> 
    </div> 
   </div> 
  </div> 
  <div class="pd_b40"> 
   <div class="wrap  ie78"> 
    <div class="mg_t20"> 
     <h4 class="nTitle">确认收货地址</h4> 
     <ul id="d_address" class="comment_box detailed_address_list clearfix"> 
     </ul> 
    </div> 
    <div class="mg_t40 none" id="couponListView"> 
     <h4 class="nTitle">支付方式</h4> 
     <p class="f14 col_666 mg_t15 pd_l15">在线支付</p> 
     <p class="f14 col_724 mg_t10 mg_b10 pd_l15"><i class="couponList_add inline cursor" viewstate="0"></i>使用红包（<span class="col_666" id="conponinit"></span>）</p> 
     <div class="coupon_show none"> 
      <ul class="coupon_tit_show clearfix pd_b5" id="couponTitShow"> 
       <li class="current first">可用红包（<span id="ky_coupon"></span>）</li> 
       <li class="">不可用红包（<span id="bky_coupon"></span>）</li> 
      </ul> 
      <div class="coupon_show_box" id="couponShowBox"> 
       <div class="coupon_item" id="couponListUsed"></div> 
       <div class="coupon_item" id="unCouponListUsed"></div> 
      </div> 
     </div> 
    </div> 
    <div class="shoppingBox mg_t40 mg_b20"> 
     <h4 class="nTitle">发票信息</h4> 
     <div class="pd20"> 
      <p> <label class="inline col_666 "> <i onclick="a_need_invoice_id(this)" id="ck_is_i" class="openIcon inline cursor"></i> <span class="inline col_666 f14">开具发票</span> </label> </p> 
      <p id="invoice_ture" class="J_fp mg_t15 l_h40 none"></p> 
      <div id="d_need_invoice" class="receipt_box mg_t10 none "> 
       <table cellspacing="0" cellpadding="0" border="0"> 
        <tbody> 
         <tr> 
          <td class="col_666 f14" height="40px">发票类型：</td> 
          <td class="col_666 f14" width="500">普通发票（纸质）</td> 
         </tr> 
         <tr> 
          <td class="col_666 f14" height="40px">发票内容：</td> 
          <td class="col_666 f14">商品明细<span class="col_b76 mg_l20">为了保障消费者权益，发票内容根据购买商品信息开具，实买实开。</span></td> 
         </tr> 
         <tr> 
          <td class="col_666 f14" height="40px">发票抬头：</td> 
          <td> <label class="col_666"> <i onclick="$(this).addClass('checkedr');$('#need_invoice_2').removeClass('checkedr');$('#invoice_title_text').hide();" class="radioIcon inline cursor" id="need_invoice_1"></i> 个人 </label>&nbsp; &nbsp; &nbsp; <label class="col_666"> <i onclick="$(this).addClass('checkedr');$('#need_invoice_1').removeClass('checkedr');$('#invoice_title_text').show();" class="radioIcon inline cursor checkedr" id="need_invoice_2"></i> 单位<input type="text" maxlength="36" class="inpComn w200 mg_l5" id="invoice_title_text" value="" /> <i class="inline iconcom tip_right" id="invoice_tip"></i> </label> </td> 
         </tr> 
        </tbody> 
       </table> 
      </div> 
      <div class="none"> 
       <a need_invoice="0" id="invoice_message"></a> 
      </div> 
     </div> 
     <div style="display: none;" class="pd20"> 
      <div id="btn_modify_voice" style="display: none"> 
       <a onclick="modify_invoice();" class="publicBtn publicBtn_h31 publicBtn_f60  inline" href="javascript:void(0)">修改发票</a> 
      </div> 
     </div> 
    </div> 
    <div class="mg_t20"> 
     <h4 class="nTitle">确认订单</h4> 
     <input type="hidden" id="fromId" value="shopcar" /> 
     <input type="hidden" id="design_ids" value="[1300630049000000060]" /> 
     <input type="hidden" id="product_book_ids" value="[1211915]" /> 
     <div class="clearfix mb_20"> 
      <div class="comment_box  "> 
       <table cellspacing="0" cellpadding="0" class="sop_table1"> 
        <tbody> 
         <tr> 
          <th align="left" colspan="2"> 
           <!--暂时关闭IM入口，勿删--> <a> <span class="inline">商家：</span> <span id="J_product_name " class="inline col_666">GM服装</span> </a> 
           <!--暂时关闭IM入口，临时替换--> </th> 
          <th width="10%" align="center" class="none">可获积分</th> 
          <th width="12%" align="center" class="col_999">单价</th> 
          <th width="12%" align="center" class="col_999">数量</th> 
          <th width="12%" align="center" class="col_999">包装</th> 
          <th width="12%" align="right" class="col_999"><span class="mg_r20">小计</span></th> 
         </tr> 
        </tbody> 
       </table> 
      </div> 
     </div> 
     <div class="suppliergroup" data-s="130063"> 
      <div class="bg_fff"> 
       <table cellspacing="0" cellpadding="0" class="sop_table1 tablecount"> 
        <tbody> 
         <tr> 
          <td width="17%" align="center"><a target="_blank" href="product.html#/1300630049000000060-0.html"> <img class="border" width="100" height="100" alt="" src="http://img.biyao.com/files/temp/render_zs/result/1300630049/3a50e43e64e9cba8_130063004900000_0_800_419/img_6_800_200.jpg" /> </a></td> 
          <td width="35%" align="left"> 
           <div> 
            <a target="_blank" href="product.html#/1300630049000000060-0.html"> <span class="col_333">G/M八字领暗门襟短袖衬衫11006</span> </a> 
           </div> <input type="hidden" class="sizeno" value="尺码:38" /> 
           <div class="col_999 inline mg_t5">
            尺码:38
            <br />签名:无
           </div> <br /> <a id="material_list" designid="1300630049000000060" href="#" class="col_aaa inline mg_t5 material_list">用料清单&gt;&gt;</a> <br /> 
           <div class="refund_tips"></div> </td> 
          <td width="10%" align="center" class="none"><span class="col_333">0积分</span></td> 
          <td width="12%" align="center" class="col_333"><span class="col_666">&yen;369</span></td> 
          <td width="12%" align="center" class="col_333 td_buy_num relative" data-weight="0.0" data-id="1211915" data-pt="0" data-pd="0" data-static/Home/pc="0" designid="1300630049000000060"><span class="col_333">1</span></td> 
          <td width="12%" align="center" class="col_333"><span class="col_333">普通包装</span> <span class="col_333">(免费)</span> </td> 
          <td width="12%" align="right"><strong class="  mg_r20">&yen;369</strong></td> 
         </tr> 
        </tbody> 
       </table> 
       <input type="hidden" send_type_value="0" id="supplier_IDForDiscountCode" value="1" name="order_design_num" expresstype_id="0" supplier_id="130063" /> 
       <div class="backg_f6 clearfix pd_b10"> 
        <div class="merchantMsgBox"> 
         <table width="500" cellspacing="0" cellpadding="0" border="0" class=" f_l"> 
          <tbody> 
           <tr> 
            <td class="vTop col_666 pd_r10">给商家留言</td> 
            <td><textarea name="express_c" supplier_id="130063" data-highlight="highlight" maxlength="50" placeholder="建议填写内容已提前与商家沟通一致" class="J_placeholder textareaCom w390 h73 bdDB"></textarea> </td> 
           </tr> 
          </tbody> 
         </table> 
         <table width="500" cellspacing="0" cellpadding="0" border="0" class=" f_r"> 
          <tbody> 
           <tr> 
            <td class="col_666 pd_r10 w50">配送方式</td> 
            <td class="w220 t_l lineH40"> 
             <div supplier_id="130063" name="select_express_type_div"> 
              <span class="inline col_999 f12"></span> 
             </div> </td> 
            <td align="right"> <span class="col_f60 mg_r20" name="order_express_price" supplier_id="130063">&yen;0</span> <span class="col_ee5b47"></span> <span class="col_ee5b47" name="order_express_price_add" supplier_id="130063"></span> </td> 
           </tr> 
           <tr> 
            <td class="col_666 pd_r10 w50">送货时间</td> 
            <td class="w220 t_l"> 
             <div supplier_id="130063" class="w220 posR inline" name="select_send_type_div"> 
             </div> </td> 
            <td></td> 
           </tr> 
          </tbody> 
         </table> 
        </div> 
       </div> 
      </div> 
      <div class="paybill_title f14"> 
       <div class="paybilltitleIn"> 
        <input type="hidden" value="369.0" name="order_design_price" supplier_id="130063" /> 店铺合计（含运费）：
        <span class="col_f60 f14 mg_r20"><span name="order_price" supplier_id="130063">&yen;369</span></span> 
       </div> 
      </div> 
     </div> 
    </div> 
    <input type="hidden" id="shop_car_id" value="1211915|1" /> 
    <input type="hidden" id="hid_designids" value="1300630049000000060" /> 
    <input type="hidden" id="hid_designnum" value="1" /> 
    <div class="shoppingBox mg_t20 border none"> 
     <div class="order_title col_333 f15">
      虚拟账户
     </div> 
     <div class="pd20"> 
      <p> <label class="inline"><i onclick="i_lose_point_click(this);" id="ck_is_p" class="openIcon inline cursor"></i>&nbsp;&nbsp;使用积分</label> </p> 
      <p id="point_true" class="mg_t15 l_h40 none"></p> 
      <div id="is_use_point" class="receipt_box mg_t10 none"> 
       <table cellspacing="0" cellpadding="0" border="0"> 
        <tbody> 
         <tr> 
          <td width="120" height="40" align="right">现有积分：</td> 
          <td width="400"><span>0点</span>&nbsp;&nbsp;&nbsp;<span id="just_this_point">【本次交易最多可用 0 点】 </span></td> 
         </tr> 
         <tr> 
          <td height="40" align="right">使用积分：</td> 
          <td><input type="text" onafterpaste="lose_point(this);" value="" onkeyup="lose_point(this);" maxlength="10" class="inpCom w120" id="lose_point_text" />&nbsp;点</td> 
         </tr> 
         <tr> 
          <td height="40" align="right">虚拟账户密码：</td> 
          <td><input type="password" class="inpCom w220" value="" maxlength="36" id="virtuapwd" /> <a target="_blank" href="list.html#MyCenter/ProfileRe" class="col_07a6df">忘记密码？</a></td> 
         </tr> 
         <tr> 
          <td></td> 
          <td valign="bottom" height="40px"><a onclick="sub_point()" href="javascript:void(0)" class="publicBtn publicBtn_h31 publicBtn_f60 inline">确定使用</a></td> 
         </tr> 
        </tbody> 
       </table> 
      </div> 
      <div class="none"> 
       <a data-usepoint="0" id="point_message"></a> 
      </div> 
     </div> 
    </div> 
    <div class="bg_fff border mg_t30  relative"> 
     <div class="experience_entrance none"> 
      <div id="experienceBtn" class="experience_btn"> 
       <span class="inline f16 col_724">使用体验码</span> 
       <span class="inline tyq_bg tb3"></span> 
      </div> 
      <div class="experience_con mg_t20 none" id="experienceInputOut"> 
       <label class="sizeZero"> <input id="experienceInput" type="text" class="exper_input inline col_666 mg_r10" placeholder="请输入体验码编号" /> <input id="experienceUseBtn" type="submit" class="inline experience_use_btn" value="使用" /> <input id="experienceCancelBtn" type="submit" class="inline experience_use_btn none" value="取消" /> </label> 
       <p id="experienceCheckTips" class="experience_error_msg col_b76"></p> 
       <input type="hidden" id="experienceCodeHidden" value="" /> 
      </div> 
     </div> 
     <div class="firmbox mg_t20"> 
      <div class="lineH40  pd_l10 pd_r20 clearfix  none"> 
       <div class="f_r col_666 none">
         可获积分：
        <span class="w80 inline fb t_r col_f60 pd_r5">0</span> 
       </div> 
      </div> 
      <div class="lineH30  pd_l10 pd_r20 clearfix "> 
       <div class="f_r col_666 f14">
         商品总价：
        <span class="w80 inline t_r col_f60 pd_r5 f14" id="total_order_design_price">&yen;369</span> 
       </div> 
       <span class="inline f_r mg_r30  col_666">商品总数 <em id="productNum" class="col_f60 fb f14">1</em> 件 </span> 
      </div> 
      <div class="lineH30  pd_l10 pd_r20 clearfix "> 
       <div class="f_r col_666 f14">
         运费：
        <span class="w80 inline t_r col_f60 pd_r5 f14" id="total_order_express_price"></span> 
       </div> 
      </div> 
      <div class="lineH30  pd_l10 pd_r20 clearfix "> 
       <div class="f_r col_666 f14">
         优惠：
        <span class="w80 inline t_r col_f60 pd_r5 f14" id="couponPrice"></span> 
       </div> 
      </div> 
      <div class="lineH30  pd_l10 pd_r20 clearfix "> 
       <div id="discount_price" class="f_r col_666 f14 "></div> 
      </div> 
      <div class="clearfix"> 
       <ul class="firm_ul f_r mg10"> 
        <li class="col_666 none">虚拟账户：<span align="center" class="col_ee5b47 inline w10 f14">-</span> <span class="col_f60 w70 inline fb escp" id="lose_point_price_id">&yen;0</span></li> 
        <li class="f14 col_666">实际支付金额：<strong class="col_f60 "> <em class="f18 fb inline w80" id="total_order_price"></em> </strong></li> 
        <input type="hidden" value="369.0" id="total_order_design_price_h" /> 
        <input type="hidden" value="0" id="h_my_point" /> 
       </ul> 
      </div> 
      <div style="display: none;" id="confirmorder_recv_info" class="clearfix t_r "> 
       <span id="area" class="f14  col_666 mg_r5"></span>
       <br /> 
       <span id="address" class="f14  col_666 mg_r5"></span>
       <br /> 
       <span id="name" class="f14  col_666 mg_r5"></span>
       <br /> 
       <span id="phoneNum" class="f14 col_666 mg_r5"></span> 
      </div> 
     </div> 
     <div class="pd_t10 t_r pd_r20 mg_b20"> 
      <a href="/shopcars/index.html" class=" col_999 back_pay_btn inline f16 mg_r20">返回购物车</a> 
      <a id="submitorder" href="javascript:;" class="inline f16 order_qr_btn t_c ">提交订单</a> 
     </div> 
    </div> 
   </div> 
  </div>  
  <script type="text/template" id="pop_address">
    <form id="form_address">
        <input type="hidden" id="i_address_id" value="0"/>
        <table class="per_table" width="100%" cellspacing="10">
            <tr>
                <td width="20%" align="right">
                    <span class="col_ee5b47"></span>收货人姓名：&nbsp;
                </td>
                <td width="80%">
                    <input id="i_receiver" type="text" value="" name="i_n_receiver" maxlength="12" class="inpCom w200 permy" onkeypress="return ValidateSpecialCharacter()"/>
                    <span id="receiver_msg"></span>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <span class="col_ee5b47"></span>省市：&nbsp;
                </td>
                <td>
                    <div id="provice_seletor" class="w120 mg_r10 posR f_l permy"></div>
                    <div id="city_seletor" class="w120 mg_r10 posR f_l permy"></div>
                    <div id="area_seletor" class="w120 mg_r10 posR f_l permy"></div>
                    <input type="hidden" id="i_ADDR_ID" name="i_n_ADDR_ID" />
                    <span id="area_msg"></span>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <span class="col_ee5b47"></span>街道地址：&nbsp;
                </td>
                <td>
                    <input id="i_address" type="text" value="" name="i_n_address" maxlength="31" class="inpCom w200 permy" onkeypress="return ValidateSpecialCharacter()" onkeyup="checkAddressLength();"/>
                    <span id="address_msg"></span>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <span class="col_ee5b47"></span>手机号码：&nbsp;
                </td>
                <td>
                    <input id="i_phone" type="text" value="" name="i_n_phone" maxlength="11" class="inpCom w200 permy"/>
                    <span id="phone_msg"></span>
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td class="isdefault">
                    <div class="openIcon inline cursor checkedc"></div>
                    <input type="checkbox" id="i_default_address" />
                    <label id="default_address_html" class="col_000">
                        设为默认地址</label>
                </td>
            </tr>
        </table>
    </form>
</script> 
  <script src="static/Home/pc/common/js/ui/jquery.validate.js?v=biyao_3051366"></script> 
  <script src="static/Home/pc/common/js/jquery.tabso.js?v=biyao_e358f64" type="text/javascript"></script> 
  <script type="text/javascript" src="static/Home/pc/buy/js/ConfirmOrderDes.js?v=biyao_b3d72f3"></script> 
  <script type="text/javascript" src="static/Home/pc/common/js/lazyload.js?v=biyao_80d4f78"></script> 
  <script type="text/javascript" src="static/Home/pc/www/js/product/lazyloadIM.js?v=biyao_c5ce53c"></script> 
  <script type="text/javascript" src="static/Home/pc/buy/js/materiallistDes.js?v=biyao_21283ab"></script> 
  <script type="text/javascript" src="static/Home/pc/minisite/byshoes/js/jquery.cookie.js?v=biyao_a5283b2"></script> 
  <script type="text/template" id="materialsOfProductTemplate">
    <div class="pop_bd pd_t15 clearfix">
        <ul class="sizeZero ml_list">
        </ul>
    </div>
</script>
  <div data-selector="J_im" id="webIM_showDiv"></div>
 </body>
</html>
@endsection
@section('title','订单')
