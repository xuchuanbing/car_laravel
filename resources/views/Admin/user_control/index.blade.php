@extends('Admin.base')
    @section('content')
	<div class="tpl-content-wrapper">
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">管理员</div>
                    <div class="widget-function am-fr">
                        <a href="javascript:;" class="am-icon-cog"></a>
                    </div>
                </div>
                <div class="widget-body  widget-body-lg am-fr">
					<table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                        <thead>
                            <tr>
                                <th>用户ID</th>
                                <th>姓名</th>
                                <th>密码</th>
                                <th>邮箱</th>
								<th>电话</th>
                                <th>状态</th>
                                <th>登录时间</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
						@foreach ($user as $vo)
                            <tr class="gradeX">
                                <td>{{ $vo->id }}</td>
                                <td>{{ $vo->name }}</td>
                                <td>{{ $vo->password }}</td>
                                <td>{{ $vo->email }}</td>
                                <td>{{ $vo->phone }}</td>
                                <td>@if ($vo->state=="1")管理员 @else 普通用户 @endif</td>
                                <td>{{ $vo->addtime }}</td>
                                <td>
                                    <div class="tpl-table-black-operation">
                                         <a href="{{url('admin/usercontrol/edit')}}/{{$vo->id}}">
                                            <i class="am-icon-pencil"></i> 编辑
                                         </a>
                                         <a href="{{url('admin/usercontrol/delete')}}/{{$vo->id}}" class="tpl-table-black-operation-del">
                                            <i class="am-icon-trash"></i> 删除
                                         </a>
                                    </div>
                                </td>
                            </tr>
							@endforeach
                                <!-- more data -->
								

                        </tbody>
                    </table>	
             </div>
        </div>
    </div>
</div>
@endsection