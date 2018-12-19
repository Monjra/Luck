@extends('Home.HomePublic.public')
@section('home')
<html>
 <head></head>
 <body>
  <div class="wrap  posR mg_t20 mH810 pd_b40"> 
   <div class="per_left"> 
    <div class="per_leftbox  pd_t14"> 
     <ul class="per_leftul"> 
      <li class="t_c"> <a href="/MyCenter/Profile.html"> <img src="/static/Home/pc/www/img/avatar/head_150.png" alt="" onerror="javascript:this.src='/static/Home/pc/www/img/avatar/head_150.png'" style="width: 150px; height: 150px" /> </a> </li> 
      <li class="f14 col_fff mg_t10 t_c">by_3444810</li> 
     </ul> 
    </div> 
    <div class="per_leftbox"> 
     <div class="perleft_menu pdtb_20"> 
      <ul> 
       <li class="a_check "><a href="MyOrder.html"><i class="f_r mcMIcon3 inline"></i>我的订单</a> </li> 
       <li class=" "><a href="MyRefunds.html"><i class="f_r mcMIcon4 inline"></i>退款管理</a></li> 
       <!--<li class=" "><a href="/MyCenter/MyIncomeRules.html" ><i class="f_r mcMIcon5 inline"></i>我的收益</a></li>--> 
       <li class=" "><a href="Profile.html"><i class="f_r mcMIcon8 inline"></i>个人设置</a></li> 
       <!-- <div class="div_line"></div> --> 
       <!-- <a href="#"><i class="f_r mcMIcon9 inline"></i>设计师主页</a> <a
                        href="#"><i class="f_r mcMIcon10 inline"></i>设计师提现</a> --> 
      </ul> 
     </div> 
    </div> 
   </div> 
   <script type="text/javascript">
        var order_status = 1;
    </script> 
   <div class="per_right_out backg_fff mg_b20 "> 
    <div class="per_right "> 
     <h4 class="nTitle relative"> 订单编号：122007043946180978
      <ul class="myOrder_r" id="left_ul"> 
       <li class="inline col_666 mg_r20"><span id="left_time" class="col_f60"></span>订单将关闭</li> 
       <li class="inline mg_r20"><a href="http://buy.biyao.com/order/onlineCharge?order_id_list=MTIyMDA3MDQzOTQ2MTgwOTc4" class="inline pbBtn_30 pbBtn_f60 w80 col_fff f14">支付</a></li> 
       <li class="inline"><a orderid="122007043946180978" class="inline col_link cancelOrder" href="javascript:void(0)">取消订单</a></li> 
      </ul> </h4> 
     <div class=" clearfix mb_30 mg_t20"> 
      <div class="publicStepsbox overflow"> 
       <ul class="steps5 clearfix stepUlNum"> 
        <li class="step_checked first"><i class="inline spIcon sucBg"></i> 
         <div class="f90_line"></div></li> 
        <li><i class="inline spIcon numBg">2</i> 
         <div class="gray_line"></div></li> 
        <li class=""><i class="inline spIcon numBg">3</i> 
         <div class="gray_line"></div></li> 
        <li class=""><i class="inline spIcon numBg">4</i> 
         <div class="gray_line"></div></li> 
        <li class="last"><i class="inline spIcon numBg">5</i> 
         <div class="gray_line"></div></li> 
       </ul> 
       <ul class="steps5 clearfix stepUlTxt"> 
        <li class="first">提交订单 <br /> <span class="inline col_999">2016-08-05 23:24:21</span></li> 
        <li>在线付款</li> 
        <li>商家生产</li> 
        <li>商家发货</li> 
        <li class="last">收货并评价</li> 
       </ul> 
      </div> 
     </div> 
     <div class="orderdetails_box1 border mg_t15"> 
      <p class="sizeZero"> <span class="inline"><span class="col_666 f18">当前订单状态：</span> <span class="col_f60 f18">商品订单已提交，请在2小时内付款，若未及时付款，系统将自动取消订单！</span></span> </p> 
      <p class="mg_t10 f14"> 1.点击这里付款 &nbsp;&nbsp;<a class="btnComS btnBg2 btnH1 w80 inline mg_l10 " href="http://buy.biyao.com/order/onlineCharge?order_id_list=MTIyMDA3MDQzOTQ2MTgwOTc4"><span>立即付款</span></a><br /> 2.如果您不想购买，可以 <a orderid="122007043946180978" class="f14 mg_l10 col_07a6df cancelOrder" href="javascript:void(0)">取消订单</a> </p> 
     </div> 
     <div class="orderdetails_box1 border mg_t30 bg_f5"> 
      <h3 class="f16 orderTxtn">订单信息</h3> 
      <div class="pd_t20 pd_b20"> 
       <dl class="order_msgn mg_b10"> 
        <dt class="inline col_666 w70">
         收货地址：
        </dt> 
        <dd class="inline">
         <span class="mg_r20">阿茂 &nbsp;&nbsp; </span>
         <span class="mg_r30">13303032929</span> 北京市市辖区西城区网路1
        </dd> 
       </dl> 
      </div> 
      <div class="pd_t20 pd_b20 bd_top_cc_dot"> 
       <dl class="order_msgn mg_b10"> 
        <dt class="inline col_666 w70">
         配送方式：
        </dt> 
        <dd class="inline">
         顺丰快递
        </dd> 
       </dl> 
       <dl class="order_msgn"> 
        <dt class="inline col_666 w70">
         配送时间：
        </dt> 
        <dd class="inline">
          工作日、双休日、假日均可送货 
        </dd> 
       </dl> 
      </div> 
      <div class="pd_t20 pd_b20 bd_top_cc_dot"> 
       <dl class="order_msgn mg_b10"> 
        <dt class="inline col_666 w70">
         商家信息：
        </dt> 
        <dd class="inline"> 
         <!--暂时关闭IM入口，勿删--> 
         <a> <span class="inline">商家：</span> <span id="J_product_name " class="inline col_666">Ginger皮具</span> </a> 
        </dd> 
       </dl> 
       <dl class="order_msgn mg_b10"> 
        <dt class="inline col_666 w70"></dt> 
        <dd class="inline">
         联系电话：400-890-6288
        </dd> 
       </dl> 
       <dl class="order_msgn"> 
        <dt class="inline col_666 w70"></dt> 
        <dd class="inline">
         生产周期：25天
        </dd> 
       </dl> 
      </div> 
     </div> 
     <div class="mg_t30  mg_b40"> 
      <div class="order_title clearfix "> 
       <table cellspacing="0" cellpadding="0" class="w100w order_titn_tab"> 
        <tbody> 
         <tr> 
          <th>商品信息</th> 
          <!-- <th width="10%" align="center">可获积分
                        </th> --> 
          <th width="12%">单价</th> 
          <th width="8%">数量</th> 
          <th width="15%">优惠</th> 
          <th width="12%">包装</th> 
          <th width="14%">小计</th> 
         </tr> 
        </tbody> 
       </table> 
      </div> 
      <table cellspacing="0" cellpadding="0" class="sop_table4 border"> 
       <tbody> 
        <tr data-orderid="122007043946180978" data-supplierid="130091" data-unfacceptance="0"> 
         <td width="60%" class="bd_r J_popup_parent"> 
          <table width="100%" height="100px" cellspacing="0" cellpadding="0"> 
           <tbody> 
            <tr> 
             <td> <a href="http://www.biyao.com/products/1300910000000030000-1.html" target="_blank" class="perCmImg inline mg_l10"> <img src="http://img.biyao.com/files/temp/render_zs/result/1300910000/272079c5d789a84c_130091000000003_0_800_363/img_6_800_200.jpg" alt="" width="100" height="100" /> </a> 
              <div class="inline mg_l10 vMiddle lineH20"> 
               <a target="_blank" href="http://www.biyao.com/products/1300910000000030000-1.html" class="col_666"> <span class="col_666">女士丝印进口牛皮休闲购物包</span> </a> 
               <br /> 
               <span class=" col_999 inline">规格:标配<br />签名:无</span> 
               <!--  </dl>	--> 
               <div class="refund_tips"></div> 
              </div> </td> 
             <td width="15%" class="bd_l t_c"> <strong class="col_f60 f14">&yen;399</strong> </td> 
             <td width="10%" class="bd_l t_c"> <span class="col_666">1</span> </td> 
             <td width="15%" class="bd_l t_c"> <strong class="col_f60 f14">￥0</strong> </td> 
             <td width="15%" align="center" class="bd_l lineH20"> <span class="col_666">普通包装</span><br /> <strong class="col_f60">免费</strong> </td> 
            </tr> 
           </tbody> 
          </table> </td> 
         <td width="10%" align="center" class="bd_l vMiddle lineH20"> <strong class="col_f60 f14">&yen;399</strong><br /> <span>免运费</span> </td> 
        </tr> 
       </tbody> 
      </table> 
      <div class="reality_box t_r sizeZero"> 
       <span class="inline col_666 f12">实付款：</span> 
       <span class="inline col_f60 f18 fb">&yen;399</span> 
       <span class="inline col_666 f12 mg_l10">优惠总金额：</span> 
       <span class="inline col_f60 f18 fb">&yen;0</span> 
      </div> 
     </div> 
    </div> 
   </div> 
  </div> 
 </body>
</html>
@endsection
@section('title','个人中心——订单详细')