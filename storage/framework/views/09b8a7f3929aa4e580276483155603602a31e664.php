    <?php $__env->startSection('content'); ?>

            <div class="crumbs">
                    <a href="//www.guazi.com/bj/" rel="nofollow">首页</a>
                        <em>></em>
                            <a href="//www.guazi.com/bj/buy/" >北京二手车</a>
                        <em>></em>
                            <a href="//www.guazi.com/bj/biaozhi/" >北京标致二手车</a>
                        <em>></em>
                            <span><?php echo e($lists->title); ?></span>
                        </div>    

    <script>
        //公用头部登陆后跳转至个人中心时url中需要用到
        var domain = "bj";
    </script>


<div class="w">
    <div class="detailbox">

        <!-- 帖子基本信息 -->
        <div class="laybox clearfix">
        <style type="text/css">
        .tm-arrow-next, .tm-arrow-prew, .dt-thumb {
                height: 61px;
                background-position: -36px -22px;
        }
        </style>
    <!-- 图片展示组件 -->
    <div class="det-sumleft slideshow">

    <div class="dt-sumpic" data-role="imgContainer">
        <p class="amount">
            <i class="fc-org" data-role="currentNumber">1</i>/3        
        </p>
<?php if(session("phone")): ?>
        <a href="javascript:di(<?php echo e($lists->id); ?>);"
           data-puid="3001846935"
           class="dt-icon-1 "><i id="xx"></i><p id="zh">收藏</p>
        </a>
<?php else: ?>
        <a href="javascript:di(<?php echo e($lists->id); ?>);"
           data-puid="3001846935"
           class="dt-icon-1 "><i id="xx"></i><p id="zh">收藏</p>
        </a>
<?php endif; ?>
        <div id="mov">
            <img src='http://oslhf8hmf.bkt.clouddn.com/8728/SteZ9ThNXIJtlY5ytSheiufGRLR5hXdJBwCP30DU.jpeg'>
        </div>


        <div class="det-picside" id="did">
            <img src='http://oslhf8hmf.bkt.clouddn.com/<?php echo e($lists->picname); ?>' alt="<?php echo e($lists->title); ?>">
        </div>

    </div>



    <div class="dt-transcont clearfix">
        <div class="dt-thumb">
            <div class="dt-thumb-in" style="width:4000px;" data-role="thumbContainer">
                <ul class="dt-thumb-img">                
                    <?php $__currentLoopData = $car; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                    
                    <li id="aq" data-role="thumb" data-index="7"><a href="#">
                        <span></span>
                            <img class="<?php echo e($v); ?>" style="height:61px" src='http://oslhf8hmf.bkt.clouddn.com/<?php echo e($v); ?>'>
                        </a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                 </ul>        
            </div>
        </div>
       
    </div>

</div>
<style type="text/css">
    #mov{
    width: 300px;
    height: 300px;
    border: 5px solid red;
    position: absolute;
    left: 600px;
    top: 90px;
    overflow:hidden;
    z-index: 99999;
    }
</style>
<script type="text/javascript" src="<?php echo e(asset('js/jquery-1.8.3.min.js')); ?>"></script>
<script type="text/javascript">         

$(".dt-thumb-img li img").mouseover(function(){
    // 大图图片
    var bigUrl =  $('.det-picside img')

    var Url = this.src;

    // 将图片路径赋值给大图
    bigUrl["0"].src = Url;
})
</script>

    <div class="det-sumright appoint">
        <div class="dt-titbox">
            <h1 class="dt-titletype" title="<?php echo e($lists->title); ?>"><?php echo e($lists->title); ?></h1>
            <div class="dt-titleinfo clearfix">

                <p style="display: none" class="feed_back_source_url" data-role="feed_back_source_url">https://www.guazi.com:443/bj/85953fc632d200d5x.htm</p>
                <p style="display: none" class="feed_back_source_cityid" data-role="feed_back_source_cityid">12</p>
                <ul class="title-info-r">

                    <!-- <li><span class="bg-span" data-widget="app/ms_v2/common/detail_page.js#storeFavorite" data-premier="" data-ref='{"puid":"2142355487","title":"\u4e30\u7530\u51ef\u7f8e\u745e 2012\u6b3e \u51ef\u7f8e\u745e 2.0 \u81ea\u52a8 G Navi \u8c6a\u534e\u5bfc\u822a\u7248","url":"http:\/\/www.ganji.com\/gz\/2142355487x.htm"}'><a href="#" title=""><i class="ico-collect"></i>收藏</a></span></li>-->
                </ul>
                <span style="color:#999">车源号：</span><span style="color:#000"><?php echo e($lists->car_id); ?></span>
            </div>

        </div>
        <div class="basic-box">
            <div class="pricebox">
                <i class="ico-txt ico-mt">车主报价：</i>
                <span class="fc-org pricestype"><b class="f30 numtype"><?php echo mb_substr("$list->price",0,-1); ?></b>万</span>
                      <span class="newcarprice">
                            新车指导价<?php echo e($lis->price); ?>(含税)
                    </span>
                  <script type="text/javascript">
                        $(".js-tip-icon").mouseover(function(){
                            $(".js-layer-tip").show()
                        }).mouseout(function(){
                            $(".js-layer-tip").hide()
                        })
                  </script>

                        <span class="icon-tip-gray js-tip-icon">
                            <span class="layer-tip bottom-layer js-layer-tip">
                                <i class="icon-small-sanjiao"></i>新车指导价(含税) = 厂商公布的指导价  + 购置税费，该价格仅供参考。
                            </span>
                        </span>

                                    
            </div>

                <a href="javascript:;" data-gzlog="tracking_type=click&eventid=0460310000000073" class="loanbox"  data-role="viewjr" source-id="2138512" city-domain="bj">
                    <span class="icon-man"></span>
                    首付 <span class="f22">1.61</span>万
                    <span class="monthpad">月供1419元</span>
                    
                </a>
            
            <!--服务费-->
