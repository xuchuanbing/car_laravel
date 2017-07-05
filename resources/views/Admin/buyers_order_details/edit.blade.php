@extends('Admin.base')
    @section('content')
	<div class="tpl-content-wrapper">
	 <div class="row-content am-cf">
        <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">边框表单</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-border-form tpl-form-border-br" method="post" action="{{url('admin/buyers_order_details/update')}}/{{$list->id}}">
								         {{ csrf_field() }}
								     <input type="text" style="display:none;" name="id" value="{{$list->id}}">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">关联ID <span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="uid" id="user-name" value="{{$list->uid}}">
                                        </div>
                                    </div>
									<div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">成交价格<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="price" id="user-name" value="{{$list->price}}">
                                        </div>
                                    </div>
								    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">成交时间<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="deal_time" id="user-name" value="{{$list->deal_time}}">
                                        </div>
                                    </div>
									<div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">买家<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="seller_id" id="user-name" value="{{$list->seller_id}}">
                                        </div>
                                    </div>
									<div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">状态<span class="tpl-form-line-small-title"></span></label>
                                        <div class="am-u-sm-9">
                                            <input type="radio" name="state" value="1" @if($list->state=='1') checked @endif />处理
                                            <input type="radio" name="state" value="0" @if($list->state=='0') checked @endif />未处理
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">
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
