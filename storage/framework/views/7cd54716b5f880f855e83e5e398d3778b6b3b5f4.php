    <?php $__env->startSection('content'); ?>


<!-- 首页内容区  s -->
<div class="index-area">

    <!--banner显示 s-->
    <div class="sel-op clearfix">
    <div class="sel-area fl">
        <div class="buy-tit">免费卖车<span><em class="orgtext">平均7天卖出</em>已有<em class="clue_num">11829488</em>人提交了申请</span></div>
        <div class="sell-car-box" data-value-domain="bj">

            <form action="" class="clearfix" data-role="sell_form" onsubmit="return doSubmit()"">
                <input type="text" class="sell-phone-input" name="phone" data-role="sellPhone" placeholder="请输入手机号码">
                <button class="sell-phone-submit" data-clue-entry="03" data-gzlog="tracking_type=click&eventid=0210050000000013" >我要卖车</button>
                <input type="hidden" name="source_type" value="">
            </form>
<script type="text/javascript">
function doSubmit(){
    var ii=$(".sell-phone-input").val();
    $(".sell-phone-submit").click(function(){
        if(ii!==null){
        $.ajax({
            url:'<?php echo e(url("home/sellers")); ?>',
           data:"phone="+ii,
           type:"get",
           success:function(msg){
            if(ii!==null){
                var test = window.location.href;
                //alert(test);
                test = test.substring(0,25);
                var aa = test+"home/seller";
                window.location.href=aa;
                $(".js-pop-sell-01").show();
            }
           }
        })
    }
    })
    return false;
}

</script>
            <p class="sell-phone-error"></p>
            <div class="submit-suc" style="display: none">
                <i></i>
                提交成功！
                <a href="javascript:void(0)" data-role="go_back">返回</a>
            </div>
        </div>
        <div class="buy-tit">我要买车<span>1年2万公里质保</span></div>
        <div class="sx">
        <br>
            <div class="sx-pinpai js_brands_index">
                <div class="dt">品牌</div>
                <div class="dd" id="baidu_alog">
                    
<a baidu_alog='gpc_index_fastPick_brand&click&pc_index_fastPick_brand_dazhong_c#pc_index_fastPick&click&pc_index_fastPick_brand_c'  data-gzlog='tracking_type=click&eventid=0050080000000024&brand=dazhong' href="<?php echo e(url('home/buyers')); ?>?title=%大众% " class="i-dazhong" title="大众二手车">大众</a>
                                                                                    
<a baidu_alog='pc_index_fastPick_brand&click&pc_index_fastPick_brand_toyota_c#pc_index_fastPick&click&pc_index_fastPick_brand_c'  data-gzlog='tracking_type=click&eventid=0050080000000024&brand=toyota' href="<?php echo e(url('home/buyers')); ?>?title=%丰田% " class="i-toyota" title="丰田二手车">丰田</a>
                                                                                    
<a baidu_alog='pc_index_fastPick_brand&click&pc_index_fastPick_brand_honda_c#pc_index_fastPick&click&pc_index_fastPick_brand_c'  data-gzlog='tracking_type=click&eventid=0050080000000024&brand=honda' href="<?php echo e(url('home/buyers')); ?>?title=%本田% " class="i-honda" title="本田二手车">本田</a>
                                                                                    
<a baidu_alog='pc_index_fastPick_brand&click&pc_index_fastPick_brand_benz_c#pc_index_fastPick&click&pc_index_fastPick_brand_c'  data-gzlog='tracking_type=click&eventid=0050080000000024&brand=benz' href="<?php echo e(url('home/buyers')); ?>?title=%奔驰% " class="i-benz" title="奔驰二手车">奔驰</a>
                                                                                    
<a baidu_alog='pc_index_fastPick_brand&click&pc_index_fastPick_brand_bmw_c#pc_index_fastPick&click&pc_index_fastPick_brand_c'  data-gzlog='tracking_type=click&eventid=0050080000000024&brand=bmw' href="<?php echo e(url('home/buyers')); ?>?title=%宝马% " class="i-bmw" title="宝马二手车">宝马</a>
                                                                                    
