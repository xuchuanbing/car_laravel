@extends('\Admin.base')

        	@section('content')
        <!-- 内容区域 -->

        
		<div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">商品详情表 >> 商品详情</div>


                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <a href="{{ url("admin/detection/create") }}" type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                <form method="get" action="{{ url('/admin/detection') }}">
                                {{ csrf_field() }}
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3" style="float:right;">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" name="commodity_id" class="am-form-field ">
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
                                                <th>用户ID</th>
                                                <th>商品ID</th>
                                                <th>图片</th>
                                                <th>检测结果id</th>
                                                <th>价格</th>
                                                <th>点击量</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list as $vo)
                                            <tr class="gradeX">
                                                <td class="am-text-middle">{{ $vo->id }}</td>
                                                <td class="am-text-middle">{{ $vo->uid }}</td>
                                                <td class="am-text-middle">{{ $vo->commodity_id }}</td>
                                                <td>
                                                    <img width="50" src='http://oslhf8hmf.bkt.clouddn.com/{{ $vo->picture }}' class="tpl-table-line-img" alt="">
                                                </td>
                                                <td class="am-text-middle">{{ $vo->testing_id }}</td>
                                                <td class="am-text-middle">{{ $vo->price }}</td>
                                                <td class="am-text-middle">{{ $vo->hits }}</td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                        <a href="{{ url('admin/detection') }}/{{ $vo->id }}/edit">
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

                Modal.confirm({ msg: "是否删除角色？"}).on(function(e){
                    if(e){
                        var form = document.myform;
                        form.action = "{{ url('admin/detection/destroy') }}/"+id;
                        form.submit();
                    }

                })

            }

        </script>

	@endsection
