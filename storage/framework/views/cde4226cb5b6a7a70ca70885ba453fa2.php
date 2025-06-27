<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<link rel="stylesheet" href="<?php echo e(url('css/app.css')); ?>">
<link rel="icon" type="image/x-icon" href="<?php echo e(asset('newAssets/img/favicon.ico')); ?>" />
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
<?php echo $__env->make('staticPages.layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<style>
    .login-card{
        background-color: #f1f1f1 !important;
    }
    .login-new-img{
        width: 100%;
  height: 100vh;
  object-fit: cover;
  object-position: center;
  display: block;
    }

    @media (max-width: 768px) {
        .login-new-img {
      display: none !important;
    }
    .head-sign-new{
        text-align: center;
        font-size: 24px;
    }
    }
    .head-sign-new{
        font-weight: 600;
        color: #000;
        padding-bottom: 32px;
        font-family: "Manrope", sans-serif !important;
        font-size: 24px;
        text-align: center;
    }
</style>
<?php $__env->startSection('main_content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-5"><img class="login-new-img" src="<?php echo e(asset('assets/images/login/login-bg2.png')); ?>" alt="loginpage">
        </div>
        <div class="col-xl-7 p-0">
            <div class="login-card login-dark">
                <div>
                    <!-- <div><a class="logo text-start" href="<?php echo e(route('network.index')); ?>"><img class="img-fluid for-light"
                                src="<?php echo e(asset('assets/images/logo/praxlogo.png')); ?>" alt="looginpage"><img
                                class="img-fluid for-dark" src="<?php echo e(asset('assets/images/logo/logo_dark.png')); ?>"
                                alt="looginpage"></a></div> -->
                                <h1 class="head-sign-new">Sign in to explore the industries</h1>
                    <?php if(session('status')): ?>
                    <?php echo $__env->make('appLayouts.addedLayouts._alert',
                    array('alertType' => 'success',
                    'message' => session('status')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php endif; ?>

                    <div class="login-main">
                        <form class="theme-form" method="POST" action="<?php echo e(route('login')); ?>" onsubmit="return validateForm()">
                            <?php echo csrf_field(); ?>
                            <h4>Sign in to account</h4>
                            <p>Enter your email & password to login</p>
                            <div class="form-group">
                                <label class="col-form-label">Email Address</label>
                                <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" required autocomplete="email" autofocus placeholder="Enter your email">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password"
                                        placeholder="*********">
                                    
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <div class="form-check">
                                    <input class="checkbox-primary form-check-input" id="checkbox1" type="checkbox">
                                    <label class="text-muted form-check-label" for="checkbox1">Remember password</label>
                                </div>
                                <?php if(Route::has('password.request')): ?>
                                <a class="link" href="<?php echo e(route('password.request')); ?>">Forgot password?</a>
                                <?php endif; ?>
                                <button class="btn btn-primary btn-block w-100 mt-3 spinner-btn" type="submit"><span class="signInText">Sign in</span></button>
                            </div>
                            <h6 class="text-muted mt-4 or d-none">Or Sign in with</h6>
                            <div class="social mt-4 d-none">
                                <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login"
                                        target="_blank"><i class="fa-brands fa-linkedin-in"></i></a><a class="btn btn-light"
                                        href="https://twitter.com/login?lang=en" target="_blank"><i
                                            class="fa-brands fa-x-twitter"></i></a><a class="btn btn-light"
                                        href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f"></i></a><a class="btn btn-light"
                                        href="https://www.google.com/" target="_blank"><i
                                            class="fa-brands fa-google"></i></a></div>
                            </div>
                            <p class="mt-4 mb-0 text-center d-none">Don't have account?<a class="ms-2" href="#">Create
                                    Account</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('staticPages.layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('staticPages.components.back-to-top', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    function validateForm() {
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!email || !emailPattern.test(email)) {
            showError('email', 'Please enter a valid email address.');
            return false;
        }

        if (!password) {
            showError('password', 'Password is required.');
            return false;
        }

        return true;
    }

    function showError(inputId, message) {
        const input = document.getElementById(inputId);
        const feedback = input.nextElementSibling;

        if (feedback && feedback.classList.contains('invalid-feedback')) {
            feedback.innerHTML = '<strong>' + message + '</strong>';
        }

        input.classList.add('is-invalid');
    }

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

<?php echo $__env->make('appLayouts.authentication.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/auth/login.blade.php ENDPATH**/ ?>