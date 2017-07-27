@extends('base')
    @section('content')


<div class="bannerArea">
    <div class="wrapper">
        <div class="infoArea" id="applyForm">

            <!-- selfSupport -->
            <div class="selfSupport hide">
                <div class="infoTitle">
                    定制方案 <span>资质越好，方案越划算</span>
                </div>
                <div class="inArea codeBtnArea">
                    <input type="text" id="selfPhone" maxlength="11" class="fullInput" placeholder="请输入您的手机号码">
                    <div class="codeBtn" id="codeBtn">获取验证码</div>
                </div>
                <div class="inArea">
                    <input type="text" id="verify_code" maxlength="4" class="fullInput" placeholder="请输入验证码">
                </div>
                <div class="btnArea">
                    <div class="loanBtn" id="selfLoanBtn">立即申请</div>
                    <div class="errorTip" id="selfErrorTip"></div>
                </div>
            </div>
            <!-- selfSupport e -->

            <!-- unSelfSupport -->
            <div class="unSelfSupport hide">
                <div class="infoTitle">
                    定制方案 <span>量身定制最优方案</span>
                </div>
                <div class="inArea">
                    <!--<input type="text" class="fullInput fullInputselected" placeholder="请输入您的手机号码">-->
                    <input type="text" id="phone" class="fullInput" placeholder="请输入您的手机号码" data-event-id="phone" data-event-type="input">
                </div>
                <div class="inArea">
                    <div class="selecterBtn fl" id="workSelector">
                        <div class="selectorHandle selecterText fl">职业身份</div>
                        <div class="selectorHandle fl icon"><i class="selectorHandle">&nbsp;</i></div>
                        <input type="hidden" id="work">
                        <div class="selector">
                            <ul>
                                <li class="selectorItem">职业身份</li>
                            </ul>
                        </div>
                    </div>
                    <div class="selecterBtn fr" id="salaryBtn">
                        <div class="fl"><input id="salary" class="input" placeholder="月收入(元)" data-event-id="salary" data-event-type="input"></div>
                    </div>
                </div>
                <div class="inArea pb10">
                    <div class="selecterBtn fl" id="houseSelector">
                        <div class="selectorHandle selecterText fl">居住情况</div>
                        <div class="selectorHandle fl icon"><i class="selectorHandle">&nbsp;</i></div>
                        <input type="hidden" id="house">
                        <div class="selector">
                            <ul>
                                <li class="selectorItem">居住情况</li>
                            </ul>
                        </div>
                    </div>
                    <div class="selecterBtn fr" id="credit_recordSelector">
                        <div class="selectorHandle selecterText fl">信用情况</div>
                        <div class="selectorHandle fl icon"><i class="selectorHandle">&nbsp;</i></div>
                        <input type="hidden" id="credit_record">
                        <div class="selector">
                            <ul>
                                <li class="selectorItem">信用情况</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="btnArea">
                    <div class="loanBtn" id="loanBtn">立即申请</div>
                    <div class="errorTip" id="errorTip"></div>
                </div>
            </div>
            <!-- unSelfSupport e -->

            <div class="infoTitle infoTitle2">正在申请人数</div>
            <div class="counterArea">
                <div class="counterItem">
                    <div class="counterContent">0</div>
                </div>
                <div class="counterItem">
                    <div class="counterContent">5</div>
                </div>
                <div class="counterItem">
                    <div class="counterContent">1</div>
                </div>
                <div class="counterItem">
                    <div class="counterContent">2</div>
                </div>
                <div class="counterItem">
                    <div class="counterContent">2</div>
                </div>
                <div class="counterItem">
                    <div class="counterContent">7</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="introArea">
    <div class="introlWrapper">
        <div class="introlItem">
            <div class="iconArea">
                <div class="icon"></div>
            </div>
            <div class="introTextArea">
                <div class="introTitle">选择多</div>
                <div class="introDescription">上千种精选金融产品</div>
            </div>
        </div>
        <div class="introlItem">
            <div class="iconArea">
                <div class="icon icon3"></div>
            </div>
            <div class="introTextArea">
                <div class="introTitle">审核快</div>
                <div class="introDescription">最快30分钟完成审批</div>
            </div>
        </div>
        <div class="introlItem">
            <div class="iconArea">
                <div class="icon icon2"></div>
            </div>
            <div class="introTextArea">
                <div class="introTitle">通过率高</div>
                <div class="introDescription">98%以上申请可通过</div>
            </div>
        </div>
        <div class="introlItem">
            <div class="iconArea">
                <div class="icon icon4"></div>
            </div>
            <div class="introTextArea">
                <div class="introTitle">一对一服务</div>
                <div class="introDescription">金融专员全程服务</div>
            </div>
        </div>
    </div>
