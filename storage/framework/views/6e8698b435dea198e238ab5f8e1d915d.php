<?php $__env->startSection('content'); ?>

<?php $__env->startSection('main_content'); ?>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Bookmarked Companies</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard.index')); ?>"> <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg></a></li>
                    <li class="breadcrumb-item"><a class="decolorAnchorTag" href="<?php echo e(route('jobs.index')); ?>">Jobs</a></li>
                    <li class="breadcrumb-item active">Bookmarked Companies</li>
                </ol>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $(".viewCompany").on('click', function() {
            var companyid = $(this).attr("companyid");
            //window.location.href = "<?php echo e(url('view-company')); ?>" + "/" + companyid;
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



        <?php if(isset($companies) && count($companies) > 0): ?>

        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="col-xl-3 col-12 viewCompany pointer" companyid="<?php echo e($company->id); ?>">
            <div class="card">
                <div class="card-header">
                    <h5><?php echo e($company->name); ?></h5>



                    <p class="companyActionUpdate" id="companyActionUpdate">
                        <a data-confirm-route="<?php echo e(route('updateCompanyBookMarks', ['companyID' => $company->id, 'action' => 'REMOVE','authID' => Auth::user()->id])); ?>" class="confirmModalAlert bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Bookmark" data-original-title="Remove Bookmark">


                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success feather feather-check-circle me-2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>


                        </a>
                    </p>
                </div>
                <div class="card-body">
                    <div class="carousel slide" id="carouselExampleSlidesOnly" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active"><img class="d-block w-100"
                                    src="<?php echo e(isset($company->path) ? Storage::disk('s3')->url($company->path) : ''); ?>" alt="drawing-room"></div>

                        </div>
                    </div>

                </div>

            </div>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php else: ?>

        <p style="text-align: center;">No bookmarked companies..</p>

        <?php endif; ?>



    </div>

</div><!-- Container-fluid Ends-->
<?php echo $__env->make('appLayouts._confirmModal', [
'containerID' => 'companyActionUpdate',
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/jobs/bookmarkedCompanies.blade.php ENDPATH**/ ?>