<!--            <div class="car-fuwu">-->
<!--                <i class="ico-txt">服&nbsp;务&nbsp;费：</i>-->
<!--                --><!--                <span>--><!--                    --><!--                </span>-->
<!--            </div>-->
        </div>


                    <div class="add-service">
                <div class="ser-tit">

                    服务介绍<span>（服务费包含以下内容）</span>
                </div>
                <ul class="ser-list clearfix">
                                        <li class="li-left">
                        <em>保12大系统</em>
                        <em>最高赔3.71万</em>
                        <i></i>1年2万公里售后保障
                    </li>
                                        <li>
                        <i></i>14天可退
                    </li>
                    <li class="li-left">
                        <i></i>259项全面车况检测
                    </li>
                    <li>
                        <i></i>100%个人二手车
                    </li>
                                    </ul>
            </div>

            <!--服务费-->
            <div class="car-fuwu">
                <i class="ico-txt">服&nbsp;务&nbsp;费：</i>
                                <span><?php echo e($lists->save_price); ?>（车价x4%，最低3500元）</span>
            </div>

            <ul class="assort clearfix">
                <li class="one"><b><?php echo e($list->licensing); ?></b>上牌时间</li>
                <li><b><?php echo e($list->mileage); ?></b>里程</li>
                <li><b><?php echo e($list->transmission); ?></b>变速箱</li>
                <li class="em-sta detailHoverTips">
                    <em class="tip-icon"></em>
                    <p class="sta-tip-txt"><i></i>各地车管所对排放标准认定有差异，结果仅供参考，外迁请详细咨询迁入地车管所。</p>
                    <b><?php echo e($list->emission); ?></b>排放标准</li>
                <li>
                    <b><?php echo e($list->address); ?></b>上牌地
                </li>
            </ul>
                <p class="stipul-p">

                <!-- 车源售卖状态显示 -->
<?php if(session("phone")): ?>
<a rel="nofollow" data-gzlog="tracking_type=click&eventid=0040180000000074&carid=13757257" href="javascript:center()" data-role="appoint" data-clue-id="13757257" data-city-id="12" class="stipul-btn apt-btn-up" data-puid="3001846935"
                    >预约看车</a>
<?php else: ?>
<a rel="nofollow" data-gzlog="tracking_type=click&eventid=0040180000000074&carid=13757257" href="javascript:di()" data-role="appoint" data-clue-id="13757257" data-city-id="12" class="stipul-btn apt-btn-up" data-puid="3001846935"
                    >预约看车</a>
<?php endif; ?>
                <a rel="nofollow" data-gzlog="tracking_type=click&eventid=0040180000000075&carid=13757257" href="javascript:void(0);" data-role="navbtn" data-maskname="mask4" data-clue-id="13757257" data-city-id="12" class="bargain-btn" data-puid="3001846935"
                       data-price-display="5.35">砍价</a>
                
                                    <span class="f18">
                        <i class="fc-org yahei">看车电话：</i>
                        <b class="teltype">400-630-3279</b>
                    </span>
                
            </p>
            </div>
</div>

        <div class="pop-box yy-do" id="login">
            <div class="pop-close" id="closeLogin1" style="display: block;"></div>
            <p class="pop-tit js-logintitle">瓜子二手车直卖网</p>
            <p class="guide-suc-txt">瓜子客服将跟您联系看车，请留意接听哦~<br>快去下载app，查看预约结果吧~</p>
            <p class="free-phone">免费咨询400-630-3279</p>
        </div>


<script type="text/javascript">
function center(){
    $(".yy-do").show();
    $(".pop-close").show();
    $(".pop-close").click(function(){
        $(".yy-do").hide();
    });

    $.ajax({
        url:'<?php echo e(url("/home/center")); ?>',
        data:"uid="+"<?php echo e($lis->id); ?>",
        type:'get',
        dataType:"json",
        success:function(msg){
            if(msg==1){
                $(".yy-do").show();
                $(".pop-close").show(); 
            }
        }
    })
}
</script>
<!-- 弹窗 s-->
<div class="mask-all" id="mask">
    <div class="gz-mask"></div>





    <!-- 预约看车，收藏，降价提醒成功弹窗内容 s-->
    <div class="gz-mask-box maskbox3" style="display:none" data-role="mask" data-name="mask3" data-width="590" data-height="592">

        <div class="mask-con">
            <div class="mask-hd" data-role="title"></div>
            <div class="mask-close" data-role="maskClose"></div>
            <div class="mask-main" >
                <div class="pop-guide" style="border:1px solid white">
                    <div class="guide-suc">
                        <div class="guide-suc-icon">提交成功！</div>
                        <p class="guide-suc-txt">瓜子客服将跟您联系看车，请留意接听哦~<br>快去下载app，查看预约结果吧~</p>
                    </div>
                    <div class="guide-con">
                        <div class="guide-img guide-img-1"></div>
                        <div class="guide-explain">
                            <p class="guide-explain-tit">APP四大法宝</p>
                            <ul>
                                <li class="js-item-0">收藏查看-更方便</li>
                                <li class="js-item-1">账户管理-更智能</li>
                                <li class="js-item-2">降价提醒-更及时</li>
                                <li class="js-item-3">新车上架-更实时</li>
                            </ul>
                            <div class="pop-ewm-box">
                                <img src="<?php echo e(asset('style/img/ewm-app-3.png')); ?>" alt="瓜子二手车app下载">
                            </div>
                            <p class="scan-tips">扫码下载APP，实惠早知道</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <button data-target="mask4" data-height="500" data-width="700" data-role="changeTo" style="display: none;">changeTo2</button>
        </div>
    </div>
    <!-- 预约看车，收藏，降价提醒成功弹窗内容 e-->






