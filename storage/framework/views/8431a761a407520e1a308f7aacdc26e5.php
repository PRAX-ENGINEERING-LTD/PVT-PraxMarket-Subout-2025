<?php $__env->startSection('content'); ?>

<?php $__env->startSection('main_content'); ?>

<script type="text/javascript">
    $(document).ready(function() {

        $('#password, #confirmPassword').prop("required", false);
        $('#password').keypress(function(e) {

            $('#password, #confirmPassword').prop("required", true);
        });
    });
</script>

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Catagories</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard.index')); ?>"> <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg></a></li>
                    <li class="breadcrumb-item"><a class="decolorAnchorTag" href="<?php echo e(route('catagories.index')); ?>">Catagories</a></li>
                    <li class="breadcrumb-item"><a class="decolorAnchorTag" href="<?php echo e(route("catagories.show",$catagory->id)); ?>"><?php echo e($catagory->name); ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </div>
        </div>
    </div>
</div><!-- Container-fluid starts-->
<?php if($errors->any()): ?>
<?php echo $__env->make('appLayouts.addedLayouts._alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>
<?php echo $__env->make('catagories._form', array('page' => 'editCatagory'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/catagories/edit.blade.php ENDPATH**/ ?>