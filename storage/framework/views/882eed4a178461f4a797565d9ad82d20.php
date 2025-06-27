<?php $__env->startSection('title', 'Register'); ?>

<?php $__env->startSection('css'); ?>
<style>
    .login-main-new {
        width: 800px !important;
     
    }
.signvp-3-new .login-card{
    background-image: url("<?php echo e(asset('newAssets/img/signup/login_bg.jpg')); ?>") !important;
        background-position: center !important;
        background-size: cover !important;
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
        .signvp-3-new .wizard-4 .step-container {
            position: unset !important;
        }

        .login-main-new {
            width: 400px !important;
        }

        .signvp-3-new .wizard-4 ul.anchor {
            width: 100%;
            /* height: auto; */
            padding: 30px;
            height: 350px !important;
        }

        .login-main-new {
            margin-top: 50px;
        }

        .signvp-3-new .wizard-4 .step-container div.content {

            top: 350px !important;
        }

        .loginv3 {
            display: none !important;
        }

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
    .step2-v3{
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        padding: 30px;
        width: 700px !important;

    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
<div class="container-fluid signvp-3-new">
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
                            <li  class="step-1 active">
                                <a href="#step-1" class="step-1-link">
                                    <h4>1</h4>
                                    <h5>Company Details</h5><small>Add Details</small>
                                </a></li>
                                <li class="step-2"><a href="#step-2" class="step-2-link">
                                    <h4>2</h4>
                                    <h5>Account Verified</h5><small>Sucessfully Verified</small>
                                </a></li>
                            <li><img src="<?php echo e(asset('newAssets/img/signup/signup.png')); ?>" alt="login page" class="loginv3"></li>
                        </ul>

                        <!-- Step 1.1: Personal Information -->
                        <div id="step-1-1">
                            <div class="wizard-title">
                                <h2 style="margin-bottom: 10px;text-align:center">Company Details</h2>
                            </div>
                            <div class="login-main login-main-new">
                                <div class="theme-form">
                                    <div class="form-group">
                                        <div class="row g-2">
                                            <div class="col-md-6 col-12">
                                                <label>Company Name</label>
                                                <input type="text" class="form-control" name="company_name" placeholder="Enter Company Name" required>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label>Company Logo</label>
                                                <input type="file" class="form-control" name="company_logo" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row g-2">
                                            <div class="col-md-6 col-12">
                                                <label>Referral Code</label>
                                                <input type="text" class="form-control" name="referral_code" placeholder="Enter Referral Code">
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label>City/Town</label>
                                                <input type="text" class="form-control" name="city_town" placeholder="Enter City/Town" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row g-2">
                                            <div class="col-md-6 col-12">
                                                <label>Postal Code</label>
                                                <input type="text" class="form-control" name="postal_code" placeholder="Enter Postal Code" required>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label>Country</label>
                                                <select class="form-control" name="country" required>
                                                    <option value="" disabled selected>Select Country</option>
                                                    <option value="UK">UK</option>
                                                    <option value="India">India</option>
                                                    <option value="USA">USA</option>
                                                    <option value="UAE">UAE</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row g-2">
                                            <div class="col-md-6 col-12">
                                                <label>Website</label>
                                                <input type="url" class="form-control" name="website" placeholder="Enter Website URL">
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label>Phone Number</label>
                                                <input type="tel" class="form-control" name="phone_number" placeholder="Enter Phone Number" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row g-2">
                                            <div class="col-md-6 col-12">
                                                <label>VAT Number</label>
                                                <input type="text" class="form-control" name="vat_number" placeholder="Enter VAT Number">
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <label>Address</label>
                                                <textarea class="form-control" name="address" placeholder="Enter Address" rows="3" required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-primary next-to-step-1-2 w-100 mt-3">Next</button>
                                </div>


                            </div>
                        </div>

                        <!-- Step 1.2: Company Details -->
                      

                        <!-- Thank You Page -->
                        <div id="step-1-2" class="login-main login-main-new text-center" style="display:none;"  class="step2-v3">
                            <img src="<?php echo e(asset('newAssets/img/signup/success.png')); ?>" style="width: 200px;" alt="Success" class="img-fluid mb-4">
                            <h4>Your account has been successfully verified</h4>
                            <div class="mt-3">
                                <a href="<?php echo e(url('/home.showHomePage')); ?>" class="btn btn-primary">Go Dashboard</a>
                                <button type="button" class="btn btn-secondary ms-2 back-to-step-1-1">Previous</button>
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

        // Form validation
        function validateForm() {
            let isValid = true;
            let focusSet = false;

            // Company Name validation
            const companyName = $('input[name="company_name"]').val().trim();
            if (companyName === '') {
                showError('input[name="company_name"]', 'Company name is required');
                if (!focusSet) {
                    $('input[name="company_name"]').focus();
                    focusSet = true;
                }
                isValid = false;
            } else {
                removeError('input[name="company_name"]');
            }

            // Company Logo validation
            const companyLogo = $('input[name="company_logo"]').val();
            if (companyLogo === '') {
                showError('input[name="company_logo"]', 'Company logo is required');
                if (!focusSet) {
                    $('input[name="company_logo"]').focus();
                    focusSet = true;
                }
                isValid = false;
            } else {
                // Validate file type
                const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
                if (!allowedExtensions.exec(companyLogo)) {
                    showError('input[name="company_logo"]', 'Please upload file having extension .jpeg/.jpg/.png/.gif only');
                    if (!focusSet) {
                        $('input[name="company_logo"]').focus();
                        focusSet = true;
                    }
                    isValid = false;
                } else {
                    removeError('input[name="company_logo"]');
                }
            }

            // City/Town validation
            const cityTown = $('input[name="city_town"]').val().trim();
            if (cityTown === '') {
                showError('input[name="city_town"]', 'City/Town is required');
                if (!focusSet) {
                    $('input[name="city_town"]').focus();
                    focusSet = true;
                }
                isValid = false;
            } else {
                removeError('input[name="city_town"]');
            }

            // Postal Code validation
            const postalCode = $('input[name="postal_code"]').val().trim();
            if (postalCode === '') {
                showError('input[name="postal_code"]', 'Postal Code is required');
                if (!focusSet) {
                    $('input[name="postal_code"]').focus();
                    focusSet = true;
                }
                isValid = false;
            } else {
                removeError('input[name="postal_code"]');
            }

            // Country validation
            const country = $('select[name="country"]').val();
            if (!country) {
                showError('select[name="country"]', 'Please select a country');
                if (!focusSet) {
                    $('select[name="country"]').focus();
                    focusSet = true;
                }
                isValid = false;
            } else {
                removeError('select[name="country"]');
            }

            // Website validation (optional but must be valid if entered)
            const website = $('input[name="website"]').val().trim();
            if (website !== '') {
                const urlPattern = /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/;
                if (!urlPattern.test(website)) {
                    showError('input[name="website"]', 'Please enter a valid URL');
                    if (!focusSet) {
                        $('input[name="website"]').focus();
                        focusSet = true;
                    }
                    isValid = false;
                } else {
                    removeError('input[name="website"]');
                }
            } else {
                removeError('input[name="website"]');
            }

            // Phone Number validation
        const phoneNumber = $('input[name="phone_number"]').val().trim();
            if (phoneNumber === '') {
                showError('input[name="phone_number"]', 'Phone Number is required');
                if (!focusSet) {
                    $('input[name="phone_number"]').focus();
                    focusSet = true;
                }
                isValid = false;
            } else {
                const phonePattern = /^[+]?[(]?[0-9]{3}[)]?[-\s.]?[0-9]{3}[-\s.]?[0-9]{4,6}$/;
                if (!phonePattern.test(phoneNumber)) {
                    showError('input[name="phone_number"]', 'Please enter a valid phone number');
                    if (!focusSet) {
                        $('input[name="phone_number"]').focus();
                        focusSet = true;
                    }
                    isValid = false;
                } else {
                    removeError('input[name="phone_number"]');
                }
            }

            // VAT Number validation (optional)
            // If specific VAT format is needed, add validation here

            // Address validation
            const address = $('textarea[name="address"]').val().trim();
            if (address === '') {
                showError('textarea[name="address"]', 'Address is required');
                if (!focusSet) {
                    $('textarea[name="address"]').focus();
                    focusSet = true;
                }
                isValid = false;
            } else if (address.length < 10) {
                showError('textarea[name="address"]', 'Address should be at least 10 characters');
                if (!focusSet) {
                    $('textarea[name="address"]').focus();
                    focusSet = true;
                }
                isValid = false;
            } else {
                removeError('textarea[name="address"]');
            }

            return isValid;
        }

        // Function to show error message
        function showError(element, message) {
            $(element).addClass('is-invalid');

            // Remove any existing error message
            if ($(element).next('.invalid-feedback').length > 0) {
                $(element).next('.invalid-feedback').remove();
            }

            // Add new error message
            $(element).after('<div class="invalid-feedback">' + message + '</div>');
        }

        // Function to remove error message
        function removeError(element) {
            $(element).removeClass('is-invalid');
            if ($(element).next('.invalid-feedback').length > 0) {
                $(element).next('.invalid-feedback').remove();
            }
        }

        // Real-time validation on input fields
        $('input, select, textarea').on('blur', function() {
            validateField($(this));
        });

        // Function to validate individual field
        function validateField(field) {
            const fieldName = field.attr('name');
            const fieldValue = field.val().trim();

            switch (fieldName) {
                case 'company_name':
                    if (fieldValue === '') {
                        showError(field, 'Company name is required');
                    } else {
                        removeError(field);
                    }
                    break;

                case 'company_logo':
                    if (fieldValue === '') {
                        showError(field, 'Company logo is required');
                    } else {
                        const allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
                        if (!allowedExtensions.exec(fieldValue)) {
                            showError(field, 'Please upload file having extension .jpeg/.jpg/.png/.gif only');
                        } else {
                            removeError(field);
                        }
                    }
                    break;

                case 'city_town':
                    if (fieldValue === '') {
                        showError(field, 'City/Town is required');
                    } else {
                        removeError(field);
                    }
                    break;

                case 'postal_code':
                    if (fieldValue === '') {
                        showError(field, 'Postal Code is required');
                    } else {
                        removeError(field);
                    }
                    break;

                case 'country':
                    if (!fieldValue) {
                        showError(field, 'Please select a country');
                    } else {
                        removeError(field);
                    }
                    break;

                case 'website':
                    if (fieldValue !== '') {
                        const urlPattern = /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/;
                        if (!urlPattern.test(fieldValue)) {
                            showError(field, 'Please enter a valid URL');
                        } else {
                            removeError(field);
                        }
                    } else {
                        removeError(field);
                    }
                    break;

                case 'phone_number':
                    if (fieldValue === '') {
                        showError(field, 'Phone Number is required');
                    } else {
                        const phonePattern = /^[+]?[(]?[0-9]{3}[)]?[-\s.]?[0-9]{3}[-\s.]?[0-9]{4,6}$/;
                        if (!phonePattern.test(fieldValue)) {
                            showError(field, 'Please enter a valid phone number');
                        } else {
                            removeError(field);
                        }
                    }
                    break;

                case 'address':
                    if (fieldValue === '') {
                        showError(field, 'Address is required');
                    } else if (fieldValue.length < 10) {
                        showError(field, 'Address should be at least 10 characters');
                    } else {
                        removeError(field);
                    }
                    break;
            }
        }

        // Submit button event handler
        $(".next-to-step-1-2").on("click", function(e) {
            e.preventDefault(); // Prevent default action

            if (validateForm()) {
                $("#step-1-1").hide();
                $("#step-1-2").show();
                updateStepIndicators();
            }
    
        });

        // Previous button (if needed)
        $(".back-to-step-1-1").on("click", function() {
            $("#step-1-2").hide();
            $("#step-1-1").show();
            updateStepIndicators();
        });
        $(".back-to-step-1-1").on("click", function() {
            $("#step-1-2").hide();
            $("#step-1-1").show();
            updateStepIndicators();
        });


        $(".submit-registration").on("click", function() {
            $("#step-1-2").hide();
            $("#thank-you-page").show();
              updateStepIndicators();
        });
    });
  

    // Automatically hide error when typing
$('input, select, textarea').on('input change', function () {
    $(this).removeClass('is-invalid'); // Remove red border
    $(this).next('.invalid-feedback').remove(); // Remove error message
});





</script>
<?php $__env->stopSection(); ?>














<?php echo $__env->make('appLayouts.authentication.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/htmlcodes/signupv3.blade.php ENDPATH**/ ?>