<a baidu_alog='pc_index_fastPick_brand&click&pc_index_fastPick_brand_audi_c#pc_index_fastPick&click&pc_index_fastPick_brand_c'  data-gzlog='tracking_type=click&eventid=0050080000000024&brand=audi' href="<?php echo e(url('home/buyers')); ?>?title=%奥迪% " class="i-audi" title="奥迪二手车">奥迪</a>
</div>
            </div>
            <br>
            <div class="sx-price">
                <div class="dt">价格</div>
                <div class="dd">
    <a baidu_alog='pc_index_fastPick_price&click&pc_index_fastPick_price_5_c#pc_index_fastPick&click&pc_index_fastPick_price_c'data-gzlog='tracking_type=click&eventid=0050100000000026&price_index=5' target="_blank" gjalog="100000000049000100000010" href="/bj/buy/p3/" title='5万以下二手车'>5万以下</a>
    <a baidu_alog='pc_index_fastPick_price&click&pc_index_fastPick_price_5_10_c#pc_index_fastPick&click&pc_index_fastPick_price_c'data-gzlog='tracking_type=click&eventid=0050100000000026&price_index=5_10' target="_blank" gjalog="100000000049000100000010" href="/bj/buy/p4/" title='10万以下二手车'>5-10万</a>
    <a baidu_alog='pc_index_fastPick_price&click&pc_index_fastPick_price_10_15_c#pc_index_fastPick&click&pc_index_fastPick_price_c'data-gzlog='tracking_type=click&eventid=0050100000000026&price_index=10_15' target="_blank" gjalog="100000000049000100000010" href="/bj/buy/p5/" title='15万以下二手车'>10-15万</a>
    <a baidu_alog='pc_index_fastPick_price&click&pc_index_fastPick_price_15_20_c#pc_index_fastPick&click&pc_index_fastPick_price_c'data-gzlog='tracking_type=click&eventid=0050100000000026&price_index=15_20' target="_blank" gjalog="100000000049000100000010" href="/bj/buy/p6/" title='20万以下二手车'>15-20万</a>
    <a baidu_alog='pc_index_fastPick_price&click&pc_index_fastPick_price_20_25_c#pc_index_fastPick&click&pc_index_fastPick_price_c'data-gzlog='tracking_type=click&eventid=0050100000000026&price_index=20_25' target="_blank" gjalog="100000000049000100000010" href="/bj/buy/p7/" title='25万以下二手车' 20-25万</a>
    <a baidu_alog='pc_index_fastPick_price&click&pc_index_fastPick_price_25_40_c#pc_index_fastPick&click&pc_index_fastPick_price_c'data-gzlog='tracking_type=click&eventid=0050100000000026&price_index=25_40' target="_blank" gjalog="100000000049000100000010" href="/bj/buy/p8/"title='40万以下二手车'>25-40万</a>
    <a baidu_alog='pc_index_fastPick_price&click&pc_index_fastPick_price_40_60_c#pc_index_fastPick&click&pc_index_fastPick_price_c'data-gzlog='tracking_type=click&eventid=0050100000000026&price_index=40_60'target="_blank" gjalog="100000000049000100000010" href="/bj/buy/p9/"title='60万以下二手车'>40-60万</a>
    <a baidu_alog='pc_index_fastPick_price&click&pc_index_fastPick_price_60_c#pc_index_fastPick&click&pc_index_fastPick_price_c'data-gzlog='tracking_type=click&eventid=0050100000000026&price_index=60' target="_blank" gjalog="100000000049000100000010" href="/bj/buy/p10/" title='60万以上二手车'>60万以上</a>
                </div>
            </div>

        </div>
    </div>
    <div class="op-area fr">
        <!--banner -->
        <div class="op-slide" data-widget="app/ms_v2/widget/slide.js" data-slide-fn="app/ms_v2/self_service/page/promotion_index.js#slideFn" data-interval="3000">


