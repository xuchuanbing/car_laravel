            <?php $__env->startSection('content'); ?>
<!-- 内容区域 -->
        <div class="tpl-content-wrapper">

            <div class="row-content am-cf">


                <div class="row">

                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title am-fl">商品详情管理 >> 商品添加</div>
                            </div>
                            <center>
                            <?php if(session("ff")): ?>
                                    <p style="color:red;"><?php echo e(session()->pull('ff')); ?></p>
                                <?php else: ?>
                                    <p class="login-box-msg"></p>
                                <?php endif; ?>
                            </center>
                            <div class="widget-body am-fr">
                                <form action="<?php echo e(URL("admin/detection_mes/store")); ?>" method="post" class="am-form tpl-form-border-form tpl-form-border-br">

                                <?php echo e(csrf_field()); ?>


                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">汽车ID</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="uid" class="tpl-form-input" id="user-name" placeholder="汽车ID">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">车组报价</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="price" class="tpl-form-input" id="user-name" placeholder="车组报价">
                                        </div>
                                    </div>
                                    
                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">服务费</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="service_price" class="tpl-form-input" id="user-name" placeholder="服务费">
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">上牌时间</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="licensing" class="am-form-field tpl-form-no-bg" placeholder="上牌时间" data-am-datepicker="" readonly>
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">里程</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="mileage" class="am-form-field tpl-form-no-bg" placeholder="里程">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">变速箱</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="transmission" class="am-form-field tpl-form-no-bg" placeholder="  变速箱">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">排放标准</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="emission" class="am-form-field tpl-form-no-bg" placeholder="排放标准">
                                        </div>
                                    </div>
                                    
                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">上牌城市</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="address" class="am-form-field tpl-form-no-bg" placeholder="上牌城市">
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
            <?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>