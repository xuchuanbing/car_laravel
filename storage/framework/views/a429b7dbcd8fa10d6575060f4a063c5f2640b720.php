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
                            <div class="widget-body am-fr">

                                <form action="<?php echo e(URL('admin/motor_details/update')); ?>" method="post" class="am-form tpl-form-border-form tpl-form-border-br" enctype="multipart/form-data">

                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                <input type="hidden" name="_method" value="put">
                                <input type="hidden" name="pic" value="<?php echo e($list->picture); ?>">
                                <input type="hidden" name="id" value="<?php echo e($list->id); ?>">
                                

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">商品标题</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="title" value="<?php echo e($list->title); ?>" class="tpl-form-input" id="user-name" placeholder="商品标题">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">车主报价</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="price" value="<?php echo e($list->price); ?>" class="tpl-form-input" id="user-name" placeholder="车主报价">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">服务费用</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="save_price" value="<?php echo e($list->price); ?>" class="tpl-form-input" id="user-name" placeholder="服务费用">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">商品介绍</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="introduce" value="<?php echo e($list->introduce); ?>" class="tpl-form-input" id="user-name" placeholder="商品介绍">
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <label for="user-name" class="am-u-sm-3 am-form-label">基本信息</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="infomation" value="<?php echo e($list->infomation); ?>" class="tpl-form-input" id="user-name" placeholder="基本信息">
                                        </div>
                                    </div>
                                    
                                    <div class="am-form-group">
                                        <label for="user-weibo" class="am-u-sm-3 am-form-label">图片信息</label>
                                        <div class="am-u-sm-9">
                                            <div class="am-form-group am-form-file">
                                                <div class="tpl-form-file-img">
                                                    <img width="50" src='http://oslhf8hmf.bkt.clouddn.com/<?php echo e($list->picname); ?>' alt="">
                                                </div>
                                                <button type="button" class="am-btn am-btn-danger am-btn-sm"><i class="am-icon-cloud-upload"></i> 添加图片信息</button>
                                                <input id="doc-form-file" name="picname[]" type="file" multiple="">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">车源号</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="car_id" value="<?php echo e($list->car_id); ?>" class="am-form-field tpl-form-no-bg" placeholder="车源号">
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label for="user-email" class="am-u-sm-3 am-form-label">检测报告</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" name="test_repoot" value="<?php echo e($list->test_repoot); ?>" class="am-form-field tpl-form-no-bg" placeholder="检测报告">
                                        </div>
                                    </div>


                                    <div class="am-form-group">
                                        <label for="user-phone" class="am-u-sm-3 am-form-label">车辆来源
                                        </label>
                                        <div class="am-u-sm-9">
                                            <select data-am-selected="{searchBox: 0}" name="source">
                                              <option value="">--请选择--</option>
                                              <option value="0" <?php if($list->source == '0'): ?> selected <?php endif; ?>>官方自营</option>
                                              <option value="1" <?php if($list->source == '1'): ?> selected <?php endif; ?>>第三方</option>
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
            <?php $__env->stopSection(); ?>
<?php echo $__env->make('\Admin.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>