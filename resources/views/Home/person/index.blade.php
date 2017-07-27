@extends('base_1')
    @section('content')

<!-- 主体 s -->
<div class="person-main">
    <!-- 左菜单 s -->
    <div class="person-left js-left-side">
    <p class="user-img"></p>
    <p class="user-info">个人中心<span>手机号：13520147870</span></p>
    <ul class="user-menu">
        <li><a data-gzlog="tracking_type=click&amp;eventid=1016123400000001" href="{{url('home/person/userstore')}}">收藏车辆</a></li>
        <li><a data-gzlog="tracking_type=click&amp;eventid=1016123400000003" class="active" href="{{url('home/person')}}">降价提醒</a></li>
        <li><a data-gzlog="tracking_type=click&amp;eventid=1016123400000006" href="{{url('home/person/userhistory')}}">浏览记录</a></li>
    </ul>
</div>    <!-- 左菜单 e -->

       <!-- 右列表 s -->
    <div class="person-right js-info-body" data-souce="History" last-page="1" deal-clueid="0;">
	 @if($list != null)
	 @foreach ($list as $val)
    <div class="person-source js-carList active" id="kuang">
        <ul class="person-list person-list-price clearfix">
            <li class="list-infoBox js-oneInfo" puid="3001961610" clueid="14549078"><a href="https://www.guazi.com/bj/61798df0023f9ce0x.htm" class="info-img">
			<img src="{{ $val['picture']}}"></a>
			<a href="{{url('home/pricereminder/del')}}/{{$val['id']}}" class="icon-delete js-delete-store-click">删除</a>
			<a class="info-name" href="https://www.guazi.com/bj/61798df0023f9ce0x.htm">东风雪铁龙</a><p class="info-mile">2013年10月上牌<em>|</em>行驶9.1万公里</p>
			<p class="info-price"><span class="price-curr">{{ $val['price']}}</span><span class="price-through">33.00万</span></p></li>
		</ul>
    </div>
	  @endforeach
	@else	
        <!-- 无记录 s -->
		<div class="person-source-no js-load active">
            <div class="source-none js-load-text">车源加载中.....</div>
            <div class="source-btn"><a href="">去逛逛瓜子海量车源 &gt;</a></div>
        </div>
		@endif
        <!-- 无记录 s -->
	
    </div>
    <!-- 右列表 e -->

</div>
<!-- 弹层  s -->
<div class="pop-mask"></div>
<!-- 删除车辆弹窗 s -->
<div class="pop-box pop-box-person js-delete-pop">
    <div class="pop-close js-close-pop"></div>
    <p class="person-tit">删除车辆</p>
    <p class="person-tip">确认要删除该车辆吗？</p>
    <p class="person-btn">
        <a class="btn-cancel js-close-pop" href="javascript:void(0)">取消</a>
        <a data-gzlog="tracking_type=click&amp;eventid=1016123400000004" class="btn-primary js-delete-store" href="javascript:void(0)">删除车辆</a>
    </p>
</div>

<!-- 删除车辆弹窗 e -->
<!-- 收藏成功弹窗 s -->
<div class="pop-box pop-box-person js-store-success">
    <div class="pop-close js-close-pop"></div>
    <p class="person-tit">收藏成功</p>
    <p class="person-tip">您可在个人中心“收藏车辆”栏目查看该车辆哦~</p>
    <p class="person-btn">
        <a class="btn-primary js-close-pop" href="javascript:void(0)">知道了</a>
    </p>
</div>

<!-- 收藏成功弹窗 e -->
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
        <div class="history-btn2"><a href="https://www.guazi.com/bj/userreduce#"></a></div>
    </div>
    <!-- 无车源 start -->
</div>        </div>
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
        <div class="fix-icon fix-icon-4" data-gzlog="tracking_type=click&amp;eventid=1015123400000014">
            <div class="feedback-bar"><i></i>意见反馈</div>
        </div>
        <div class="fix-icon fix-icon-5">
            <div class="phone-bar"><i></i>免费咨询：400-686-9943</div>
        </div>
        <a href="https://www.guazi.com/bj/userreduce#jstop"><div class="fix-icon fix-icon-6" style="display:none" data-gzlog="tracking_type=click&amp;eventid=1015123400000016"></div></a>
        <div class="fix-icon fix-icon-7 js-subPopup" data-gzlog="tracking_type=click&amp;eventid=1011000000000009"></div>
        <a href="https://www.guazi.com/bj/sell" class="fix-icon fix-icon-8" data-gzlog="tracking_type=click&amp;eventid=0130000000000016">
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
                <textarea class="js-fbcontent" maxlength="500" placeholder="您使用我们的产品过程中，有任何意见和建议，在这里可以畅所欲言，我们将据此优化我们的产品为您提供更好的服务。"></textarea>
                <span class="text-limit"><i id="js-fblen">0</i>/500</span>
            </div>
            <div class="feed-textarea2">
                <textarea class="js-fbcontact" name="" placeholder="如果您愿意，请留下您的联系方式（邮箱，电话，QQ都行），我们将尽快回复您。"></textarea>
            </div>
        </div>
        <button class="feed-btn js-feedbtn" data-gzlog="tracking_type=click&amp;eventid=0220050000099004">我要反馈</button>
    </div>
    <!-- 提交后 s -->
    <div class="feed-content2">
        <p class="fb-suc-txt">再次感谢您提出的宝贵意见<br>我们将尽快回复您！</p>
        <button class="feed-btn js-popclose">关闭</button>
    </div>
    <!-- 提交后 e -->
</div><!-- 意见反馈弹窗 e --><!-- 右侧浮层 e-->
<!-- 底部  s -->
@endsection('content')