</div>

<div class="wrapper">

    <div class="publicTitle">最受欢迎的分期购车</div>
    <div class="hotBuyArea">
        <a href="https://www.guazi.com/bj/suteng/" target="_blank">
            <div class="focusArea"></div>
        </a>
        <div class="hotCar">
            <div class="hotCarGroup">
                <div class="hotCarItem">
                    <a href="https://www.guazi.com/bj/buy/p3/" target="_blank" data-event-id="buy-p3">
                        <div class="hotCarTitle">日供10元贷回家</div>
                        <div class="hotCarDescription">5万内练手车</div>
                        <div class="hotCardPic hotCar1"></div>
                    </a>
                </div>
                <div class="hotCarItem">
                    <a href="https://www.guazi.com/bj/buy/p4/" target="_blank" data-event-id="buy-p4">
                        <div class="hotCarTitle">月供只要1500</div>
                        <div class="hotCarDescription">工薪族最爱</div>
                        <div class="hotCardPic hotCar2"></div>
                    </a>
                </div>
                <div class="hotCarItem">
                    <a href="https://www.guazi.com/bj/buy/h2/" target="_blank" data-event-id="buy-h2">
                        <div class="hotCarTitle">同首付,买辆宽敞的</div>
                        <div class="hotCarDescription">SUV家庭代步首选</div>
                        <div class="hotCardPic hotCar3"></div>
                    </a>
                </div>
            </div>
            <div class="hotCarGroup">
                <div class="hotCarItem">
                    <a href="https://www.guazi.com/bj/buy/c4/" target="_blank" data-event-id="buy-c4">
                        <div class="hotCarTitle">低首付高品质</div>
                        <div class="hotCarDescription">准新车</div>
                        <div class="hotCardPic hotCar4"></div>
                    </a>
                </div>
                <div class="hotCarItem">
                    <a href="https://www.guazi.com/bj/buy/b20e999/" target="_blank" data-event-id="buy-b20e999">
                        <div class="hotCarTitle">每天一杯星巴克</div>
                        <div class="hotCarDescription">奔驰宝马开回家</div>
                        <div class="hotCardPic hotCar5"></div>
                    </a>
                </div>
                <div class="hotCarItem">
                    <a href="https://www.guazi.com/bj/buy/a3/" target="_blank" data-event-id="buy-a3">
                        <div class="hotCarTitle">买得早不如刚刚好</div>
                        <div class="hotCarDescription">车主急售实惠</div>
                        <div class="hotCardPic hotCar6"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="publicTitle">客户体验</div>
    <div class="storyArea">
        <div class="storyItem">
            <div class="storyPic storyPic2"></div>
            <div class="storyTitle">
                张小姐
                <span class="storyDescription">白领</span>
                <span class="storyMotto">申请超快超简单</span>
            </div>
            <div class="storyPrice">
                <span class="priceTag">首付</span>
                <span>￥</span><span class="price">1.38万</span>
                <span class="priceTag ml20">月供</span>
                <span>￥</span><span class="price">1152</span>
            </div>
            <div class="storyDetail">
                贷款最怕就是一耗半个月，没想到半小时就通过了，这个夏天，终于可以美滋滋自驾了。
            </div>
        </div>
        <div class="storyItem">
            <div class="storyPic storyPic1"></div>
            <div class="storyTitle">
                王先生
                <span class="storyDescription">上班族</span>
                <span class="storyMotto">服务太贴心了</span>
            </div>
            <div class="storyPrice">
                <span class="priceTag">首付</span>
                <span>￥</span><span class="price">1.26万</span>
                <span class="priceTag ml20">月供</span>
                <span>￥</span><span class="price">1763</span>
            </div>
            <div class="storyDetail">
                瓜子专员全程跑前跑后，不到半天就完成了所有的手续，省下了不少时间，真是太贴心了！
            </div>
        </div>
        <div class="storyItem">
            <div class="storyPic storyPic3"></div>
            <div class="storyTitle">
                李先生
                <span class="storyDescription">个体户</span>
                <span class="storyMotto">轻轻松松开豪车</span>
            </div>
            <div class="storyPrice">
                <span class="priceTag">首付</span>
                <span>￥</span><span class="price">5.7万</span>
                <span class="priceTag ml20">月供</span>
                <span>￥</span><span class="price">7975</span>
            </div>
            <div class="storyDetail">
                想换一辆体面的车去跑生意，但几十万压力实在大。多亏瓜子金融，首付低费率低，搞定！
            </div>
        </div>
    </div>

    <div class="publicTitle">
        服务范围
        <span class="publicDescription">
            覆盖全国<span class="publicRed">24</span>个省
            精选<span class="publicRed">100</span>多家金融机构
            <span class="publicRed">1000</span>多位金融专员
        </span>
    </div>
    <div class="serviceArea">
        <div class="map" id="map" style="float:none;margin-left:auto;">

        </div>
        <div class="commissioner hide" id="commissioner">
            <div class="commissionerContent scrollDom" id="commissionerScrollContent">
                <div class="hide" id="commissionerContent">
                    <div class="item">
                        <div class="pic">
                            <img src="#pic#">
                            <div class="goldTag"></div>
                        </div>
                        <div class="commissionerName">
                            #name#<span class="goldCommissioner">金牌金融专员</span>
                        </div>
                        <div class="commissionerAchievement">
                            帮<span class="redText">#loanNum#</span>位客户成功贷款
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="publicTitle">
        贷款流程
    </div>
    <div class="loanProcessArea">
        <div class="processItem">
            <div class="processIconArea">
                <div class="processIcon processIcon1"></div>
            </div>
            <div class="processText1">30秒申请</div>
            <div class="processText2">需要分期购车，<br>提交基本信息即可申请</div>
        </div>
        <div class="processItem">
            <div class="processIconArea">
                <div class="processIcon processIcon2"></div>
            </div>
            <div class="processText1">电话回访</div>
            <div class="processText2">金融专员一对一沟通，<br>定制金融方案</div>
        </div>
        <div class="processItem">
            <div class="processIconArea">
                <div class="processIcon processIcon3"></div>
            </div>
            <div class="processText1">极速审批</div>
            <div class="processText2">资料提交后立即审批，<br>最快30分钟内告知结果</div>
        </div>
        <div class="processItem">
            <div class="processIconArea">
                <div class="processIcon processIcon4"></div>
            </div>
            <div class="processText1">放款提车</div>
            <div class="processText2">瓜子助您完成车辆过户、<br>抵押等手续后，当天放款</div>
        </div>
        <div class="processTagIcon"></div>
        <div class="processTagIcon processTagIcon2"></div>
        <div class="processTagIcon processTagIcon3"></div>
    </div>

    <div class="publicTitle">
        合作机构
    </div>
    <div class="linkArea">
        <div class="linkContent clearFix" id="partnerContent">
            <div class="hide" id="partnerItem">
                <div class="linkItem"><img src="#pic#"></div>
            </div>
        </div>
        <div class="btnContent" style="width: 201px;">
            <div class="btn1 hide">电话咨询</div>
            <a href="#applyForm"><div class="btn2">立即申请</div></a>
        </div>
    </div>

