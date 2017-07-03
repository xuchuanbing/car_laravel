@extends('\Admin.base')

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

                                <form action="{{ URL('/admin/detection') }}/{{$list->id}}" method="post" enctype="multipart/form-data" class="am-form tpl-form-border-form tpl-form-border-br">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="put">
                                <input type="hidden" name="pic" value="{{ $list->picture }}">
                                <input type="hidden" name="id" value="{{ $list->id }}">

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">序列号</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="uid" value="{{ $list->uid }}" class="tpl-form-input" id="user-name" placeholder="序列号">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">商品ID</label>
                                        <div class="am-u-sm-9"> 
                                            <input type="text" name="commodity_id" value="{{ $list->commodity_id }}" class="tpl-form-input" id="user-name" placeholder="商品ID">
                                        </div>
                                    </div>
                                    
                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">图片信息</label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <div class="tpl-form-file-img">
                                                    <img width="50" src="/uploads/{{ $list->picture }}" alt="">
                                                </div>
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm"><i class="am-icon-cloud-upload"></i> 添加图片信息</button>
                                                <input id="doc-form-file" name="picture" type="file" multiple="">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">检测结果ID</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="testing_id" class="am-form-field tpl-form-no-bg" value="{{ $list->testing_id }}" placeholder="检测结果ID">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">价格</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="price" class="am-form-field tpl-form-no-bg" value="{{ $list->price }}" placeholder="价格">
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">点击量</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="hits"  value="{{ $list->hits }}" placeholder="点击量">
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