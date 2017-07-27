        	<?php $__env->startSection('content'); ?>
        <!-- 内容区域 -->
		<script>
            function doDel(id){
                document.myform.action = "/admin/seller_order_details/del/"+id;
                document.myform.submit();
            }
        </script>
		 <div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">卖家订单详情管理</div>


                            </div>
                            <div class="widget-body  am-fr">

                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                        <!--    <div class="am-btn-group am-btn-group-xs">
                                                <button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>
                                                <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 保存</button>
                                                <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                                <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                            </div>
											-->
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                    <div class="am-form-group tpl-table-list-select">
                                    </div>
                                </div>
                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" class="am-form-field ">
                                        <span class="am-input-group-btn">
            <button class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search" type="button"></button>
          </span>
                                    </div>
                                </div>

                                <div class="am-u-sm-12">
                                   <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>关联ID</th>
                                                <th>状态</th>
                                                <th>成交价格</th>
                                                <th>成交时间</th>
                                                <th>卖家</th>
                                                <th>操作</th>
                                            </tr>
											</thead>
                                        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<td><?php echo e($stu->id); ?></td>
												<td><?php echo e($stu->uid); ?></td>
												<td><?php echo e($stu->state); ?></td>
												<td><?php echo e($stu->price); ?></td>
												<td><?php echo e($stu->deal_time); ?></td>
												<td><?php echo e($stu->buyers_id); ?></td>
												
												
												<td>
													<div class="tpl-table-black-operation">
                                                        <a href="<?php echo e(url('admin/seller_order_details/edit')); ?>/<?php echo e($stu->id); ?>">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:doDel(<?php echo e($stu->id); ?>)" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
												</td>
											</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
									<form style="display:none;" name="myform" method="post">
										<input type="hidden" name="_method" value="delete">
										<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
									</form>
                                </div>
                                <div class="am-u-lg-12 am-cf">

                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
                                            <li class="am-disabled"><a href="#">«</a></li>
                                            <li class="am-active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

	<?php $__env->stopSection(); ?>
  
<?php echo $__env->make('Admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>