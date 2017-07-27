    <?php $__env->startSection('content'); ?>
	<div class="tpl-content-wrapper">
	 <div class="row-content am-cf">
        <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">边框表单</div>
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-border-form tpl-form-border-br" method="post" action="<?php echo e(url('admin/usercontrol/update')); ?>/<?php echo e($list->id); ?>">
								         <?php echo e(csrf_field()); ?>

								     <input type="text" style="display:none;" name="id" value="<?php echo e($list->id); ?>">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">姓名</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="name" id="user-name" value="<?php echo e($list->name); ?>">
                                        </div>
                                    </div>
									<div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">密码</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="password" id="user-name" value="<?php echo e($list->password); ?>">
                                        </div>
                                    </div>
								    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">邮箱</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="email" id="user-name" value="<?php echo e($list->email); ?>">
                                        </div>
                                    </div>
									<div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">电话</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="phone" id="user-name" value="<?php echo e($list->phone); ?>">
                                        </div>
                                    </div>
									<div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">状态</label>
                                        <div class="am-u-sm-9">
                                            <input type="radio" name="state" value="1" <?php if($list->state=='1'): ?> checked <?php endif; ?> />管理员
                                            <input type="radio" name="state" value="0" <?php if($list->state=='0'): ?> checked <?php endif; ?> />普通用户
                                        </div>
                                    </div>
                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>