<!doctype html>
<html>
<!-- head -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="renderer" content="webkit">
    <title>【北京二手车】北京二手车交易市场_北京二手车报价_北京二手车市场-北京瓜子二手车直卖网</title>
    <meta name="keywords" content="北京二手车,北京二手车交易市场,北京二手车报价,北京二手车市场"/>
    <meta name="description"
          content="北京二手车,北京二手车交易市场,北京二手车报价,北京二手车市场提供北京二手车报价等最新二手车信息。瓜子二手车为您提供北京二手车最新车源,买卖二手车就上瓜子二手车直卖网。"/>

    <meta http-equiv="P3P" content='CP="CAO PSA OUR"'/>
    <meta name="baidu-site-verification" content="3r3nh4dkLA"/>
    <meta name="360-site-verification" content="f045c917619b6b3dc82ad5f699a09474"/>
    <meta name="google-site-verification" content="FQph3WEY6ZqNqVXCB5PT4_u8f-WjfF14l2OOdFiOEmg"/>
    <meta htgtp-equiv="Cache-Control" content="no-transform "/>
    <meta name="sogou_site_verification" content="qY406sTreO"/>
    <meta name="shenma-site-verification" content="7b096264bff0cf1031a570c37abed00c_1476775946">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/center.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.guazi.com/favicon.ico" media="screen"/>
    <script type="text/javascript" src="{{ asset('js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ asset('js/hm.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/base.js') }}"></script>
    <script type="text/javascript" src="{{ asset('style/js/list_v4.4365aad438498c155300.js') }}"></script>
    <script type="text/javascript">

        $('.city-curr').click(function(){

            if($("#bb").css("display","none")){
                    $("#bb").show();
                }else{
                    $("#bb").hide();
                }        
            
        })

  </script>
</head>
  <script>
      var logged = false;
  </script>
  <script>
      var subInitInfo = {
          "brand": 0,
          "series": 0,
          "type": 0,
          "price": 0,
          "licenseDate": 0,
          "roadHaul": 0,
          "licenseCity": 12,
          "colour": 0,
          "gearbox": 0,
          "country": 0,
          "emission": 0
      };
  </script>

<link rel="canonical" href="https://www.guazi.com/bj/buy/"/>

<!-- 加载js/css-->

<script type="text/javascript">

    function di() {

            $(".pop-mask").show();
            $("#login1").show();

            $("#closeLogin1").click(function(){

                $(".pop-mask").hide();
                $("#login1").hide();
            })
    }





    function doCode(){

        var t = $(".js-phoneNum1").val();
        var ret = /^[\d]{5,20}$/;
        if(t='' || !ret.test(t)){
         
            $(".get-code").attr({"disabled":"disabled"});
            return false;

        }else{

            function time(){
              
            var i=60;
            
            name = setInterval(function(){
                $(".get-code").attr({"disabled":"disabled"});
                $(".get-code").val("还剩"+i+"秒");
                i--;
            if(i<0){
                $(".get-code").val("获取验证码");
                if(name != null){
                    clearInterval(name);
                    $(".get-code").removeAttr("disabled");
                }
                
            }
           },1000);

           }
           time();

           $.ajax({
            url:"{{ url('/home/myCode') }}",
            data:"phone = "+$(".js-phoneNum1").val(),
            dataType:'json',
            type: "get",
            success: function(msg) {
                
            }

           });
          
        }
  
    }



        function du(){

                var v = $(".js-phoneNum1").val();
                var VN = $(".js-phoneNum1").next();

                var ret = /^[\d]{11}$/;

                if(ret.test(v)){

                     VN.html("√");    
                     VN.css({color:'green',fontSize:'30px'})  
                }else{

                    VN.html("×");
                    VN.css({color:'red',fontSize:'30px'})  
                    $(".get-code").attr({"disabled":"disabled"});
                    return false;  
                }
           
        }



        function doSubmit(){
            $.ajax({
                url:"{{ url('/home/doCode') }}",
                data:"phone = "+$(".js-phoneNum1").val()+"&&"+"code = "+$(".js-code1").val(),
                type:"get",
                success:function(msg){
                    $(".pop-mask").hide();
                    $("#login1").hide();
                    if(true){
                        var test = window.location.href;
                        window.location.href = test;
                    }else{
                        alert(msg);
                    }
                    
                },
                error:function(msg){
                    
                },
            });
        }
    </script>

<body class="list">
<!-- 头部 -->
<input type="hidden" id="skipKindNew" value="0">
<input type="hidden" id="firstSubLogin" value="0">

<input type="hidden" id="clueData" data-puid="" data-city-id="12">