<div data-role="list" class="list_001">

    <div class="slide-li" data-role="item" style="background: url('https://image.guazistatic.com/gz01170227/16/17/567944d7284b4d9ace79cf78b71ed694.jpg@base@tag=imgScale&w=860&h=305&q=88') center center no-repeat;" baidu_alog='banner&&click&&index_top_banner_0'>
        <a rel="nofollow" baidu_alog='pc_index_topYunying&click&pc_index_topYunying_banner_0_c' data-gzlog="tracking_type=click&eventid=1010000000000001" target="_blank" href="http://jr.guazi.com/bj?jr_from=homebanner&platform=pc" class="ban_a"></a>
    </div>

    <div class="slide-li" data-role="item" style="background: url('https://image.guazistatic.com/gz01170420/12/29/6fccc8a245fcd1683875ac1a981dcb6c.png@base@tag=imgScale&w=860&h=305&q=88') center center no-repeat;" baidu_alog='banner&&click&&index_top_banner_1'>
        <a rel="nofollow" baidu_alog='pc_index_topYunying&click&pc_index_topYunying_banner_1_c' data-gzlog="tracking_type=click&eventid=1010000000000002" target="_blank" href="https://www.guazi.com/zq_article/4248/" class="ban_a"></a>
    </div>
    <div class="slide-li" data-role="item" style="background: url('https://image.guazistatic.com/gz01170420/12/27/650060129dd2e6819e1fe05638be0b55.jpg@base@tag=imgScale&w=860&h=305&q=88') center center no-repeat;" baidu_alog='banner&&click&&index_top_banner_2'>
        <a rel="nofollow" baidu_alog='pc_index_topYunying&click&pc_index_topYunying_banner_2_c' data-gzlog="tracking_type=click&eventid=1010000000000003" target="_blank" href="https://www.guazi.com/bj/buy/a3/" class="ban_a"></a>
    </div>
    <div class="slide-li" data-role="item" style="background: url('https://image.guazistatic.com/gz01170420/12/31/82af49aab96fdb5a3930e3ecb442b88e.jpg@base@tag=imgScale&w=860&h=305&q=88') center center no-repeat;" baidu_alog='banner&&click&&index_top_banner_3'>
        <a rel="nofollow" baidu_alog='pc_index_topYunying&click&pc_index_topYunying_banner_3_c' data-gzlog="tracking_type=click&eventid=1010000000000004" target="_blank" href="https://www.guazi.com/zq_app/" class="ban_a"></a>
    </div>
    <div class="slide-li" data-role="item" style="background: url('https://image.guazistatic.com/gz01170523/11/26/7b0d3fe4fdbca238b2b1a898e65e9130.png@base@tag=imgScale&w=860&h=305&q=88') center center no-repeat;" baidu_alog='banner&&click&&index_top_banner_4'>
        <a rel="nofollow" baidu_alog='pc_index_topYunying&click&pc_index_topYunying_banner_4_c' data-gzlog="tracking_type=click&eventid=1010000000000444" target="_blank" href="https://www.guazi.com/zq_article/4350/" class="ban_a"></a>
    </div>
</div>
<script type="text/javascript" src="<?php echo e(asset('js/jquery-1.8.3.min.js')); ?>"></script>
<script type="text/javascript">

    setInterval(function(){
        $(".list_001").children(":first").appendTo(".list_001");
    },3000)

    
</script>


                            <div class="slide-ctrl">
                                            <span class="on active" data-role="point" data-slide-to="0"></span>
                                            <span class="on " data-role="point" data-slide-to="1"></span>
                                            <span class="on " data-role="point" data-slide-to="2"></span>
                                            <span class="on " data-role="point" data-slide-to="3"></span>
                                            <span class="on " data-role="point" data-slide-to="4"></span>
                                    </div>
  <script type="text/javascript" src="<?php echo e(asset('js/jquery-1.8.3.min.js')); ?>"></script>                                  
<script type="text/javascript">

    setInterval(function(){
        $(".slide-ctrl").children(":first").appendTo(".slide-ctrl");
    },3000)

    
</script>
                    </div>

        <!--三个运营位 -->
        <div class="op-img">
            <ul class="clearfix">
                                    <li>
                                                    <a data-gzlog="tracking_type=click&eventid=0140130000000029&url=jr" class="" baidu_alog='pc_index_topYunying&click&pc_index_topYunying_banenr_sub1_fenqi_c' href="https://www.guazi.com/bj/buy/p3/?jr_from=homebanner_left&platform=pc">
                                <img src="https://image.guazistatic.com/gz01170420/11/05/816ca14645d0b6d46fc6c0751dd0712d.png@base@tag=imgScale&w=284&h=98&q=88" alt="瓜子分期">
                            </a>
                                            </li>
                                <li>
                                            <a baidu_alog='pc_index_topYunying&click&pc_index_topYunying_banenr_sub2_c' data-gzlog="tracking_type=click&eventid=0140130000000029&url=t3" href="https://www.guazi.com/bj/buy/p4/?jr_from=homebanner_mid&platform=pc">
                            <img src="https://image.guazistatic.com/gz01170420/11/07/ffc3f83779e4fc78bf8f255d228da3bc.png@base@tag=imgScale&w=284&h=98&q=88" alt="">
                        </a>
                                    </li>
                <li>
                                            <a baidu_alog='pc_index_topYunying&click&pc_index_topYunying_banenr_sub3_c' data-gzlog="tracking_type=click&eventid=0140130000000029&url=t1" href="https://www.guazi.com/bj/buy/b20e99i1/?jr_from=homebanner_right&platform=pc">
                            <img src="https://image.guazistatic.com/gz01170420/11/07/2a9a1b81e8aafbf50a95a1368490645b.png@base@tag=imgScale&w=284&h=98&q=88" alt="">
                        </a>
                                    </li>
            </ul>
        </div>
    </div>
