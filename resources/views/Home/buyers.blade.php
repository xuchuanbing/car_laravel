@extends('base_1')
    @section('content')
<style type="text/css">
    .denglu{
    color: rgba(45, 13, 13, 0.81);
}
</style>
<div class="list-wrap js-post">
    <!-- 面包屑，搜索框 -->
    <!-- 面包屑 -->
    <div class="crumbs-search" id="bread">
        <div class="crumbs">
            <a href='{{ url('') }}'>首页</a>&gt;北京二手车
            <!-- <a href="#">首页</a>&gt;<a href="#">北京个人二手车</a>&gt;北京二手保时捷 -->
        </div>
        <!-- input在focus状态下，最外层div添加class名active -->
        <div class="search js-search">
            <div class="search-box suggestion_widget" data-default-count="9">
                <input type="text" class="search-input js_search_input_index" placeholder="搜索您想要的车"
                       data-role="keywordInput" name="keyword" autocomplete="off" data-domain="bj"/>
                <button class="search-btn" data-gzlog="tracking_type=click&eventid=0020070000000022"></button>
                <input type="hidden" value="bj" name="hiddenCity">
            </div>
        </div>
        <script type="text/javascript">
                $(".search-btn").click(function(){
                $.ajax({
                    url:"{{ url('/home/buyers') }}",
                    type:"get",
                    data:"title="+$(".search-input").val(),
                    success:function(data){
                        bb = $(".search-input").val();
                        var test = window.location.href;
                        test = test.substring(0,25);
                        var aa = test+"home/buyers"+"?"+"title=%"+$(".search-input").val()+"%";
                        window.location.href=aa;
                    }
                })
            })
            
        </script>
    </div>    <!-- 头部筛选框 -->
    <!-- 车源筛选1 -->
    <div class="screen">
        <!-- 品牌 -->
        <dl class="clearfix">
            <dt>品牌</dt>
            <dd>
                <div class="dd-top">
                <span class="a-box">
                    <!-- 不限 -->
                    <a class="active"
                       href="{{ url('home/buyers') }}">不限
                   </a>
                    <!-- 热门品牌 -->
                    @foreach($brand as $k=>$v) 
                    <a data-gzlog=tracking_type=click&eventid=0070000000000045&filter=brand&brand=dazhong&type=hot href="{{ url('home/buyers') }}?title=%{{ $v->brand_name }}% ">{{ $v->brand_name }}</a>
                    @endforeach                      
                </span>
                    <!-- 点击全部为span添加class名active -->
                </div>
            </dd>
        </dl>
        <!-- 车系 -->
        <dl class="clearfix">
            <dt>车系</dt>
            <dd>
                <div class="dd-top">
                <span class="a-box">
                    <a class="active" href="{{ url('home/buyers') }}">不限</a> 
                    @foreach($audi as $v)
                <a data-gzlog=tracking_type=click&eventid=0070000000000045&filter=tag&tag=suteng&type=hot href="/bj/suteng/#bread">{{ $v->brand_name }}</a>
                    @endforeach                                                    
                                                    
                </div>
                <div class="dd-car js-tag js-option-hid-info" style="display: none;">
                    <ul>
                    </ul>
                </div>
            </dd>
        </dl>
        <!-- 价格 -->
        <dl class="clearfix">
            <dt>价格</dt>
            <dd>
                <div class="dd-top">
                    <a class="active" data-gzlog=tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=0
                        href="{{ url('home/buyers') }}">不限</a>
                    <a
                            data-gzlog=tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=11
                            href="/bj/buy/p11/#bread">3万以下</a>
                    <a
                            data-gzlog=tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=12
                            href="/bj/buy/p12/#bread">3-5万</a>
                    <a
                            data-gzlog=tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=13
                            href="/bj/buy/p13/#bread">5-7万</a>
                    <a
                            data-gzlog=tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=14
                            href="/bj/buy/p14/#bread">7-9万</a>
                    <a
                            data-gzlog=tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=15
                            href="/bj/buy/p15/#bread">9-12万</a>
                    <a
                            data-gzlog=tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=16
                            href="/bj/buy/p16/#bread">12-16万</a>
                    <a
                            data-gzlog=tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=17
                            href="/bj/buy/p17/#bread">16-20万</a>
                    <a
                            data-gzlog=tracking_type=click&eventid=0070000000000045&filter=price_index&price_index=18
                            href="/bj/buy/p18/#bread">20万以上</a>

                    <div class="rangeFilter" data-url-template="/bj/buy/">
                        <input type="text"
                               value=""
                               class="screen-price js-begin" data-default-value="0" size="4" maxlength="3"
                               id="my_price_b" name="b"/>
                        <em class="screen-em">-</em>
                        <input
                                value=""
                                type="text" class="screen-price js-end" data-default-value="999" size="4" maxlength="3"
                                id="my_price_e" name="e"/>
                        <em class="screen-em">万</em>
                        <button class="price-btn js-btn">确定</button>
                    </div>

                </div>
            </dd>
        </dl>


    </div>

    <!-- 热销车源 -->
    <!-- 热销车系排行榜 -->

    <!-- 车源筛选2 -->
    <h2 style="display: none;">北京二手车交易市场</h2>
    <h2 style="display: none;">北京二手车报价</h2>
    <div class="list-filter">
        <div class="list-tab">
            <a class='active' data-gzlog="tracking_type=click&eventid=1011000000000008"
               href="/bj/buy/#bread">全部</a>


        </div>
        <div class="list-sort">

            <a rel="nofollow" class="sort-a "
               data-gzlog="tracking_type=click&eventid=0070000000000056&sort=licheng"
               href="/bj/buy/i5/#bread">里程
                <i class=""></i>
            </a>

            <a rel="nofollow" class="sort-a "
               data-gzlog="tracking_type=click&eventid=0070000000000056&sort=cheling"
               href="/bj/buy/i4/#bread">车龄
                <i class=""></i>
            </a>

            <a rel="nofollow" class="sort-a "
               data-gzlog="tracking_type=click&eventid=0070000000000056&sort=price"
               href="/bj/buy/i1/#bread">价格
                <i class=""></i>
            </a>

            <a class="sort-a "
               data-gzlog="tracking_type=click&eventid=0070000000000056&sort=new"
               href="/bj/buy/i7/#bread">最新发布</a>

            <a class="sort-a active"
               data-gzlog="tracking_type=click&eventid=0070000000000056&sort=default"
               href="/bj/buy/#bread">默认排序</a>
        </div>
    </div>    <!-- 车源展示 -->
    <!-- 车源列表 -->
    <ul class="carlist clearfix js-top">
    @foreach($list as $k=>$v)
        <li>
            <a href="{{ url('/home/details') }}/{{ $v->id }}" target="_blank" class="car-a"
               data-gzlog="tracking_type=click&eventid=0120000000000057&carid=12192131@0">
                <img src='http://oslhf8hmf.bkt.clouddn.com/{{ $v->picname }}'>
                <div class="t">{{ $v->title }}</div>
                <!-- 年款里程 -->
                <div class="t-i">{{ $lists[$k]->licensing }}<span class="icon-pad">|</span>{{ $lists[$k]->mileage }}</div>
                <div class="t-price">
                    <!-- 价格 -->
                    <p><span style="font-size:23px">{{ $lists[$k]->price }}</span></p>
                    <!-- 标签 -->
                    <em class='line-through'>{{ $detection[$k]->price }}</em></div>
            </a>

        </li>
    @endforeach
            <style type="text/css">
            .carlist li a {
                padding-left: 0px;
                padding-top: 1px;
                }
            </style>

        <input type="hidden" class="clue_ids"
               value="12192131@0_12592951@1_13781580@2_13757257@3_14134783@4_13879326@5_6319207@6_14077744@7_14127723@8_13916219@9_3994094@10_13921549@11_13611254@12_14026174@13_13536132@14_13934314@15_13169574@16_13959833@17_13758215@18_11313311@19_13731571@20_13733759@21_12605791@22_13818713@23_13734052@24_13703795@25_13687883@26_11155846@27_13540674@28_13600964@29_13490672@30_13350795@31_13539192@32_13068093@33_12154123@34_13029883@35_12962866@36_12765625@37_12849495@38_11183326@39"/>
    </ul>

    <!-- 分页展示 -->
    <!-- <div class="pageBox" data-widget="app/ms_v2/common/list_page.js#pagination">
        <ul class="pageLink clearfix">
            {{ $list->appends($where)->links() }}
        </ul>
    </div> -->
    <center>
    {{ $list->appends($where)->links() }}
    </center>
    <!-- 页面一键订阅 s-->
    <!-- 页面一键订阅 e-->

    <!-- 相关车系 -->


    <!-- 周边车源列表 -->
