@extends('\Admin.base')

        	@section('content')
        <!-- 内容区域 -->

        
		<div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">商品详情表&nbsp; <i> >> </i>&nbsp; 汽车详情</div>


                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <a href="{{ url("admin/motor_details/create") }}" type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                        <form method="get" name="myform">
                        {{ csrf_field() }}
                        <div class="am-u-sm-12 am-u-md-12 am-u-lg-3" style="float:right;">
                            <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                <input type="text" name="title" class="am-form-field ">
                                <span class="am-input-group-btn">
                                    <button onclick="ddi()" id="did" class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search">
                                    </button>
                                </span>
                            </div>
                        </div>
                        </form>


                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>序列号</th>
                                                <th>商品标题</th>
                                                <th>车主报价</th>
                                                <th>服务费用</th>
                                                <th>商品介绍</th>
                                                <th>基本信息</th>
                                                <th>车辆图片</th>
                                                <th>检测报告</th>
                                                <th>配置参数</th>
                                                <th>来源</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($list as $vo)
                                            <tr class="gradeX">
                                                <td class="am-text-middle">{{ $vo->id }}</td>
                                                <td class="am-text-middle">{{ $vo->title }}</td>
                                                <td class="am-text-middle">{{ $vo->price }}</td>
                                                <td class="am-text-middle">{{ $vo->save_price }}</td>
                                                <td class="am-text-middle">{{ $vo->introduce }}</td>
                                                <td class="am-text-middle">{{ $vo->infomation }}</td>
                                                
                                                <td>
                                                    <img width="50" src='http://oslhf8hmf.bkt.clouddn.com/{{ $vo->picname }}' class="tpl-table-line-img" alt="">
                                                </td>
                                                <td class="am-text-middle">{{ $vo->test_repoot }}</td>
                                                <td class="am-text-middle">{{ $vo->parameter }}</td>
                                                <td class="am-text-middle"> @if ( $vo->source =="0") 官方自营 @elseif ( $vo->source == "1") 第三方 @endif </td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                        <a href="{{ url('admin/motor_details') }}/{{ $vo->id }}/edit">
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
        <script src="{{asset('assets/js/jquery-1.8.3.min.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
            function Del(id){

                Modal.confirm({ msg: "是否删除角色？"}).on(function(e){
                    if(e){
                        var form = document.myform;
                        form.action = "{{ url('admin/motor_details/destroy') }}/"+id;
                        form.submit();
                    }

                })

            }


            function ddi(){
                $("#did").click(function(){
                    alert("aa");
                    form = document.myform;
                    form.action = "{{ url("admin/motor_details") }}";
                    form.submit();
                })
            }

        </script>

	@endsection
  