</div>

<!--自营提交成功-->
<div class="selfSuccessPop" id="selfSuccessPop">
    <div class="titleArea">
        <div class="closeIcon close"></div>
        <div class="titleContent">
            <div class="titleProcessArea">
                <div class="prcessLine"></div>
                <div class="processContent">
                    <div class="showNum showNumChecked">1</div>
                </div>
                <div class="processContent num2">
                    <div class="showNum">2</div>
                </div>
                <div class="processContent num3">
                    <div class="showNum">3</div>
                </div>
                <div class="processContent num4">
                    <div class="showNum">4</div>
                </div>
            </div>
            <div class="titleTarea">
                <div class="textArea">30秒申请</div>
                <div class="textArea">预约看车</div>
                <div class="textArea">资料审核</div>
                <div class="textArea">放款提车</div>
            </div>
            <div class="titleDarea">
                <div class="textArea">在线提交</div>
                <div class="textArea">挑选爱车</div>
                <div class="textArea">全程代办</div>
                <div class="textArea">专人陪同</div>
            </div>
        </div>
    </div>
    <div class="titleArrowArea">
        <div class="titleArrow"></div>
    </div>
    <div class="codeArea">
        <img id="selfCodeImg" src="{{ asset('style/img/ewm-app.b62b99186862e35a7b0ebfdb9b2df835.jpg') }}">
    </div>
    <div class="codeText">微信扫一扫，10秒知道是否可贷款</div>
