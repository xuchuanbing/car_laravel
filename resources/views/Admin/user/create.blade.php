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

                                <form class="am-form tpl-form-border-form tpl-form-border-br" method="post" action="{{url('admin/user/update')}}/{{$list->id}}">
								         {{ csrf_field() }}
								     <input type="text" style="display:none;" name="uid" value="{{$list->uid}}">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">电话 <span class="tpl-form-line-small-title">Phone</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="phone" id="user-name" value="{{$list->phone}}">
                                            <small>请填写11位数字电话。</small>
                                        </div>
                                    </div>
									<div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">IP <span class="tpl-form-line-small-title">IP</span></label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="IP" id="user-name" value="{{$list->IP}}">
                                            <small>IP格式：192.168.181.123</small>
                                        </div>
                                    </div>
                  
                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success "></input>
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
