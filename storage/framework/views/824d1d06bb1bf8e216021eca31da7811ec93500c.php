    <?php $__env->startSection('content'); ?>
	<div class="tpl-content-wrapper">
    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
        <div class="widget am-cf">
            <div class="widget-head am-cf">
                <div class="widget-title am-fl">超级管理员</div>
                    <div class="widget-function am-fr">
                        <a href="javascript:;" class="am-icon-cog"></a>
                    </div>
                </div>
                <div class="widget-body  widget-body-lg am-fr">
					<table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
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
						<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="gradeX">
                                <td><?php echo e($vo->id); ?></td>
                                <td><?php echo e($vo->name); ?></td>
                                <td><?php echo e($vo->password); ?></td>
                                <td><?php echo e($vo->email); ?></td>
                                <td><?php echo e($vo->phone); ?></td>
                                <td><?php if($vo->state=="1"): ?>管理员 <?php else: ?> 普通用户 <?php endif; ?></td>
                                <td><?php echo e($vo->addtime); ?></td>
                                <td>
                                    <div class="tpl-table-black-operation">
                                         <a href="<?php echo e(url('admin/usercontrol/edit')); ?>/<?php echo e($vo->id); ?>">
                                            <i class="am-icon-pencil"></i> 编辑
                                         </a>
                                         <a href="<?php echo e(url('admin/usercontrol/delete')); ?>/<?php echo e($vo->id); ?>" class="tpl-table-black-operation-del">
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
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>