</div>

<!--非自营提交成功-->
<div class="unSelfSupportPop" id="unSelfSupportPop">
    <div class="closeIcon close"></div>
    <div class="showArea unSelfShow hide" id="unSelfShow_appoint">
        <div class="showContent">
            <div class="showTitle">
                <div class="successIcon"></div>
                <span class="titleText">提交成功！</span>
            </div>
            <div class="showDescription">
                您已预约看车，看好车后会有当地金融专员为您办理分期购车事宜，祝您购车愉快!
            </div>
        </div>
    </div>
    <div class="showArea unSelfShow" id="unSelfShow_contract">
        <div class="showContent">
            <div class="showTitle">
                <div class="successIcon"></div>
                <span class="titleText">提交成功！</span>
            </div>
            <div class="showDescription">
                您已成功预定了一辆车,会有当地金融专员为您办理分期购车事宜，祝您购车愉快
            </div>
        </div>
    </div>
    <div class="showArea unSelfShow" id="unSelfShow_fe">
        <div class="showContent">
            <div class="showTitle">
                <div class="successIcon"></div>
                <span class="titleText">提交成功！</span>
            </div>
            <div class="showDescription">
                预约看车后会有金融专员为您定制专属金融方案!
            </div>
            <a id="selfBtn_fe"><span class="showBtnIcon"><div class="telIcon"></div><span class="tel">400-630-3009</span></span></a>
        </div>
    </div>
    <div class="showArea unSelfShow hide" id="unSelfShow_pass">
        <div class="showContent">
            <div class="showTitle">
                <div class="successIcon"></div>
                <span class="titleText">提交成功！</span>
            </div>
            <div class="showDescription">
                预约看车后会有金融专员为您定制专属金融方案!
            </div>
            <a id="selfBtn_pass"><span class="showBtn">去选车</span></a>
        </div>
    </div>
    <div class="showArea unSelfShow hide" id="unSelfShow_rejected">
        <div class="showContent">
            <div class="showTitle">
                <div class="errIcon"></div>
                <span class="titleText">进一步咨询！</span>
            </div>
            <div class="showDescription">
                您资质稍有欠缺，可联系金融客服为您推荐更适合的产品！
            </div>
            <a id="selfBtn_rejected">
                <span class="showBtnIcon"><div class="telIcon"></div><span class="tel">400-630-3009</span></span>
            </a>
        </div>
    </div>
    <div class="titleArea">
        <div class="titleContent">
            <div class="titleProcessArea">
                <div class="prcessLine"></div>
                <div class="processContent">
                    <div class="showNum unSelfShowNum showNumChecked" id="showNum1">1</div>
                </div>
                <div class="processContent num2">
                    <div class="showNum unSelfShowNum" id="showNum2">2</div>
                </div>
                <div class="processContent num3">
                    <div class="showNum unSelfShowNum" id="showNum3">3</div>
                </div>
                <div class="processContent num4">
                    <div class="showNum unSelfShowNum" id="showNum4">4</div>
                </div>
            </div>
            <div class="titleTarea">
                <div class="textArea">30秒申请</div>
                <div class="textArea">预约看车</div>
                <div class="textArea">资料审核</div>
                <div class="textArea">放款提车</div>
            </div>
            <div class="titleDarea">
                <div class="textArea">在线提交</div>
                <div class="textArea">挑选爱车</div>
                <div class="textArea">全程代办</div>
                <div class="textArea">专人陪同</div>
            </div>
        </div>
    </div>