</div>
    <!--banner显示 e -->

    <!--服务介绍 s-->
    <ul class="ser-gua clearfix">
    <li><i class="ser-1"></i>100%个人二手车</li>
    <li><i class="ser-2"></i>259项全面检测</li>
    <li><i class="ser-3"></i>14天可退</li>
    <li><i class="ser-4"></i>1年2万公里质保</li>
</ul>    <!--服务介绍 e -->

    <!--今日超值 s-->
        <!--今日超值 e -->

    <!--首页帖子列表 s-->
    <div class="w
     indexTab">
    <div class="title clearfix">
        <a rel="nofollow" baidu_alog="index_tabselect&click&pc_index_tabSelect_right_morecar_c" class="all-car" gjalog="100000000051000100000010">情怀碎一地的2500，中国越野界的鼻祖！</a>
        <span class="ti-left">
            <span>热门好车</span>
            
        </span>
    </div>

    <!--帖子列表 -->
    <div data-role="showList">
                    <div class="list" style="
    display:block;        ">
        <ul class="list-bigimg clearfix">

            <?php $__currentLoopData = $li; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$vo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li clue_id="14200919">
                <div class="list-infoBox">
                    <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=14200919@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title='<?php echo e($list[$k][$k]["title"]); ?>' target="_blank" class="imgtype" href="<?php echo e(url('/home/details')); ?>/<?php echo e($vo->id); ?>" >
                        <img width="290" height="194" src='http://oslhf8hmf.bkt.clouddn.com/<?php echo e($vo->picture); ?>' class="tpl-table-line-img" alt="<?php echo e($vo->id); ?>">
                    </a>
                    <p class="infoBox">
                        <a data-gzlog="tracking_type=click&eventid=0080140000000032&carid=14200919@0" data-gzlog="tracking_type=click&eventid=0080140000000032&carid=14200919@0" baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_new_sale_post_c' title='<?php echo e($list[$k][$k]["title"]); ?>' href="<?php echo e(url('/home/details')); ?>/<?php echo e($vo->id); ?>" target="_blank" class="info-title" ><?php echo e($list[$k][$k]["title"]); ?></a>
                    </p>
                    <p class="fc-gray">
                        <span class=""><?php echo e($lists[$k][$k]["licensing"]); ?></span><em class="shuxian">|</em><?php echo e($lists[$k][$k]["mileage"]); ?>                            
                    </p>
                    <p class="priType-s">
                        <em class="tag-yellow">超值</em>
                        <span>
                            <i class="fc-org priType"><?php echo e($lists[$k][$k]["price"]); ?></i>
                        </span>
                        <s><?php echo e($vo->price); ?></s>
                    </p>
                </div>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>

    </div>

            <div class="list" style="display:none;        ">

        <div class="all-car-link">
            <a data-gzlog='tracking_type=click&eventid=0080320000000037'  baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_zhunxin_more_c' href="/bj/buy/c4/">更多准新车</a>
        </div>
    </div>
            <div class="list" style="
    display:none;        ">

        <div class="all-car-link">
            <a data-gzlog='tracking_type=click&eventid=0080330000000039'  baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_lianshou_more_c' href="/bj/buy/r8/">更多练手车</a>
        </div>
    </div>
            <div class="list" style="
    display:none;        ">
 
        <div class="all-car-link">
            <a data-gzlog='tracking_type=click&eventid=0080340000000041'  baidu_alog='pc_index_tabSelect_detailCar&click&pc_index_tabSelect_suv_more_c' href="/bj/buy/h2/">更多SUV</a>
        </div>
    </div>
    </div>