<div id="jstop" class=header-2>
    <div class="header">
        <h1>
            <a href="/bj/" title="瓜子二手车">瓜子二手车</a>
        </h1>

        <div class="city" id="aa">
            <!-- 鼠标悬停 .city添加class名active -->
            <p class="city-curr">
                北京<i></i>
            </p>
            <div class="white-line"></div>
            <!--        class:all-city的作用是局部滚动不影响整体滚动-->
            <div class="city-box all-city" id="bb">
                <dl class="bdb-n">
                    <dt class="green-tit">周边</dt>
                    <dd>
                        <a data-gzlog='tracking_type=click&eventid=0020060000000018&select_city=tj'
                           baidu_alog='pc_index_city&click&pc_index_around_city_c' href='/tj/buy/'
                           title='天津二手车'>天津</a><a
                            data-gzlog='tracking_type=click&eventid=0020060000000018&select_city=tangshan'
                            baidu_alog='pc_index_city&click&pc_index_around_city_c' href='/tangshan/buy/' title='唐山二手车'>唐山</a><a
                            data-gzlog='tracking_type=click&eventid=0020060000000018&select_city=sjz'
                            baidu_alog='pc_index_city&click&pc_index_around_city_c' href='/sjz/buy/'
                            title='石家庄二手车'>石家庄</a><a
                            data-gzlog='tracking_type=click&eventid=0020060000000018&select_city=qinhuangdao'
                            baidu_alog='pc_index_city&click&pc_index_around_city_c' href='/qinhuangdao/buy/'
                            title='秦皇岛二手车'>秦皇岛</a><a
                            data-gzlog='tracking_type=click&eventid=0020060000000018&select_city=xingtai'
                            baidu_alog='pc_index_city&click&pc_index_around_city_c' href='/xingtai/buy/' title='邢台二手车'>邢台</a><a
                            data-gzlog='tracking_type=click&eventid=0020060000000018&select_city=chengde'
                            baidu_alog='pc_index_city&click&pc_index_around_city_c' href='/chengde/buy/' title='承德二手车'>承德</a><a
                            data-gzlog='tracking_type=click&eventid=0020060000000018&select_city=hengshui'
                            baidu_alog='pc_index_city&click&pc_index_around_city_c' href='/hengshui/buy/' title='衡水二手车'>衡水</a><a
                            data-gzlog='tracking_type=click&eventid=0020060000000018&select_city=langfang'
                            baidu_alog='pc_index_city&click&pc_index_around_city_c' href='/langfang/buy/' title='廊坊二手车'>廊坊</a>
                    </dd>
                </dl>
                <dl class="bdb-s">
                    <dt class="green-tit">热门</dt>
                    <dd>
                        <a baidu_alog="pc_index_city&click&pc_index_quanguo_c"
                           data-gzlog="tracking_type=click&eventid=0020060000000021" href="/www/buy/"
                           title="全国二手车">全国 </a>
                        <a baidu_alog="pc_index_city&click&pc_index_hot_city_c"
                           data-gzlog="tracking_type=click&eventid=0020060000000019&select_city=bj" class="on"
                           href="/bj/buy/"
                           title="北京二手车">北京 </a>
                        <a baidu_alog="pc_index_city&click&pc_index_hot_city_c"
                           data-gzlog="tracking_type=click&eventid=0020060000000019&select_city=sh" href="/sh/buy/"
                           title="上海二手车">上海 </a>
                        <a baidu_alog="pc_index_city&click&pc_index_hot_city_c"
                           data-gzlog="tracking_type=click&eventid=0020060000000019&select_city=gz" href="/gz/buy/"
                           title="广州二手车">广州 </a>
                        <a baidu_alog="pc_index_city&click&pc_index_hot_city_c"
                           data-gzlog="tracking_type=click&eventid=0020060000000019&select_city=sz" href="/sz/buy/"
                           title="深圳二手车">深圳 </a>
                        <a baidu_alog="pc_index_city&click&pc_index_hot_city_c"
                           data-gzlog="tracking_type=click&eventid=0020060000000019&select_city=cd" href="/cd/buy/"
                           title="成都二手车">成都 </a>
                        <a baidu_alog="pc_index_city&click&pc_index_hot_city_c"
                           data-gzlog="tracking_type=click&eventid=0020060000000019&select_city=cq" href="/cq/buy/"
                           title="重庆二手车">重庆 </a>
                        <a baidu_alog="pc_index_city&click&pc_index_hot_city_c"
                           data-gzlog="tracking_type=click&eventid=0020060000000019&select_city=hz" href="/hz/buy/"
                           title="杭州二手车">杭州 </a>
                        <a baidu_alog="pc_index_city&click&pc_index_hot_city_c"
                           data-gzlog="tracking_type=click&eventid=0020060000000019&select_city=su" href="/su/buy/"
                           title="苏州二手车">苏州 </a>
                        <a baidu_alog="pc_index_city&click&pc_index_hot_city_c"
                           data-gzlog="tracking_type=click&eventid=0020060000000019&select_city=sy" href="/sy/buy/"
                           title="沈阳二手车">沈阳 </a>
                        <a baidu_alog="pc_index_city&click&pc_index_hot_city_c"
                           data-gzlog="tracking_type=click&eventid=0020060000000019&select_city=wh" href="/wh/buy/"
                           title="武汉二手车">武汉 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>A</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=anqing"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/anqing/buy/"
                           title="安庆二手车">安庆 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=anshan"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/anshan/buy/"
                           title="鞍山二手车">鞍山 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=anyang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/anyang/buy/"
                           title="安阳二手车">安阳 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>B</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=baoding"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/baoding/buy/"
                           title="保定二手车">保定 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=baotou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/baotou/buy/"
                           title="包头二手车">包头 </a>
                        <a class="on" data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=bj"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/bj/buy/"
                           title="北京二手车">北京 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=bengbu"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/bengbu/buy/"
                           title="蚌埠二手车">蚌埠 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=binzhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/binzhou/buy/"
                           title="滨州二手车">滨州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=baodi"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/baodi/buy/"
                           title="宝坻二手车">宝坻 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=binhaixinqu"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/binhaixinqu/buy/"
                           title="滨海新区二手车">滨海新区 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>C</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=cangzhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/cangzhou/buy/"
                           title="沧州二手车">沧州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=cc"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/cc/buy/"
                           title="长春二手车">长春 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=changde"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/changde/buy/"
                           title="常德二手车">常德 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=cs"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/cs/buy/"
                           title="长沙二手车">长沙 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=changzhi"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/changzhi/buy/"
                           title="长治二手车">长治 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=changzhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/changzhou/buy/"
                           title="常州二手车">常州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=chengde"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/chengde/buy/"
                           title="承德二手车">承德 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=cd"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/cd/buy/"
                           title="成都二手车">成都 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=cq"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/cq/buy/"
                           title="重庆二手车">重庆 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=changshugz"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/changshugz/buy/"
                           title="常熟二手车">常熟 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>D</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=dl"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/dl/buy/"
                           title="大连二手车">大连 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=daqing"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/daqing/buy/"
                           title="大庆二手车">大庆 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=datong"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/datong/buy/"
                           title="大同二手车">大同 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=dazhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/dazhou/buy/"
                           title="达州二手车">达州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=deyang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/deyang/buy/"
                           title="德阳二手车">德阳 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=dezhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/dezhou/buy/"
                           title="德州二手车">德州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=dg"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/dg/buy/"
                           title="东莞二手车">东莞 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=dongying"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/dongying/buy/"
                           title="东营二手车">东营 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=dagang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/dagang/buy/"
                           title="大港二手车">大港 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>E</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=eerduosi"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/eerduosi/buy/"
                           title="鄂尔多斯二手车">鄂尔多斯 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>F</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=foshan"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/foshan/buy/"
                           title="佛山二手车">佛山 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=fushun"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/fushun/buy/"
                           title="抚顺二手车">抚顺 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=fuyang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/fuyang/buy/"
                           title="阜阳二手车">阜阳 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=fz"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/fz/buy/"
                           title="福州二手车">福州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=fuling"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/fuling/buy/"
                           title="涪陵二手车">涪陵 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>G</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=ganzhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/ganzhou/buy/"
                           title="赣州二手车">赣州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=guangan"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/guangan/buy/"
                           title="广安二手车">广安 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=gz"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/gz/buy/"
                           title="广州二手车">广州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=gl"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/gl/buy/"
                           title="桂林二手车">桂林 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=gy"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/gy/buy/"
                           title="贵阳二手车">贵阳 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>H</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=hrb"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/hrb/buy/"
                           title="哈尔滨二手车">哈尔滨 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=handan"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/handan/buy/"
                           title="邯郸二手车">邯郸 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=hz"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/hz/buy/"
                           title="杭州二手车">杭州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=hf"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/hf/buy/"
                           title="合肥二手车">合肥 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=hengshui"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/hengshui/buy/"
                           title="衡水二手车">衡水 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=heze"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/heze/buy/"
                           title="菏泽二手车">菏泽 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=huaian"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/huaian/buy/"
                           title="淮安二手车">淮安 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=huanggang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/huanggang/buy/"
                           title="黄冈二手车">黄冈 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=huangshi"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/huangshi/buy/"
                           title="黄石二手车">黄石 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=nmg"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/nmg/buy/"
                           title="呼和浩特二手车">呼和浩特 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=huizhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/huizhou/buy/"
                           title="惠州二手车">惠州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=huzhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/huzhou/buy/"
                           title="湖州二手车">湖州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=hangu"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/hangu/buy/"
                           title="汉沽二手车">汉沽 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=hechuan"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/hechuan/buy/"
                           title="合川二手车">合川 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>J</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=jiamusi"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/jiamusi/buy/"
                           title="佳木斯二手车">佳木斯 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=jian"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/jian/buy/"
                           title="吉安二手车">吉安 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=jiangmen"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/jiangmen/buy/"
                           title="江门二手车">江门 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=jiaozuo"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/jiaozuo/buy/"
                           title="焦作二手车">焦作 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=jiaxing"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/jiaxing/buy/"
                           title="嘉兴二手车">嘉兴 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=jilin"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/jilin/buy/"
                           title="吉林二手车">吉林 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=jn"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/jn/buy/"
                           title="济南二手车">济南 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=jingzhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/jingzhou/buy/"
                           title="荆州二手车">荆州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=jinhua"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/jinhua/buy/"
                           title="金华二手车">金华 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=jining"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/jining/buy/"
                           title="济宁二手车">济宁 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=jinzhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/jinzhou/buy/"
                           title="锦州二手车">锦州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=jiangyin"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/jiangyin/buy/"
                           title="江阴二手车">江阴 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=jinghai"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/jinghai/buy/"
                           title="静海二手车">静海 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=jinnan"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/jinnan/buy/"
                           title="津南二手车">津南 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>K</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=kaifeng"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/kaifeng/buy/"
                           title="开封二手车">开封 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=km"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/km/buy/"
                           title="昆明二手车">昆明 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=kaixian"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/kaixian/buy/"
                           title="开县二手车">开县 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=kunshangz"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/kunshangz/buy/"
                           title="昆山二手车">昆山 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>L</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=langfang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/langfang/buy/"
                           title="廊坊二手车">廊坊 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=lz"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/lz/buy/"
                           title="兰州二手车">兰州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=leshan"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/leshan/buy/"
                           title="乐山二手车">乐山 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=liaocheng"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/liaocheng/buy/"
                           title="聊城二手车">聊城 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=liaoyang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/liaoyang/buy/"
                           title="辽阳二手车">辽阳 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=linfen"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/linfen/buy/"
                           title="临汾二手车">临汾 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=linyi"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/linyi/buy/"
                           title="临沂二手车">临沂 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=liuzhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/liuzhou/buy/"
                           title="柳州二手车">柳州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=luan"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/luan/buy/"
                           title="六安二手车">六安 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=luoyang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/luoyang/buy/"
                           title="洛阳二手车">洛阳 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=luzhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/luzhou/buy/"
                           title="泸州二手车">泸州 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>M</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=maanshan"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/maanshan/buy/"
                           title="马鞍山二手车">马鞍山 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=meishan"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/meishan/buy/"
                           title="眉山二手车">眉山 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=mianyang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/mianyang/buy/"
                           title="绵阳二手车">绵阳 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>N</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=nc"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/nc/buy/"
                           title="南昌二手车">南昌 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=nanchong"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/nanchong/buy/"
                           title="南充二手车">南充 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=nj"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/nj/buy/"
                           title="南京二手车">南京 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=nn"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/nn/buy/"
                           title="南宁二手车">南宁 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=nantong"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/nantong/buy/"
                           title="南通二手车">南通 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=nanyang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/nanyang/buy/"
                           title="南阳二手车">南阳 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=neijiang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/neijiang/buy/"
                           title="内江二手车">内江 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=nb"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/nb/buy/"
                           title="宁波二手车">宁波 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>P</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=putian"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/putian/buy/"
                           title="莆田二手车">莆田 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=pingdu"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/pingdu/buy/"
                           title="平度二手车">平度 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>Q</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=qd"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/qd/buy/"
                           title="青岛二手车">青岛 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=qinhuangdao"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/qinhuangdao/buy/"
                           title="秦皇岛二手车">秦皇岛 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=qiqihaer"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/qiqihaer/buy/"
                           title="齐齐哈尔二手车">齐齐哈尔 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=quanzhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/quanzhou/buy/"
                           title="泉州二手车">泉州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=qujing"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/qujing/buy/"
                           title="曲靖二手车">曲靖 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=quzhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/quzhou/buy/"
                           title="衢州二手车">衢州 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>R</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=rizhao"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/rizhao/buy/"
                           title="日照二手车">日照 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>S</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=sh"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/sh/buy/"
                           title="上海二手车">上海 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=shantou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/shantou/buy/"
                           title="汕头二手车">汕头 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=shaoxing"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/shaoxing/buy/"
                           title="绍兴二手车">绍兴 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=sy"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/sy/buy/"
                           title="沈阳二手车">沈阳 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=sz"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/sz/buy/"
                           title="深圳二手车">深圳 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=sjz"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/sjz/buy/"
                           title="石家庄二手车">石家庄 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=shiyan"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/shiyan/buy/"
                           title="十堰二手车">十堰 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=songyuan"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/songyuan/buy/"
                           title="松原二手车">松原 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=suining"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/suining/buy/"
                           title="遂宁二手车">遂宁 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=suqian"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/suqian/buy/"
                           title="宿迁二手车">宿迁 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=su"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/su/buy/"
                           title="苏州二手车">苏州 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>T</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=taian"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/taian/buy/"
                           title="泰安二手车">泰安 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=ty"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/ty/buy/"
                           title="太原二手车">太原 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=zjtaizhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/zjtaizhou/buy/"
                           title="台州二手车">台州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=jstaizhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/jstaizhou/buy/"
                           title="泰州二手车">泰州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=tangshan"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/tangshan/buy/"
                           title="唐山二手车">唐山 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=tj"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/tj/buy/"
                           title="天津二手车">天津 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=tongling"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/tongling/buy/"
                           title="铜陵二手车">铜陵 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=taicang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/taicang/buy/"
                           title="太仓二手车">太仓 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=tanggu"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/tanggu/buy/"
                           title="塘沽二手车">塘沽 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>W</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=weifang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/weifang/buy/"
                           title="潍坊二手车">潍坊 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=wei"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/wei/buy/"
                           title="威海二手车">威海 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=wenzhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/wenzhou/buy/"
                           title="温州二手车">温州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=wh"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/wh/buy/"
                           title="武汉二手车">武汉 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=wuhu"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/wuhu/buy/"
                           title="芜湖二手车">芜湖 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=xj"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/xj/buy/"
                           title="乌鲁木齐二手车">乌鲁木齐 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=wx"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/wx/buy/"
                           title="无锡二手车">无锡 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=wafangdian"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/wafangdian/buy/"
                           title="瓦房店二手车">瓦房店 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=wanzhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/wanzhou/buy/"
                           title="万州二手车">万州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=wujiang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/wujiang/buy/"
                           title="吴江二手车">吴江 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=wuqing"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/wuqing/buy/"
                           title="武清二手车">武清 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>X</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=xm"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/xm/buy/"
                           title="厦门二手车">厦门 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=xa"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/xa/buy/"
                           title="西安二手车">西安 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=xiangtan"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/xiangtan/buy/"
                           title="湘潭二手车">湘潭 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=xiangyang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/xiangyang/buy/"
                           title="襄阳二手车">襄阳 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=xiaogan"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/xiaogan/buy/"
                           title="孝感二手车">孝感 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=xingtai"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/xingtai/buy/"
                           title="邢台二手车">邢台 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=xinxiang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/xinxiang/buy/"
                           title="新乡二手车">新乡 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=xinyang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/xinyang/buy/"
                           title="信阳二手车">信阳 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=xuchang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/xuchang/buy/"
                           title="许昌二手车">许昌 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=xuzhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/xuzhou/buy/"
                           title="徐州二手车">徐州 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>Y</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=yancheng"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/yancheng/buy/"
                           title="盐城二手车">盐城 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=yangzhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/yangzhou/buy/"
                           title="扬州二手车">扬州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=yantai"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/yantai/buy/"
                           title="烟台二手车">烟台 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=yibin"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/yibin/buy/"
                           title="宜宾二手车">宜宾 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=yichang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/yichang/buy/"
                           title="宜昌二手车">宜昌 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=jxyichun"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/jxyichun/buy/"
                           title="宜春二手车">宜春 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=yc"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/yc/buy/"
                           title="银川二手车">银川 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=yingkou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/yingkou/buy/"
                           title="营口二手车">营口 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=yueyang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/yueyang/buy/"
                           title="岳阳二手车">岳阳 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=yuncheng"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/yuncheng/buy/"
                           title="运城二手车">运城 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=yixing"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/yixing/buy/"
                           title="宜兴二手车">宜兴 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=yongchuan"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/yongchuan/buy/"
                           title="永川二手车">永川 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=yunyang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/yunyang/buy/"
                           title="云阳二手车">云阳 </a>
                    </dd>
                </dl>
                <dl>
                    <dt>Z</dt>
                    <dd>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=zaozhuang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/zaozhuang/buy/"
                           title="枣庄二手车">枣庄 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=zhangzhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/zhangzhou/buy/"
                           title="漳州二手车">漳州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=zz"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/zz/buy/"
                           title="郑州二手车">郑州 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=zhenjiang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/zhenjiang/buy/"
                           title="镇江二手车">镇江 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=zhongshan"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/zhongshan/buy/"
                           title="中山二手车">中山 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=zhuhai"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/zhuhai/buy/"
                           title="珠海二手车">珠海 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=zhumadian"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/zhumadian/buy/"
                           title="驻马店二手车">驻马店 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=zhuzhou"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/zhuzhou/buy/"
                           title="株洲二手车">株洲 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=zibo"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/zibo/buy/"
                           title="淄博二手车">淄博 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=zigong"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/zigong/buy/"
                           title="自贡二手车">自贡 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=ziyang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/ziyang/buy/"
                           title="资阳二手车">资阳 </a>
                        <a data-gzlog="tracking_type=click&eventid=0020060000000017&select_city=zhangjiagang"
                           baidu_alog="pc_index_city&click&pc_index_all_city_c"
                           href="/zhangjiagang/buy/"
                           title="张家港二手车">张家港 </a>
                    </dd>
                </dl>
            </div>
        </div>

        <div class="header-phone">
            <!--电话判断，当页面处于汽车金融则显示汽车金融电话  -->
            400-630-3579
        </div>