</div>

<!--春节弹窗-->
<div class="unSelfSupportPop" id="springFestivelPop">
    <div class="closeIcon close"></div>
    <div class="showArea unSelfShow">
        <div class="showContent">
            <div class="showTitle">
                <div class="successIcon"></div>
                <span class="titleText">提交成功！</span>
            </div>
            <div class="showDescription" style="padding: 20px; line-height: 24px;">
                尊敬的客户您好，1月20日-2月2日休假期间暂停服务，<br>您的申请我们会在节后尽快处理，祝您新春快乐！
            </div>
        </div>
    </div>
    <div class="titleArea">
        <div class="titleContent">
            <div class="titleProcessArea">
                <div class="prcessLine"></div>
                <div class="processContent">
                    <div class="showNum unSelfShowNum showNumChecked">1</div>
                </div>
                <div class="processContent num2">
                    <div class="showNum unSelfShowNum">2</div>
                </div>
                <div class="processContent num3">
                    <div class="showNum unSelfShowNum">3</div>
                </div>
                <div class="processContent num4">
                    <div class="showNum unSelfShowNum">4</div>
                </div>
            </div>
            <div class="titleTarea">
                <div class="textArea">30秒申请</div>
                <div class="textArea">预约看车</div>
                <div class="textArea">资料审核</div>
                <div class="textArea">放款提车</div>
            </div>
            <div class="titleDarea">
                <div class="textArea">在线提交</div>
                <div class="textArea">挑选爱车</div>
                <div class="textArea">全程代办</div>
                <div class="textArea">专人陪同</div>
            </div>
        </div>
    </div>
</div>

<!--提交成功 begin-->
<div class="popup-succ tc" id="submitSuccess">
    <div class="closeIcon close"></div>
    <h3 class="pop-tit"><span class="icon-succ"></span>提交成功</h3>
    <p class="pop-tip fs18">瓜子金融客服将尽快联系您，请保持电话畅通</p>
    <p class="pop-code fs18">扫码下载瓜子APP</p>
</div>
<!--提交成功 end-->

<!--提交失败 begin-->
<div class="popup-fail tc" id="submitFail">
    <div class="closeIcon close"></div>
    <h3 class="pop-tit"><span class="icon-fail"></span>提交失败</h3>
    <p class="pop-tip2 fs18">请检查您的网络连接是否正常</p>
</div>
<!--提交失败 end-->

