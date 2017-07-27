@extends('Admin.base')

            @section('content')
<!-- 内容区域 -->
        <div class="tpl-content-wrapper">

            <div class="row-content am-cf">


                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">商品品牌管理 >> 商品添加</div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-border-form tpl-form-border-br" action="{{ URL('/admin/audi/update') }}/{{$list->id}}" method="post" enctype="multipart/form-data" class="am-form tpl-form-border-form tpl-form-border-br">
                              
								<input type="hidden" name="_method" value="put">								
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="id">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">商品品牌系列</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="brand_name" value="{{ $list->brand_name }}" class="tpl-form-input" id="brand_name" placeholder="序列号">
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