</div>    <!--首页帖子列表 e -->

    <!--底部推广 s-->
    <div class="w gz-zq">
    <div class="value-tit clearfix">
        <p class="v-tit fl">瓜子精选<span>精选好车好文，给找车添点乐趣</span></p>
    </div>
    <div class="zq-crm clearfix">
        <div class="zq-area fl" >
            <ul class="zhuantui-ul" data-role="slide_container" style="margin-left:0px;">
                        <li baidu_alog='banner&&click&&index_yunying_bottom_banner_1'>
                            <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Hyundai" target="_blank">
                                <img src="https://image.guazistatic.com/gz01161212/11/31/d1334bdf40068cfcbb8f123f6c73ba00.png@base@tag=imgScale&w=436&h=202&q=88" alt="Hyundai">
                            </a>
                        </li>
                        <li baidu_alog='banner&&click&&index_yunying_bottom_banner_2'>
                            <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Hyundai">
                                <img src="https://image.guazistatic.com/gz01161205/15/21/be3e71408f9598294c61317cf4397f8e.png@base@tag=imgScale&w=436&h=202&q=88" alt="Hyundai">
                            </a>
                        </li>
                        <li baidu_alog='banner&&click&&index_yunying_bottom_banner_3'>
                            <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Hyundai">
                                <img src="https://image.guazistatic.com/gz01161128/11/47/914606094beee5dcd18bd3dcfd975f74.png@base@tag=imgScale&w=436&h=202&q=88" alt="Hyundai">
                            </a>
                        </li>
                        <li baidu_alog='banner&&click&&index_yunying_bottom_banner_4'>
                            <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Hyundai">
                                <img src="https://image.guazistatic.com/gz01161130/17/08/8a71adad2c381ea96e8565f3cce262e3.png@base@tag=imgScale&w=436&h=202&q=88" alt="Hyundai">
                            </a>
                        </li>
                        <li baidu_alog='banner&&click&&index_yunying_bottom_banner_5'>
                            <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Hyundai">
                                <img src="https://image.guazistatic.com/gz01161018/14/48/00821e9c710a8a333918c71209f40cee.png@base@tag=imgScale&w=436&h=202&q=88" alt="Hyundai">
                            </a>
                        </li>
                        <li baidu_alog='banner&&click&&index_yunying_bottom_banner_6'>
                            <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0150160000000042&url=Hyundai">
                                <img src="https://image.guazistatic.com/gz01161018/14/48/5d0b3429eeb3eabe57a6c76771258072.png@base@tag=imgScale&w=436&h=202&q=88" alt="Hyundai">
                            </a>
                        </li>
                                    

        </ul>

        </div>
        <ul class="crm-area fr">
                            <li>
                    <a data-gzlog="tracking_type=click&eventid=0150170000000043&article_id=4321" target="_blank" baidu_alog='pc_index_topYunying&click&pc_index_bottomYunying_wenzhang_c'>丰田RAV4，悬挂真的是硬伤！</a>
                </li>
                            <li>
                    <a data-gzlog="tracking_type=click&eventid=0150170000000043&article_id=4316" target="_blank" baidu_alog='pc_index_topYunying&click&pc_index_bottomYunying_wenzhang_c'>三菱越野最后篇章，真正的山猫来了</a>
                </li>
                            <li>
                    <a data-gzlog="tracking_type=click&eventid=0150170000000043&article_id=4311" target="_blank" baidu_alog='pc_index_topYunying&click&pc_index_bottomYunying_wenzhang_c'>穿越性价比？谁也赢不过的车</a>
                </li>
                            <li>
                    <a data-gzlog="tracking_type=click&eventid=0150170000000043&article_id=4309" target="_blank" baidu_alog='pc_index_topYunying&click&pc_index_bottomYunying_wenzhang_c'>越野界的蓝领，两三万就能穿越无人区</a>
                </li>
                            <li>
                    <a data-gzlog="tracking_type=click&eventid=0150170000000043&article_id=4306" target="_blank" baidu_alog='pc_index_topYunying&click&pc_index_bottomYunying_wenzhang_c'>情怀碎一地的2500，中国越野界的鼻祖！</a>
                </li>
        </ul>
    </div>
</div>    <!--底部推广 e -->

</div>
<!-- 首页内容区  e -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>