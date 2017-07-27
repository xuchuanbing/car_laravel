        	<?php $__env->startSection('content'); ?>
        <!-- 内容区域 -->

        
		<div class="tpl-content-wrapper">
            <div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">用户管理 >> 前台卖家用户管理</div>
                            </div>

                            <div class="widget-body  am-fr">

                                

                                <form method="get" action="<?php echo e(url('/admin/selleruser')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <div class="am-u-sm-12 am-u-md-12 am-u-lg-3" style="float:right;">
                                    <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                        <input type="text" name="sellerphone" class="am-form-field ">
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
                                                <th>买家手机号</th>
                                                <th>IP</th>
                                                <th>状态</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="gradeX">
                                                <td class="am-text-middle"><?php echo e($vo->id); ?></td>
                                                <td class="am-text-middle"><?php echo e($vo->sellerphone); ?></td>
                                                <td class="am-text-middle"><?php echo e($vo->IP); ?></td>
                                                <td class="am-text-middle"><?php if($vo->status=="0"): ?> 待咨询 <?php elseif($vo->status=="1"): ?> 已咨询 <?php endif; ?></td>
                                                <td class="am-text-middle">
                                                    <div class="tpl-table-black-operation">
                                                        <a href="<?php echo e(url('admin/selleruser')); ?>/<?php echo e($vo->id); ?>/edit">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:Del(<?php echo e($vo->id); ?>)" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                        <!-- more data -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="am-u-lg-12 am-cf">

                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
                                                <?php echo e($list->appends($where)->links()); ?>

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
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
            <input type="hidden" name="_method" value="delete"/>
        </form>

        <script type="text/javascript">
        function Del(id){
            e = confirm("确定是否删除？")
                if(e){
                    form = document.myform;
                    form.action = "<?php echo e(url('admin/seller_orders/destroy')); ?>/"+id
                    form.submit();
                }else{
                    return;
                }

        }

        </script>

	<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>