@if(session("phone"))


        <div class="uc js-uc js-uc-new" data-gzlog="tracking_type=click&eventid=1015123400000003">
            <a href="{{ url('/home/person/userstore') }}" class="uc-my" id="js-login">{{ session()->get('phone') }}</a>
            <div class="uc-app" style=display:none>
                <a href="{{ url('/home/userstore') }}" class="js-loginElem1" data-gzlog="tracking_type=click&eventid=1015123400000004">收藏车辆</a>
                <a href="{{ url('/home/userreduce') }}" class="js-loginElem2"
                   data-gzlog="tracking_type=click&eventid=1015123400000005">降价提醒</a>
                <a href="{{ URL('/home/person/userhistory') }}" class="js-loginElem3"
                   data-gzlog="tracking_type=click&eventid=1015123400000006">浏览记录</a>
                <a href="{{ URL('/home/out') }}" class="js-logout js-loginElem4"
                   data-gzlog="tracking_type=click&eventid=1015123400000007">退出</a>
                <i></i>
            </div>
        </div>
            <script type="text/javascript">
                $(".js-uc-new").mouseover(function(){
                  $(".uc-app").show();
                })

            </script>
@else
            <div class="uc js-uc">
                <a class="" id="js-login-temp" href="javascript:di();">
                    <i id="js-login" class="denglu">登录</i>
                </a>
            </div>
@endif



        <div class="nav-list">
            <a class="fl "
               href="{{url('/home/wenda1')}}" data-gzlog="tracking_type=click&eventid=0010000000000012" title="瓜子问答">瓜子问答</a>
            <a class="fr " baidu_alog="pc_index_top_tab&click&pc_index_top_tab_carfina_c"
               href="{{url('/home/fenqi')}}"
               data-gzlog="tracking_type=click&eventid=0010000000000011">瓜子金融</a>
            <a class="fl " baidu_alog="pc_index_top_tab&click&pc_index_top_tab_intro_c"
               href="{{url('/home/fuwubozhang')}}" data-gzlog="tracking_type=click&eventid=0010000000000010">瓜子服务</a>
            <a class="fl " baidu_alog="pc_index_top_tab&click&pc_index_top_tab_sell_c"
               href="{{url('/home/seller')}}" data-gzlog="tracking_type=click&eventid=0010050000000009">我要卖车</a>
            <a class="fl active" baidu_alog="pc_index_top_tab&click&pc_index_top_tab_buy_c"
               href="{{url('/home/buyers')}}" data-gzlog="tracking_type=click&eventid=0010000000000008">我要买车</a>
            <a class="fl " baidu_alog="pc_index_top_tab&click&pc_index_top_tab_index_c"
               href="{{url('/')}}" data-gzlog="tracking_type=click&eventid=0010000000000007">首页</a>
        </div>
    </div>
</div>


<!-- 登录弹层  s -->
<!-- 登录弹框  s -->
        <div class="pop-box pop-login" id="login1">
            <div class="pop-close" id="closeLogin1"></div>
            <p class="pop-tit js-logintitle">瓜子二手车直卖网</p>
            <ul class="phone-login">
                <li>
                    <p class="phone-login-tit">手机号码</p>
        <input class="phone-login-input js-phoneNum1" onblur="du()" name="phone" placeholder="请输入您的手机号码"/><span></span>
                </li>
                <li>
                    <p class="phone-login-tit">&emsp;验证码</p>
                    <input class="phone-login-input phone-login-code js-code1" name="code" placeholder="请输入验证码"/>
                    <input type="button" class="get-code" onclick="doCode()" value="获取验证码">
                </li>
            </ul>
            <p class="p-error" id="loginError1"></p>
            <button class="sub-btn js-checkcode" onclick="doSubmit()">登录</button>
            <p class="free-phone">免费咨询400-630-3279</p>
            <style type="text/css">
      .phone-login-input{
        height:36px;
      }
            </style>
        </div>

<!--[if IE 7]>
<div class="pop-box ie7-pop js-ieUpgrade ">
    <div class="pop-close js-ieUpgradeClose"></div>
    <p class="ie7-pop-tit">浏览器版本过低</p>
    <p class="ie7-pop-txt">Hi，您当前的浏览器版本过低，可能存在安全风险，建议升级浏览器</p>
    <div class="browser-down-box">
        <a href="http://se.360.cn/" target="_blank" class="chrome-btn fl">360 浏览器</a>
        <a href="http://www.firefox.com.cn/" target="_blank" class="ff-btn fr">火狐?浏览器</a>
    </div>
    <div class="guide-ewm">
        <p class="guide-ewm-txt">您也可关注瓜子微信公众号，或下载APP查看车辆哦</p>
        <div class="guide-ewm-box">
            <p class="guide-ewm-weixin fl"></p>
            <p class="guide-ewm-app fr"></p>
        </div>
    </div>
</div>
<div class="pop-mask js-upgradepop "></div>
<![endif]-->

<!-- 弹框蒙层  s -->
<div class="pop-mask"></div>
<!-- 弹框蒙层  e --><!-- 登录弹层  e -->

<script>
    //公用头部登陆后跳转至个人中心时url中需要用到
    var domain = "bj";
    //意见反馈所需城市id
    var cityId = "12"
  </script>
