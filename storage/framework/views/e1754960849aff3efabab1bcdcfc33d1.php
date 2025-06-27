<?php $__env->startSection('content'); ?>

<?php $__env->startSection('main_content'); ?>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3><?php echo e($job->name ?? 'Job'); ?></h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard.index')); ?>"> <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg></a></li>
                    <li class="breadcrumb-item"><a class="decolorAnchorTag" href="<?php echo e(route('jobs.index')); ?>">Jobs</a></li>
                    <li class="breadcrumb-item active"><?php echo e($job->name ?? 'Job'); ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<!-- Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<!-- Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


<script type="text/javascript">
    $(document).ready(function() {

        var singleDate = flatpickr($('.singleDate'), {
            minDate: "today"
        });
        $("#addNewButtonSubmit").on("click", function() {
            $('#isSaveAndAddNew').val('true');
        });


    });
</script>

<div class="container-fluid">
    <?php if(count($errors) > 0): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert',array('alertType' => 'error'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    <?php if(session('job_deleted')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('job_deleted')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php elseif(session('job_stored')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('job_stored')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php elseif(session('job_updated')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('job_updated')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Job Info</h5>
                        </div>
                        <div class="col-sm-6 showPageTools" id="showPageTools">
                            <div class="action-btn jobActionUpdate" id="jobActionUpdate">
                                <a href="<?php echo e(Storage::disk('s3')->url($job->jobDocPath)); ?>" target="_blank" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Show Supporting Document" data-original-title="Show Supporting Document">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-warning feather feather-file-text me-2">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg></a>
                                <a href="<?php echo e(route('jobs.edit', $job->id)); ?>" class="bs-tooltip showToolTip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success feather-edit  me-2">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg></a>
                                <a data-destroy-route="<?php echo e(url('delete-job')); ?>/<?php echo e($job->id); ?>" class="deleteConfirmSweetAlert bs-tooltip showToolTip pointer" data-toggle="modal" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-danger feather feather-trash me-2">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-6 col-sm-12 col-12 d-none" id="pageActionButtons">

                    </div>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Job Name</label>
                            <p class="adjustInputColor"><?php echo e($job->name ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Job Description</label>
                            <p class="adjustInputColor"><?php echo e($job->description ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Job Additional Information</label>
                            <p class="adjustInputColor"><?php echo e($job->additionalInformation ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Job Type</label>
                            <p class="adjustInputColor"><?php echo e($job->jobType ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Job Provider Name</label>
                            <p class="adjustInputColor"><?php echo e($job->providerName ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Job Part Number</label>
                            <p class="adjustInputColor"><?php echo e($job->partNumber ?? 'N/A'); ?></p>
                        </div>


                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Job Quantity</label>
                            <p class="adjustInputColor"><?php echo e($job->quantity ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Job Material</label>
                            <p class="adjustInputColor"><?php echo e($job->material ?? 'N/A'); ?></p>
                        </div>


                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Job Finishing</label>
                            <p class="adjustInputColor"><?php echo e($job->finishing ?? 'N/A'); ?></p>
                        </div>

                        <?php if(count($job->supplierNames ?? []) > 0): ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Suppliers</label>
                            <p class="adjustInputColor"><?php echo e(implode(', ', $job->supplierNames)); ?></p>
                        </div>

                        <?php endif; ?>


                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Job Type Status</label>
                            <p class="adjustInputColor"><?php echo e(str_replace('_', ' ', $job->jobAccessStatus ?? 'N/A')); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Job Visiblity Status</label>
                            <p class="adjustInputColor"><?php echo e(str_replace('_', ' ', $job->jobVisiblityStatus ?? 'N/A')); ?></p>
                        </div>



                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Created At</label>
                            <p class="adjustInputColor"><?php echo e($job->createdDate); ?></p>

                        </div>



                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Status</label>
                            <?php if($job->status == Config::get('constants.status.inActive')): ?>
                            <p class="adjustInputColor"><span class="badge badge-light-danger"><?php echo e(str_replace('_', ' ', $job->status ?? 'N/A')); ?></span></p>
                            <?php else: ?>
                            <p class="adjustInputColor"><span class="badge badge-light-success"><?php echo e(str_replace('_', ' ', $job->status ?? 'N/A')); ?></span></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Uploaded File</label>
                            <img src="<?php echo e(Storage::disk('s3')->url($job->jobImagePath)); ?>" alt="Uploaded Job" width="300">
                            <div class="invalid-feedback">
                                Please provide a valid job.
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>



</div>


<?php if(count($job->requiredProperties) > 0): ?>
<div class="container-fluid user-list-wrapper">

    <div class="row">

        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Required Properties</h5>
                        </div>
                    </div>
                </div>



                <div class="card-body pt-0 px-0">
                    <div class="list-product user-list-table">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table">

                                <thead>
                                    <tr>
                                        <th> <span class="c-o-light f-w-600">SI NO</span></th>
                                        <th> <span class="c-o-light f-w-600">Material</span></th>
                                        <th> <span class="c-o-light f-w-600">Grade</span></th>
                                        <th> <span class="c-o-light f-w-600">Dimension </span></th>
                                        <th> <span class="c-o-light f-w-600">Quantity</span></th>

                                    </tr>
                                </thead>
                                <tbody id="tbdItems">

                                    <?php if(count($job->requiredProperties) > 0): ?>
                                    <?php $__currentLoopData = $job->requiredProperties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $prop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="pointer product-removes inbox-data" id="pageUpdateButtons1" jobID="<?php echo e($job->id); ?>">
                                        <td class="viewJob"> <?php echo e($index + 1  ?? 'N/A'); ?></td>

                                        <td class="viewJob"> <?php echo e($prop->materialCore  ?? 'N/A'); ?></td>

                                        <td class="viewJob"> <?php echo e($prop->gradeCore  ?? 'N/A'); ?></td>

                                        <td class="viewJob"> <?php echo e($prop->dimensionCore  ?? 'N/A'); ?></td>
                                        <td class="viewJob"> <?php echo e($prop->quantityCore  ?? 'N/A'); ?></td>

                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                    <tr>
                                        <td colspan="100" class="text-center"><?php echo e('No data found.'); ?> </td>
                                    </tr>


                                    <?php endif; ?>




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Container-fluid Ends-->
<?php endif; ?>


<?php if(isset($quoteStatus) && ($quoteStatus == "giving")): ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-wrapper border rounded-3">
                        <form class="text-left needs-validation customForm" role="form" method="POST" id="frmCreateJob" action="<?php echo e(route('job.giveQuote')); ?>" novalidate enctype="multipart/form-data">


                            <?php echo e(csrf_field()); ?>

                            <div class="row">

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="dueDate">Estimated Delivery Date</label>
                                    <input class="singleDate form-control" autocomplete="off" id="dueDate" name="dueDate" value="<?php echo e(old('dueDate', $job->dueDate ?? '')); ?>" type="text" placeholder="Select the due Date.." required>
                                    <div class="invalid-feedback">
                                        Please provide a valid Due Date.
                                    </div>
                                </div>


                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="message" class="form-label">Description</label>
                                    <textarea class="form-control adjustInputColor" id="description" readonly name="description" placeholder="Job Description..." required=""><?php echo e($job->description ?? ''); ?></textarea>
                                    <div class="invalid-feedback">
                                        Please provide a valid description.
                                    </div>
                                </div>


                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Quantity</label>
                                    <input type="number" class="form-control adjustInputColor" readOnly min="1" autocomplete="off" id="quantity" name="quantity" value="<?php echo e(old('quantity', !empty($job->quantity) ? $job->quantity : 1)); ?>" placeholder="Quantity">
                                    <div class="invalid-feedback">
                                        Please provide a valid quantity.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Unit Price</label>
                                    <input type="number" class="form-control adjustInputColor" min="1" autocomplete="off" id="unitPrice" name="unitPrice" value="<?php echo e(old('unitPrice', !empty($job->unitPrice) ? $job->unitPrice : '')); ?>" placeholder="Unit Price">
                                    <div class="invalid-feedback">
                                        Please provide a valid unit price.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Sub Total</label>
                                    <input type="number" class="form-control adjustInputColor" min="1" autocomplete="off" id="subTotal" name="subTotal" placeholder="Sub Total">
                                    <div class="invalid-feedback">
                                        Please provide a valid sub total.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Shipping Cost</label>
                                    <input type="number" class="form-control adjustInputColor" min="1" autocomplete="off" id="shippingCost" name="shippingCost" placeholder="shippingCost" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid shippingCost.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Additional Cost</label>
                                    <input type="number" class="form-control adjustInputColor" min="1" autocomplete="off" id="additionalCost" name="additionalCost" placeholder="additionalCost" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid additionalCost.
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
                                        Please provide a valid net price.
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
    $(document).ready(function() {
        // Calculate subtotal, brutPrice, and netPrice
        function calculatePrices() {
            const quantity = parseFloat($("#quantity").val()) || 0;
            const unitPrice = parseFloat($("#unitPrice").val()) || 0;
            const shippingCost = parseFloat($("#shippingCost").val()) || 0;
            const additionalCost = parseFloat($("#additionalCost").val()) || 0;

            // Calculate subtotal
            const subTotal = quantity * unitPrice;
            $("#subTotal").val(subTotal.toFixed(2)); // Keep two decimal places

            // Calculate brut price (subtotal + shipping + additional costs)
            const brutPrice = subTotal + shippingCost + additionalCost;
            $("#brutPrice").val(brutPrice.toFixed(2));

            // Set net price (same as brut price in this case)
            $("#netPrice").val(brutPrice.toFixed(2));
        }

        // Trigger recalculation on input changes
        $("#quantity, #unitPrice, #shippingCost, #additionalCost").on("input", calculatePrices);

        // Make specific fields read-only
        $("#subTotal, #brutPrice, #netPrice").attr("readonly", true);
    });
</script>
<?php endif; ?>

<?php echo $__env->make('appLayouts._deleteModel', [
'containerID' => 'showPageTools',
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/jobs/show.blade.php ENDPATH**/ ?>