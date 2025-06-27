<?php $__env->startSection('title', 'Sign Up'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<!-- 
<style>
    .login-card {
        background: url('<?php echo e(url('assets/images/login/login_bg.jpg')); ?>') !important;
    }
</style> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<link rel="icon" type="image/x-icon" href="<?php echo e(asset('newAssets/img/favicon.ico')); ?>" />
<link rel="stylesheet" href="<?php echo e(url('css/app.css')); ?>">



<style>
    .capatchaClass {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
        flex-wrap: wrap;
    }

    .login-new-card {
        background-color: #f1f1f1 !important;
    }

    .signup-res-img {
        width: 700px;
    }

    @media (max-width: 768px) {
        .signup-res-img {
            display: none !important;
            /* margin-top: 50px !important; */
        }

        .head-sign-new {
            text-align: start;
            font-size: 24px;
        }
    }

    .head-sign-new {
        font-weight: 600;
        color: #000;
        padding-bottom: 32px;
        text-align: center;
        font-family: "Manrope", sans-serif !important;
        font-size: 24px;
    }
</style>
<?php echo $__env->make('staticPages.layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->startSection('main_content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6">
            <img src="<?php echo e(asset('assets/images/login/loginbg3.png')); ?>"
                style="display: flex; margin: 0 auto;" alt="looginpage" class="signup-res-img">
        </div>
        <div class="col-xl-6 p-0">
            <div class="login-card login-dark login-new-card">
                <div>
                    <!-- <div><a class="logo text-start" href="<?php echo e(route('network.index')); ?>"><img class="img-fluid for-light"
                                src="<?php echo e(asset('assets/images/logo/praxlogo.png')); ?>" alt="looginpage"><img
                                class="img-fluid for-dark" src="<?php echo e(asset('assets/images/logo/praxlogo.png')); ?>"
                                alt="looginpage"></a></div> -->
                    <h1 class="head-sign-new">Sign Up to explore the industries</h1>
                    <?php if(session('status')): ?>
                    <?php echo $__env->make('appLayouts.addedLayouts._alert',
                    array('alertType' => 'success',
                    'message' => session('status')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php endif; ?>

                    <?php if($errors->any()): ?>
                    <?php echo $__env->make('appLayouts.addedLayouts._alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php endif; ?>



                    <div class="login-main">
                        <form class="theme-form" method="POST" action="<?php echo e(route('signup.storeBaseCompanyDetails')); ?>" novalidate>
                            <?php echo csrf_field(); ?>
                            <h4>Create your account</h4>
                            <p>Enter your personal details to create account</p>

                            <div class="form-group">
                                <label class="col-form-label pt-0">Company Name</label>
                                <input class="form-control" type="text" name="companyName" placeholder="Company name" required>
                                <div class="invalid-feedback">Please provide a company name.</div>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Phone Number</label>
                                <input class="form-control" type="number" name="phoneNumber" required placeholder="Enter Your Number">
                                <div class="invalid-feedback">Please enter a valid phone number.</div>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Email Address</label>
                                <input class="form-control" type="email" id="email" name="email" value="<?php echo e($referalEmail); ?>" required placeholder="example@email.com">
                                <span class="invalid-feedback emailAlreadyExistsError text-danger" id="emailAlreadyExistsError" style="display:none;">The Email Already Exists!</span>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control password" type="password" name="password" required placeholder="Enter your password">
                                    <div class="invalid-feedback">Password is required.</div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-form-label">Confirm Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control confirmPassword" type="password" id="confirmPassword" name="confirmPassword" required placeholder="Confirm Password">
                                    <div class="invalid-feedback" id="samePasswordEnterError">
                                        Please enter the same password.
                                    </div>
                                    <div class="invalid-feedback">Please enter a valid password.</div>
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="col-form-label pt-0">Referal Code (if any)</label>
                                <input class="form-control" type="text" name="referalCode" value="<?php echo e($referalCode); ?>" placeholder="Referal Code">
                                <div class="invalid-feedback">Please provide a company name.</div>
                            </div>

                            <div class="form-group capatchaClass">
                                
                                <?php echo NoCaptcha::display(['data-callback' => 'onReCaptchaSuccess']); ?>

                            </div>



                            <div class="form-group mb-0">
                                <div class="form-check">
                                    <input class="checkbox-primary form-check-input" id="checkbox1" type="checkbox" required disabled>
                                    <label class="text-muted form-check-label" for="checkbox1">
                                        I agree to the terms & conditions and <a class="ms-2" href="<?php echo e(route('home.showPrivacyPolicy')); ?>" target="_blank">Privacy Policy</a>
                                    </label>
                                    <div class="invalid-feedback">You must agree before submitting.</div>
                                </div>

                                <button class="btn btn-primary btn-block w-100 mt-3" id="btnSubmit" type="submit" disabled>
                                    Create Account
                                </button>
                            </div>

                            <p class="mt-4 mb-0">Already have an account?<a class="ms-2" href="<?php echo e(route('login')); ?>">Sign in</a>
                            </p>
                        </form>

                        
                        <?php echo NoCaptcha::renderJs(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('staticPages.layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    let isCaptchaVerified = false;
    let isPasswordMatched = false;
    let isEmailValid = false;

    function updateSubmitButtonState() {
        const checkbox = document.getElementById('checkbox1');
        const btnSubmit = document.getElementById('btnSubmit');

        if (isCaptchaVerified && isPasswordMatched && isEmailValid && checkbox.checked) {
            btnSubmit.disabled = false;
        } else {
            btnSubmit.disabled = true;
        }
    }

    function onReCaptchaSuccess(token) {
        isCaptchaVerified = true;
        document.getElementById('checkbox1').disabled = false;
        updateSubmitButtonState();
    }

    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            }
        });

        // Checkbox change
        $('#checkbox1').on('change', function() {
            updateSubmitButtonState();
        });

        // Email validation via AJAX
        $('#email').focusout(function() {
            const email = $(this).val();
            $.ajax({
                type: "POST",
                async: false,
                url: "<?php echo e(route('signup.validateCompanyEmail')); ?>",
                data: {
                    email: email,
                    currentEmail: "<?php echo e($company->companyEmail ?? null); ?>"
                },
                success: function(data) {
                    if (data === 'Email Already Exist') {
                        $('#emailAlreadyExistsError').show();
                        isEmailValid = false;
                    } else {
                        $('#emailAlreadyExistsError').hide();
                        isEmailValid = true;
                    }
                    updateSubmitButtonState();
                },
                error: function() {
                    isEmailValid = false;
                    updateSubmitButtonState();
                }
            });
        });

        // Password and confirm password validation
        function validatePasswordMatch() {
            const password = $(".password").val();
            const confirmPassword = $(".confirmPassword").val();

            if (password && confirmPassword && password === confirmPassword) {
                $("#samePasswordEnterError").hide();
                isPasswordMatched = true;
            } else {
                $("#samePasswordEnterError").show();
                isPasswordMatched = false;
            }
            updateSubmitButtonState();
        }

        $('.password, .confirmPassword').on('focusout', validatePasswordMatch);

        $('.confirmPassword').on('focusin', function() {
            $("#samePasswordEnterError").hide();
        });
    });
</script>


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

<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('theme-form');
            Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.authentication.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/signupPages/baseSignup.blade.php ENDPATH**/ ?>