@section('content')






@show
<!-- 右侧浮层 s-->
<div class="right-nav" id="rightNav">
    <a class="toolbar" href="javascript:;">工<br>具<br>栏</a>
    <div class="fix-right js-sidebar">
        <div class="fix-icon fix-icon-1">
            <div class="history-bar js-history">
                <i></i>
                <h3 class="history-title">我看过的车</h3>
                <!-- 有车源 start -->
                <div class="history-source">
                    <div class="history-scroll">
                        <ul class="history-list clearfix">

                        </ul>
                    </div>
                </div>
                <!-- 有车源 end -->
                <!-- 无车源 start -->
                <div class="history-source-no active">
                    <div class="history-tipno">加载中...</div>
                    <div class="history-btn2"><a href="#"></a></div>
                </div>
                <!-- 无车源 start -->
            </div>
        </div>
        <div class="fix-icon fix-icon-2">
            <div class="app-bar">
                <p>下载APP<br>关注更多信息</p>
            </div>
        </div>
        <div class="fix-icon fix-icon-3">
            <div class="wx-bar">
                关注公众号<br>了解更多信息
            </div>
        </div>
        <div class="fix-icon fix-icon-4" data-gzlog="tracking_type=click&eventid=1015123400000014">
            <div class="feedback-bar"><i></i>意见反馈</div>
        </div>
        <div class="fix-icon fix-icon-5">
            <div class="phone-bar"><i></i>免费咨询：400-630-3579</div>
        </div>
        <a href="#jstop">
            <div class="fix-icon fix-icon-6" style="display:none"
                 data-gzlog="tracking_type=click&eventid=1015123400000016"></div>
        </a>
        <div class="fix-icon fix-icon-7 js-subPopup" data-gzlog="tracking_type=click&eventid=1011000000000009"></div>
        <a href="/bj/sell" class="fix-icon fix-icon-8" data-gzlog="tracking_type=click&eventid=0130000000000016">
            <i class="icon-money"></i>
            <i class="icon-sell-txt"></i>
        </a>
        <div class="fix-icon side-bar-line"></div>
    </div>
</div>


<!-- 意见反馈弹窗 s -->
<div class="pop-box pop-box-feed">
    <div class="pop-close js-popclose"></div>
    <p class="feed-tit">意见反馈</p>
    <div class="feed-content active">
        <p class="feed-tit2">您好！感谢您给我们提出的宝贵意见</p>
        <ul class="feed-selectlist clearfix js-feedbacklist" typenum="0">
            <li class="js-feedbacktype" typenum="1"><span class="ficon-radio"><i></i></span>服务不专业</li>
            <li class="js-feedbacktype" typenum="2"><span class="ficon-radio"><i></i></span>带看不及时</li>
            <li class="js-feedbacktype item-design" typenum="3"><span class="ficon-radio"><i></i></span>网页功能，设计问题</li>
            <li class="js-feedbacktype" typenum="4"><span class="ficon-radio"><i></i></span>车辆描述不符</li>
            <li class="js-feedbacktype item-last" typenum="5"><span class="ficon-radio"><i></i></span>乱收费</li>
            <li class="js-feedbacktype" typenum="6"><span class="ficon-radio"><i></i></span>车况不属实</li>
            <li class="js-feedbacktype" typenum="7"><span class="ficon-radio"><i></i></span>退款相关</li>
            <li class="js-feedbacktype item-stop" typenum="8"><span class="ficon-radio"><i></i></span>停售改价</li>
            <li class="js-feedbacktype" typenum="9"><span class="ficon-radio"><i></i></span>其它</li>
        </ul>
        <div class="feed-form">
            <div class="feed-textarea">
                <textarea class="js-fbcontent" maxlength="500"
                          placeholder="您使用我们的产品过程中，有任何意见和建议，在这里可以畅所欲言，我们将据此优化我们的产品为您提供更好的服务。"></textarea>
                <span class="text-limit"><i id="js-fblen">0</i>/500</span>
            </div>
            <div class="feed-textarea2">
                <textarea class="js-fbcontact" name="" placeholder="如果您愿意，请留下您的联系方式（邮箱，电话，QQ都行），我们将尽快回复您。"></textarea>
            </div>
        </div>
        <button class="feed-btn js-feedbtn" data-gzlog="tracking_type=click&eventid=0220050000099004">我要反馈</button>
    </div>
    <!-- 提交后 s -->
    <div class="feed-content2">
        <p class="fb-suc-txt">再次感谢您提出的宝贵意见<br/>我们将尽快回复您！</p>
        <button class="feed-btn js-popclose">关闭</button>
    </div>
    <!-- 提交后 e -->
</div><!-- 意见反馈弹窗 e --><!-- 右侧浮层 e-->


