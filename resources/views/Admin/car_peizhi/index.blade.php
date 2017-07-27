@extends('Admin.base')

        	@section('content')
        <!-- 内容区域 -->

        
		<div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">汽车信息管理 >> 汽车检测管理</div>
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
                                                <a href="{{ url("admin/car_peizhi/create") }}" type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>
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
                                                <th>厂商</th>
                                                <th>级别</th>
                                                <th>发动机</th>
                                                <th>变速箱</th>
                                                <th>车身结构</th>
                                                <th>长*宽*高</th>
                                                <th>轴距</th>
                                                <th>行李箱容积</th>
                                                <th>整备质量</th>
                                                <th>排量</th>
                                                <th>进气形式</th>
                                                <th>气缸</th>
                                                <th>最大马力</th>
                                                <th>最大轴距</th>
                                                <th>燃料类型</th>
                                                <th>燃油标号</th>
                                                <th>供油方式</th>
                                                <th>排放标准</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list as $vo)
                                            <tr class="gradeX">
                                                <td class="am-text-middle">{{ $vo->id }}</td>
                                                <td class="am-text-middle">{{ $vo->uid }}</td>
                                                <td class="am-text-middle">{{ $vo->changshang }}</td>
                                                <td class="am-text-middle">{{ $vo->jibie }}</td>
                                                <td class="am-text-middle">{{ $vo->fadongji }}</td>
                                                <td class="am-text-middle">{{ $vo->biansuxiang }}</td>
                                                <td class="am-text-middle">{{ $vo->cheshenjiegou }}</td>
                                                <td class="am-text-middle">{{ $vo->c_k_g }}</td>
                                                <td class="am-text-middle">{{ $vo->zhouju }}</td>
                                                <td class="am-text-middle">{{ $vo->xl_rongji }}</td>
                                                <td class="am-text-middle">{{ $vo->zhengbeizl }}</td>
                                                <td class="am-text-middle">{{ $vo->pailiang }}</td>
                                                <td class="am-text-middle">{{ $vo->jingqixingshi }}</td>
                                                <td class="am-text-middle">{{ $vo->qigang }}</td>
                                                <td class="am-text-middle">{{ $vo->zuidamali }}</td>
                                                <td class="am-text-middle">{{ $vo->zuidazhouju }}</td>
                                                <td class="am-text-middle">{{ $vo->ranglianleixing }}</td>
                                                <td class="am-text-middle">{{ $vo->rangyoubiaohao }}</td>
                                                <td class="am-text-middle">{{ $vo->gongyoufangshi }}</td>
                                                <td class="am-text-middle">{{ $vo->paifangbiaozhun }}</td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                        <a href="{{ url('admin/car_peizhi') }}/{{ $vo->id }}/edit">
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
                    form.action = "{{ url('admin/car_peizhi/destroy') }}/"+id
                    form.submit();
                }else{
                    return;
                }

        }

        </script>

	@endsection
