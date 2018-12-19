@extends('Home.HomePublic.public')
@section('home')
<script type="text/javascript">
        window.designData = {"carveInfo":null,"imgList":[{"img_l":"http://img.biyao.com/files/temp/f9/f91a43f5ea026261.jpg","img_s":"http://img.biyao.com/files/temp/f9/f91a43f5ea026261.jpg"},{"img_l":"http://img.biyao.com/files/temp/96/960ba7d0ca35c582.jpg","img_s":"http://img.biyao.com/files/temp/96/960ba7d0ca35c582.jpg"},{"img_l":"http://img.biyao.com/files/temp/31/3186a35bbe2c7733.jpg","img_s":"http://img.biyao.com/files/temp/31/3186a35bbe2c7733.jpg"},{"img_l":"http://img.biyao.com/files/temp/11/1125bf3b2c225d07.jpg","img_s":"http://img.biyao.com/files/temp/11/1125bf3b2c225d07.jpg"}],"isCarve":0,"productDetail":"<p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053467923974311_0.jpg\" style=\"\" title=\"罗马壶详情图1200_01.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053469125395380_0.jpg\" style=\"\" title=\"罗马壶详情图1200_02.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468031302499_0.jpg\" style=\"\" title=\"罗马壶详情图1200_03.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053469230383564_0.jpg\" style=\"\" title=\"罗马壶详情图1200_04.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468161260728_0.jpg\" style=\"\" title=\"罗马壶详情图1200_05.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053469352999779_0.jpg\" style=\"\" title=\"罗马壶详情图1200_06.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/29/08/productiondetail/data/192168100161_4280_636053776523155295_0.jpg\" style=\"\" title=\"lm-pc.jpg\" alt=\"lm-pc.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053469465007976_0.jpg\" style=\"\" title=\"罗马壶详情图1200_08.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468404933156_0.jpg\" style=\"\" title=\"罗马壶详情图1200_09.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468462029256_0.jpg\" style=\"\" title=\"罗马壶详情图1200_10.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468551729414_0.jpg\" style=\"\" title=\"罗马壶详情图1200_11.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468601337501_0.jpg\" style=\"\" title=\"罗马壶详情图1200_12.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468676373633_0.jpg\" style=\"\" title=\"罗马壶详情图1200_13.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468756713774_0.jpg\" style=\"\" title=\"罗马壶详情图1200_14.jpg\"/><\/p><p><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053469960776847_0.jpg\" style=\"\" title=\"罗马壶详情图1200_15.jpg\"/><\/p><p><br/><\/p>","productId":"1301025001","productMdetail":"<p style=\"text-align: center;\"><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053470359357547_0.jpg\" style=\"\" title=\"罗马壶详情图640_01.jpg\"/><\/p><p style=\"text-align: center;\"><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053470397889615_0.jpg\" style=\"\" title=\"罗马壶详情图640_02.jpg\"/><\/p><p style=\"text-align: center;\"><img src=\"http://img.biyao.com/files/data0/2016/07/29/08/productiondetail/data/192168100161_4280_636053777277416620_0.jpg\" style=\"\" title=\"lmh-m.jpg\" alt=\"lmh-m.jpg\"/><\/p><p style=\"text-align: center;\"><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053469327986777_0.jpg\" style=\"\" title=\"罗马壶详情图640_04.jpg\"/><\/p><p style=\"text-align: center;\"><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053470529397846_0.jpg\" style=\"\" title=\"罗马壶详情图640_05.jpg\"/><\/p><p style=\"text-align: center;\"><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053469495687072_0.jpg\" style=\"\" title=\"wap端-01_01.jpg\"/><\/p><p style=\"text-align: center;\"><img src=\"http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053470688362125_0.png\" style=\"\" title=\"wap端-01_02.png\"/><\/p><p><br/><\/p>","productSale":"长效保温，欧式设计，奥氏体304不锈钢","shelfStatus":1,"sizeDetail":[{"duration":10,"price":119,"shelfStatus":1,"sizeDetail":null,"specs":[{"goods_size":"波尔多红","name":"颜色"},{"goods_size":"2升","name":"尺寸"}],"storeNum":100,"suId":"1301025001010200001","suName":"经典北欧系列奥氏体真空保温壶"},{"duration":10,"price":119,"shelfStatus":1,"sizeDetail":null,"specs":[{"goods_size":"亮银色","name":"颜色"},{"goods_size":"2升","name":"尺寸"}],"storeNum":100,"suId":"1301025001060200001","suName":"经典北欧系列奥氏体真空保温壶"}],"sizeList":[{"des":"波尔多红","img_l":null,"img_s":null,"name":"颜色","spec_id":2587,"type":0},{"des":"亮银色","img_l":null,"img_s":null,"name":"颜色","spec_id":2588,"type":0},{"des":"2升","img_l":null,"img_s":null,"name":"尺寸","spec_id":2589,"type":0}],"suData":{"duration":10,"price":119,"shelfStatus":1,"sizeDetail":"http://img.biyao.com/files/temp/d2/d2d1453df6275eb6.jpg","specs":[{"goods_size":"亮银色","name":"颜色"},{"goods_size":"2升","name":"尺寸"}],"storeNum":332,"suId":"1301025001060200001","suName":"经典北欧系列奥氏体真空保温壶"},"supplierInfo":{"_OEM_info":"","_ServicesTel":"400-869-9663","_StoreDesc":"STRAFORD常年服务于膳魔师、双立人、WMF等众多国际一线品牌，是国内最大的不锈钢保温产品制造商之一，拥有国际领先的双层抽真空技术，以及众多产品外观设计专利，拥有十多年国际知名品牌生产经验，致力于为全球家庭用户提供设计简洁、时尚耐用、健康环保的不锈钢产品，力求为每一个家庭带来舒适优越的生活体验！","_TransferDelayDay":null,"_company_name":null,"_contract_deadline":"2016-07-25 15:27:38.837","_createby":"10032","_createtime":"2016-07-25","_enable":true,"_id":74,"_logo_url":"http://img.biyao.com/files/data0/2016/07/28/18/storelogo/abc1e9e4624ca14e.jpg","_logoid":0,"_service_tel":null,"_service_time":"周一至周日9:00-21:00","_settled_time":"2016-07-25","_status":1,"_store_domain_name":"straford.biyao.com","_store_location":null,"_store_logo_url":"","_store_name":"STRAFORD水具","_supplier_factory_name":null,"_supplier_id":130102,"_updateby":"10032","_updatetime":"2016-07-29","is_webim":0,"is_zcwebim":0,"policy":[{"policyDescription":"实物破损、不符、质量问题，退换货商家承担往返运费。","policyId":3,"policyName":"7天无忧退换","supplierId":130102,"supplierName":"STRAFORD水具"},{"policyDescription":"争议可申诉，申诉成功，立即退款。","policyId":4,"policyName":"先行赔付","supplierId":130102,"supplierName":"STRAFORD水具"},{"policyDescription":"未按承诺时间发货，系统自动赔付（赔款金额为订单商品金额的30%，上限500元）。","policyId":5,"policyName":"超时赔偿","supplierId":130102,"supplierName":"STRAFORD水具"},{"policyDescription":"运费由商家承担","policyId":9,"policyName":"顺丰包邮","supplierId":130102,"supplierName":"STRAFORD水具"}],"policyDescription":"<p style=\"text-align: center;\"><img src=\"http://img.biyao.com/files/data0/2016/07/28/20/productiondetail/data/192168100162_8940_636053362990299999_0.jpg\" title=\"wb端-01.jpg\" alt=\"wb端-01.jpg\"/><\/p>","productGrade":5,"productNum":0,"publicityImgList":null,"qualityGrade":5,"return_address":null,"return_phone":null,"return_receiver":null,"return_zipcode":null,"serviceGrade":5,"zcgroupid":""}};
        window.categoryID=509;
        designData.ModelId=designData.productId;
        window.isCarveCustomer=0;//顾客刻字状态
        window.CarveContent="";//刻字内容
        window.supplierInfo={"_OEM_info":"","_ServicesTel":"400-869-9663","_StoreDesc":"STRAFORD常年服务于膳魔师、双立人、WMF等众多国际一线品牌，是国内最大的不锈钢保温产品制造商之一，拥有国际领先的双层抽真空技术，以及众多产品外观设计专利，拥有十多年国际知名品牌生产经验，致力于为全球家庭用户提供设计简洁、时尚耐用、健康环保的不锈钢产品，力求为每一个家庭带来舒适优越的生活体验！","_TransferDelayDay":null,"_company_name":null,"_contract_deadline":"2016-07-25 15:27:38.837","_createby":"10032","_createtime":"2016-07-25","_enable":true,"_id":74,"_logo_url":"http://img.biyao.com/files/data0/2016/07/28/18/storelogo/abc1e9e4624ca14e.jpg","_logoid":0,"_service_tel":null,"_service_time":"周一至周日9:00-21:00","_settled_time":"2016-07-25","_status":1,"_store_domain_name":"straford.biyao.com","_store_location":null,"_store_logo_url":"","_store_name":"STRAFORD水具","_supplier_factory_name":null,"_supplier_id":130102,"_updateby":"10032","_updatetime":"2016-07-29","is_webim":0,"is_zcwebim":0,"policy":[{"policyDescription":"实物破损、不符、质量问题，退换货商家承担往返运费。","policyId":3,"policyName":"7天无忧退换","supplierId":130102,"supplierName":"STRAFORD水具"},{"policyDescription":"争议可申诉，申诉成功，立即退款。","policyId":4,"policyName":"先行赔付","supplierId":130102,"supplierName":"STRAFORD水具"},{"policyDescription":"未按承诺时间发货，系统自动赔付（赔款金额为订单商品金额的30%，上限500元）。","policyId":5,"policyName":"超时赔偿","supplierId":130102,"supplierName":"STRAFORD水具"},{"policyDescription":"运费由商家承担","policyId":9,"policyName":"顺丰包邮","supplierId":130102,"supplierName":"STRAFORD水具"}],"policyDescription":"<p style=\"text-align: center;\"><img src=\"http://img.biyao.com/files/data0/2016/07/28/20/productiondetail/data/192168100162_8940_636053362990299999_0.jpg\" title=\"wb端-01.jpg\" alt=\"wb端-01.jpg\"/><\/p>","productGrade":5,"productNum":0,"publicityImgList":null,"qualityGrade":5,"return_address":null,"return_phone":null,"return_receiver":null,"return_zipcode":null,"serviceGrade":5,"zcgroupid":""};
        window.ControllerSite = '';
    </script>
