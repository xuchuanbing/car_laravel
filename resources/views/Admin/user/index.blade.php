@extends('Admin.base')
    @section('content')
	<div class="tpl-content-wrapper">
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">用户管理 >> 前台买家用户管理</div>
                    <div class="widget-function am-fr">
                        <a href="javascript:;" class="am-icon-cog"></a>
                    </div>
                </div>
                <br>
                <form method="get" action="{{ url('/admin/user') }}">
                    {{ csrf_field() }}
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-3" style="float:right;">
                        <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                            <input type="text" name="phone" class="am-form-field ">
                            <span class="am-input-group-btn">
                    <input class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" value="搜索" type="submit">
                            </span>
                        </div>
                    </div>
                </form>
                <div class="widget-body  widget-body-lg am-fr">
					<table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                        <thead>
                            <tr>
                                <th>用户ID</th>
                                <th>电话</th>
                                <th>用户IP地址</th>
                            </tr>
                        </thead>
                        <tbody>
						@foreach ($list as $vo)
                            <tr class="gradeX">
                                <td>{{$vo->id}}</td>
                                <td>{{$vo->phone}}</td>
                                <td>{{$vo->IP}}</td>
                            </tr>
							@endforeach
                                <!-- more data -->
                        </tbody>
                    </table>

                </div>
                <div class="am-u-lg-12 am-cf">
            <div class="am-fr">
            <ul class="am-pagination tpl-pagination">
                    {{ $list->appends($where)->links() }}

            </ul>
        </div>
    </div>
        </div>
    </div>
	</div>
@endsection