<!-- 一键订阅弹窗 s-->
<div class="pop-box pop-sub js-subscribe" id="subscribe1">

    <div class="pop-close"></div>
    <p class="sub-p1">没有您想要的爱车？</p>
    <p class="sub-p2">订阅后有符合条件的新车上架将通知您</p>
    <ul class="sub-box">
        <li>
            <p class="li-tit">品牌</p>
            <div class="conselect js-subbrand">
                <input class="inputype js-brandinput" readonly="readonly" placeholder="不限" brandnum="0" value="">
                <div class="p-r">
                    <div class="down-box">
                        <div class="brand-box ios js-brandlist js-subscribescroll">
                            <ul class="all-brand ">
                                <li class="js_choosetag" brandnum="0">不限</li>
                            </ul>
                            <p class="s-tt"><a id="hot">热门</a></p>
                            <ul class="hot-car clearfix">
                                <li class="js_choosetag" brandnum="1207">大众</li>
                                <li class="js_choosetag" brandnum="1198">宝马</li>
                                <li class="js_choosetag" brandnum="1199">奥迪</li>
                                <li class="js_choosetag" brandnum="1197">奔驰</li>
                                <li class="js_choosetag" brandnum="1208">现代</li>
                                <li class="js_choosetag" brandnum="1205">福特</li>
                            </ul>

                            <p class="s-tt" data-dict="A"><a id="A">A</a></p>
                            <ul class="all-brand">
                                <li class="js_choosetag" brandnum="1199">奥迪</li>
                                <li class="js_choosetag" brandnum="1219">安驰</li>
                                <li class="js_choosetag" brandnum="103803">AC Schnitzer</li>
                                <li class="js_choosetag" brandnum="1218">阿斯顿·马丁</li>
                                <li class="js_choosetag" brandnum="103819">安凯客车</li>
                                <li class="js_choosetag" brandnum="103764">Alpina</li>
                                <li class="js_choosetag" brandnum="1217">阿尔法·罗密欧</li>
                            </ul>
                            <p class="s-tt" data-dict="B"><a id="B">B</a></p>
                            <ul class="all-brand">
                                <li class="js_choosetag" brandnum="1198">宝马</li>
                                <li class="js_choosetag" brandnum="1197">奔驰</li>
                                <li class="js_choosetag" brandnum="1206">别克</li>
                                <li class="js_choosetag" brandnum="1196">本田</li>
                                <li class="js_choosetag" brandnum="1226">标致</li>
                                <li class="js_choosetag" brandnum="1212">比亚迪</li>
                                <li class="js_choosetag" brandnum="1224">保时捷</li>
                                <li class="js_choosetag" brandnum="103783">北汽绅宝</li>
                                <li class="js_choosetag" brandnum="1225">奔腾</li>
                                <li class="js_choosetag" brandnum="2270">北京</li>
                                <li class="js_choosetag" brandnum="103826">北汽新能源</li>
                                <li class="js_choosetag" brandnum="1222">宾利</li>
                                <li class="js_choosetag" brandnum="2272">宝骏</li>
                                <li class="js_choosetag" brandnum="103779">北汽威旺</li>
                                <li class="js_choosetag" brandnum="103798">宝沃汽车</li>
                                <li class="js_choosetag" brandnum="1223">北汽</li>
                                <li class="js_choosetag" brandnum="103780">北汽幻速</li>
                                <li class="js_choosetag" brandnum="103774">保斐利</li>
                                <li class="js_choosetag" brandnum="1221">宝龙</li>
                                <li class="js_choosetag" brandnum="102721">巴博斯</li>
                                <li class="js_choosetag" brandnum="2259">布加迪</li>
                                <li class="js_choosetag" brandnum="103807">比速汽车</li>
                            </ul>
                            <p class="s-tt" data-dict="C"><a id="C">C</a></p>
                            <ul class="all-brand">
                                <li class="js_choosetag" brandnum="1227">长安</li>
                                <li class="js_choosetag" brandnum="1228">长城</li>
                                <li class="js_choosetag" brandnum="103787">长安商用</li>
                                <li class="js_choosetag" brandnum="103772">传祺</li>
                                <li class="js_choosetag" brandnum="103799">成功汽车</li>
                                <li class="js_choosetag" brandnum="2266">川汽野马</li>
                                <li class="js_choosetag" brandnum="1229">昌河</li>
                                <li class="js_choosetag" brandnum="103812">长安跨越</li>
                            </ul>
                            <p class="s-tt" data-dict="D"><a id="D">D</a></p>
                            <ul class="all-brand">
                                <li class="js_choosetag" brandnum="1207">大众</li>
                                <li class="js_choosetag" brandnum="1239">东风风行</li>
                                <li class="js_choosetag" brandnum="1234">东南</li>
                                <li class="js_choosetag" brandnum="1235">道奇</li>
                                <li class="js_choosetag" brandnum="103765">DS</li>
                                <li class="js_choosetag" brandnum="102712">东风小康</li>
                                <li class="js_choosetag" brandnum="2262">东风风神</li>
                                <li class="js_choosetag" brandnum="103769">东风风度</li>
                                <li class="js_choosetag" brandnum="1233">大发</li>
                                <li class="js_choosetag" brandnum="1230">东风</li>
                            </ul>
                            <p class="s-tt" data-dict="F"><a id="F">F</a></p>
                            <ul class="all-brand">
                                <li class="js_choosetag" brandnum="1205">福特</li>
                                <li class="js_choosetag" brandnum="1195">丰田</li>
                                <li class="js_choosetag" brandnum="1215">福田</li>
                                <li class="js_choosetag" brandnum="1240">菲亚特</li>
                                <li class="js_choosetag" brandnum="102709">福汽启腾</li>
                                <li class="js_choosetag" brandnum="1238">富奇</li>
                                <li class="js_choosetag" brandnum="1237">法拉利</li>
                                <li class="js_choosetag" brandnum="1236">福迪</li>
                            </ul>
                            <p class="s-tt" data-dict="G"><a id="G">G</a></p>
                            <ul class="all-brand">
                                <li class="js_choosetag" brandnum="1242">GMC</li>
                                <li class="js_choosetag" brandnum="102708">观致</li>
                                <li class="js_choosetag" brandnum="1241">光冈</li>
                                <li class="js_choosetag" brandnum="1260">广汽吉奥</li>
                            </ul>
                            <p class="s-tt" data-dict="H"><a id="H">H</a></p>
                            <ul class="all-brand">
                                <li class="js_choosetag" brandnum="103778">哈弗</li>
                                <li class="js_choosetag" brandnum="1252">海马</li>
                                <li class="js_choosetag" brandnum="1248">哈飞</li>
                                <li class="js_choosetag" brandnum="103795">华颂</li>
                                <li class="js_choosetag" brandnum="1255">红旗</li>
                                <li class="js_choosetag" brandnum="103782">海格</li>
                                <li class="js_choosetag" brandnum="103823">华泰新能源</li>
                                <li class="js_choosetag" brandnum="1253">悍马</li>
                                <li class="js_choosetag" brandnum="1256">华泰</li>
                                <li class="js_choosetag" brandnum="102471">黄海</li>
                                <li class="js_choosetag" brandnum="103797">汉腾</li>
                                <li class="js_choosetag" brandnum="1247">黑豹</li>
                                <li class="js_choosetag" brandnum="1316">华北</li>
                                <li class="js_choosetag" brandnum="1259">汇众</li>
                                <li class="js_choosetag" brandnum="1254">华普</li>
                                <li class="js_choosetag" brandnum="102707">恒天</li>
                                <li class="js_choosetag" brandnum="103777">华阳</li>
                            </ul>
                            <p class="s-tt" data-dict="J"><a id="J">J</a></p>
                            <ul class="all-brand">
                                <li class="js_choosetag" brandnum="1261">金杯</li>
                                <li class="js_choosetag" brandnum="1264">江淮</li>
                                <li class="js_choosetag" brandnum="1216">Jeep</li>
                                <li class="js_choosetag" brandnum="1262">捷豹</li>
                                <li class="js_choosetag" brandnum="1200">吉利</li>
                                <li class="js_choosetag" brandnum="103804">金旅</li>
                                <li class="js_choosetag" brandnum="1265">江铃</li>
                                <li class="js_choosetag" brandnum="103805">金龙</li>
                                <li class="js_choosetag" brandnum="2265">九龙</li>
                                <li class="js_choosetag" brandnum="103825">江铃集团新能源</li>
                                <li class="js_choosetag" brandnum="1263">金程</li>
                                <li class="js_choosetag" brandnum="103781">江南</li>
                                <li class="js_choosetag" brandnum="102711">解放</li>
                            </ul>
                            <p class="s-tt" data-dict="K"><a id="K">K</a></p>
                            <ul class="all-brand">
                                <li class="js_choosetag" brandnum="1268">凯迪拉克</li>
                                <li class="js_choosetag" brandnum="1269">克莱斯勒</li>
                                <li class="js_choosetag" brandnum="2258">开瑞</li>
                                <li class="js_choosetag" brandnum="102705">卡威</li>
                                <li class="js_choosetag" brandnum="102464">科尼赛克</li>
                                <li class="js_choosetag" brandnum="103775">凯翼</li>
                                <li class="js_choosetag" brandnum="103827">康迪</li>
                                <li class="js_choosetag" brandnum="102706">卡尔森</li>
                            </ul>
                            <p class="s-tt" data-dict="L"><a id="L">L</a></p>
                            <ul class="all-brand">
                                <li class="js_choosetag" brandnum="1276">路虎</li>
                                <li class="js_choosetag" brandnum="1209">铃木</li>
                                <li class="js_choosetag" brandnum="1278">雷克萨斯</li>
                                <li class="js_choosetag" brandnum="1279">雷诺</li>
                                <li class="js_choosetag" brandnum="1277">林肯</li>
                                <li class="js_choosetag" brandnum="1274">力帆</li>
                                <li class="js_choosetag" brandnum="1273">陆风</li>
                                <li class="js_choosetag" brandnum="1272">罗孚</li>
                                <li class="js_choosetag" brandnum="2269">理念</li>
                                <li class="js_choosetag" brandnum="102469">路特斯</li>
                                <li class="js_choosetag" brandnum="1270">猎豹</li>
                                <li class="js_choosetag" brandnum="1281">劳斯莱斯</li>
                                <li class="js_choosetag" brandnum="103776">劳伦士</li>
                                <li class="js_choosetag" brandnum="1271">兰博基尼</li>
                            </ul>
                            <p class="s-tt" data-dict="M"><a id="M">M</a></p>
                            <ul class="all-brand">
                                <li class="js_choosetag" brandnum="1211">马自达</li>
                                <li class="js_choosetag" brandnum="1284">MINI</li>
                                <li class="js_choosetag" brandnum="1285">玛莎拉蒂</li>
                                <li class="js_choosetag" brandnum="103788">MG</li>
                                <li class="js_choosetag" brandnum="102716">迈凯伦</li>
                                <li class="js_choosetag" brandnum="1286">美亚</li>
                                <li class="js_choosetag" brandnum="1282">迈巴赫</li>
                            </ul>
                            <p class="s-tt" data-dict="N"><a id="N">N</a></p>
                            <ul class="all-brand">
                                <li class="js_choosetag" brandnum="2271">纳智捷</li>
                                <li class="js_choosetag" brandnum="103806">南京金龙</li>
                            </ul>
                            <p class="s-tt" data-dict="O"><a id="O">O</a></p>
                            <ul class="all-brand">
                                <li class="js_choosetag" brandnum="1289">讴歌</li>
                                <li class="js_choosetag" brandnum="102481">欧朗</li>
                                <li class="js_choosetag" brandnum="1288">欧宝</li>
                            </ul>
                            <p class="s-tt" data-dict="Q"><a id="Q">Q</a></p>
                            <ul class="all-brand">
                                <li class="js_choosetag" brandnum="1292">起亚</li>
                                <li class="js_choosetag" brandnum="1201">奇瑞</li>
                                <li class="js_choosetag" brandnum="102478">启辰</li>
                                <li class="js_choosetag" brandnum="1291">庆铃</li>
                                <li class="js_choosetag" brandnum="1275">青年莲花</li>
                            </ul>
                            <p class="s-tt" data-dict="R"><a id="R">R</a></p>
                            <ul class="all-brand">
                                <li class="js_choosetag" brandnum="1202">日产</li>
                                <li class="js_choosetag" brandnum="1293">荣威</li>
                                <li class="js_choosetag" brandnum="2260">瑞麒</li>
                            </ul>
                            <p class="s-tt" data-dict="S"><a id="S">S</a></p>
                            <ul class="all-brand">
                                <li class="js_choosetag" brandnum="1297">斯柯达</li>
                                <li class="js_choosetag" brandnum="102476">Smart</li>
                                <li class="js_choosetag" brandnum="1204">三菱</li>
                                <li class="js_choosetag" brandnum="1294">斯巴鲁</li>
                                <li class="js_choosetag" brandnum="2273">上汽大通</li>
                                <li class="js_choosetag" brandnum="102474">思铭</li>
                                <li class="js_choosetag" brandnum="1299">双龙</li>
                                <li class="js_choosetag" brandnum="103801">赛麟</li>
                                <li class="js_choosetag" brandnum="103802">斯威</li>
                                <li class="js_choosetag" brandnum="102700">陕汽通家</li>
                                <li class="js_choosetag" brandnum="2253">世爵</li>
                                <li class="js_choosetag" brandnum="103786">赛宝</li>
                                <li class="js_choosetag" brandnum="1214">萨博</li>
                                <li class="js_choosetag" brandnum="1296">双环</li>
                                <li class="js_choosetag" brandnum="103766">Scion</li>
                                <li class="js_choosetag" brandnum="103767">SPRINGO</li>
                                <li class="js_choosetag" brandnum="103810">时代</li>
                            </ul>
                            <p class="s-tt" data-dict="T"><a id="T">T</a></p>
                            <ul class="all-brand">
                                <li class="js_choosetag" brandnum="102715">特斯拉</li>
                                <li class="js_choosetag" brandnum="102717">腾势</li>
                                <li class="js_choosetag" brandnum="2257">通用</li>
                                <li class="js_choosetag" brandnum="1300">天马</li>
                                <li class="js_choosetag" brandnum="1301">通田</li>
                            </ul>
                            <p class="s-tt" data-dict="W"><a id="W">W</a></p>
                            <ul class="all-brand">
                                <li class="js_choosetag" brandnum="1203">沃尔沃</li>
                                <li class="js_choosetag" brandnum="1305">五菱</li>
                                <li class="js_choosetag" brandnum="2264">威麟</li>
                                <li class="js_choosetag" brandnum="103822">蔚来</li>
                                <li class="js_choosetag" brandnum="102714">威兹曼</li>
                                <li class="js_choosetag" brandnum="103768">万丰</li>
                                <li class="js_choosetag" brandnum="1304">五十铃</li>
                            </ul>
                            <p class="s-tt" data-dict="X"><a id="X">X</a></p>
                            <ul class="all-brand">
                                <li class="js_choosetag" brandnum="1208">现代</li>
                                <li class="js_choosetag" brandnum="1307">雪佛兰</li>
                                <li class="js_choosetag" brandnum="1213">雪铁龙</li>
                                <li class="js_choosetag" brandnum="102465">夏利</li>
                                <li class="js_choosetag" brandnum="1308">新凯</li>
                                <li class="js_choosetag" brandnum="2255">西雅特</li>
                            </ul>
                            <p class="s-tt" data-dict="Y"><a id="Y">Y</a></p>
                            <ul class="all-brand">
                                <li class="js_choosetag" brandnum="1310">英菲尼迪</li>
                                <li class="js_choosetag" brandnum="1210">一汽</li>
                                <li class="js_choosetag" brandnum="1311">依维柯</li>
                                <li class="js_choosetag" brandnum="103784">英致</li>
                                <li class="js_choosetag" brandnum="2261">永源</li>
                                <li class="js_choosetag" brandnum="103831">御捷</li>
                                <li class="js_choosetag" brandnum="1313">扬子</li>
                            </ul>
                            <p class="s-tt" data-dict="Z"><a id="Z">Z</a></p>
                            <ul class="all-brand">
                                <li class="js_choosetag" brandnum="1318">众泰</li>
                                <li class="js_choosetag" brandnum="1315">中华</li>
                                <li class="js_choosetag" brandnum="103796">知豆</li>
                                <li class="js_choosetag" brandnum="103771">中顺</li>
                                <li class="js_choosetag" brandnum="103770">中欧</li>
                                <li class="js_choosetag" brandnum="1319">中兴</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </li>


    </ul>
    <div class="open-more js-submore">
        展开更多条件<i></i>
    </div>
    <ul class="sub-box js-submoreshow" style="display:none">
        <li>
            <p class="li-tit">城市</p>
            <div class="conselect conselect-up js-licensecity">
                <input class="inputype inputype-508 js-licensecityinput" readonly="readonly" placeholder="不限"
                       value="北京">
                <div class="p-r">
                    <div class="down-box up-box-368">
                        <div class="open-city js-licensecitylist js-subscribescroll">
                            <dl>
                                <dl>
                                    <dt><a>&nbsp;</a></dt>
                                    <dd>
                                        <p class="js_chooselicensecity" cityid="-1">全国</p>
                                    </dd>
                                </dl>
                            </dl>
                            <dl>
                                <dt><a id="A2">A</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="127">安庆</p>
                                    <p class="js_chooselicensecity" cityid="57">鞍山</p>
                                    <p class="js_chooselicensecity" cityid="109">安阳</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a id="B2">B</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="6">保定</p>
                                    <p class="js_chooselicensecity" cityid="146">包头</p>
                                    <p class="js_chooselicensecity" cityid="12">北京</p>
                                    <p class="js_chooselicensecity" cityid="125">蚌埠</p>
                                    <p class="js_chooselicensecity" cityid="122">滨州</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a id="C2">C</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="9">沧州</p>
                                    <p class="js_chooselicensecity" cityid="84">长春</p>
                                    <p class="js_chooselicensecity" cityid="210">常德</p>
                                    <p class="js_chooselicensecity" cityid="204">长沙</p>
                                    <p class="js_chooselicensecity" cityid="158">长治</p>
                                    <p class="js_chooselicensecity" cityid="69">常州</p>
                                    <p class="js_chooselicensecity" cityid="8">承德</p>
                                    <p class="js_chooselicensecity" cityid="45">成都</p>
                                    <p class="js_chooselicensecity" cityid="15">重庆</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a id="D2">D</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="56">大连</p>
                                    <p class="js_chooselicensecity" cityid="98">大庆</p>
                                    <p class="js_chooselicensecity" cityid="156">大同</p>
                                    <p class="js_chooselicensecity" cityid="53">达州</p>
                                    <p class="js_chooselicensecity" cityid="48">德阳</p>
                                    <p class="js_chooselicensecity" cityid="308">德州</p>
                                    <p class="js_chooselicensecity" cityid="24">东莞</p>
                                    <p class="js_chooselicensecity" cityid="117">东营</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a id="E2">E</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="150">鄂尔多斯</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a id="F2">F</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="20">佛山</p>
                                    <p class="js_chooselicensecity" cityid="58">抚顺</p>
                                    <p class="js_chooselicensecity" cityid="129">阜阳</p>
                                    <p class="js_chooselicensecity" cityid="75">福州</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a id="G2">G</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="220">赣州</p>
                                    <p class="js_chooselicensecity" cityid="278">广安</p>
                                    <p class="js_chooselicensecity" cityid="16">广州</p>
                                    <p class="js_chooselicensecity" cityid="134">桂林</p>
                                    <p class="js_chooselicensecity" cityid="36">贵阳</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a id="H2">H</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="93">哈尔滨</p>
                                    <p class="js_chooselicensecity" cityid="4">邯郸</p>
                                    <p class="js_chooselicensecity" cityid="26">杭州</p>
                                    <p class="js_chooselicensecity" cityid="123">合肥</p>
                                    <p class="js_chooselicensecity" cityid="11">衡水</p>
                                    <p class="js_chooselicensecity" cityid="338">菏泽</p>
                                    <p class="js_chooselicensecity" cityid="72">淮安</p>
                                    <p class="js_chooselicensecity" cityid="328">黄冈</p>
                                    <p class="js_chooselicensecity" cityid="195">黄石</p>
                                    <p class="js_chooselicensecity" cityid="145">呼和浩特</p>
                                    <p class="js_chooselicensecity" cityid="23">惠州</p>
                                    <p class="js_chooselicensecity" cityid="30">湖州</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a id="J2">J</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="100">佳木斯</p>
                                    <p class="js_chooselicensecity" cityid="221">吉安</p>
                                    <p class="js_chooselicensecity" cityid="21">江门</p>
                                    <p class="js_chooselicensecity" cityid="106">焦作</p>
                                    <p class="js_chooselicensecity" cityid="29">嘉兴</p>
                                    <p class="js_chooselicensecity" cityid="85">吉林</p>
                                    <p class="js_chooselicensecity" cityid="113">济南</p>
                                    <p class="js_chooselicensecity" cityid="198">荆州</p>
                                    <p class="js_chooselicensecity" cityid="32">金华</p>
                                    <p class="js_chooselicensecity" cityid="304">济宁</p>
                                    <p class="js_chooselicensecity" cityid="60">锦州</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a id="K2">K</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="293">开封</p>
                                    <p class="js_chooselicensecity" cityid="225">昆明</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a id="L2">L</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="10">廊坊</p>
                                    <p class="js_chooselicensecity" cityid="166">兰州</p>
                                    <p class="js_chooselicensecity" cityid="50">乐山</p>
                                    <p class="js_chooselicensecity" cityid="309">聊城</p>
                                    <p class="js_chooselicensecity" cityid="62">辽阳</p>
                                    <p class="js_chooselicensecity" cityid="164">临汾</p>
                                    <p class="js_chooselicensecity" cityid="307">临沂</p>
                                    <p class="js_chooselicensecity" cityid="133">柳州</p>
                                    <p class="js_chooselicensecity" cityid="132">六安</p>
                                    <p class="js_chooselicensecity" cityid="104">洛阳</p>
                                    <p class="js_chooselicensecity" cityid="47">泸州</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a id="M2">M</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="126">马鞍山</p>
                                    <p class="js_chooselicensecity" cityid="279">眉山</p>
                                    <p class="js_chooselicensecity" cityid="49">绵阳</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a id="N2">N</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="214">南昌</p>
                                    <p class="js_chooselicensecity" cityid="51">南充</p>
                                    <p class="js_chooselicensecity" cityid="65">南京</p>
                                    <p class="js_chooselicensecity" cityid="142">南宁</p>
                                    <p class="js_chooselicensecity" cityid="70">南通</p>
                                    <p class="js_chooselicensecity" cityid="111">南阳</p>
                                    <p class="js_chooselicensecity" cityid="277">内江</p>
                                    <p class="js_chooselicensecity" cityid="27">宁波</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a id="P2">P</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="77">莆田</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a id="Q2">Q</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="114">青岛</p>
                                    <p class="js_chooselicensecity" cityid="3">秦皇岛</p>
                                    <p class="js_chooselicensecity" cityid="94">齐齐哈尔</p>
                                    <p class="js_chooselicensecity" cityid="79">泉州</p>
                                    <p class="js_chooselicensecity" cityid="226">曲靖</p>
                                    <p class="js_chooselicensecity" cityid="33">衢州</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a id="R2">R</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="306">日照</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a id="S2">S</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="13">上海</p>
                                    <p class="js_chooselicensecity" cityid="19">汕头</p>
                                    <p class="js_chooselicensecity" cityid="31">绍兴</p>
                                    <p class="js_chooselicensecity" cityid="55">沈阳</p>
                                    <p class="js_chooselicensecity" cityid="17">深圳</p>
                                    <p class="js_chooselicensecity" cityid="1">石家庄</p>
                                    <p class="js_chooselicensecity" cityid="197">十堰</p>
                                    <p class="js_chooselicensecity" cityid="90">松原</p>
                                    <p class="js_chooselicensecity" cityid="276">遂宁</p>
                                    <p class="js_chooselicensecity" cityid="292">宿迁</p>
                                    <p class="js_chooselicensecity" cityid="67">苏州</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a id="T2">T</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="305">泰安</p>
                                    <p class="js_chooselicensecity" cityid="155">太原</p>
                                    <p class="js_chooselicensecity" cityid="35">台州</p>
                                    <p class="js_chooselicensecity" cityid="291">泰州</p>
                                    <p class="js_chooselicensecity" cityid="2">唐山</p>
                                    <p class="js_chooselicensecity" cityid="14">天津</p>
                                    <p class="js_chooselicensecity" cityid="312">铜陵</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a id="W2">W</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="119">潍坊</p>
                                    <p class="js_chooselicensecity" cityid="120">威海</p>
                                    <p class="js_chooselicensecity" cityid="28">温州</p>
                                    <p class="js_chooselicensecity" cityid="194">武汉</p>
                                    <p class="js_chooselicensecity" cityid="124">芜湖</p>
                                    <p class="js_chooselicensecity" cityid="241">乌鲁木齐</p>
                                    <p class="js_chooselicensecity" cityid="66">无锡</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a id="X2">X</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="76">厦门</p>
                                    <p class="js_chooselicensecity" cityid="176">西安</p>
                                    <p class="js_chooselicensecity" cityid="206">湘潭</p>
                                    <p class="js_chooselicensecity" cityid="196">襄阳</p>
                                    <p class="js_chooselicensecity" cityid="327">孝感</p>
                                    <p class="js_chooselicensecity" cityid="5">邢台</p>
                                    <p class="js_chooselicensecity" cityid="108">新乡</p>
                                    <p class="js_chooselicensecity" cityid="298">信阳</p>
                                    <p class="js_chooselicensecity" cityid="295">许昌</p>
                                    <p class="js_chooselicensecity" cityid="68">徐州</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a id="Y2">Y</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="73">盐城</p>
                                    <p class="js_chooselicensecity" cityid="74">扬州</p>
                                    <p class="js_chooselicensecity" cityid="118">烟台</p>
                                    <p class="js_chooselicensecity" cityid="52">宜宾</p>
                                    <p class="js_chooselicensecity" cityid="199">宜昌</p>
                                    <p class="js_chooselicensecity" cityid="222">宜春</p>
                                    <p class="js_chooselicensecity" cityid="165">银川</p>
                                    <p class="js_chooselicensecity" cityid="61">营口</p>
                                    <p class="js_chooselicensecity" cityid="209">岳阳</p>
                                    <p class="js_chooselicensecity" cityid="162">运城</p>
                                </dd>
                            </dl>
                            <dl>
                                <dt><a id="Z2">Z</a></dt>
                                <dd>
                                    <p class="js_chooselicensecity" cityid="116">枣庄</p>
                                    <p class="js_chooselicensecity" cityid="80">漳州</p>
                                    <p class="js_chooselicensecity" cityid="103">郑州</p>
                                    <p class="js_chooselicensecity" cityid="290">镇江</p>
                                    <p class="js_chooselicensecity" cityid="25">中山</p>
                                    <p class="js_chooselicensecity" cityid="18">珠海</p>
                                    <p class="js_chooselicensecity" cityid="300">驻马店</p>
                                    <p class="js_chooselicensecity" cityid="205">株洲</p>
                                    <p class="js_chooselicensecity" cityid="115">淄博</p>
                                    <p class="js_chooselicensecity" cityid="46">自贡</p>
                                    <p class="js_chooselicensecity" cityid="282">资阳</p>
                                </dd>
                            </dl>
                        </div>
                        <ul class="letter-sel city-letter-sel">
                            <li class="js-letter1" data-index="E2"><a href="javascript:">E</a></li>
                            <li class="js-letter1" data-index="F2"><a href="javascript:">F</a></li>
                            <li class="js-letter1" data-index="G2"><a href="javascript:">G</a></li>
                            <li class="js-letter1" data-index="H2"><a href="javascript:">H</a></li>
                            <li class="js-letter1" data-index="J2"><a href="javascript:">J</a></li>
                            <li class="js-letter1" data-index="K2"><a href="javascript:">K</a></li>
                            <li class="js-letter1" data-index="L2"><a href="javascript:">L</a></li>
                            <li class="js-letter1" data-index="M2"><a href="javascript:">M</a></li>
                            <li class="js-letter1" data-index="N2"><a href="javascript:">N</a></li>
                            <li class="js-letter1" data-index="P2"><a href="javascript:">P</a></li>
                            <li class="js-letter1" data-index="Q2"><a href="javascript:">Q</a></li>
                            <li class="js-letter1" data-index="R2"><a href="javascript:">R</a></li>
                            <li class="js-letter1" data-index="S2"><a href="javascript:">S</a></li>
                            <li class="js-letter1" data-index="T2"><a href="javascript:">T</a></li>
                            <li class="js-letter1" data-index="W2"><a href="javascript:">W</a></li>
                            <li class="js-letter1" data-index="X2"><a href="javascript:">X</a></li>
                            <li class="js-letter1" data-index="Y2"><a href="javascript:">Y</a></li>
                            <li class="js-letter1" data-index="Z2"><a href="javascript:">Z</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <p class="li-tit">颜色</p>
            <div class="conselect conselect-up js-colour">
                <input class="inputype js-colourinput" placeholder="不限" readonly="readonly" colournum="0" value="">
                <div class="p-r">
                    <div class="down-box up-box-311">
                        <ul class="com-ul js-colourlist js-subscribescroll">
                            <li class="com-li js_choosecolour" colournum="0">不限</li>
                            <li class="com-li js_choosecolour" colournum="1">黑色</li>
                            <li class="com-li js_choosecolour" colournum="2">白色</li>
                            <li class="com-li js_choosecolour" colournum="3">银灰色</li>
                            <li class="com-li js_choosecolour" colournum="4">深灰色</li>
                            <li class="com-li js_choosecolour" colournum="6">红色</li>
                            <li class="com-li js_choosecolour" colournum="10">橙色</li>
                            <li class="com-li js_choosecolour" colournum="8">绿色</li>
                            <li class="com-li js_choosecolour" colournum="7">蓝色</li>
                            <li class="com-li js_choosecolour" colournum="5">咖啡色</li>
                            <li class="com-li js_choosecolour" colournum="12">紫色</li>
                            <li class="com-li js_choosecolour" colournum="11">香槟色</li>
                            <li class="com-li js_choosecolour" colournum="13">多彩色</li>
                            <li class="com-li js_choosecolour" colournum="9">黄色</li>
                            <li class="com-li js_choosecolour" colournum="14">其它</li>
                        </ul>
                    </div>
                </div>
            </div>
            <p class="li-tit">变速箱</p>
            <div class="conselect conselect-up js-gearbox">
                <input class="inputype js-gearboxinput" placeholder="不限" readonly="readonly" seiresnum="0" value="">
                <div class="p-r">
                    <div class="down-box up-box-159">
                        <ul class="com-ul js-gearboxlist">
                            <li class="com-li js_choosegearbox" gearboxnum="0">不限</li>
                            <li class="com-li js_choosegearbox" gearboxnum="1">手动</li>
                            <li class="com-li js_choosegearbox" gearboxnum="2">自动</li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <p class="li-tit">国别</p>
            <div class="conselect conselect-up js-country">
                <input class="inputype js-countryinput" placeholder="不限" readonly="readonly" countrynum="0" value="">
                <div class="p-r">
                    <div class="down-box up-box-311">
                        <ul class="com-ul js-countrylist js-subscribescroll">
                            <li class="com-li js_choosecountry" countrynum="0">不限</li>
                            <li class="com-li js_choosecountry" countrynum="4">德系</li>
                            <li class="com-li js_choosecountry" countrynum="5">日系</li>
                            <li class="com-li js_choosecountry" countrynum="2">美系</li>
                            <li class="com-li js_choosecountry" countrynum="1">法系</li>
                            <li class="com-li js_choosecountry" countrynum="6">韩系</li>
                            <li class="com-li js_choosecountry" countrynum="3">国产</li>
                            <li class="com-li js_choosecountry" countrynum="7">其他</li>
                        </ul>
                    </div>
                </div>
            </div>
            <p class="li-tit">排放标准</p>
            <div class="conselect conselect-up js-emission">
                <input class="inputype js-emissioninput" placeholder="不限" readonly="readonly" emissionum="0" value="">
                <div class="p-r">
                    <div class="down-box up-box-223">
                        <ul class="com-ul js-emissionlist">
                            <li class="com-li js_choosemission" emissionum="0">不限</li>
                            <li class="com-li js_choosemission" emissionum="1">国二及以上</li>
                            <li class="com-li js_choosemission" emissionum="2">国三及以上</li>
                            <li class="com-li js_choosemission" emissionum="3">国四及以上</li>
                            <li class="com-li js_choosemission" emissionum="4">国五</li>
                        </ul>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <p class="subscribed js-suberror">&nbsp;</p>
    <button class="one-key-sub js-submit">一键订阅</button>
