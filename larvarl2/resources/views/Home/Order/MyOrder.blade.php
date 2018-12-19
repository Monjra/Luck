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
        var pageIndex = 0;
        var pageCount =0;
    </script> 
   <div class="per_right_out backg_fff mg_b20 "> 
    <div class="per_right "> 
     <div> 
      <div class="relative"> 
       <h4 class="nTitle">我的订单</h4> 
      </div> 
      <table cellspacing="0" cellpadding="0" class="w100w t_c  perTabTitn "> 
       <tbody> 
        <tr> 
         <td width="32%"><span class="inline">商品</span></td> 
         <td width="14%"><span class="inline">售后</span></td> 
         <td width="18%"><span class="inline">合计</span></td> 
         <td width="18%"><span class="inline">状态</span></td> 
         <td width="18%"><span class="inline">操作</span></td> 
        </tr> 
       </tbody> 
      </table> 
      <div class="historyOrderTit f14">
       由于系统升级,2016年01月18日之前的订单 
       <a href="/MyCenter/MyOrder.html" class="publicBtn publicBtn_h27 publicBtn_e7 inline mg_l5 mg_tf3">点此查看</a> 
       <span class="historyOrderTitdel f12">X&nbsp;关闭</span> 
      </div> 
      <div class="J_table_wrap"> 
       <div class="order_title clearfix  "> 
        <span class="f_l col_666"> <span class="col_b2b2b2">2016-08-05 &nbsp;&nbsp;</span> <label> 订单编号：122007043946180978</label> </span>
        <span class="f_r">&nbsp;&nbsp; <script>
                        var suppliedIdForIm = 'supplier_'+"130091";
                    </script> 
         <!--暂时关闭IM入口，勿删--> <a> <span class="inline">商家：</span> <span id="J_product_name " class="inline col_666">Ginger皮具</span> </a> </span> 
       </div> 
       <div class="mg_b20"> 
        <table cellspacing="0" cellpadding="0" class="sop_table4 border "> 
         <tbody> 
          <tr data-unfacceptance="0" data-supplierid="130091" data-orderid="122007043946180978"> 
           <td width="46%" class="bd_r J_popup_parent"> 
            <table width="100%" height="100px" cellspacing="0" cellpadding="0"> 
             <tbody> 
              <tr> 
               <td name="detail_td"> <a class="perCmImg inline mg_l10" target="_blank" href="/products/1300910000000030000-0.html#editor"> <img alt="" src="http://img.biyao.com/files/temp/render_zs/result/1300910000/272079c5d789a84c_130091000000003_0_800_363/img_6_800_200.jpg" /> </a> 
                <div class="inline mg_l10 vTop mg_t5 lineH20 w190"> 
                 <a class="col_666" href="/products/1300910000000030000-0.html#editor" target="_blank"> <span class="col_666">女士丝印进口牛皮休闲购物包</span> </a>
                 <br /> 
                 <span class=" col_999">规格:标配<br />签名:无</span> 
                 <div class="refund_tips"></div> 
                </div> </td> 
               <td width="30%" class="bd_l t_c vTop pd_t15 lineH20"> </td> 
              </tr> 
             </tbody> 
            </table> </td> 
           <td width="18%" align="center" class="bd_l vTop pd_t15 lineH20"><strong class="col_f60 f14">￥399</strong> <br /> <span>（运费：￥0）</span> </td> 
           <td width="18%" align="center" class="bd_l vTop pd_t15 lineH20"> <span class="col_f60">待付款</span> <br /> <a href="MyOrderDetail.html" class="col_link ">订单详情</a> <br /> <span onmouseenter="addwl(this)" onmouseleave="$(this).find('.c_wl_w').fadeOut()" class="relative col_link" orderstatus="1" orderid="122007043946180978" order="">订单跟踪 
             <div class="c_wl_w"> 
              <div class="wl_jd"></div> 
              <div class="c_wl_n"> 
               <div class="col_666"> 
                <span class="c_wl_t"><b>订单跟踪</b> </span> 
               </div> 
               <div class="wl_dl_w_p"></div> 
               <div class="wl_dl_w col_666"></div> 
               <div class="c_wl_f none"> 
                <span class="col_666">以上为最新信息&nbsp;&nbsp;,&nbsp;&nbsp;</span>
                <a href="MyOrderDetail.html" class="col_link ">查看全部&gt;&gt;</a> 
               </div> 
              </div> 
             </div> </span> </td> 
           <td width="18%" align="center" class="bd_l vTop  pd_l20 pd_r20 pd_t5"> <a href="#" class="publicBtn publicBtn_h25 publicBtn_f60 inline mg_t10">立即付款</a><br /> <a href="javascript:void(0)" class=" cancelOrder  mg_t10 inline" orderid="122007043946180978">取消订单</a> <br /> </td> 
          </tr> 
         </tbody> 
        </table> 
       </div> 
      </div> 
      <div class="DZPager mg_b20"></div> 
     </div> 
     <input type="hidden" id="storedesc" title="" /> 
    </div> 
   </div> 
   <script>
        $(function(){
            hoverReservationpart();
        })
        //划过汽车套餐弹出层套餐详情
        function hoverReservationpart(){
            $(".Reservationpart").hover(
	            function(){
	                var $this=$(this);
	                //判断 是否已经加载过
	                if(($this.find(".Reservation_wl_w")).length==0){
	                    $.ajax({
	                        type: "get",
	                        async: false,
	                        url:"/RequestAPI/PackageList?designId="+$this.attr("designid"),
	                        success: function (data) {//sunccess
	                            if(data.success==1){
	                                var html='<div class="Reservation_wl_w">\
			                	<div class="wl_jd"></div>\
			                	<div class="c_wl_n">\
			                	<div class="col_724 borderB c_wl_t overflow">\
				                	<span class="f_l">'+data.data.standardPackage.name+' </span>\
				                	<span class="f_r">￥'+data.data.standardPackage.price+'</span>\
			                	</div>\
			                	<div class=" col_666 masked-relative masked" style="line-height:25px">';
	                                $.each(data.data.standardPackage.element,function(j,item){
	                                    html+='<div class="overflow">\
			                		<span class="w150 f_l">'+item+'</span><span class="f_r">包括</span>\
			                		</div>';
	                                });
	                                $.each(data.data.comboPackage,function(j,item){
	                                    html+='<div class="col_724 borderB c_wl_t overflow">\
				                	<span class="f_l">'+item.name+'</span><span class="f_r">￥'+item.price+'</span>\
				                	</div>\
				    				<div class=" col_666 masked-relative masked" style="line-height:25px">';
	                                    $.each(item.element,function(e,ite){
	                                        html+='<div class="overflow">\
				    					<span class="w150 f_l">'+ite+'</span><span class="f_r">包括</span>\
				    					</div>';
	                                    })
	                                    html+='</div>';
	                                })


	                                html+='</div>\
			                	</div></div>';
	                                $this.append(html);
	                            }
	                        }//sunccess
	                    })
	                }
	                $this.find(".Reservation_wl_w").css("display","block");
	            }
	            ,function(){
	                $(this).find(".Reservation_wl_w").css("display","none");
	            }
	    );

        }
    </script>
  </div> 
  <div data-selector="J_im" id="webIM_showDiv"></div>
 </body>
</html>
@endsection
@section('title','个人中心—历史记录')