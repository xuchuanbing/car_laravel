@extends('Admin.base')

            @section('content')
<!-- 内容区域 -->
        <div class="tpl-content-wrapper">

            <div class="row-content am-cf">


                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">商品详情管理 >> 商品添加</div>
                            </div>
                            <center>
                            @if(session("ff"))
                                    <p style="color:red;">{{ session()->pull('ff') }}</p>
                                @else
                                    <p class="login-box-msg"></p>
                                @endif
                            </center>
                            <div class="widget-body am-fr">
                                <form action="{{ URL("admin/car_peizhi/store") }}" method="post" class="am-form tpl-form-border-form tpl-form-border-br">

                                {{ csrf_field() }}

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">汽车ID</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="uid" class="tpl-form-input" id="user-name" placeholder="汽车ID">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">厂商</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="changshang" class="tpl-form-input" id="user-name" placeholder="厂商">
                                        </div>
                                    </div>
                                    
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">级别</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="jibie" class="tpl-form-input" id="user-name" placeholder="级别">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">发动机</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="fadongji" class="am-form-field tpl-form-no-bg" placeholder="发动机">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">变速箱</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="biansuxiang" class="am-form-field tpl-form-no-bg" placeholder="变速箱">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">车身结构</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="cheshenjiegou" class="am-form-field tpl-form-no-bg" placeholder="  车身结构">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">长*宽*高</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="c_k_g" class="am-form-field tpl-form-no-bg" placeholder="长*宽*高">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">轴距</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="zhouju" class="am-form-field tpl-form-no-bg" placeholder="轴距">
                                        </div>
                                    </div>
                                    
                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">行李箱容积</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="xl_rongji" class="am-form-field tpl-form-no-bg" placeholder="行李箱容积">
                                        </div>
                                    </div>

                                                                        <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">整备质量</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="zhengbeizl" class="am-form-field tpl-form-no-bg" placeholder="整备质量">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">排量</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="pailiang" class="am-form-field tpl-form-no-bg" placeholder="排量">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">进气形式</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="jingqixingshi" class="am-form-field tpl-form-no-bg" placeholder="进气形式">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">气缸</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="qigang" class="am-form-field tpl-form-no-bg" placeholder="气缸">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">最大马力</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="zuidamali" class="am-form-field tpl-form-no-bg" placeholder="最大马力">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">最大轴距</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="zuidazhouju" class="am-form-field tpl-form-no-bg" placeholder="最大轴距">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">燃料类型</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="ranglianleixing" class="am-form-field tpl-form-no-bg" placeholder="燃料类型">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">燃油标号</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="rangyoubiaohao" class="am-form-field tpl-form-no-bg" placeholder="燃油标号">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">供油方式</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="gongyoufangshi" class="am-form-field tpl-form-no-bg" placeholder="供油方式">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">排放标准</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="paifangbiaozhun" class="am-form-field tpl-form-no-bg" placeholder="排放标准">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success" value="提交">
                                            <input type="reset" class="am-btn am-btn-primary tpl-btn-bg-color-success" value="取消">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            @endsection