</div>
<!-- 一键订阅弹窗 e-->
<!-- 一键订阅结果弹窗 s-->
<div class="pop-box pop-2 js-subexceed">
    <div class="pop-close"></div>
    <div class="sub-error"><span></span>超过订阅条件上限</div>
    <p class="sub-error-tip">您的账号订阅已超过10条，下载APP，对已订阅的条件进行编辑</p>
    <p class="app-load-img"></p>
</div>
<div class="pop-box pop-success js-subsuccess">
    <div class="pop-close"></div>
    <p class="pop-tit"><i class="icon-success"></i>提交成功！</p>
    <br>
    <p class="success-tip-submit">提交成功，如有符合条件车源上架，我们将会通过短信或瓜子app推送的方式通知您</p>
    <!--    提交成功，如有符合条件车源上架，我们将会通过短信或瓜子app推送的方式通知您-->
    <div class="success-main">
        <h3>APP四大法宝</h3>
        <ul class="app-list clearfix">
            <li><i></i>收藏查看-更方便</li>
            <li class="active"><i></i>账户管理-更智能</li>
            <li><i></i>降价提醒-更及时</li>
            <li><i></i>新车上架-更实时</li>
        </ul>
        <div class="app-load">
            <p class="app-load-img"></p>
            <p class="app-load-text">扫码下载APP，实惠早知道</p>
        </div>
    </div>
