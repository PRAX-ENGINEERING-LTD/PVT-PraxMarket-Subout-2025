
<script type="text/javascript">
    $(document).ready(function() {


        if ("<?php echo e($page=='editUser'); ?>") {

            $(document).on('click', '.editPageSubmitBtn', function() {
                document.getElementById("password").required = false;
                document.getElementById("confirmPassword").required = false;
            });
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            }
        });

        $('form#frmCreateUser').submit(function(e) {
            var form = $(this);
            // HTML5 validility checker
            if (form[0].checkValidity() === false) {
                // not valid
                form.addClass('was-validated');
                $('html,body').animate({
                    scrollTop: $('.was-validated .form-control:invalid').first().offset().top - 400
                }, 'slow');
                e.preventDefault();
                e.stopPropagation();
                return;
            }
            // valid, do something else ...
        });
        $('#email').focusout(function() {
            var email = $(this).val();
            $.ajax({
                type: "POST",
                async: false,
                url: "<?php echo e(route('user-email-validation')); ?>",
                data: {
                    email: email,
                    currentEmail: "<?php echo e($user->email ?? null); ?>"

                },
                success: function(data) {
                    data === 'Email Already Exist' ? ($('#emailAlreadyExistsError').css('display', 'block') &&
                            $('#btnSubmit').prop('disabled', true)) :
                        ($('#emailAlreadyExistsError').css('display', 'none') &&
                            $('#btnSubmit').prop('disabled', false))

                },
                failure: function(data) {
                    console.log(data);
                }
            });
        });

        $('.password').focusout(function() {

            var password = $(".password").val();
            var confirmPassword = $(".confirmPassword").val();

            if (confirmPassword && password && confirmPassword !== password) {
                $("#invalid-feedback").hide();
                $("#samePasswordEnterError").show() && $('#btnSubmit').prop('disabled', true);
            } else if (confirmPassword === password && $('#emailAlreadyExistsError').css('display', 'none')) {
                $("#samePasswordEnterError").hide() && $('#btnSubmit').prop('disabled', false);
                $("#samePasswordEnterError").hide();
            } else {
                $("#samePasswordEnterError").hide() && $('#btnSubmit').prop('disabled', false);

            }

        });

        $('.confirmPassword').focusout(function() {

            var password = $(".password").val();
            var confirmPassword = $(".confirmPassword").val();
            if (confirmPassword && password && confirmPassword !== password) {
                $("#invalid-feedback").hide();
                $("#samePasswordEnterError").show() && $('#btnSubmit').prop('disabled', true);
            } else if (confirmPassword === password && $('#emailAlreadyExistsError').css('display', 'none')) {
                $("#samePasswordEnterError").hide() && $('#btnSubmit').prop('disabled', false);
                $("#samePasswordEnterError").hide();
                $("#samePasswordEnterError").hide() && $('#btnSubmit').prop('disabled', false);
            } else {
                $("#samePasswordEnterError").hide() && $('#btnSubmit').prop('disabled', false);

            }

        });

        $(".confirmPassword").focusin(function() {
            $("#samePasswordEnterError").hide() && $('#btnSubmit').prop('disabled', false);
        });

    });
</script>


<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-wrapper border rounded-3">
                        <form class="text-left needs-validation customForm" role="form" method="POST" id="frmCreateUser" action="<?php echo e(($page=='editUser') ? route('users.update', $user) : route('users.store')); ?>" novalidate enctype="multipart/form-data">
                            <?php if($page=='editUser'): ?>
                            <?php echo e(method_field('PUT')); ?>

                            <?php endif; ?>

                            <?php echo e(csrf_field()); ?>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Name</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="name" name="name" value="<?php echo e(old('name', !empty($user->name) ? $user->name : '')); ?>" placeholder="Enter your Name" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid user name.
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Email</label>
                                    <?php if($page == 'editUser' || $page == 'myAccount'): ?>
                                    <input type="email" class="form-control adjustInputColor position-relative" autocomplete="off" id="email" name="email" value="<?php echo e(old('email', !empty($user->email) ? $user->email : '')); ?>" placeholder="Enter your Email" required="">
                                    <?php else: ?>
                                    <input type="email" class="form-control adjustInputColor position-relative" autocomplete="off" id="email" name="email" value="<?php echo e(old('email', !empty($user->email) ? $user->email : '')); ?>" placeholder="Enter your Email" required="">
                                    <?php endif; ?>
                                    <span class="invalid-feedback emailAlreadyExistsError text-danger" id="emailAlreadyExistsError" style="display:none;">The Email Already Exists!</span>

                                    <div class="invalid-feedback">
                                        Please provide a valid email.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="customState-wizard">Role</label>
                                    <select class="form-select" id="role" name="role" required >
                                        <option selected="" disabled="" value="">Select the role... </option>
                                        <option value="ADMIN" <?php if(old('role[0]', !empty($user->role[0]) ? $user->role[0] : '')==Config::get('constants.roles.admin.valueInDB')): ?> selected="selected" <?php endif; ?> >ADMIN</option>
                                        <option value="ASSOCIATE" <?php if(old('role[0]', !empty($user->role[0]) ? $user->role[0] : '')==Config::get('constants.roles.associate.valueInDB')): ?> selected="selected" <?php endif; ?>>ASSOCIATE</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid Role.

                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputPassword4">Password</label>
                                    <input minlength="6" type="password" autocomplete="off" class="form-control adjustInputColor position-relative password" min="6" id="password" name="password" placeholder="Password" required="">
                                    <div class="invalid-feedback" id="password">
                                        Please provide a valid password.
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputPassword4">Confirm Password</label>
                                    <input minlength="6" type="password" autocomplete="off" id="confirmPassword" name="confirmPassword" class="form-control adjustInputColor position-relative confirmPassword" placeholder="Confirm Password" required="">
                                    <div class="invalid-feedback" id="samePasswordEnterError">
                                        Please enter the same password.
                                    </div>
                                </div>

                                <div class="col-12">
                                    <a class="btn btn-outline-danger me-3" href="<?php echo e($page == 'editUser' ? route('users.show',$user) : route('users.index')); ?>">
                                        Cancel
                                    </a>
                                    <button class="btn btn-success" type="submit">Save
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/users/_form.blade.php ENDPATH**/ ?>