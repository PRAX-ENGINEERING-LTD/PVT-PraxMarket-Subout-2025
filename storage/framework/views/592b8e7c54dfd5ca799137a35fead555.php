<?php $__env->startSection('title', 'Sign Up'); ?>

<?php $__env->startSection('css'); ?>
<style>
    .login-card-new {
        background-image: url("<?php echo e(asset('newAssets/img/signup/login_bg.jpg')); ?>") !important;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<div class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-12 p-0">
            <div class="login-card login-card-new login-dark">
                <div>
                    <div><a class="logo" href="<?php echo e(url('/home.showHomePage')); ?>"><img class="img-fluid for-light"
                                src="<?php echo e(asset('newAssets/img/prax_logo.png')); ?>" style="width: 400px;" alt="looginpage"><img
                                class="img-fluid for-dark"
                                alt="looginpage"></a></div>
                    <div class="login-main create-account">
                        <form class="theme-form">
                            <h4>Create your account</h4>
                            <p>Enter your personal details to create account</p>
                            <div class="form-group">
                                <label class="col-form-label pt-0">Your Name</label>
                                <div class="row g-2">
                                    <div class="col-sm-6">
                                        <input class="form-control" type="text" required=""
                                            placeholder="First name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="text" required=""
                                            placeholder="Last name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Phone Number</label>
                                <input class="form-control" type="number" required="" placeholder="Enter Your Number">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Email Address</label>
                                <input class="form-control" type="email" required="" placeholder="example@email.com">
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="password" required=""
                                        placeholder="*********">
                                    <div class="show-hide"><span class="show"></span></div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <!-- <div class="form-check">
                                    <input class="checkbox-primary form-check-input" id="checkbox1" type="checkbox">
                                    <label class="text-muted form-check-label" for="checkbox1">I agree to the terms &
                                        conditions and <a class="ms-2" href="#">Privacy Policy</a></label>
                                </div> -->
                                <button class="btn btn-primary btn-block w-100 mt-3" type="submit">Create
                                    Account</button>
                            </div>
                            <!-- <h6 class="text-muted mt-4 or">Or create your account with</h6> -->
                            <!-- <div class="social mt-4">
                                    <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login"
                                            target="_blank"><i class="fa-brands fa-linkedin-in"></i></a><a
                                            class="btn btn-light" href="https://twitter.com/login?lang=en"
                                            target="_blank"><i class="fa-brands fa-x-twitter"></i></a><a
                                            class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i
                                                class="fa-brands fa-facebook-f"></i></a><a class="btn btn-light"
                                            href="https://www.google.com/" target="_blank"><i
                                                class="fa-brands fa-google"></i></a></div>
                                </div> -->
                            <p class="mt-4 mb-0">Already have an account?<a class="ms-2" href="<?php echo e(url('/login')); ?>">Sign in</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.authentication.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/htmlcodes/signup.blade.php ENDPATH**/ ?>