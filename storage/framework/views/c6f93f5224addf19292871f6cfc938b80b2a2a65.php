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

                                <form class="am-form tpl-form-border-form tpl-form-border-br" method="post" action="<?php echo e(url('admin/user/update')); ?>/<?php echo e($list->id); ?>">
								         <?php echo e(csrf_field()); ?>

								     <input type="text" style="display:none;" name="uid" value="<?php echo e($list->uid); ?>">
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">电话</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="phone" id="user-name" value="<?php echo e($list->phone); ?>">
                                            
                                        </div>
                                    </div>
									<div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">IP</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" readonly name="IP" id="user-name" value="<?php echo e($list->IP); ?>">
                                            
                                        </div>
                                    </div>
                  
                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <input type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success "></input>
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