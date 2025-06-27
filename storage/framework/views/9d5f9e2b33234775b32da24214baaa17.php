<?php $__env->startSection('content'); ?>

<?php $__env->startSection('main_content'); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#tbdItems").on('click', '.viewJob', function() {
            var jobID = $(this).closest('tr').attr("jobID");
            window.location.href = "<?php echo e(url('view-jobs')); ?>" + "/" + jobID + "?quoteStatus=giving";
        });


        $(".viewJobInPopup").on("click", function() {
            var jobUrl = $(this).attr("jobUrl");
            $("#photoAsset").attr("src", jobUrl);
        });

        $("#verticalModal").on("hidden.bs.modal", function() {
            $("#photoAsset").attr("src", ""); // Reset the image source
        });
    });
</script>

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>All RFQS</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard.index')); ?>"> <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg></a></li>
                    <li class="breadcrumb-item active">All RFQS</li>
                </ol>
            </div>
        </div>
    </div>
</div><!-- Container-fluid starts-->

<div class="container-fluid user-list-wrapper">
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
                <div class="card-header card-no-border text-end">
                    <div class="card-header-right-icon"><a class="btn btn-primary f-w-500"
                            href="<?php echo e(route('jobs.viewAllRfqs')); ?>"><i class="fa-solid fa-plus pe-2"></i>Refresh</a></div>
                </div>
                <div class="card-body pt-0 px-0">
                    <div class="list-product user-list-table">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table" id="<?php echo e(count($jobs) > 0 ? 'job-index-tables' : ''); ?>">

                                <thead>
                                    <tr>
                                        <th> <span class="c-o-light f-w-600">Job Catagory Type</span></th>
                                        <th> <span class="c-o-light f-w-600">Name</span></th>
                                        <th> <span class="c-o-light f-w-600">Part Number</span></th>
                                        <th> <span class="c-o-light f-w-600">Description</span></th>
                                        <th> <span class="c-o-light f-w-600">Status</span></th>
                                        <th> <span class="c-o-light f-w-600">Updated At</span></th>
                                        <th> <span class="c-o-light f-w-600">Action</span></th>
                                    </tr>
                                </thead>
                                <tbody id="tbdItems">

                                    <?php if(count($jobs) > 0): ?>
                                    <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="pointer product-removes inbox-data" id="pageUpdateButtons1" jobID="<?php echo e($job->id); ?>">
                                        <td class="viewJob"> <?php echo e($job->jobCatagoryType  ?? 'N/A'); ?></td>


                                        <td class="viewJob"> <?php echo e($job->name  ?? 'N/A'); ?></td>
                                        <td class="viewJob"> <?php echo e($job->partNumber  ?? 'N/A'); ?></td>

                                        
                                        <td class="viewJob"> <?php echo e($job->description ?? 'N/A'); ?></td>

                                        <?php if($job->status ?? '' == 'PENDING'): ?>
                                        <td class="viewJob"><span class="badge badge-light-danger"><?php echo e(str_replace('_', ' ', $job->status ?? 'N/A')); ?></span></td>
                                        <?php else: ?>
                                        <td class="viewJob"><span class="badge badge-light-primary"><?php echo e(str_replace('_', ' ', $job->status ?? 'N/A')); ?></span></td>
                                        <?php endif; ?>

                                        <td class="viewJob">
                                            <p><?php echo e($job->updatedDate); ?></p>
                                        </td>

                                        <td class="jobActionUpdate" id="jobActionUpdate">
                                            <div class="common-align gap-2 justify-content-start">
                                                <a href="<?php echo e(Storage::disk('s3')->url($job->jobDocPath)); ?>" target="_blank" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Show Supporting Document" data-original-title="Show Supporting Document">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-warning feather feather-file-text me-2">
                                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                                        <polyline points="10 9 9 9 8 9"></polyline>
                                                    </svg></a>
                                                <a class="bs-tooltip pointer viewJobInPopup" jobUrl="<?php echo e(Storage::disk('s3')->url($job->jobImagePath)); ?>" data-toggle="modal" data-bs-target="#verticalModal" aria-hidden="true" data-bs-toggle="modal" data-bs-placement="top"> <svg class="text-primary feather feather-eye me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="View Uploaded Image" data-original-title="View Uploaded Image" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg> </a>

                                            

                                            </div>
                                        </td>

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

<?php echo $__env->make('appLayouts.addedLayouts.imageModal', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>




<?php echo $__env->make('appLayouts._confirmModal', [
'containerID' => 'jobActionUpdate',
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/jobs/myCustomer/allRfqs.blade.php ENDPATH**/ ?>