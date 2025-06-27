<script type="text/javascript">
    $(document).ready(function() {


        if ("<?php echo e($page=='editSubscription'); ?>") {

            $(document).on('click', '.editPageSubmitBtn', function() {
                document.getElementById("password").required = false;
                document.getElementById("confirmPassword").required = false;
            });
        }



        $('form#frmCreateSubscription').submit(function(e) {
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

    });
</script>



<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-wrapper border rounded-3">
                        <form class="text-left needs-validation customForm" role="form" method="POST" id="frmCreateSubscription" action="<?php echo e(($page=='editSubscription') ? route('subscriptions.update', $subscription) : route('subscriptions.store')); ?>" novalidate enctype="multipart/form-data">
                            <?php if($page=='editSubscription'): ?>
                            <?php echo e(method_field('PUT')); ?>

                            <?php endif; ?>

                            <?php echo e(csrf_field()); ?>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Subscription Name</label>
                                    <input type="text" class="form-control adjustInputColor adjustInputColor" maxlength="75" autocomplete="off" id="name" name="name" value="<?php echo e(old('name', !empty($subscription->name) ? $subscription->name : '')); ?>" placeholder="Subscription name" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid subscription name.
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Amount (Monthly)</label>
                                    <input type="number" min="1" class="form-control adjustInputColor adjustInputColor" autocomplete="off" id="amount" name="amount" value="<?php echo e(old('amount', !empty($subscription->amount) ? $subscription->amount : '')); ?>" placeholder="Subscription Amount" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid subscription amount.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Duration (number of days)</label>
                                    <input type="number" min="1" class="form-control adjustInputColor adjustInputColor" autocomplete="off" id="duration" name="duration" value="<?php echo e(old('duration', !empty($subscription->duration) ? $subscription->duration : '')); ?>" placeholder="Subscription Duration" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid subscription duration.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Package Discount</label>
                                    <input type="number" min="1" class="form-control adjustInputColor adjustInputColor" autocomplete="off" id="packageDiscount" name="packageDiscount" value="<?php echo e(old('packageDiscount', !empty($subscription->packageDiscount) ? $subscription->packageDiscount : '')); ?>" placeholder="Subscription Package Discount" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid subscription package discount.
                                    </div>
                                </div>

                              

                                <div class="col-12 col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="description">Description</label>
                                    <textarea type="text" id="description" name="description" rows="1" placeholder="Description" class="form-control adjustInputColor"><?php echo e($subscription->description ?? old('subscription')); ?></textarea>

                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Subscription Image</label>
                                    <input class="form-control adjustInputColor form-control-sm" id="file" name="file" type="file" accept=".jpg, .jpeg, .png" <?php if($page !=="editSubscription" ): ?> required <?php endif; ?>>

                                    <small class="text-danger" id="photoError" style="display: none;">File size must be less than 6MB.</small>
                                    <div class="invalid-feedback">
                                        Please provide a valid image.
                                    </div>
                                </div>


                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="col-form-label m-l-10">Status</label>
                                    <div class="icon-state">
                                        <label class="switch mb-0">
                                            <input type="checkbox" name="status" id="status"
                                                <?php if (isset($subscription->status) && $subscription->status === 'ACTIVE') echo 'checked'; ?>>
                                            <span class="switch-state bg-success"></span>
                                        </label>
                                    </div>
                                </div>




                                <div class="col-12">
                                    <a class="btn btn-outline-danger me-3" href="<?php echo e($page == 'editSubscription' ? route('subscriptions.show',$subscription) : route('subscriptions.index')); ?>">
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
</div>

<?php if($page == "editSubscription"): ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Uploaded Image</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-wrapper border rounded-3">
                        <?php if(isset($subscription->path)): ?>
                        <img src="<?php echo e(Storage::disk('s3')->url($subscription->path)); ?>" alt="Uploaded Image" width="300">
                        <?php else: ?>
                        <p>No Image Found</p>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>

<script>
    $(document).ready(function() {
        $("#file").on("change", function() {
            var file = this.files[0];
            if (file) {
                var maxSize = 6 * 1024 * 1024; // 11MB in bytes
                if (file.size > maxSize) {
                    $("#photoError").show();
                    $(this).val(""); // Clear the input
                } else {
                    $("#photoError").hide();
                }
            }
        });
    });
</script><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/subscriptions/_form.blade.php ENDPATH**/ ?>