<?php $__env->startSection('title', 'Reset Password'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<!-- loader starts-->
<div class="loader-wrapper">
    <div class="loader-index"> <span></span></div>
    <svg>
        <defs></defs>
        <filter id="goo">
            <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
            <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
            </fecolormatrix>
        </filter>
    </svg>
</div>
<!-- loader ends-->
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->

<style>
    /* .resetheaderText{
        text-align: center;
    } */
</style>
<div class="page-wrapper">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="login-card login-dark">
                    <div>
                        <div><a class="logo" href="<?php echo e(route('network.index')); ?>"><img class="img-fluid for-light"
                                    src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" alt="looginpage"><img
                                    class="img-fluid for-dark" src="<?php echo e(asset('assets/images/logo/logo_dark.png')); ?>"
                                    alt="looginpage"></a></div>
                                    <?php if(session('status')): ?>
                            <?php echo $__env->make('appLayouts.addedLayouts._alert',
                            array('alertType' => 'success',
                            'message' => session('status')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <?php endif; ?>

                            <?php if(count($errors) > 0): ?>
                            <?php echo $__env->make('appLayouts.addedLayouts._alert',
                            array('message' => $errors), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                            <?php endif; ?>
                        <div class="login-main">
                            
                            <form class="theme-form" role="form" method="POST" id="frmAddChannel" action="<?php echo e(route('password.update')); ?>" novalidate enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <h4 class="resetheaderText">Create Your Password</h4>
                                <div class="form-group">
                                    <label class="col-form-label">New Password</label>
                                    <div class="form-input position-relative">
                                        <input minlength="6" type="password" id="password" class="form-control password <?php echo e($errors->has('password') ? ' is-invalid' : ''); ?> round" placeholder="Enter the new password" name="password" required>

                                        <div class="show-hide"><span class="show"></span></div>
                                    </div>
                                </div>
                                <input type="hidden" id="email" value="<?php echo e($email ?? ''); ?>" class=" form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?> round" placeholder="Email" name="email" required readonly style="background-color: transparent!important;">
                                <input type="hidden" id="resetToken" value="<?php echo e($resetToken ?? ''); ?>" class=" form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?> round" name="resetToken" required readonly>

                                <div class="form-group">
                                    <label class="col-form-label">Retype Password</label>
                                    <input minlength="6" type="password" id="password_confirmation" class="form-control confirmPassword <?php echo e($errors->has('password_confirmation') ? ' is-invalid' : ''); ?> round" placeholder="Confirm password" name="password_confirmation" required>

                                </div>
                                <div class="form-group mb-0">

                                    <button class="btn btn-primary btn-block w-100 mt-3" type="submit">Submit </button>
                                </div>
                                <p class="mt-4 mb-0 text-center">Got Your Password?<a class="ms-2"
                                        href="<?php echo e(route('login')); ?>">Sign In</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.authentication.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/auth/reset-password.blade.php ENDPATH**/ ?>