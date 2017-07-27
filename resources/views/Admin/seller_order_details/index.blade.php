@extends('Admin.base')

        	@section('content')
        <!-- 内容区域 -->

        
		<div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">商品信息检测管理 >> 汽车信息详情</div>
                            </div>
                            <center>
                            @if(session("ff"))
                                    <p style="color:red;">{{ session()->pull('ff') }}</p>
                                @else
                                    <p class="login-box-msg"></p>
                                @endif
                            </center>

                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <a href="{{ url("admin/detection_mes/create") }}" type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                <form method="get" action="{{ url('/admin/detection_mes') }}">
                                {{ csrf_field() }}
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3" style="float:right;">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" name="uid" class="am-form-field ">
                                        <span class="am-input-group-btn">
                                <input class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" value="搜索" type="submit">
                                        </span>
                                    </div>
                                </div>
                                </form>


                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>序列号</th>
                                                <th>汽车ID</th>
                                                <th>车组报价</th>
                                                <th>服务费</th>
                                                <th>上牌时间</th>
                                                <th>里程</th>
                                                <th>变速箱</th>
                                                <th>排放标准</th>
                                                <th>上牌城市</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list as $vo)
                                            <tr class="gradeX">
                                                <td class="am-text-middle">{{ $vo->id }}</td>
                                                <td class="am-text-middle">{{ $vo->uid }}</td>
                                                <td class="am-text-middle">{{ $vo->price }}</td>
                                                <td class="am-text-middle">{{ $vo->service_price }}</td>
                                                <td class="am-text-middle">{{ $vo->licensing }}</td>
                                                <td class="am-text-middle">{{ $vo->mileage }}</td>
                                                <td class="am-text-middle">{{ $vo->transmission }}</td>
                                                <td class="am-text-middle">{{ $vo->emission }}</td>
                                                <td class="am-text-middle">{{ $vo->address }}</td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                        <a href="{{ url('admin/detection_mes') }}/{{ $vo->id }}/edit">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:Del({{$vo->id}})" class="tpl-table-black-operation-del">
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
                </div>
            </div>
        </div>


        <form method="post" name="myform">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
            <input type="hidden" name="_method" value="delete"/>
        </form>

        <script type="text/javascript">
        function Del(id){
            e = confirm("确定是否删除？")
                if(e){
                    form = document.myform;
                    form.action = "{{ url('admin/detection_mes/destroy') }}/"+id
                    form.submit();
                }else{
                    return;
                }

        }

        </script>

	@endsection
