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
                                <form action="{{ URL("admin/detection_mes/store") }}" method="post" class="am-form tpl-form-border-form tpl-form-border-br">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="put">
                                <input type="hidden" name="id" value="{{ $list->id }}">

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">汽车ID</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="uid" value="{{ $list->uid }}" class="tpl-form-input" id="user-name" placeholder="汽车ID">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">车组报价</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="price" value="{{ $list->price }}" class="tpl-form-input" id="user-name" placeholder="车组报价">
                                        </div>
                                    </div>
                                    
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">服务费</label>
                                        <div class="am-u-sm-9">
                                        <input type="text" name="price" value="{{ $list->service_price }}" class="tpl-form-input" id="user-name" placeholder="车组报价">

                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">上牌时间</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="licensing" value="{{ $list->licensing }}" class="am-form-field tpl-form-no-bg" placeholder="上牌时间" data-am-datepicker="" readonly>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">里程</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="mileage" value="{{ $list->mileage }}" class="am-form-field tpl-form-no-bg" placeholder="里程">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">变速箱</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="transmission" value="{{ $list->transmission }}" class="am-form-field tpl-form-no-bg" placeholder="  变速箱">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">排放标准</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="emission" value="{{ $list->emission }}" class="am-form-field tpl-form-no-bg" placeholder="排放标准">
                                        </div>
                                    </div>
                                    
                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">上牌城市</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="address" value="{{ $list->address }}" class="am-form-field tpl-form-no-bg" placeholder="上牌城市">
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