</div>
<!-- 吸顶筛选框 -->
<!-- 吸顶 -->
<div class="fix-screen js-topoption" style="display: none;">
    <ul class="fix-con">

        <!-- 品牌 -->
        <li class="con-tit">品牌：</li>
        <li class="con-sel js-hover">
            <p class="dd-sel"><i></i>
                不限 </p>
            <div class="dd-all clearfix">
                <ul>
                    <li>
                        <label>A</label>
                        <p>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=audi
                               href="/bj/audi/#post">奥迪</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=anchi
                               href="/bj/anchi/#post">安驰</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=ac-schnitzer
                               href="/bj/ac-schnitzer/#post">AC Schnitzer</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=astonmartin
                               href="/bj/astonmartin/#post">阿斯顿·马丁</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=ankai
                               href="/bj/ankai/#post">安凯客车</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=alpina
                               href="/bj/alpina/#post">Alpina</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=alfaromeo
                               href="/bj/alfaromeo/#post">阿尔法·罗密欧</a>
                        </p>
                    </li>
                    <li>
                        <label>B</label>
                        <p>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=bmw
                               href="/bj/bmw/#post">宝马</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=benz
                               href="/bj/benz/#post">奔驰</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=buick
                               href="/bj/buick/#post">别克</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=honda
                               href="/bj/honda/#post">本田</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=biaozhi
                               href="/bj/biaozhi/#post">标致</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=byd
                               href="/bj/byd/#post">比亚迪</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=porsche
                               href="/bj/porsche/#post">保时捷</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=shenbao
                               href="/bj/shenbao/#post">北汽绅宝</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=benteng
                               href="/bj/benteng/#post">奔腾</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=beijingqiche
                               href="/bj/beijingqiche/#post">北京</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=bqxny
                               href="/bj/bqxny/#post">北汽新能源</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=bentley
                               href="/bj/bentley/#post">宾利</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=baojun
                               href="/bj/baojun/#post">宝骏</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=weiwang
                               href="/bj/weiwang/#post">北汽威旺</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=baowo
                               href="/bj/baowo/#post">宝沃汽车</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=beiqi
                               href="/bj/beiqi/#post">北汽</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=huansu
                               href="/bj/huansu/#post">北汽幻速</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=baofeili
                               href="/bj/baofeili/#post">保斐利</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=baolong
                               href="/bj/baolong/#post">宝龙</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=babosi
                               href="/bj/babosi/#post">巴博斯</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=bujiadi
                               href="/bj/bujiadi/#post">布加迪</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=bisu
                               href="/bj/bisu/#post">比速汽车</a>
                        </p>
                    </li>
                    <li>
                        <label>C</label>
                        <p>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=changan
                               href="/bj/changan/#post">长安</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=changcheng
                               href="/bj/changcheng/#post">长城</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=changanshangyong
                               href="/bj/changanshangyong/#post">长安商用</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=chuanqi1
                               href="/bj/chuanqi1/#post">传祺</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=chenggong
                               href="/bj/chenggong/#post">成功汽车</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=chuanqiyema
                               href="/bj/chuanqiyema/#post">川汽野马</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=changhe
                               href="/bj/changhe/#post">昌河</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=kuayue
                               href="/bj/kuayue/#post">长安跨越</a>
                        </p>
                    </li>
                    <li>
                        <label>D</label>
                        <p>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=dazhong
                               href="/bj/dazhong/#post">大众</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=fengxing
                               href="/bj/fengxing/#post">东风风行</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=dongnan
                               href="/bj/dongnan/#post">东南</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=daoqi
                               href="/bj/daoqi/#post">道奇</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=ds
                               href="/bj/ds/#post">DS</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=dongfengxiaokang
                               href="/bj/dongfengxiaokang/#post">东风小康</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=dongfengfengshen
                               href="/bj/dongfengfengshen/#post">东风风神</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=dongfengfengdu
                               href="/bj/dongfengfengdu/#post">东风风度</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=jilindafa
                               href="/bj/jilindafa/#post">大发</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=dongfeng
                               href="/bj/dongfeng/#post">东风</a>
                        </p>
                    </li>
                    <li>
                        <label>F</label>
                        <p>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=ford
                               href="/bj/ford/#post">福特</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=toyota
                               href="/bj/toyota/#post">丰田</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=futian
                               href="/bj/futian/#post">福田</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=fiat
                               href="/bj/fiat/#post">菲亚特</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=fuqiqiteng
                               href="/bj/fuqiqiteng/#post">福汽启腾</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=huaxiangfuqi
                               href="/bj/huaxiangfuqi/#post">富奇</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=ferrari
                               href="/bj/ferrari/#post">法拉利</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=fudi
                               href="/bj/fudi/#post">福迪</a>
                        </p>
                    </li>
                    <li>
                        <label>G</label>
                        <p>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=gmc
                               href="/bj/gmc/#post">GMC</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=guanzhi
                               href="/bj/guanzhi/#post">观致</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=galue
                               href="/bj/galue/#post">光冈</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=jiao
                               href="/bj/jiao/#post">广汽吉奥</a>
                        </p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <label>H</label>
                        <p>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=hafu
                               href="/bj/hafu/#post">哈弗</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=haima
                               href="/bj/haima/#post">海马</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=hafei
                               href="/bj/hafei/#post">哈飞</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=huasong
                               href="/bj/huasong/#post">华颂</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=hongqi
                               href="/bj/hongqi/#post">红旗</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=haige
                               href="/bj/haige/#post">海格</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=htxny
                               href="/bj/htxny/#post">华泰新能源</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=hanma
                               href="/bj/hanma/#post">悍马</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=huatai
                               href="/bj/huatai/#post">华泰</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=huanghai
                               href="/bj/huanghai/#post">黄海</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=hanteng
                               href="/bj/hanteng/#post">汉腾</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=fusangheibao
                               href="/bj/fusangheibao/#post">黑豹</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=zhongke-huabei
                               href="/bj/zhongke-huabei/#post">华北</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=sh-huizhong
                               href="/bj/sh-huizhong/#post">汇众</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=huapu
                               href="/bj/huapu/#post">华普</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=hengtian
                               href="/bj/hengtian/#post">恒天</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=huayang
                               href="/bj/huayang/#post">华阳</a>
                        </p>
                    </li>
                    <li>
                        <label>J</label>
                        <p>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=huachen
                               href="/bj/huachen/#post">金杯</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=jianghuai
                               href="/bj/jianghuai/#post">江淮</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=jeep
                               href="/bj/jeep/#post">Jeep</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=jiebao
                               href="/bj/jiebao/#post">捷豹</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=jili
                               href="/bj/jili/#post">吉利</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=jinlv
                               href="/bj/jinlv/#post">金旅</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=jiangling
                               href="/bj/jiangling/#post">江铃</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=jinlong
                               href="/bj/jinlong/#post">金龙</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=jlshwuche
                               href="/bj/jlshwuche/#post">九龙</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=jljtxny
                               href="/bj/jljtxny/#post">江铃集团新能源</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=jincheng
                               href="/bj/jincheng/#post">金程</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=jiangnan
                               href="/bj/jiangnan/#post">江南</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=yiqijiefang
                               href="/bj/yiqijiefang/#post">解放</a>
                        </p>
                    </li>
                    <li>
                        <label>K</label>
                        <p>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=cadillac
                               href="/bj/cadillac/#post">凯迪拉克</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=chrysler
                               href="/bj/chrysler/#post">克莱斯勒</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=krui
                               href="/bj/krui/#post">开瑞</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=kawei
                               href="/bj/kawei/#post">卡威</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=kenisaige
                               href="/bj/kenisaige/#post">科尼赛克</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=kaiyi
                               href="/bj/kaiyi/#post">凯翼</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=kangdi
                               href="/bj/kangdi/#post">康迪</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=kaersen
                               href="/bj/kaersen/#post">卡尔森</a>
                        </p>
                    </li>
                    <li>
                        <label>L</label>
                        <p>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=landrover
                               href="/bj/landrover/#post">路虎</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=suzuki
                               href="/bj/suzuki/#post">铃木</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=lexus
                               href="/bj/lexus/#post">雷克萨斯</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=renault
                               href="/bj/renault/#post">雷诺</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=lincoln
                               href="/bj/lincoln/#post">林肯</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=lifan
                               href="/bj/lifan/#post">力帆</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=lufeng
                               href="/bj/lufeng/#post">陆风</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=rover
                               href="/bj/rover/#post">罗孚</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=linian
                               href="/bj/linian/#post">理念</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=lotuscars
                               href="/bj/lotuscars/#post">路特斯</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=liebao
                               href="/bj/liebao/#post">猎豹</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=rolls-royce
                               href="/bj/rolls-royce/#post">劳斯莱斯</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=laolunshi
                               href="/bj/laolunshi/#post">劳伦士</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=lamborghini
                               href="/bj/lamborghini/#post">兰博基尼</a>
                        </p>
                    </li>
                    <li>
                        <label>M</label>
                        <p>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=mazda
                               href="/bj/mazda/#post">马自达</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=mini
                               href="/bj/mini/#post">MINI</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=maserati
                               href="/bj/maserati/#post">玛莎拉蒂</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=mg1
                               href="/bj/mg1/#post">MG</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=maikailun
                               href="/bj/maikailun/#post">迈凯伦</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=meiya
                               href="/bj/meiya/#post">美亚</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=maybach
                               href="/bj/maybach/#post">迈巴赫</a>
                        </p>
                    </li>
                    <li>
                        <label>N</label>
                        <p>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=dongfengyulongnazhijie
                               href="/bj/dongfengyulongnazhijie/#post">纳智捷</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=njjinlong
                               href="/bj/njjinlong/#post">南京金龙</a>
                        </p>
                    </li>
                    <li>
                        <label>O</label>
                        <p>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=acura
                               href="/bj/acura/#post">讴歌</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=oulang
                               href="/bj/oulang/#post">欧朗</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=opel
                               href="/bj/opel/#post">欧宝</a>
                        </p>
                    </li>
                </ul>
                <ul>
                    <li>
                        <label>Q</label>
                        <p>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=kia
                               href="/bj/kia/#post">起亚</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=chery
                               href="/bj/chery/#post">奇瑞</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=qichen
                               href="/bj/qichen/#post">启辰</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=qingling
                               href="/bj/qingling/#post">庆铃</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=lotus
                               href="/bj/lotus/#post">青年莲花</a>
                        </p>
                    </li>
                    <li>
                        <label>R</label>
                        <p>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=richan
                               href="/bj/richan/#post">日产</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=rongwei
                               href="/bj/rongwei/#post">荣威</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=ruilin
                               href="/bj/ruilin/#post">瑞麒</a>
                        </p>
                    </li>
                    <li>
                        <label>S</label>
                        <p>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=skoda
                               href="/bj/skoda/#post">斯柯达</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=smart
                               href="/bj/smart/#post">Smart</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=mitsubishi
                               href="/bj/mitsubishi/#post">三菱</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=subaru
                               href="/bj/subaru/#post">斯巴鲁</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=datong
                               href="/bj/datong/#post">上汽大通</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=siming
                               href="/bj/siming/#post">思铭</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=shuanglong
                               href="/bj/shuanglong/#post">双龙</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=sailin
                               href="/bj/sailin/#post">赛麟</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=siwei
                               href="/bj/siwei/#post">斯威</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=xiaqitongjia
                               href="/bj/xiaqitongjia/#post">陕汽通家</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=shijue
                               href="/bj/shijue/#post">世爵</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=saibao1
                               href="/bj/saibao1/#post">赛宝</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=saab
                               href="/bj/saab/#post">萨博</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=shuanghuan
                               href="/bj/shuanghuan/#post">双环</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=scion
                               href="/bj/scion/#post">Scion</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=springo
                               href="/bj/springo/#post">SPRINGO</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=shidai
                               href="/bj/shidai/#post">时代</a>
                        </p>
                    </li>
                    <li>
                        <label>T</label>
                        <p>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=tesila
                               href="/bj/tesila/#post">特斯拉</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=tengshi
                               href="/bj/tengshi/#post">腾势</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=yiqitongyong
                               href="/bj/yiqitongyong/#post">通用</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=tianma
                               href="/bj/tianma/#post">天马</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=tongtian
                               href="/bj/tongtian/#post">通田</a>
                        </p>
                    </li>
                    <li>
                        <label>W</label>
                        <p>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=volvo
                               href="/bj/volvo/#post">沃尔沃</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=wuling
                               href="/bj/wuling/#post">五菱</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=weilin
                               href="/bj/weilin/#post">威麟</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=weilai
                               href="/bj/weilai/#post">蔚来</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=weiziman
                               href="/bj/weiziman/#post">威兹曼</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=wanfeng
                               href="/bj/wanfeng/#post">万丰</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=wushiling
                               href="/bj/wushiling/#post">五十铃</a>
                        </p>
                    </li>
                    <li>
                        <label>X</label>
                        <p>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=hyundai
                               href="/bj/hyundai/#post">现代</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=chevrolet
                               href="/bj/chevrolet/#post">雪佛兰</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=citroen
                               href="/bj/citroen/#post">雪铁龙</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=brand-xiali
                               href="/bj/brand-xiali/#post">夏利</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=xinkai
                               href="/bj/xinkai/#post">新凯</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=xiyate
                               href="/bj/xiyate/#post">西雅特</a>
                        </p>
                    </li>
                    <li>
                        <label>Y</label>
                        <p>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=infiniti
                               href="/bj/infiniti/#post">英菲尼迪</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=tj-yiqi
                               href="/bj/tj-yiqi/#post">一汽</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=nj-iveco
                               href="/bj/nj-iveco/#post">依维柯</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=yingzhi
                               href="/bj/yingzhi/#post">英致</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=yongyuanqiche
                               href="/bj/yongyuanqiche/#post">永源</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=yj
                               href="/bj/yj/#post">御捷</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=cf-yangzi
                               href="/bj/cf-yangzi/#post">扬子</a>
                        </p>
                    </li>
                    <li>
                        <label>Z</label>
                        <p>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=zhongtai
                               href="/bj/zhongtai/#post">众泰</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=huachen-zhonghua
                               href="/bj/huachen-zhonghua/#post">中华</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=zhidou
                               href="/bj/zhidou/#post">知豆</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=zhongshun
                               href="/bj/zhongshun/#post">中顺</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=zhongou
                               href="/bj/zhongou/#post">中欧</a>
                            <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=brand&brand=zhongxing
                               href="/bj/zhongxing/#post">中兴</a>
                        </p>
                    </li>
                </ul>
            </div>
            <em class="white-line2"></em>
        </li>

        <!-- 车系 -->
        <li class="con-tit">车系：</li>
        <li class="con-sel ">
            <p class="dd-sel dd-sel-disabled"><i></i>
                不限 </p>
        </li>

        <!-- 价格 -->
        <li class="con-tit">价格：</li>
        <li class="con-sel js-hover">
            <p class="dd-sel"><i></i>
                不限 </p>
            <div class="dd-option">
                <a
                        data-gzlog="tracking_type=click&eventid=1011000000000016&filter=price_index&price_index=0"
                        href="/bj/buy/#post">不限</a>
                <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=price_index&price_index=11
                   href="/bj/buy/p11/#post">3万以下</a>
                <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=price_index&price_index=12
                   href="/bj/buy/p12/#post">3-5万</a>
                <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=price_index&price_index=13
                   href="/bj/buy/p13/#post">5-7万</a>
                <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=price_index&price_index=14
                   href="/bj/buy/p14/#post">7-9万</a>
                <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=price_index&price_index=15
                   href="/bj/buy/p15/#post">9-12万</a>
                <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=price_index&price_index=16
                   href="/bj/buy/p16/#post">12-16万</a>
                <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=price_index&price_index=17
                   href="/bj/buy/p17/#post">16-20万</a>
                <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=price_index&price_index=18
                   href="/bj/buy/p18/#post">20万以上</a>
            </div>
            <em class="white-line2"></em>
        </li>

        <!-- 筛选 -->
        <li class="con-tit">热门：</li>
        <li class="con-sel js-hover">
            <p class="dd-sel"><i></i>不限</p>
            <div class="hot-option">
                <a
                        data-gzlog="tracking_type=click&eventid=1011000000000016&filter=tag_types&tag_types=3"
                        href="/bj/buy/r3/#post">
                    <i></i>急售</a>

                <a
                        data-gzlog="tracking_type=click&eventid=1011000000000016&filter=tag_types&tag_types=16"
                        href="/bj/buy/r16/#post">
                    <i></i>超值</a>

                <a
                        data-gzlog="tracking_type=click&eventid=1011000000000016&filter=tag_types&tag_types=4"
                        href="/bj/buy/r4/#post">
                    <i></i>准新车</a>

                <a
                        data-gzlog="tracking_type=click&eventid=1011000000000016&filter=tag_types&tag_types=8"
                        href="/bj/buy/r8/#post">
                    <i></i>练手车</a>

                <a
                        data-gzlog="tracking_type=click&eventid=1011000000000016&filter=tag_types&tag_types=6"
                        href="/bj/buy/r6/#post">
                    <i></i>可迁全国</a>
            </div>
            <em class="white-line2"></em>
        </li>

        <li><span class="dd-btn js-disAll js-disTopAll" data-local="js-topmore">更多<i></i></span></li>

    </ul>
    <div class="fix-screen fix-screen-2 js-topmore" style="display: none;">
        <!-- 第一个li是默认大小，第二个是加长版，第三个是颜色下拉 -->
        <ul class="dd-more">
            <!-- 车龄 -->
            <li class="js-hover">
                <p class="dd-sel"><i></i>
                    车龄 </p>
                <div class="dd-option">
                    <a href="/bj/buy/#post">不限</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=cheling&cheling=1
                       href="/bj/buy/l1/#post">1年以内</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=cheling&cheling=2
                       href="/bj/buy/l2/#post">3年内</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=cheling&cheling=3
                       href="/bj/buy/l3/#post">5年内</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=cheling&cheling=4
                       href="/bj/buy/l4/#post">5年以上</a>
                </div>
            </li>
            <!-- 变速箱 -->
            <li class="js-hover">
                <p class="dd-sel"><i></i>
                    变速箱 </p>
                <div class="dd-option">
                    <a href="/bj/buy/#post">不限</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=gearbox&gearbox=1
                       href="/bj/buy/n1/#post">手动</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=gearbox&gearbox=2
                       href="/bj/buy/n2/#post">自动</a>
                </div>
            </li>
            <!-- 车型 -->
            <li class="js-hover">
                <p class="dd-sel"><i></i>
                    车型 </p>
                <div class="dd-option">
                    <a href="/bj/buy/#post">不限</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=chexing&chexing=5
                       href="/bj/buy/h5/#post">两厢轿车</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=chexing&chexing=6
                       href="/bj/buy/h6/#post">三厢轿车</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=chexing&chexing=4
                       href="/bj/buy/h4/#post">跑车</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=chexing&chexing=2
                       href="/bj/buy/h2/#post">SUV</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=chexing&chexing=3
                       href="/bj/buy/h3/#post">MPV</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=chexing&chexing=7
                       href="/bj/buy/h7/#post">面包车</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=chexing&chexing=8
                       href="/bj/buy/h8/#post">皮卡</a>
                </div>
            </li>
            <!-- 里程 -->
            <li class="js-hover">
                <p class="dd-sel"><i></i>
                    里程 </p>
                <div class="dd-option">
                    <a href="/bj/buy/#post">不限</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=road_haul&road_haul=1
                       href="/bj/buy/g1/#post">1万公里内</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=road_haul&road_haul=2
                       href="/bj/buy/g2/#post">3万公里内</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=road_haul&road_haul=3
                       href="/bj/buy/g3/#post">5万公里内</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=road_haul&road_haul=4
                       href="/bj/buy/g4/#post">5万公里以上</a>
                </div>
            </li>
            <!-- 排量 -->
            <li class="js-hover">
                <p class="dd-sel"><i></i>
                    排量 </p>
                <div class="dd-option">
                    <a href="/bj/buy/#post">不限</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=air_displacement&air_displacement=1
                       href="/bj/buy/j1/#post">1.0L以下</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=air_displacement&air_displacement=2
                       href="/bj/buy/j2/#post">1.0-1.6L</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=air_displacement&air_displacement=3
                       href="/bj/buy/j3/#post">1.6-2.0L</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=air_displacement&air_displacement=4
                       href="/bj/buy/j4/#post">2.0-3.0L</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=air_displacement&air_displacement=5
                       href="/bj/buy/j5/#post">3.0L以上</a>
                </div>
            </li>
            <!-- 排放标准 -->
            <li class="js-hover">
                <p class="dd-sel"><i></i>
                    排放标准 </p>
                <div class="dd-option">
                    <a href="/bj/buy/#post">不限</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=vehicle_config&vehicle_config=1
                       href="/bj/buy/v1/#post">国二及以上</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=vehicle_config&vehicle_config=2
                       href="/bj/buy/v2/#post">国三及以上</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=vehicle_config&vehicle_config=3
                       href="/bj/buy/v3/#post">国四及以上</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=vehicle_config&vehicle_config=4
                       href="/bj/buy/v4/#post">国五</a>
                </div>
            </li>
            <!-- 座位数 -->
            <li class="js-hover">
                <p class="dd-sel"><i></i>
                    座位数 </p>
                <div class="dd-option">
                    <a href="/bj/buy/#post">不限</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=seat&seat=2
                       href="/bj/buy/s2/#post">2座</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=seat&seat=4
                       href="/bj/buy/s4/#post">4座</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=seat&seat=5
                       href="/bj/buy/s5/#post">5座</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=seat&seat=6
                       href="/bj/buy/s6/#post">6座</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=seat&seat=7
                       href="/bj/buy/s7/#post">7座及以上</a>
                </div>
            </li>
            <!-- 燃油类型 -->
            <li class="js-hover">
                <p class="dd-sel"><i></i>
                    燃油类型 </p>
                <div class="dd-option">
                    <a href="/bj/buy/#post">不限</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=fuel_type&fuel_type=1
                       href="/bj/buy/f1/#post">汽油</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=fuel_type&fuel_type=2
                       href="/bj/buy/f2/#post">柴油</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=fuel_type&fuel_type=3
                       href="/bj/buy/f3/#post">电动</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=fuel_type&fuel_type=4
                       href="/bj/buy/f4/#post">油电混合</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=fuel_type&fuel_type=5
                       href="/bj/buy/f5/#post">其他</a>
                </div>
            </li>
            <!-- 颜色 -->
            <li class="js-hover">
                <p class="dd-sel"><i></i>
                    颜色 </p>
                <div class="dd-color">
                    <a href="/bj/buy/#post">不限</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=car_color&car_color=1
                       href="/bj/buy/m1/#post"><i class="icon-color icon-black"></i>黑色</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=car_color&car_color=2
                       href="/bj/buy/m2/#post"><i class="icon-color icon-white"></i>白色</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=car_color&car_color=3
                       href="/bj/buy/m3/#post"><i class="icon-color icon-grey"></i>银灰色</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=car_color&car_color=4
                       href="/bj/buy/m4/#post"><i class="icon-color icon-grey2"></i>深灰色</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=car_color&car_color=6
                       href="/bj/buy/m6/#post"><i class="icon-color icon-red"></i>红色</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=car_color&car_color=10
                       href="/bj/buy/m10/#post"><i class="icon-color icon-orange"></i>橙色</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=car_color&car_color=8
                       href="/bj/buy/m8/#post"><i class="icon-color icon-green"></i>绿色</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=car_color&car_color=7
                       href="/bj/buy/m7/#post"><i class="icon-color icon-blue"></i>蓝色</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=car_color&car_color=5
                       href="/bj/buy/m5/#post"><i class="icon-color icon-brown"></i>咖啡色</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=car_color&car_color=12
                       href="/bj/buy/m12/#post"><i class="icon-color icon-purple"></i>紫色</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=car_color&car_color=11
                       href="/bj/buy/m11/#post"><i class="icon-color icon-champagne"></i>香槟色</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=car_color&car_color=13
                       href="/bj/buy/m13/#post"><i class="icon-color icon-multicolor"></i>多彩色</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=car_color&car_color=9
                       href="/bj/buy/m9/#post"><i class="icon-color icon-yellow"></i>黄色</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=car_color&car_color=14
                       href="/bj/buy/m14/#post"><i class="icon-color icon-other"></i>其它</a>
                </div>
            </li>
            <!-- 车牌所在地 -->
            <li class="js-hover">
                <p class="dd-sel dd-sel-100"><i></i>
                    车牌所在地 </p>
                <div class="dd-option dd-option-100">
                    <a href="/bj/buy/#post">不限</a>
                    <a data-gzlog="tracking_type=click&eventid=1011000000000016&filter=diff_city&diff_city=0"
                       href="/bj/buy/d12/#post">本地</a>
                    <a data-gzlog="tracking_type=click&eventid=1011000000000016&filter=diff_city&diff_city=1"
                       href="/bj/buy/d12-/#post">外地</a>
                </div>
            </li>
            <!-- 国别 -->
            <li class="js-hover">
                <p class="dd-sel"><i></i>
                    国别 </p>
                <div class="dd-option">
                    <a href="/bj/buy/#post">不限</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=guobie&guobie=4
                       href="/bj/buy/u4/#post">德系</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=guobie&guobie=5
                       href="/bj/buy/u5/#post">日系</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=guobie&guobie=2
                       href="/bj/buy/u2/#post">美系</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=guobie&guobie=1
                       href="/bj/buy/u1/#post">法系</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=guobie&guobie=6
                       href="/bj/buy/u6/#post">韩系</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=guobie&guobie=3
                       href="/bj/buy/u3/#post">国产</a>
                    <a data-gzlog=tracking_type=click&eventid=1011000000000016&filter=guobie&guobie=7
                       href="/bj/buy/u7/#post">其他</a>
                </div>
            </li>
            <!-- 区域 -->

        </ul>
    </div>
</div>


@endsection('content')