</div>
<!-- 弹窗 e-->



        <!-- 检测结果 -->
        <div class="laybox combox">
    <div class="detect-bd clearfix">


            <div class="detect-c scrollTo">
                <div class="detect-tt">
                    <a rel="nofollow" href="#report" class="fr det-go">查看完整检测报告&gt;&gt;</a>
                    <p class="f16 yahei">检测结果</p>
                </div>
                <div class="detect-info">
                    <div class="detect-txt"><?php echo e($lists->introduce); ?></div>
                    <div class="detect-xm clearfix">
                        <div class="detect-xm-c showItem">
                                                                                            <dl>
                                    <dt>事故排查</dt>
                                                                        <dd>
                                        <span class="d-w1">排除重大碰撞（共18项）</span>
                                        <span class="d-w2">
                                                                                            <em class="fc-org">
                                                    1项
                                                </em>
                                                <i class="via-icon04" data-role="show" baidu_alog="pc_detail_checkXiaci&click&pc_detail_checkXiaci_c"></i>
                                                                                                    <div class="d-pop" style="display: none" data-role="itemShow">
                                                        <em class="arrow"></em>
                                                        <p class="tit">排除重大碰撞：</p>
                                                        <ul class="fc-9">
                                                                                                                        <li>有1处轻微钣金（50cm2以内）</li>
                                                                                                                                                                                                                                    </ul>
                                                        <p><a rel="nofollow" data-gzlog="tracking_type=click&eventid=0110000000000083&carid=13757257" href="#accident">查看详情>></a></p>
                                                    </div>
                                                                                                                                     </span>
                                    </dd>
                                                                        <dd>
                                        <span class="d-w1">排除泡水（共8项）</span>
                                        <span class="d-w2">
                                                                                            <i class="via-icon03"></i>
                                                                                     </span>
                                    </dd>
                                                                        <dd>
                                        <span class="d-w1">排除火烧（共2项）</span>
                                        <span class="d-w2">
                                                                                            <i class="via-icon03"></i>
                                                                                     </span>
                                    </dd>
                                                                    </dl>
                                                                <dl>
                                    <dt>外观内饰检测</dt>
                                                                        <dd>
                                        <span class="d-w1">外观修复检查（共51项）</span>
                                        <span class="d-w2">
                                            <em class="fc-org">9项</em>
                                        <i class="via-icon04" data-role="show" baidu_alog="pc_detail_checkXiaci&click&pc_detail_checkXiaci_c"></i>
                                                    <div class="d-pop" style="display: none" data-role="itemShow">
                                                        <em class="arrow"></em>
                                                        <p class="tit">外观修复检查：</p>
                                                        <ul class="fc-9">
                                                            <li>有4处钣金</li>
                <p><a rel="nofollow" data-gzlog="tracking_type=click&eventid=0110000000000083&carid=13757257" href="#surface">查看详情>></a></p>
                </div>
                    </span>
                        </dd>
                            <dd>
                                <span class="d-w1">外观缺陷检查（共34项）</span>
                                    <span class="d-w2"><em class="fc-org">2项</em>
                                        <i class="via-icon04" data-role="show" baidu_alog="pc_detail_checkXiaci&click&pc_detail_checkXiaci_c"></i>
                <div class="d-pop" style="display: none" data-role="itemShow">
                <em class="arrow"></em>
                <p class="tit">外观缺陷检查：</p>
                <ul class="fc-9">
                    <li>有1处划痕</li>
                    <p><a rel="nofollow" data-gzlog="tracking_type=click&eventid=0110000000000083&carid=13757257" href="#surface">查看详情>></a>
                    </p>
                    </div>
                        </span>
                            </dd>
                                <dd>
                                    <span class="d-w1">内饰缺陷检查（共29项）</span>
                                    <span class="d-w2">
                                        <i class="via-icon03"></i>
                                                                                     </span>
                                    </dd>
                                                                    </dl>
                                                                <dl>
                                    <dt>系统设备检测</dt>
                                                                        <dd>
                                        <span class="d-w1">安全及指示灯检测（共11项）</span>
                                        <span class="d-w2">
                                                                                            <i class="via-icon03"></i>
                                                                                     </span>
                                    </dd>
                                                                        <dd>
                                        <span class="d-w1">刹车及发动机舱检测（共12项）</span>
                                        <span class="d-w2">
                                                                                            <i class="via-icon03"></i>
                                                                                     </span>
                                    </dd>
                                                                        <dd>
                                        <span class="d-w1">随车工具检测（共14项）</span>
                                        <span class="d-w2">
                                                                                            <i class="via-icon03"></i>
                                                                                     </span>
                                    </dd>
                                                                    </dl>
                                                                <dl>
                                    <dt>驾驶检测</dt>
                                                                        <dd>
                                        <span class="d-w1">启动与起步（共5项）</span>
                                        <span class="d-w2">
                                                                                            <i class="via-icon03"></i>
                                                                                     </span>
                                    </dd>
                                                                        <dd>
                                        <span class="d-w1">加速与行驶（共8项）</span>
                                        <span class="d-w2">
                                                                                            <i class="via-icon03"></i>
                                                                                     </span>
                                    </dd>
                                                                        <dd>
                                        <span class="d-w1">减速与制动（共4项）</span>
                                        <span class="d-w2">
                                                                                            <i class="via-icon03"></i>
                                                                                     </span>
                                    </dd>
                                                                    </dl>
                                                                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- 帖子详细信息 -->
            <div class="laybox">
        <div class="descrip-box">
            <!--top 菜单-->
            <div class="cont-tips-outer">
    <div class="cont-tips fixNavbar">

                    <p class="fr check-tel">
                <span class="f18">
                    <i class="fc-org yahei">看车电话：</i>
                    <b class="teltype">400-630-3279</b>
                </span>
            </p>
        

                <ul class="cont-tips-qh clearfix">
            <li><a rel="nofollow" data-gzlog="tracking_type=click&eventid=0090000000000077&carid=13757257" href="#base"  data-role="item" data-id="#base" class="active"   baidu_alog="pc_detail_tab&click&pc_detail_tab_jibenxinxi_c">基本信息</a></li>
            <li><a rel="nofollow" data-gzlog="tracking_type=click&eventid=0090000000000078&carid=13757257" href="#picture" data-role="item" data-id="#picture" baidu_alog="pc_detail_tab&click&pc_detail_tab_cheliangtupian_c">车辆图片</a></li>
            <li><a rel="nofollow" data-gzlog="tracking_type=click&eventid=0090000000000079&carid=13757257" href="#report" data-role="item" data-id="#report" baidu_alog="pc_detail_tab&click&pc_detail_tab_jiancebaogao_c">检测报告</a></li>
                            <li><a rel="nofollow" data-gzlog="tracking_type=click&eventid=0090000000000080&carid=13757257" href="#config" data-role="item" data-id="#config" baidu_alog="pc_detail_tab&click&pc_detail_tab_peizhicanshu_c">配置参数</a></li>
                    </ul>
    </div>
