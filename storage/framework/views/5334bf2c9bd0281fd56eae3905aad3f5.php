<?php $__env->startSection('title', 'Register'); ?>

<?php $__env->startSection('css'); ?>
<style>
    .login-new-main {
        width: 900px !important;
        /* box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px !important; */

    }

 

    .step-indicator {
        margin-bottom: 20px;
    }

    .step-indicator span {
        display: inline-block;
        margin-right: 10px;
        font-size: 14px;
        color: #6c757d;
    }

    .step-indicator span.active {
        color: #4466f2;
        font-weight: bold;
    }

    .action-bar {
        display: none !important;
    }

    @media only screen and (max-width: 575.98px) {
        .login-new-main {
            width: 480px !important;
        }
    }

    ul li.active a h4 {
        background-color: #7366ff33 !important;
        font-weight: bold;

    }

    ul li.completed a h4 {
        background-color: #7366ff !important;
        position: relative;
        color: #fff;
    }

    ul li.completed a h4::after {
        content: '';
        margin-left: 5px;
        background-color: #28a745;
    }

    .sign-v2 .login-card {
        background-image: url("<?php echo e(asset('newAssets/img/signup/login_bg.jpg')); ?>") !important;
        background-position: center !important;
        background-size: cover !important;
    }

    .step2-bg {
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        padding: 30px;
        width: 700px !important;
    }
    .img-v2{
        margin: 0 auto;
    width: 200px;
    }
    .btn-v2{
        margin: 0 auto;
    width: 250px;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<div class="container-fluid sign-v2">
    <div class="row">
        <div class="col-12 p-0">
            <div>
                <div class="theme-form">
                    <div class="wizard-4" id="wizard">
                        <ul>
                            <li>
                                <a class="logo text-start ps-0" href="<?php echo e(url('/home.showHomePage')); ?>">
                                    <img class="img-fluid for-light" style="width:300px" src="<?php echo e(asset('newAssets/img/prax_logo.png')); ?>" alt="login page">
                                </a>
                            </li>
                            <li class="step-1">
                                <a href="#step-1" class="step-1-link">
                                    <h4>1</h4>
                                    <h5>Registration</h5>
                                    <small>Complete all steps</small>
                                </a>
                            </li>
                            <li class="step-2">
                                <a href="#step-2" class="step-2-link">
                                    <h4>2</h4>
                                    <h5>Email Verified</h5>
                                    <small>Account Verified</small>
                                </a>
                            </li>
                            <li><img src="<?php echo e(asset('newAssets/img/signup/signup.png')); ?>" alt="login page"></li>
                        </ul>

                        <div id="step-1-1">
                            <div class="wizard-title">
                                <h2 style="margin-bottom: 10px;text-align: center;">Registration</h2>
                            </div>
                            <div class="login-main login-new-main">
                                <div class="theme-form">
                                    <div class="form-group">
                                        <div class="row g-2">
                                            <div class="col-sm-6">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name">
                                                <span class="text-danger error-first_name"></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>E-Mail</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter The EMail">
                                                <span class="text-danger error-email"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row g-2">
                                            <div class="col-sm-6">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name">
                                                <span class="text-danger error-last_name"></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                                                <span class="text-danger error-password"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row g-2">
                                            <div class="col-sm-6">
                                                <label>Postal Code</label>
                                                <input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Enter Postal Code">
                                                <span class="text-danger error-postal_code"></span>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Confirm Password</label>
                                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Enter Confirm Password">
                                                <span class="text-danger error-confirm_password"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-primary next-to-step-1-2">Next</button>
                                </div>
                            </div>


                        </div>


                        <div id="step-1-2" style="display:none;" class="step2-bg">
                            <div class="wizard-title">
                                <div class="img-v2">
                                <img src="<?php echo e(asset('newAssets/img/signup/success.png')); ?>" style="width: 100%;object-fit:cover;" alt="Success" class="img-fluid mb-4">
                                </div>
                        
                                <p>Hi There,</p>
                                <p><span id="display_name"> </span> and <span id="display_email"></span> have been verified successfully.
                                    Please check your email for further instructions.</p>
                                    <div class="btn-v2">
                                    <a href="<?php echo e(url('/signupv3')); ?>" class="btn btn-primary mt-3">Go Step 2</a>
                              
                              <button type="button" class="btn btn-secondary mt-3 back-to-step-1-1">Previous</button>
                                    </div>
                               
                            </div>
                        </div>



                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('assets/js/form-wizard/form-wizard-four.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/theme-customizer/customizer.js')); ?>"></script>
<script>
    $(document).ready(function() {
        // Function to update step indicators
        function updateStepIndicators() {
            // Reset all steps
            $("ul li").removeClass("active completed");

            // Handle first step
            if ($("#step-1-1").is(":visible")) {
                $("ul li.step-1").addClass("active");
                $("ul li.step-2").removeClass("active");
            }

            // Handle second step
            if ($("#step-1-2").is(":visible")) {
                $("ul li.step-1").addClass("completed");
                $("ul li.step-2").addClass("active");
            }
        }

        // Initial step indicator update
        updateStepIndicators();

        $(".next-to-step-1-2").on("click", function() {
            // Get all input values
            const firstName = $("#first_name").val().trim();
            const lastName = $("#last_name").val().trim();
            const email = $("#email").val().trim();
            const postalCode = $("#postal_code").val().trim(); // Postal Code
            const password = $("#password").val();
            const confirmPassword = $("#confirm_password").val();

            // Reset Error Messages
            $(".text-danger").text("");

            let isValid = true;

            // First Name Validation
            if (firstName === "") {
                $(".error-first_name").text("First name is required");
                isValid = false;
            }

            // Last Name Validation
            if (lastName === "") {
                $(".error-last_name").text("Last name is required");
                isValid = false;
            }

            // Email Validation
            if (email === "") {
                $(".error-email").text("Email is required");
                isValid = false;
            } else if (!isValidEmail(email)) {
                $(".error-email").text("Please enter a valid email address");
                isValid = false;
            }

            if (isValid) {
                // Dynamically Set Username and Email
                $("#display_name").text(firstName);
                $("#display_email").text(email);

                $("#step-1-1").hide();
                $("#step-1-2").show();
                updateStepIndicators();
            }

            // Postal Code Validation
            if (postalCode === "") {
                $(".error-postal_code").text("Postal code is required");
                isValid = false;
            } else if (!/^\d{5,6}$/.test(postalCode)) {
                $(".error-postal_code").text("Postal code must be 5 to 6 digits");
                isValid = false;
            }

            // Password Validation
            if (password === "") {
                $(".error-password").text("Password is required");
                isValid = false;
            } else if (password.length < 3) {
                $(".error-password").text("Password must be at least 8 characters");
                isValid = false;
            }

            // Confirm Password Validation
            if (confirmPassword === "") {
                $(".error-confirm_password").text("Confirm password is required");
                isValid = false;
            } else if (password !== confirmPassword) {
                $(".error-confirm_password").text("Passwords do not match");
                isValid = false;
            }

            // If All Validations Pass
            if (isValid) {
                $("#step-1-1").hide();
                $("#step-1-2").show();
                updateStepIndicators();
            }
        });

        // Email Validation Function
        function isValidEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }


        // On back button click
        $(".back-to-step-1-1").on("click", function() {
            $("#step-1-2").hide();
            $("#step-1-1").show();
            updateStepIndicators();
        });

        // Hide error message on typing
        $("input").on("input", function() {
            $(this).next(".text-danger").text("");
        });

    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.authentication.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/htmlcodes/signupv2.blade.php ENDPATH**/ ?>