<script>
    //ie8 兼容 indexOf
    if (!Array.prototype.indexOf) {
        Array.prototype.indexOf = function (elt) {
            var len = this.length >>> 0;
            var from = Number(arguments[1]) || 0;
            from = (from < 0) ? Math.ceil(from) : Math.floor(from);
            if (from < 0) from += len;
            for (; from < len; from++) {
                if (from in this && this[from] === elt) return from;
            }
            return -1;
        }
    }

    window.selfSupport = 1;

    //window.loanTotal = parseInt(Math.random() * 100000);
    window.loanTotal = false;

    window.selectData = {
        work: [{"option":"\u4e8b\u4e1a\u5355\u4f4d","value":1},{"option":"\u4e0a\u73ed\u65cf","value":2},{"option":"\u4f01\u4e1a\u4e3b","value":3},{"option":"\u4e2a\u4f53\u6237","value":4},{"option":"\u65e0\u56fa\u5b9a\u804c\u4e1a","value":5},{"option":"\u672a\u77e5","value":99}],
        house: [{"option":"\u79df\u623f","value":1},{"option":"\u96c6\u4f53\u5bbf\u820d","value":2},{"option":"\u4e0e\u4eb2\u621a\u5408\u4f4f","value":3},{"option":"\u6709\u623f\u6709\u8d37\u6b3e","value":4},{"option":"\u6709\u623f\u65e0\u8d37\u6b3e","value":5},{"option":"\u672a\u77e5","value":99}],
        credit_record: [{"option":"\u4fe1\u7528\u826f\u597d","value":1},{"option":"\u5c11\u6570\u903e\u671f","value":2},{"option":"\u957f\u671f\u591a\u6b21\u903e\u671f","value":3},{"option":"\u65e0\u4fe1\u7528\u8bb0\u5f55","value":4},{"option":"\u672a\u77e5","value":99}]
    };

    window.partnerData = [
        {
            pic: '//image.guazistatic.com/gz01160812/20/58/b7a8b73bba18fa4ae8fa62d1f7b612c5.png'
        },
        {
            pic: '//image.guazistatic.com/gz01160812/20/58/df5708fb3ccb99e39b2ea9d694f98ea9.png'
        },
        {
            pic: '//image.guazistatic.com/gz01160812/20/58/213b19c4a090b8ed59eb844bcdb285ae.png'
        },
        {
            pic: '//image.guazistatic.com/gz01160812/20/58/44ef43fa3322546d9aa64628122353f0.png'
        },
        {
            pic: '//image.guazistatic.com/gz01160812/20/58/5de60e1ab20e24d69fdcea29383261b9.png'
        },
        {
            pic: '//image.guazistatic.com/gz01160812/20/58/c22f1549b7729554030f1cb3908ec430.png'
        },
        {
            pic: '//image.guazistatic.com/gz01160812/20/59/9ddbdd4ddcae013de68f4099cb3e06ad.png'
        },
        {
            pic: '//image.guazistatic.com/gz01160812/20/59/25b33602063eafa54f31e2e00109da80.png'
        },
        {
            pic: '//image.guazistatic.com/gz01160812/20/59/6653c7ef663e009ef83fd24125e9cd29.png'
        },
        {
            pic: '//image.guazistatic.com/gz01160812/20/58/5376e0b04615052f72cabbafb4c268c9.png'
        },
        {
            pic: '//image.guazistatic.com/gz01160812/20/58/393d79deb245a7a121aeced5e731a496.png'
        },
        {
            pic: '//image.guazistatic.com/gz01160812/20/59/9b1a23ca966eb86722147a01379c0396.png'
        }
    ];

    window.commissionerData = [];

    var ipCityInfo = {"id":"12","city_code":"0","standard_code":"110000","script_index":"0","parent_id":"1","name":"\u5317\u4eac","domain":"bj","database":"beijing","pinyin":"beijing","location":"b116.407413,39.904214","region_id":"12","type":"2","hotline":"400-630-3009"};
    window.showCity = ipCityInfo['pinyin'];

    window.loanNum = 24639;

    window.verifyCodeUrl = "\/bj\/web_v3\/getLoginQRCode";

    window.isSpringFestivel = 0;