</div>
<div class="descrip">
                <!--车源基本信息-->
<style type="text/css">
    .publicTit {
        font-size: 16px;
        line-height: 28px;
        margin: 0 0 10px;
        height: 25px;
        display: inline-block;
    }
</style>
<div class="modbox" id="base">
        <h3 class="yahei publicTit" baidu_alog="pc_detail_tab&click&pc_detail_tab_jibenxinxi_c"><i class="deck"></i>基本信息</h3>
        <ul class="owner-infor clearfix">
            <li class="owner">
                <label>车主：</label>
                <?php if( $lists->source == 0): ?> 官方自营 <?php else: ?> 第三方 <?php endif; ?>
                <i class="jg-line">|</i>
                个体<i class="jg-line">|</i>
                <?php echo e($list->address); ?></li>
            <li class="nianjian"><label>年检到期：</label>2018-5</li>
            <li class="baoxian"><label>交强险到期：</label>2018-5</li>
            <li class="baoxian"><label>商业险到期：</label>2018-5                <span class="icon-tip-gray js-tip-icon">
                    <span class="layer-tip bottom-layer js-layer-tip">
                    <i class="icon-small-sanjiao"></i>保险是否随车赠送，需在交易过程中与车主确认。</span>
                </span>
            </li>
            <li class="guohu"><label>过户次数：</label>0</li>
        </ul>
        <p class="f-type03"><em></em><?php echo e($lists->infomation); ?></p>
    </div>

                <!--车辆图片-->
                    <div class="modbox" id="picture">
        <h3 class="yahei publicTit"><i class="deck"></i>车辆图片</h3>
        <div class="dt-pictype lazyLoadV2">



<?php $__currentLoopData = $car; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <img width="580" height="400" class="js-lazy-load" src='http://oslhf8hmf.bkt.clouddn.com/<?php echo e($v); ?>'
                     data-original="<?php echo e(asset('style/img/qn170623180745af4c8f90b3f1b35cde637dcb35565101.jpg?imageView2/1/w/620/h/430/q/88')); ?>" />

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                    </div>
    </div>





                <!--检测报告开始-->
                                                                                    <div class="modbox1 combox" id="report">
        <div class="detecttitle">
            <h3 class="yahei f30">瓜子二手车直卖网车辆检测报告</h3>
            <span>检测时间：<?php echo e($list->licensing); ?></span>
                                        <span>检测车型：<?php echo e($lists->title); ?></span>
        </div>
        <div class="linetype"></div>
        <div class="headline-bd" id="accident">
            <span class="headline yahei">事故排查</span>
            <span class="f14"><?php echo e($lists->introduce); ?></span>
        </div><br>
        <div class="detectBox clearfix">
            <div class="bitside fl">
