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
                            <div class="widget-body am-fr">

                                <form action="{{ URL("admin/motor_details/store") }}" method="post" class="am-form tpl-form-border-form tpl-form-border-br" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="id">

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">汽车ID</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="uid" class="tpl-form-input" id="user-name" placeholder="汽车ID">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">商品标题</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="title" class="tpl-form-input" id="user-name" placeholder="商品标题">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">商品介绍</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="introduce" class="tpl-form-input" id="user-name" placeholder="商品介绍">
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">基本信息</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="infomation" class="tpl-form-input" id="user-name" placeholder="基本信息">
                                        </div>
                                    </div>
                                    
                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">车辆图片</label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm"><i class="am-icon-cloud-upload"></i> 添加图片信息</button>
                                                <input id="doc-form-file" type="file" multiple name="picname[]">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">车源号</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="car_id" class="am-form-field tpl-form-no-bg" placeholder="检测报告">
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">检测报告</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="test_repoot" class="am-form-field tpl-form-no-bg" placeholder="检测报告">
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