//    window.isSpringFestivel = true;

    window.mapData = {
        nanchang: {
            name: '南昌',
            left: 240,
            top: 182,
            loanBase: 1000
        },
        hefei: {
            name: '合肥',
            left: 240,
            top: 157,
            loanBase: 1500
        },
        fuzhou: {
            name: '福州',
            left: 256,
            top: 196
        },
        xiamen: {
            name: '厦门',
            left: 251,
            top: 209,
            loanBase: 1000
        },
        quanzhou: {
            name: '泉州',
            left: 255,
            top: 205
        },
        jiujiang: {
            name: '九江',
            left: 237,
            top: 174
        },
        ganzhou: {
            name: '赣州',
            left: 232,
            top: 194
        },
        wuhu: {
            name: '芜湖',
            left: 248,
            top: 163
        },
        guangzhou: {
            name: '广州',
            left: 221,
            top: 218,
            loanBase: 1000
        },
        foshan: {
            name: '佛山',
            left: 219,
            top: 222
        },
        shenzhen: {
            name: '深圳',
            left: 228,
            top: 222,
            loanBase: 1500
        },
        zhongshan: {
            name: '中山',
            left: 223,
            top: 224
        },
        dongguan: {
            name: '东莞',
            left: 226,
            top: 217
        },
        huizhou: {
            name: '惠州',
            left: 232,
            top: 219
        },
        nanning: {
            name: '南宁',
            left: 192,
            top: 222,
            loanBase: 1500
        },
        wuhan: {
            name: '武汉',
            left: 222,
            top: 170,
            loanBase: 1500
        },
        xiangyang: {
            name: '襄阳',
            left: 215,
            top: 159
        },
        changsha: {
            name: '长沙',
            left: 218,
            top: 186,
            loanBase: 1500
        },
        zhuzhou: {
            name: '株洲',
            left: 219,
            top: 191
        },
        haerbin: {
            name: '哈尔滨',
            left: 271,
            top: 48,
            loanBase: 1000
        },
        changchun: {
            name: '长春',
            left: 273,
            top: 64
        },
        shenyang: {
            name: '沈阳',
            left: 262,
            top: 85,
            loanBase: 1500
        },
        dalian: {
            name: '大连',
            left: 261,
            top: 101,
            loanBase: 1000
        },
        huhehaote: {
            name: '呼和浩特',
            left: 203,
            top: 97,
            loanBase: 1500
        },
        wulumuqi: {
            name: '乌鲁木齐',
            left: 55,
            top: 85
        },
        nanjing: {
            name: '南京',
            left: 250,
            top: 153,
            loanBase: 1000
        },
        suzhou: {
            name: '苏州',
            left: 263,
            top: 156,
            loanBase: 1000
        },
        xuzhou: {
            name: '徐州',
            left: 244,
            top: 139
        },
        wuxi: {
            name: '无锡',
            left: 258,
            top: 156,
            loanBase: 1000
        },
        nantong: {
            name: '南通',
            left: 259,
            top: 150
        },
        changzhou: {
            name: '常州',
            left: 255,
            top: 152
        },
        shanghai: {
            name: '上海',
            left: 268,
            top: 156,
            loanBase: 1500
        },
        hangzhou: {
            name: '杭州',
            left: 259,
            top: 165,
            loanBase: 1500
        },
        shaoxing: {
            name: '绍兴',
            left: 263,
            top: 169
        },
        jinan: {
            name: '济南',
            left: 237,
            top: 120,
            loanBase: 1000
        },
        qingdao: {
            name: '青岛',
            left: 254,
            top: 123,
            loanBase: 1500
        },
        yangtai: {
            name: '烟台',
            left: 257,
            top: 112
        },
        zibo: {
            name: '淄博',
            left: 242,
            top: 119
        },
        weifang: {
            name: '潍坊',
            left: 248,
            top: 121,
            loanBase: 1000
        },
        jining: {
            name: '济宁',
            left: 236,
            top: 128
        },
        linyi: {
            name: '临沂',
            left: 244,
            top: 130
        },
        weihai: {
            name: '威海',
            left: 262,
            top: 112
        },
        zhengzhou: {
            name: '郑州',
            left: 220,
            top: 139,
            loanBase: 1500
        },
        luoyang: {
            name: '洛阳',
            left: 214,
            top: 140
        },
        xinxiang: {
            name: '新乡',
            left: 219,
            top: 132
        },
        nanyang: {
            name: '南阳',
            left: 218,
            top: 149
        },
        xian: {
            name: '西安',
            left: 191,
            top: 142,
            loanBase: 1500
        },
        chengdu: {
            name: '成都',
            left: 166,
            top: 171,
            loanBase: 1500
        },
        mianyang: {
            name: '绵阳',
            left: 173,
            top: 166
        },
        chongqing: {
            name: '重庆',
            left: 181,
            top: 175,
            loanBase: 1500
        },
        wanzhou: {
            name: '万州',
            left: 187,
            top: 168
        },
        dazhou: {
            name: '达州',
            left: 183,
            top: 162
        },
        kunming: {
            name: '昆明',
            left: 158,
            top: 209,
            loanBase: 1000
        },
        taiyuan: {
            name: '太原',
            left: 210,
            top: 116
        },
        shijiazhuang: {
            name: '石家庄',
            left: 223,
            top: 113
        },
        baoding: {
            name: '保定',
            left: 226,
            top: 105
        },
        beijing: {
            name: '北京',
            left: 230,
            top: 96,
            loanBase: 1500

        },
        tianjin: {
            name: '天津',
            left: 236,
            top: 102
        },
        tangshan: {
            name: '唐山',
            left: 242,
            top: 101,
            loanBase: 1000
        }
    };
</script>

<!--页面底部begin-->
@endsection('content')