<!--                <div class="bitpic"><img src="--><!--"></div>-->
                <div class="bitbox">
                
                    <table width="532" border="0" cellpadding="0" cellspacing="0" class="tableType">
                        <tr>
                            <th width="149">检查项</th>
                            <th width="117">结果</th>
                            <th width="149">检查项</th>
                            <th width="117">结果</th>
                        </tr>
                                                    <tr>                            <td>全车地胶地毯</td>
                            <td>
                                <i class="via-icon03"></i>
                            </td>
                                                                                                            <td>发动机主线束</td>
                            <td>
                                <i class="via-icon03"></i>
                            </td>
                            </tr>                                                    <tr>                            <td>防火墙隔音棉</td>
                            <td>
                                <i class="via-icon03"></i>
                            </td>
                                                                                                            <td>全车座椅坐垫</td>
                            <td>
                                <i class="via-icon03"></i>
                            </td>
                            </tr>                                                    <tr>                            <td>保险盒及ECU接口</td>
                            <td>
                                <i class="via-icon03"></i>
                            </td>
                                                                                                            <td>后备箱边角及备胎槽</td>
                            <td>
                                <i class="via-icon03"></i>
                            </td>
                            </tr>                                                    <tr>                            <td>安全带底部</td>
                            <td>
                                <i class="via-icon03"></i>
                            </td>
                                                                                                            <td>烟灰缸底座</td>
                            <td>
                                <i class="via-icon03"></i>
                            </td>
                            </tr>                                                    <tr>                            <td>车内线束</td>
                            <td>
                                <i class="via-icon03"></i>
                            </td>
                                                                                                            <td>座椅滑轨及安装螺丝</td>
                            <td>
                                <i class="via-icon03"></i>
                            </td>
                            </tr>                                            </table>
                </div>
                <div class="bitbox">
                    <p class="yahei f16 f-type04">排除火烧</p>
                    <table width="532" border="0" cellpadding="0" cellspacing="0" class="tableType">
                        <tr>
                            <th width="149">检查项</th>
                            <th width="117">结果</th>
                            <th width="149">检查项</th>
                            <th width="117">结果</th>
                        </tr>
                                                    <tr>                            <td>发动机线束及橡胶制品</td>
                            <td>
                                <i class="via-icon03"></i>
                            </td>
                                                                                                            <td>车辆覆盖件及驾驶舱</td>
                            <td>
                                <i class="via-icon03"></i>
                            </td>
                            </tr>                                            </table>
                </div>
            </div>
            <div class="bitside fr">
                <div class="bitbox">
                    <p class="yahei f16 f-type04">排除重大碰撞</p>
                    <table width="532" border="0" cellpadding="0" cellspacing="0" class="tableType">
                        <tr>
                            <th width="52">编号</th>
                            <th width="149">检查项</th>
                            <th width="65">结果</th>
                            <th width="52">编号</th>
                            <th width="149">检查项</th>
                            <th width="65">结果</th>
                        </tr>
                                                    <tr>                            <td><i>1</i></td>
                            <td>左C柱</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td><i>2</i></td>
                            <td>右A柱</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td><i>3</i></td>
                            <td>左前翼子板内衬</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td><i>4</i></td>
                            <td>右C柱</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td><i>5</i></td>
                            <td>后围板</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td><i>6</i></td>
                            <td>左前减震器座</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td><i>7</i></td>
                            <td>左B柱</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td><i>8</i></td>
                            <td>右前翼子板内衬</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td><i>9</i></td>
                            <td>右D柱</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td><i>10</i></td>
                            <td>右B柱</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td><i>11</i></td>
                            <td>右前减震器座</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td><i>12</i></td>
                            <td>右前纵梁</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td><i>13</i></td>
                            <td>后备箱底板</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td><i>14</i></td>
                            <td>右侧底边梁</td>
                            <td>
                                                                    <i class="via-icon04"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td><i>15</i></td>
                            <td>左车顶边梁</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td><i>16</i></td>
                            <td>左前纵梁</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td><i>17</i></td>
                            <td>左侧底边梁</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td><i>18</i></td>
                            <td>左A柱</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td><i>19</i></td>
                            <td>左后纵梁</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td><i>20</i></td>
                            <td>防火墙</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td><i>21</i></td>
                            <td>左后翼子板内衬</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td><i>22</i></td>
                            <td>左D柱</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td><i>23</i></td>
                            <td>右后翼子板内衬</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td><i>24</i></td>
                            <td>右后纵梁</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td><i>25</i></td>
                            <td>右车顶边梁</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                        </table>
                </div>
            </div>
        </div>
        <div class="headline-bd" id="surface">
            <span class="headline yahei">外观内饰检测</span>
            <span class="f14">该车有漆面修复痕迹，有钣金修复痕迹，覆盖件有更换，外观无缺陷。&nbsp灯光系统工作正常，电子设备无加装，无故障，气囊正常，内饰整洁干净。</span>
        </div>
        <div class="detectBox clearfix">
            <div class="outward fl">
                <div class="appearance-img">
                    <div class="caption-bd">
                        <span><i class="gray-rd"></i>原厂漆</span>
                        <span><i class="gray-rd2"></i>漆面修复</span>
                        <span><i class="blue-rd"></i>钣金修复</span>
                        <span><i class="red-rd"></i>外观件更换</span>
                                                    <span><i class="n-rd"></i>查看缺陷照片</span>
                                            </div>
                    <div class="appearance-con clueEvaluate">
                        <img src="<?php echo e(asset('style/img/car-appearance-2.png')); ?>">
                        <ul class="areabox"><li class="hood-0"></li><li class="fender_rl-2"></li><li class="door_fl-2"></li><li class="c_pillar_l2-0"></li><li class="trunk_lid-0"></li><li class="foot_save-1"></li><li class="fender_rr-2"></li><li class="fender_fl-3"></li><li class="d_pillar_r2-0"></li><li class="b_pillar_l2-0"></li><li class="door_rr-3"></li><li class="door_fr-0"></li><li class="d_pillar_l2-0"></li><li class="a_pillar_r2-0"></li><li class="a_pillar_l2-1"></li><li class="roof-0"></li><li class="door_rl-2"></li><li class="c_pillar_r2-0"></li><li class="head_save-1"></li><li class="b_pillar_r2-0"></li><li class="fender_fr-0"></li></ul>                                                        <div class="appearance-det">
                                    <i data-role="point" class="appear-point" style="top:126px;left:448px;">1</i>
                                    <div data-role="showImage" class="appear-mat" style="top:-37px;left:534px; display: none;">
                                        <span class="appear-dire"></span>
                                        <div class="appear-ct">
                                            <p><i class="appear-point">1</i>划痕</p>
                                            <div class="appear-pic"><img src="<?php echo e(asset('style/img/44e1924a1737408aca04a8035207b746.jpg')); ?>" width="360" height="240"></div>                                        </div>
                                    </div>
                                </div>
                                                            <div class="appearance-det">
                                    <i data-role="point" class="appear-point" style="top:207px;left:374px;">2</i>
                                    <div data-role="showImage" class="appear-mat" style="top:44px;left:460px; display: none;">
                                        <span class="appear-dire"></span>
                                        <div class="appear-ct">
                                            <p><i class="appear-point">2</i>变形</p>
                                            <div class="appear-pic"><img src="<?php echo e(asset('style/img/eab1e9440499a0ee9c4f4cc234a69b5d.jpg')); ?>" width="360" height="240"></div>                                        </div>
                                    </div>
                                </div>
                                                </div>
                </div>
            </div>
            <div class="outward fr">
                <div class="exterior-img exterior-img-2">
                    <img src="<?php echo e(asset('style/img/car-exterior-2.jpg')); ?>">
                    <div class="appearance-det clueEvaluate">
                                            </div>
                </div>
            </div>
        </div>
        <div class="headline-bd" id="system">
            <span class="headline yahei">系统设备检测</span>
            <span class="f14"><?php echo e($lists->introduce); ?></span>
        </div><br>
        <div class="detectBox clearfix">
            <div class="fl clearfix">
                <div class="bitbox" style="display:none;">
                    <p class="yahei f16 f-type04">安全系统检测</p>
                    <table width="532" border="0" cellpadding="0" cellspacing="0" class="tableType">
                        <tr>
                            <th width="149">检查项</th>
                            <th width="117">结果</th>
                            <th width="149">检查项</th>
                            <th width="117">结果</th>
                        </tr>
                                            </table>
                </div>
                <div class="bitbox">
                    <p class="yahei f16 f-type04">指示灯系统检测</p>
                    <table width="532" border="0" cellpadding="0" cellspacing="0" class="tableType">
                        <tr>
                            <th width="149">检查项</th>
                            <th width="117">结果</th>
                            <th width="149">检查项</th>
                            <th width="117">结果</th>
                        </tr>
                                                    <tr>                            <td>后雾灯</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td>近光灯</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td>刹车灯</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td>倒车灯</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td>后转向灯</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td>前雾灯</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td>室内顶灯</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td>前转向灯</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td>远光灯</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td>氙气大灯</td>
                            <td>
                                                                    无
                                                            </td>
                            </tr>                                                    <tr>                            <td>LED大灯</td>
                            <td>
                                                                    无
                                                            </td>
                                                                                                            <td>自动头灯</td>
                            <td>
                                                                    无
                                                            </td>
                            </tr>                                                    <tr>                            <td>大灯高度可调</td>
                            <td>
                                                                    无
                                                            </td>
                                                                                                            <td>大灯清洗</td>
                            <td>
                                                                    无
                                                            </td>
                            </tr>                                            </table>
                </div>
                <div class="bitbox" style="display:none;">
                    <p class="yahei f16 f-type04">电子设备检测</p>
                    <table width="532" border="0" cellpadding="0" cellspacing="0" class="tableType">
                        <tr>
                            <th width="149">检查项</th>
                            <th width="117">结果</th>
                            <th width="149">检查项</th>
                            <th width="117">结果</th>
                        </tr>
                                                <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>                    </table>
                </div>
                <div class="bitbox">
                    <p class="yahei f16 f-type04">随车工具检测
                        <span class="icon-tip-gray js-tip-icon">
                            <span class="layer-tip bottom-layer js-layer-tip">
                            <i class="icon-small-sanjiao"></i>随车工具是否随车赠送，需在交易过程中与车主确认。
                        </span>
                    </span>
                    </p>
                    <table width="532" border="0" cellpadding="0" cellspacing="0" class="tableType">
                        <tr>
                            <th width="149">检查项</th>
                            <th width="117">结果</th>
                            <th width="149">检查项</th>
                            <th width="117">结果</th>
                        </tr>
                                                    <tr>                                                        <td>备胎</td>
                            <td>
                                <i class="via-icon03"></i>
                            </td>
                                                                                                                                        <td>维修工具包</td>
                            <td>
                                <i class="via-icon03"></i>
                            </td>
                            </tr>                                                    <tr>                                                        <td>千斤顶</td>
                            <td>
                                <i class="via-icon03"></i>
                            </td>
                                                                                                                                        <td>三角警示标</td>
                            <td>
                                <i class="via-icon03"></i>
                            </td>
                            </tr>                                                    <tr>                                                        <td>灭火器</td>
                            <td>
                                <i class="via-icon03"></i>
                            </td>
                                                                        </table>
                </div>
            </div>
            <div class="fr clearfix">
                <div class="bitbox">
                    <p class="yahei f16 f-type04">刹车及发动机舱检测</p>
                    <table width="532" border="0" cellpadding="0" cellspacing="0" class="tableType">
                        <tr>
                            <th width="149">检查项</th>
                            <th width="117">结果</th>
                            <th width="149">检查项</th>
                            <th width="117">结果</th>
                        </tr>
                                                    <tr>                            <td>发动机缸垫</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td>制动油壶</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td>冷凝器</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td>发动机外围皮带</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td>水箱</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td>电瓶（极柱）</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td>机油液面</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td>变速箱总成</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td>发动机总成</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td>水箱水管</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td>防冻液液面</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td>助力油壶</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td>转向助力泵</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                        </table>
                </div>
                <div class="bitbox" style="display:none;">
                    <p class="yahei f16 f-type04">轮胎检测</p>
                    <table width="532" border="0" cellpadding="0" cellspacing="0" class="tableType">
                        <tr>
                            <th width="149">检查项</th>
                            <th width="117">结果</th>
                            <th width="149">检查项</th>
                            <th width="117">结果</th>
                        </tr>
                                            </table>
                </div>
                <div class="bitbox">
                    <p class="yahei f16 f-type04">底盘悬挂项检测</p>
                    <table width="532" border="0" cellpadding="0" cellspacing="0" class="tableType">
                        <tr>
                            <th width="149">检查项</th>
                            <th width="117">结果</th>
                            <th width="149">检查项</th>
                            <th width="117">结果</th>
                        </tr>
                                                    <tr>                            <td>消音器（尾段）</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td>右后减震器</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td>左前减震器</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                                                            <td>左后减震器</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                            </tr>                                                    <tr>                            <td>右前减震器</td>
                            <td>
                                                                    <i class="via-icon03"></i>
                                                            </td>
                                                                        </table>
                </div>
                <div class="bitbox" style="display:none;">
                    <p class="yahei f16 f-type04">玻璃项检测</p>
                    <table width="532" border="0" cellpadding="0" cellspacing="0" class="tableType">
                        <tr>
                            <th width="149">检查项</th>
                            <th width="117">结果</th>
                            <th width="149">检查项</th>
                            <th width="117">结果</th>
                        </tr>
                                            </table>
                </div>
            </div>
        </div>
        <div class="headline-bd" id="drive">
            <span class="headline yahei">驾驶检测</span>
            <span class="f14">该车发动机运转正常，无故障灯，变速箱挂档平顺，转向系统正常，空调工作正常。</span>
        </div>
        <div class="detectBox clearfix">
            <ul class="pilotstep">
            <style type="text/css">
                    h3 {
                            height: 30px;
                            line-height: 1px;
                            text-align: center;
                            font-size: 20px;
                            color: #2caa3f;
                        }
            </style>
                <li class="one">
                    <h3 class="yahei f16">启动</h3>
                    <div class="stepfont">
                                                    <p>
                                <span>发动机</span>
                                <i class="via-icon03"></i>
                            </p>
                                                    <p>
                                <span>制动系统</span>
                                <i class="via-icon03"></i>
                            </p>
                                            </div>
                </li>
                <li>
                    <h3 class="yahei f16">起步</h3>
                    <div class="stepfont">
                                                    <p>
                                <span>发动机</span>
                                <i class="via-icon03"></i>
                            </p>
                                                    <p>
                                <span>变速箱</span>
                                <i class="via-icon03"></i>
                            </p>
                                                    <p>
                                <span>悬挂系统</span>
                                <i class="via-icon03"></i>
                            </p>
                                            </div>
                </li>
                <li>
                    <h3 class="yahei f16">加速</h3>
                    <div class="stepfont">
                                                    <p>
                                <span>发动机</span>
                                <i class="via-icon03"></i>
                            </p>
                                                    <p>
                                <span>变速箱</span>
                                <i class="via-icon03"></i>
                            </p>
                                                    <p>
                                <span>传动系统</span>
                                <i class="via-icon03"></i>
                            </p>
                                            </div>
                </li>
                <li>
                    <h3 class="yahei f16">匀速行驶</h3>
                    <div class="stepfont">
                                                    <p>
                                <span>发动机</span> 
                                <i class="via-icon03"></i>
                            </p>
                                                    <p>
                                <span>变速箱</span> 
                                <i class="via-icon03"></i>
                            </p>
                                                    <p>
                                <span>悬挂系统</span> 
                                <i class="via-icon03"></i>
                            </p>
                                                    <p>
                                <span>转向系统</span> 
                                <i class="via-icon03"></i>
                            </p>
                                                    <p>
                                <span>制动系统</span> 
                                <i class="via-icon03"></i>
                            </p>
                                            </div>
                </li>
                <li>
                    <h3 class="yahei f16">减速与制动</h3>
                    <div class="stepfont">
                                                    <p>
                                <span>发动机</span>
                                <i class="via-icon03"></i>
                            </p>
                                                    <p>
                                <span>变速箱</span>
                                <i class="via-icon03"></i>
                            </p>
                                                    <p>
                                <span>传动系统</span>
                                <i class="via-icon03"></i>
                            </p>
                                                    <p>
                                <span>悬挂系统</span>
                                <i class="via-icon03"></i>
                            </p>
                                            </div>
                </li>
            </ul>
        </div>
    </div>
                <!--检测报告结束-->


                <!-- 帖子配置参数信息 -->
                    <div class="modbox" id="config">
        <h3 class="yahei publicTit"><p class="icon-i">基本信息为车辆初评时录入，实际情况以看车时为准</p><i class="deck"></i>配置参数</h3>
        <div class="con-param">
            <div class="con-param-s clearfix">
                                    <div class="c-param-in">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="param-table">
                            <tr>
                                <th colspan="2">基本参数</th>
                            </tr>
                            <tr><td width='50%' class='td1'>厂商</td><td width='50%' class='td2'><?php echo e($li->changshang); ?></td></tr><tr><td width='50%' class='td1'>级别</td><td width='50%' class='td2'><?php echo e($li->jibie); ?></td></tr><tr><td width='50%' class='td1'>发动机</td><td width='50%' class='td2'><?php echo e($li->fadongji); ?></td></tr><tr><td width='50%' class='td1'>变速箱</td><td width='50%' class='td2'><?php echo e($li->biansuxiang); ?></td></tr><tr><td width='50%' class='td1'>车身结构</td><td width='50%' class='td2'><?php echo e($li->cheshenjiegou); ?></td></tr><tr><td width='50%' class='td1'>长*宽*高(mm)</td><td width='50%' class='td2'><?php echo e($li->c_k_g); ?></td></tr><tr><td width='50%' class='td1'>轴距(mm)</td><td width='50%' class='td2'><?php echo e($li->zhouju); ?></td></tr><tr><td width='50%' class='td1'>行李箱容积(L)</td><td width='50%' class='td2'><?php echo e($li->xl_rongji); ?></td></tr><tr><td width='50%' class='td1'>整备质量(kg)</td><td width='50%' class='td2'><?php echo e($li->zhengbeizl); ?></td></tr>                        </table>
                    </div>
                                    <div class="c-param-in">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="param-table">
                            <tr>
                                <th colspan="2">发动机参数</th>
                            </tr>
                            <tr><td width='50%' class='td1'>排量(L)</td><td width='50%' class='td2'><?php echo e($li->pailiang); ?></td></tr><tr><td width='50%' class='td1'>进气形式</td><td width='50%' class='td2'><?php echo e($li->jingqixingshi); ?></td></tr><tr><td width='50%' class='td1'>气缸</td><td width='50%' class='td2'><?php echo e($li->qigang); ?></td></tr><tr><td width='50%' class='td1'>最大马力(Ps)</td><td width='50%' class='td2'><?php echo e($li->zuidamali); ?></td></tr><tr><td width='50%' class='td1'>最大扭矩(N*m)</td><td width='50%' class='td2'><?php echo e($li->zuidazhouju); ?></td></tr><tr><td width='50%' class='td1'>燃料类型</td><td width='50%' class='td2'><?php echo e($li->ranglianleixing); ?></td></tr><tr><td width='50%' class='td1'>燃油标号</td><td width='50%' class='td2'><?php echo e($li->rangyoubiaohao); ?></td></tr><tr><td width='50%' class='td1'>供油方式</td><td width='50%' class='td2'><?php echo e($li->gongyoufangshi); ?></td></tr><tr title="各地车管所对排放标准认定有差异，结果仅供参考，外迁请详细咨询迁入地车管所。"><td width='50%' class='td1'>排放标准</td><td width='50%' class='td2'><?php echo e($li->paifangbiaozhun); ?></td></tr>                        </table>
                    </div>
                                    <div class="c-param-in">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" class="param-table">
                            <tr>
                                <th colspan="2">底盘及制动</th>
                            </tr>
                            <tr><td width='50%' class='td1'>驱动方式</td><td width='50%' class='td2'></td></tr><tr><td width='50%' class='td1'>助力类型</td><td width='50%' class='td2'>机械液压助力</td></tr><tr><td width='50%' class='td1'>前悬挂类型</td><td width='50%' class='td2'>麦弗逊式独立悬架</td></tr><tr><td width='50%' class='td1'>后悬挂类型</td><td width='50%' class='td2'>扭力梁式非独立悬架</td></tr><tr><td width='50%' class='td1'>前制动类型</td><td width='50%' class='td2'>通风盘式</td></tr><tr><td width='50%' class='td1'>后制动类型</td><td width='50%' class='td2'>盘式</td></tr><tr><td width='50%' class='td1'>驻车制动类型</td><td width='50%' class='td2'>-</td></tr><tr><td width='50%' class='td1'>前轮胎规格</td><td width='50%' class='td2'>215/50 R17</td></tr><tr><td width='50%' class='td1'>后轮胎规格</td><td width='50%' class='td2'>215/50 R17</td></tr>                        </table>
                    </div>
                                    

                            </div>
        </div>
    </div>

            </div>

        </div>
    </div>

        <!-- 猜你喜欢 -->
        <div class="guessbox j-recommend-show">
    <h3 class="yahei publicTit"><i class="deck"></i>这些车你也会感兴趣</h3>
    <div class="guesslike">
        <ul class="list-bigimg clearfix">


                <?php $__currentLoopData = $lists_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
            <div class="list-infoBox">
                <a data-gzlog="tracking_type=click&eventid=0190140000000081&carid=13221362@3" title="<?php echo e($v->title); ?>" gjalog="100000000082000100000010" target="_blank" class="imgtype"  href="<?php echo e(url('/home/details')); ?>/<?php echo e($v->id); ?>" baidu_alog="pc_detail_tuijian&click&pc_detail_tuijian_detailCar_c">
                    <span class="hover-bg"></span>
                        <img width="290" height="192" src='http://oslhf8hmf.bkt.clouddn.com/<?php echo e($v->picname); ?>'>
                            
                </a>
    <p class="infoBox">
        <a title="<?php echo e($v->title); ?>" gjalog="100000000082000100000010" href="<?php echo e(url('/home/details')); ?>/<?php echo e($v->id); ?>" target="_blank" class="info-title">
                                <?php echo e($v->title); ?>                            </a>
    </p>
    <p class="fc-gray"><span class=""><?php echo e($list_1[$k]->licensing); ?>上牌
    </span>
    <em class="shuxian">|</em>行驶<?php echo e($list_1[$k]->mileage); ?><em class="shuxian"></em><span class="tag-gray"><?php echo e($list_1[$k]->address); ?></span>                        
    </p>
    <p class="priType-s">
     <span><i class="fc-org priType"><?php echo e($list_1[$k]->price); ?></i>万</span>
        <s>16.26万</s>
    </p>
            </div>
        </li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                          <input type="hidden" class="car_ids" name="car_ids" value="13414827@0_13745374@1_14039075@2_13221362@3"
        </ul>
    </div>
