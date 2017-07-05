@extends('Admin.base')

        	@section('content')
        <!-- 内容区域 -->
		<div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">商品品牌</div>


                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span><a href="{{ url('admin/brand/create') }}"> 新增</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    <div class="am-form-group tpl-table-list-select">
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" class="am-form-field" placeholder="商品id号">
                                        <span class="am-input-group-btn" >
            <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="button"></button>
          </span>
                                    </div>
                                </div>

                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>商品品牌</th>
                                                <th>操作</th>
                                            </tr>
											</thead>
                                        @foreach($list as $v)
												<tr>
												  <td>{{$v->id}}</td>
												  <td>{{$v->brand_name}}</td>
												  <td>
                                                    <div class="tpl-table-black-operation">
                                                       <a href="{{ url('admin/brand/edit') }}/{{$v->id}}">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="{{ url('admin/brand/destroy') }}/{{$v->id}}" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
												</tr>
										@endforeach
                                    </table>
									 {{ $list->appends($where)->links() }}									 
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	@endsection
  