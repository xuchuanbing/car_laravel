@extends('\Admin.base')

            @section('content')
<!-- 内容区域 -->
        <div class="tpl-content-wrapper">

            <div class="row-content am-cf">


                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">买家管理 >> 买家用户管理</div>
                            </div>
                            <center>
                            @if(session("ff"))
                                    <p style="color:red;">{{ session()->pull('ff') }}</p>
                                @else
                                    <p class="login-box-msg"></p>
                                @endif
                            </center>
                            <div class="widget-body am-fr">
                                <form action="{{ URL("admin/buyers/store") }}" method="post" class="am-form tpl-form-border-form tpl-form-border-br">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="put">
                                <input type="hidden" name="id" value="{{ $list->id }}">

                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">汽车ID</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="uid" readonly="" value="{{ $list->uid }}" class="tpl-form-input" id="user-name" placeholder="汽车ID">
                                    </div>
                                </div>


                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">电话</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="phone" readonly="" value="{{ $list->phone }}" class="tpl-form-input" id="user-name" placeholder="车组报价">
                                    </div>
                                </div>
                                
                                <div class="am-form-group">
                                    <label for="user-phone" class="am-u-sm-3 am-form-label">车辆来源
                                    </label>
                                    <div class="am-u-sm-9">
                                        <select data-am-selected="{searchBox: 0}" name="zixun">
                                          <option value="">--请选择--</option>
                                          <option value="0" @if ($list->zixun == '0') selected @endif>待咨询</option>
                                          <option value="1" @if ($list->zixun == '1') selected @endif>已咨询</option>
                                        </select>
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