</div>

        <!-- 如何交易介绍 -->
        <div class="how-deal">
    <p class="deal-tit">如何交易</p>
    <p class="deal-txt">简单4步，靠谱好车开回家</p>
    <div class="icon-deal"></div>
    <ul class="deal-detail">
        <li class="li-1">
            <div class="fl">1.</div>
            <p>拨打看车电话<span>400-630-3279</span><br>或在线预约登记</p>
        </li>
        <li class="li-1">
            <div class="fl">2.</div>
            <p>由瓜子二手车直卖网<span>购车顾问</span><br>陪您上门看车</p>
        </li>
        <li class="li-1">
            <div class="fl">3.</div>
            <p>看车满意，签署<span>三方合同</span>，支付定金</p>
        </li>
        <li class="wd-250">
            <div class="fl">4.</div>
            <p>瓜子<span>陪同过户</span>，支付全款完成交易，好车开回家</p>
        </li>
    </ul>
    <div class="dotted-line"></div>
    <p class="deal-tit">为何选择瓜子二手车直卖网？</p>
    <p class="deal-txt">帮你解决所有购车疑虑</p>
    <ul class="solve-doubts">
        <li class="solve-1"><span>担心车况不靠谱？</span><br>专业检测师团队，严格检测，杜绝事故<br>全程担保，车况有问题，瓜子二手车直卖网来赔</li>
        <li class="solve-2"><span>不懂车，嫌麻烦？</span><br>专业购车顾问陪您看车，放心不被蒙<br>瓜子二手车直卖网帮您过户，告别繁琐不费时间</li>
        <li class="solve-3"><span>担心没售后，没保障？</span><br>14天可退<br>1年2万公里，联合原厂4S店为爱车质保</li>
    </ul>
</div>
        <!-- 用户浏览记录 -->
        <div style="display: none" class="saveBrowsePost" data-domain="bj" data-puid="3001846935"></div>

    </div>
</div>
<input type="text" name="phone_city" value="bj"  style="display:none;"/>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>