<div class="section">
    <ul class="section-bread clearfix">
        <li>
            <a href="http://www.biyao.com">首页</a>
            <span class="bread-title">&nbsp;/&nbsp;经典北欧系列奥氏体真空保温壶</span>
        </li>
        <li class="b-company" id="supplierInfo">
            <i></i>
            <span class="supplier_name"></span>

            <div class="company none" id="companycssreInfo">
                <div class="company-head">
                    <div>
                        <span class="company-icon">
                        <img class="supplier_logo_url" src="" alt=""></span>
                        <span class="company-name supplier_name"></span>
                        <i></i>
                        <b id="supplierInfoClose"></b>
                    </div>
                    <span >服务电话:<span class="supplier_userTel"></span></span>
                </div>
                <div class="company-score">
                    <ul>
                        <li id="desc_score">
                            <span>实物相符 : </span>
                            <i><b class="scoreImg"></b></i>
                            <span class="score-num score"></span>
                        </li>
                        <li id="service_score">
                            <span>商家服务 : </span>
                            <i><b class="scoreImg"></b></i>
                            <span class="score-num score"></span>
                        </li>
                        <li id="logistics_score">
                            <span>物流服务 : </span>
                            <i><b class="scoreImg"></b></i>
                            <span class="score-num score"></span>
                        </li>
                    </ul>
                </div>
                <div class="company-intro last supplier_StoreDesc">
                </div>
            </div>
        </li>
        <li class="b-phone">
            <i></i>
            <span class="supplier_userTel"></span>
        </li>
    </ul>
    <div class="section-editor clearfix">
        <div class="editor-main">
            <p><img src="http://img.biyao.com/files/temp/f9/f91a43f5ea026261.jpg" alt=""/></p>
            <ul>
                <li bigImg="http://img.biyao.com/files/temp/f9/f91a43f5ea026261.jpg" class="click"><img src="http://img.biyao.com/files/temp/f9/f91a43f5ea026261.jpg" alt="" width="100"/><span></span></li>
                <li bigImg="http://img.biyao.com/files/temp/96/960ba7d0ca35c582.jpg" ><img src="http://img.biyao.com/files/temp/96/960ba7d0ca35c582.jpg" alt="" width="100"/><span></span></li>
                <li bigImg="http://img.biyao.com/files/temp/31/3186a35bbe2c7733.jpg" ><img src="http://img.biyao.com/files/temp/31/3186a35bbe2c7733.jpg" alt="" width="100"/><span></span></li>
                <li bigImg="http://img.biyao.com/files/temp/11/1125bf3b2c225d07.jpg" ><img src="http://img.biyao.com/files/temp/11/1125bf3b2c225d07.jpg" alt="" width="100"/><span></span></li>
            </ul>
        </div>
        <div class="editor-panel">
            <div class="panel-top">
                <h1>经典北欧系列奥氏体真空保温壶</h1>

                <p>长效保温，欧式设计，奥氏体304不锈钢</p>
            </div>
            <ul class="panel-main">
                <li class="panel-press">
                    <span>售价</span>
                    <div><span class="panel-maney">￥<i class="totalPrice">119</i></span><span class="panel-duration">生产周期：<span class="totalDuration">10</span>天</span></div>
                </li>
                <li class="panel-specs">
                    <span>颜色</span>

                    <div>
                        <ul>
                            <li class="panel-size" id="2587">波尔多红<em></em></li>
                            <li class="panel-size" id="2588">亮银色<em></em></li>
                        </ul>
                    </div>
                </li>
                <li class="panel-specs">
                    <span>尺寸</span>

                    <div>
                        <ul>
                            <li class="panel-size" id="2589">2升<em></em></li>
                        </ul>
                    </div>
                </li>
                <li class="mg_t5 mg_b20 cursor" id="SizeDetailDialog"><div>查看尺码对照表</div></li>
                <li class="panel-count">
                    <span>数量</span>

                    <div>
                        <p class="panel-num">
                            <span class="panel-minus">-</span>
                            <span class="panel-number">1</span>
                            <span class="panel-add">+</span>
                        </p>

                    </div>
                </li>
            </ul>
            <div class="panel-bottom">
                <p id="goBuyBtn"><i></i>加入购物车</p>
                <ul class="clearfix supplier_policy">

                </ul>
            </div>
        </div>
    </div>
    <div class="wrap mg_t30 ie78">
        <ul class="commodityList sizeZero" name="commodityList">
            <li class="inline productInfo product_Commodity checked "
                name="productInfo" data-a="0">商品信息<i class="inline"></i></li>
            <li class="inline productReview product_Commodity "
                name="productReview" data-a="130">评价详情 <i class="inline"></i></li>
            <li class="inline supplierInfo product_Commodity"
                name="supplierInfo" data-a="260">商家服务政策
            </li>
            <li class="checkedLine" style="left: 0"></li>
        </ul>
        <!-- 商品信息 -->
        <div class="cmImgShow t_c product_border productInfoView "
             name="productInfoView">
            <p><img src="http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053467923974311_0.jpg" style="" title="罗马壶详情图1200_01.jpg"/></p><p><img src="http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053469125395380_0.jpg" style="" title="罗马壶详情图1200_02.jpg"/></p><p><img src="http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468031302499_0.jpg" style="" title="罗马壶详情图1200_03.jpg"/></p><p><img src="http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053469230383564_0.jpg" style="" title="罗马壶详情图1200_04.jpg"/></p><p><img src="http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468161260728_0.jpg" style="" title="罗马壶详情图1200_05.jpg"/></p><p><img src="http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053469352999779_0.jpg" style="" title="罗马壶详情图1200_06.jpg"/></p><p><img src="http://img.biyao.com/files/data0/2016/07/29/08/productiondetail/data/192168100161_4280_636053776523155295_0.jpg" style="" title="lm-/static/Home/pc.jpg" alt="lm-/static/Home/pc.jpg"/></p><p><img src="http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053469465007976_0.jpg" style="" title="罗马壶详情图1200_08.jpg"/></p><p><img src="http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468404933156_0.jpg" style="" title="罗马壶详情图1200_09.jpg"/></p><p><img src="http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468462029256_0.jpg" style="" title="罗马壶详情图1200_10.jpg"/></p><p><img src="http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468551729414_0.jpg" style="" title="罗马壶详情图1200_11.jpg"/></p><p><img src="http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468601337501_0.jpg" style="" title="罗马壶详情图1200_12.jpg"/></p><p><img src="http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468676373633_0.jpg" style="" title="罗马壶详情图1200_13.jpg"/></p><p><img src="http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100162_8940_636053468756713774_0.jpg" style="" title="罗马壶详情图1200_14.jpg"/></p><p><img src="http://img.biyao.com/files/data0/2016/07/28/23/productiondetail/data/192168100161_9096_636053469960776847_0.jpg" style="" title="罗马壶详情图1200_15.jpg"/></p><p><br/></p></div>
        <!-- 评价详情 -->
        <div class="product_border productReviewView none"
             name="productReviewView">
            <div class=" pd_t20 pd_b20">
                <div class="">
                    <div class="satisfactionBox sizeZero" id="avgRating">
                        <span class="inline f16 mg_l15 col_666">商品满意度</span> <span
                            class="inline mg_l30"> <em
                            class="bigXjGray inline spIcon"><i
                            class="bigXjF60 inline spIcon" style="width: 0px"
                            id="avgRatingImg"></i></em>
                                    </span> <span class="inline mg_l20"><span
                            class="col_f60 f16 inline" id="avgRatingCount">0</span> <span
                            class="inline col_666 f16">分</span></span> <span
                            class="inline col_999 f12 mg_l40">已有 <span
                            id="ReviewAllCount">0</span> 次评价
                                    </span>
                    </div>
                    <div class="evaluateItem"></div>
                </div>
                <div id="pagerDiv" class="pagination mg_t20 pages "></div>
            </div>

        </div>
        <!-- 商家服务政策 -->
        <div class="cmImgShow product_border supplierInfoView none"
             name="supplierInfoView">
            <div class="pd_l20 pd_r20"></div>
        </div>
    </div>
</div>
<div data-selector="J_im" id="webIM_showDiv"></div>
@endsection
@section('title','商品详细')