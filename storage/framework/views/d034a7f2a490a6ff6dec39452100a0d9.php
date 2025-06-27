<?php $__env->startSection('title', 'Forgot Password'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<!-- 
<style>
    .login-card {
        background: url('<?php echo e(url('assets/images/login/login_bg.jpg')); ?>') !important;
    }
</style> -->
<?php $__env->startSection('main_content'); ?>
<script src="<?php echo e(asset('app-assets/src/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-7"><img class="bg-img-cover bg-center" src="<?php echo e(asset('assets/images/login/forgotImg.jpg')); ?>"
                alt="looginpage"></div>
        <div class="col-xl-5 p-0">
            <div class="login-card login-dark">
                <div>
                    <div><a class="logo text-start" href="<?php echo e(route('network.index')); ?>"><img class="img-fluid for-light"
                                src="<?php echo e(asset('newAssets/img/header/prax_logo1.png')); ?>" style="max-width: 200px;" alt="looginpage"><img
                                class="img-fluid for-dark" src="<?php echo e(asset('newAssets/img/header/prax_logo1.png')); ?>" style="max-width: 200px;"
                                alt="looginpage"></a></div>
                                <?php if(count($errors) > 0): ?>
                        <?php echo $__env->make('appLayouts.addedLayouts._alert',array('alertType' => 'error'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <?php endif; ?>
                        <?php if(Session("message")): ?>
                        <?php echo $__env->make('appLayouts.addedLayouts._alert',array('alertType' => 'success','message' => Session("message")), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <?php endif; ?>
                    <div class="login-main">
                      
                        <form class="theme-form needs-validation" id="frmResetPassword" method="POST" action="<?php echo e(route('password.email')); ?>" novalidate>
                            <?php echo csrf_field(); ?>
                            <h4>Forgot Password</h4>
                            <p>We will send you a link to reset password.</p>
                            <div class="form-group">
                                <label class="col-form-label">Email</label>
                                <input input id="email" placeholder="Enter your email" class="form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?> " for=" email" :value="__('Email')" type="email" name="email" :value="old('email')" required autofocus>
                            </div>


                            <button class="btn btn-primary btn-block w-100 mt-3 spinner-btn" type="submit"><span class="signInText">Submit</span></button>

                            <p class="mt-4 mb-0 text-center">Got Your Password?<a class="ms-2"
                                    href="<?php echo e(route('login')); ?>">Sign In</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    $('.btn.spinner-btn').click(function(event) {
        event.preventDefault();

        var $btn = $(this);
        $btn.removeClass('btn-block');
        $btn.prop('disabled', true);
        $btn.append('<span class="spinner-border spinner-border-sm spinner_loader" role="status" aria-hidden="true"></span>');

        $('.signInText').addClass('d-none')
        $(this).parents('form')[0].submit();
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.authentication.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/auth/forgot-password.blade.php ENDPATH**/ ?>