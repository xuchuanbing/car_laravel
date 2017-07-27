<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="<?php echo e(url('assets/i/favicon.png')); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo e(url('assets/i/app-icon72x72@2x.png')); ?>">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="<?php echo e(url('assets/css/amazeui.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(url('assets/css/amazeui.datatables.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(url('assets/css/app.css')); ?>">
    <script src="<?php echo e(url('assets/js/jquery.min.js')); ?>"></script>

</head>

<body data-type="login">
    <script src="<?php echo e(url('assets/js/theme.js')); ?>"></script>
    <div class="am-g tpl-g">
        <!-- 风格切换 -->
        <div class="tpl-skiner">
            <div class="tpl-skiner-toggle am-icon-cog">
            </div>
            <div class="tpl-skiner-content">
                <div class="tpl-skiner-content-title">
                    选择主题
                </div>
                <div class="tpl-skiner-content-bar">
                    <span class="skiner-color skiner-white" data-color="theme-white"></span>
                    <span class="skiner-color skiner-black" data-color="theme-black"></span>
                </div>
            </div>
        </div>
        <div class="tpl-login">
            <div class="tpl-login-content">
                <div class="tpl-login-title">注册用户</div>
                <span class="tpl-login-content-info">
                  创建一个新的用户
              </span>


                <form class="am-form tpl-form-line-form" action="/admin/doRegister" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" id="user-name" name="email" placeholder="邮箱">
                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <ul style="color:red;">
                                    <?php $__currentLoopData = $errors->get('email'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" id="user-name" name="name" placeholder="用户名 最多30位字母数字">

                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <ul style="color:red;">
                                    <?php $__currentLoopData = $errors->get('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="am-form-group">
                        <input type="password" class="tpl-form-input" id="user-name" name="password" placeholder="请输入密码 8-16位字母、数字、破折号（-）以及底线（_）">

                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <ul style="color:red;">
                                    <?php $__currentLoopData = $errors->get('password'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="am-form-group">
                        <input type="password" class="tpl-form-input" id="user-name" name="repeatpass" placeholder="再次输入密码">
                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <ul style="color:red;">
                                    <?php $__currentLoopData = $errors->get('repeatpass'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="am-form-group">
                        <input type="text" class="tpl-form-input" id="user-name" name="phone" placeholder="请输入电话号码">
                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <ul style="color:red;">
                                    <?php $__currentLoopData = $errors->get('phone'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="am-form-group tpl-login-remember-me">
                        <input id="remember-me" type="checkbox" name="tonyi">
                        <label for="remember-me">
       
                        我已阅读并同意 <a href="javascript:;">《用户注册协议》</a> 
                         </label>
                        <?php if(count($errors) > 0): ?>
                            <div class="alert alert-danger">
                                <ul style="color:red;">
                                    <?php $__currentLoopData = $errors->get('tonyi'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="am-form-group">

                        <button type="submit" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">提交</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="<?php echo e(url('assets/js/amazeui.min.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/app.js')); ?>"></script>

</body>

</html>