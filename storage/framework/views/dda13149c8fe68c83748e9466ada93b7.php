<?php $__env->startSection('content'); ?>

<?php $__env->startSection('main_content'); ?>

<script type="text/javascript">

</script>

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Jobs</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard.index')); ?>"> <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg></a></li>
                    <li class="breadcrumb-item"><a class="decolorAnchorTag" href="<?php echo e(route('jobs.index')); ?>">Jobs</a></li>
                    <li class="breadcrumb-item"><a class="decolorAnchorTag" href="<?php echo e(route("jobs.show",$job->id)); ?>"><?php echo e($job->name); ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </div>
        </div>
    </div>
</div><!-- Container-fluid starts-->
<?php if($errors->any()): ?>
<?php echo $__env->make('appLayouts.addedLayouts._alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-wrapper border rounded-3">
                        <form class="text-left needs-validation theme-form" role="form" method="POST" id="frmCreateJob" action="<?php echo e(route('job.giveQuote')); ?>" novalidate enctype="multipart/form-data">


                            <?php echo e(csrf_field()); ?>

                            <div class="row">


                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="message" class="form-label">Description</label>
                                    <textarea class="form-control adjustInputColor" id="description" readonly name="description" placeholder="Job Description..." required=""><?php echo e($job->description ?? ''); ?></textarea>
                                    <div class="invalid-feedback">
                                        Please provide a valid description.
                                    </div>
                                </div>


                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Quantity</label>
                                    <input type="number" class="form-control adjustInputColor" min="1" readonly autocomplete="off" id="quantity" name="quantity" value="<?php echo e(old('quantity', !empty($job->quantity) ? $job->quantity : '')); ?>" placeholder="Quantity" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid quantity.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Unit Price</label>
                                    <input type="number" class="form-control adjustInputColor" min="1" autocomplete="off" id="unitPrice" name="unitPrice" value="<?php echo e(old('unitPrice', !empty($job->unitPrice) ? $job->unitPrice : '')); ?>" placeholder="Unit Price" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid unit price.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Sub Total</label>
                                    <input type="number" class="form-control adjustInputColor" min="1" autocomplete="off" id="subTotal" name="subTotal" placeholder="Sub Total" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid sub total.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Brut Price</label>
                                    <input type="number" class="form-control adjustInputColor" min="1" autocomplete="off" id="brutPrice" name="brutPrice" placeholder="brut Price" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid brut price.
                                    </div>
                                </div>


                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Total Net Price</label>
                                    <input type="number" class="form-control adjustInputColor" min="1" autocomplete="off" id="netPrice" name="netPrice" placeholder="Net Price" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid  net price.
                                    </div>
                                </div>

                                <input type="hidden" id="jobID" name="jobID" value="<?php echo e($job->id ?? ''); ?>" class=" form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?> round" required readonly style="background-color: transparent!important;">



                                <div class="col-12">
                                    <a class="btn btn-outline-danger me-3" href="<?php echo e(route('jobs.viewAllRfqs')); ?>">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/jobs/myCustomer/makeQuote.blade.php ENDPATH**/ ?>