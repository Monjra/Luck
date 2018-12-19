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
      <h4 class="nTitle">历史订单</h4> 
      <span class="f14 col_666 pd_t20 inline">您暂时没有订单。</span> 
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
@section('title','个人中心——历史订单')