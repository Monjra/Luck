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
<div class="pd_b40">
    <div class="wrap ie78">
        <div class="lineH24 t_l  pd_t30 pd_b10 bd_b_d5c ">
            <span class="f18 col_666 mg_l10 col_523">购物车</span>
        </div>
        <div class="comment_box">
            <table class="sop_table1" cellpadding="0" cellspacing="0">
                <tr>
                    <th colspan="2" width="15%" align="left" class="pd_l10"><label
                            class="checked checkbox" name="chkAll"><i
                            class="openIcon inline mg_r10"></i></label><span class="col_523">全选</span></th>
                    <th align="left" class="col_523">商品信息</th>
                    <th width="10%" align="center" class="col_523">单价</th>
                    <th width="10%" align="center" class="col_523">数量</th>
                    <th width="20%" align="center" class="col_523">包装</th>
                    <th width="10%" align="center" class="col_523">小计</th>
                    <th width="5%" align="center" class="col_523">操作</th>
                </tr>
            </table>
        </div>
        <div class="shoppingBox ">
            <div class="order_title divdel" name="divTitle_130063" supplierid="130063">
                <label class="checked inline col_666 checkbox" name="chk_Supplier" data-value="130063">
                    <i class="openIcon inline mg_r10"></i>
                </label>
                <!--暂时关闭IM入口，勿删-->
                <a>
                    <span class="inline">商家：</span>
                    <span id="J_product_name " class="inline col_666">GM服装</span>
                </a><!--暂时关闭IM入口，临时替换-->
            </div>
            <table class="sop_table1 lastTh tabledel bg_fff" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="30" align="left" class="pd_l10">
                        <label class="checked checkbox chk_Calc"
                               name="chk_130063"
                               supplierid="130063"
                               data-value="1211915"
                               data-design="1300630049000000060"
                               data-num="1">
                            <i class="openIcon inline"></i>
                        </label>
                    </td>
                    <td width="130" align="left">
						<span class="sop_img inline">
							<a target="_blank" href="product.html#/1300630049000000060-0.html">
                                <img width="100" height="100" src="http://img.biyao.com/files/temp/render_zs/result/1300630049/3a50e43e64e9cba8_130063004900000_0_800_419/img_6_800_120.jpg" />
                            </a>
						</span>
                    </td>
                    <td align="left">
                        <a target="_blank" href="product.html#/1300630049000000060-0.html">
                            <span class="col_523">G/M八字领暗门襟短袖衬衫11006</span>
                        </a>
                        <br />
                        <div class="col_999 inline mg_t5">尺码:38<br/>签名:无</div>
                        <br />
                        <a id="material_list" designid="1300630049000000060" href="#" class="col_aaa inline mg_t5 material_list">用料清单>></a>
                        <br />

                    </td>
                    <td width="10%" align="center" class="ff6600">¥369</td>
                    <td width="10%" align="center" class="sizeZero">
                        <i class="sign minus inline"></i>
                        <input name ="quantity" type="text" maxlength="3" name="input_1211915"
                               value="1" shopcarid="1211915"
                               discount="0.0" price="369.0"
                               num="1" packageprice="0.0"
                               modelid="1300630049" supplierid="130063"
                               designid="1300630049000000060" sizename="尺码:38"
                               class="inpCom w40 inline t_c">
                        <i class="sign plus inline"></i>
                        <p class="col_b76 mg_t5"></p>
                    </td>
                    <td width="20%" align="center" class="col_666">
                        <span class="span_package_type">普通包装</span>
                        <span class="span_package_price pack_selects">(免费)</span>
                    </td>
                    <td width="10%" align="center"><strong class="ff6600">¥369</strong></td>
                    <td width="5%" align="center"><a href="javascript:;" class="link_09c a_delete" id="deleteLink" data="1211915"></a></td>
                </tr>
            </table>
        </div>
        <div class="firmbox pd_t10 bg_fff tj_box">
            <div class="lineH30  pd_l10 pd_r10 clearfix ">
                <div class="f_l">
                    <label class="checked inline checkbox" name="chkAll"><i
                            class="openIcon inline mg_r10"></i></label><span class="inline">全选</span> <a
                        href="javascript:;" class="inline mg_l10 mg_r10 col_link"
                        id="a_BatchDel">删除</a>
                </div>
                <div class="f_r col_666 f14">
                    商品总价：<span class="w80 inline col_f60 pd_r5 f14" id="totalPrice">¥369</span>
                </div>
                <span class="inline f_r mg_r30 col_666 f14">商品总数 <em class="col_f60  f14" id="totalNum">1</em> 件</span>
            </div>
            <div class="lineH30  pd_l10 pd_r10 clearfix ">
                <div class="f_r col_666 f14">

                    包装费：<span class="w80 inline col_f60 pd_r5" id="packagePrice">¥0</span>
                </div>
            </div>
        </div>
        <div class="tallyBox">
            <a href="index.html"
               class="inline goonShopping ">继续购物</a>
            <a href="javascript:;"
               class=" tallyBTnPos inline span_submit_calre js_btn">结算</a>
            <p class="t_r">
                合计（不含运费）：<span class="f20 ff6600 inline vTop priceDisplay jsjs">
				¥369</span><span class="inline f14 fb ff6600 vTop mg_l5"></span>
            </p>
        </div>
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
@section('title','购物车')