</div>
<div class="pop-box pop-2 js-subduplicate">
    <div class="pop-close"></div>
    <div class="sub-error sub-error-2"><span></span>当前订阅条件已存在</div>
    <div class="mod-sub js-mod-sub" data-gzlog="tracking_type=click&eventid=1011000000000014">修改订阅条件</div>
    <p class="free-phone">免费咨询400-630-3579</p>
</div><!-- 一键订阅结果弹窗 e-->

<!-- 尾部 -->
<div class="footer">
    <!--加载footer 信息部分 -->
    <div class="company-info clearfix">
        <div class="footer-logo"></div>
        <div class="phone-email">
            <p>
                咨询电话：<i>400-630-3579</i> <br>
                <span>（周一至周日 8:00-21:00）</span>
            </p>
            <p>售后服务专线：400-066-8780 </p>
        </div>
        <img src="{{ asset('style/img/ewm-wx-2.png') }}" alt="" class="gz-ewm">
        <p class="ewm-tit">关注微信</p>
        <img src="{{ asset('style/img/ewm-app-2.png') }}" alt="" class="gz-ewm">
        <p class="ewm-tit">下载APP</p>
        <div class="basic-info">
            <div class="info-link">
                <a rel="nofollow" href="/bj/aboutus/" target="_blank">关于瓜子</a>
                <a rel="nofollow" href="/bj/join/" target="_blank">加入我们</a>
                <a rel="nofollow" href="/bj/contact" target="_blank">联系我们</a>
                <a rel="nofollow" href="/bj/intro/" target="_blank">服务保障</a>
            </div>
            <p class="arc-info">Copyright 2017 www.guazi.com All Rights Reserved</p>
            <p class="arc-info">京ICP备15053955号 ICP证151071号 </p>
            <div class="protect clearfix">
                <a class="police" rel="nofollow" target="_blank"
                   href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020161">京公网安备11010802020161号</a>
                <a id='___szfw_logo___' href="https://credit.szfw.org/CX20170627038575010339.html" class="icon-xin"
                   target="_blank"></a>
                <a id='___szfw_logo___1' href="https://credit.szfw.org/CX20170627038575571073.html" class="icon-315"
                   target="_blank"></a>
            </div>
            <!--        <div style="width:300px;margin:0 auto; padding:20px 0;">-->
            <!--            <a rel="nofollow" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020161" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="-->
            <!--" style="float:left;"/><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#939393;">京公网安备 11010802020161号</p></a>-->
            <!--        </div>-->
        </div>
    </div>
    <script type='text/javascript'>(function () {
        document.getElementById('___szfw_logo___').oncontextmenu = function () {
            return false;
        }
    })();</script>
    <script type='text/javascript'>(function () {
        document.getElementById('___szfw_logo___1').oncontextmenu = function () {
            return false;
        }
    })();</script>
    <!--seo 链接 -->
    <div class="friendly-link">
        <p class="link-tit">热门城市:</p>
        <span class="open-box"></span>
        <span class="close-box" data-role="is_show_box"></span>
        <a href="/www/" target="_blank">全国二手车</a>
        <a href="/zz/" target="_blank">郑州二手车</a>
        <a href="/sh/" target="_blank">上海二手车</a>
        <a href="/sy/" target="_blank">沈阳二手车</a>
        <a href="/km/" target="_blank">昆明二手车</a>
        <a href="/bj/" target="_blank">北京二手车</a>
        <a href="/nn/" target="_blank">南宁二手车</a>
        <a href="/cc/" target="_blank">长春二手车</a>
        <a href="/cd/" target="_blank">成都二手车</a>
        <a href="/tj/" target="_blank">天津二手车</a>
        <a href="/gz/" target="_blank">广州二手车</a>
        <a href="/cq/" target="_blank">重庆二手车</a>
        <a href="/dg/" target="_blank">东莞二手车</a>
        <a href="/dl/" target="_blank">大连二手车</a>
        <a href="/sjz/" target="_blank">石家庄二手车</a>
        <a href="/hz/" target="_blank">杭州二手车</a>
        <a href="/lz/" target="_blank">兰州二手车</a>
        <a href="/qd/" target="_blank">青岛二手车</a>
        <a href="/xa/" target="_blank">西安二手车</a>
        <a href="/nb/" target="_blank">宁波二手车</a>
        <a href="/jn/" target="_blank">济南二手车</a>
        <a href="/sz/" target="_blank">深圳二手车</a>
        <a href="/gy/" target="_blank">贵阳二手车</a>
        <a href="/tangshan/" target="_blank">唐山二手车</a>
        <a href="/hrb/" target="_blank">哈尔滨二手车</a>
        <a href="/su/" target="_blank">苏州二手车</a>
        <a href="/wh/" target="_blank">武汉二手车</a>
        <a href="/foshan/" target="_blank">佛山二手车</a>
        <a href="/fz/" target="_blank">福州二手车</a>
        <a href="/nj/" target="_blank">南京二手车</a>
        <a href="/cs/" target="_blank">长沙二手车</a>
        <a href="/zq_map/allmap/" target="_blank">二手车信息推荐</a>
        <a href="/zq_pd/suoyin/s_a/" target="_blank">汽车信息</a>
    </div>


    <div class="friendly-link">
        <p class="link-tit">周边城市:</p>
        <span class="open-box"></span>
        <span class="close-box" data-role="is_show_box"></span>
        <a href="/tj/" target="_blank">天津二手车</a>
        <a href="/tangshan/" target="_blank">唐山二手车</a>
        <a href="/sjz/" target="_blank">石家庄二手车</a>
        <a href="/qinhuangdao/" target="_blank">秦皇岛二手车</a>
        <a href="/xingtai/" target="_blank">邢台二手车</a>
        <a href="/chengde/" target="_blank">承德二手车</a>
        <a href="/hengshui/" target="_blank">衡水二手车</a>
        <a href="/langfang/" target="_blank">廊坊二手车</a>
    </div>

    <div class="friendly-link">
        <p class="link-tit">友情链接：</p>
        <span class="open-box"></span>
        <span class="close-box" data-role="is_show_box"></span>
        <a href="http://www.chinawutong.com/223/p1c1l1n-1/">北京物流公司</a>
        <a href="http://jiaxiao.jxedt.com/bj/">北京驾校</a>
        <a href="http://www.diandong.com/news/">电动汽车新闻</a>
        <a href="http://cz.xcabc.com/s/beijing">北京车展</a>
    </div>


    <div class="friendly-link">
        <p class="link-tit">移动版：</p>
        <!--    <span class="open-box"></span>-->
        <!--    <span class="close-box" data-role="is_show_box"></span>-->
        <a href="http://m.guazi.com/bj/">瓜子二手车北京移动页</a>
    </div>

    <div class="friendly-link">
        <p class="link-tit">热门页面：</p>
        <span class="open-box"></span>
        <span class="close-box" data-role="is_show_box"></span>
        <a href="//www.guazi.com/www/buy/b1e1/">1万元二手车</a>
        <a href="//www.guazi.com/www/buy/b2e2/">2万左右二手车</a>
        <a href="//www.guazi.com/www/buy/p11/">3万的二手车</a>
        <a href="//www.guazi.com/www/buy/b4e4/">4万的二手车</a>
        <a href="//www.guazi.com/www/buy/p3/">5万以下二手车</a>
        <a href="//www.guazi.com/www/buy/h2/">二手越野车</a>
        <a href="//www.guazi.com/www/buy/h3/">二手商务车</a>
        <a href="//www.guazi.com/www/buy/h4/">二手跑车</a>
        <a href="//www.guazi.com/www/buy/n2/">自动挡二手车</a>
        <a href="//www.guazi.com/www/buy/a3/">急卖二手车</a>
        <a href="//www.guazi.com/www/buy/i1/">低价出售二手车</a>
        <a href="//www.guazi.com/www/sell/">二手车评估</a>
        <a href="//jr.guazi.com/all/">二手车分期付款</a>
        <a href="//www.guazi.com/www/buy/i2/">二手豪华车</a>
        <a href="//www.guazi.com/www/buy/h2f2/">二手柴油越野车</a>
        <a href="//www.guazi.com/www/buy/s7/">7座二手车</a>
        <a href="//www.guazi.com/www/audi/i1/">便宜二手奥迪</a>
        <a href="//www.guazi.com/www/buy/f2/">柴油二手车</a>
        <a href="//www.guazi.com/www/buy/f3/">二手电动汽车</a>
        <a href="//www.guazi.com/www/buy/i7/">最新二手车</a>
        <a href="//www.guazi.com/www/buy/">买卖二手车</a>
        <a href="//www.guazi.com/www/buy/h3s7/">二手七座商务车</a>
        <a href="//www.guazi.com/www/">全国二手车</a>
        <a href="//www.guazi.com/zq_ose/bj_nkw/">北京二手车交易网</a>
    </div>

    <!--公司信息-->
    <p style="text-align:center;line-height:20px;font-size:12px;color:#666; padding-top:20px;">
        车好多旧机动车经纪（北京）有限公司&emsp;&emsp;&emsp;
        北京市丰台区南四环中路260号北京新发地汽车交易市场旧车经营区B区178号&emsp;&emsp;&emsp;
        010-57317000
    </p></div>


<input type="hidden" class="hide_gich" value="">
<div style='display:none;' class='js-check-post-code' data-str='19ce895887638f2b6549f1c6f695d5eb'
     data-time='1499178602'></div>
<input type="hidden" data-role="dataSource" class="dataSourceButton" data-source='[]'>
</body>
</html>