<?php $__env->startSection('content'); ?>

<?php $__env->startSection('main_content'); ?>

<script type="text/javascript">
  
</script>

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Edit Company User</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard.index')); ?>"> <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg></a></li>
                    <li class="breadcrumb-item"><a class="decolorAnchorTag" href="<?php echo e(route('companyUsers.index')); ?>">Company Users</a></li>
                    <li class="breadcrumb-item"><a class="decolorAnchorTag" href="<?php echo e(route("viewCompanyUser",$companyUser->id)); ?>"><?php echo e($companyUser->userName); ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </div>
        </div>
    </div>
</div><!-- Container-fluid starts-->
<?php if($errors->any()): ?>
<?php echo $__env->make('appLayouts.addedLayouts._alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>
<?php echo $__env->make('companyUsers._form', array('page' => 'editCompanyUser'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/companyUsers/edit.blade.php ENDPATH**/ ?>