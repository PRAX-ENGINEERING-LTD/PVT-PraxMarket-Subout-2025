<?php $__env->startSection('title', 'Error 404'); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="container">
        <svg>
            <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#error-404')); ?>"></use>
        </svg>
        <div class="col-md-8 offset-md-2">
            <h3>We Could not Find This Page</h3>
            <p class="sub-content">You may not be able to find the page you are searching for, or it may have been relocated
                or renamed.</p>
        </div>
        <div><a class="btn btn-primary btn-lg" href="<?php echo e(url()->previous()); ?>">BACK TO PREVIOUS PAGE</a></div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('appLayouts.errorLayouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/errors/404.blade.php ENDPATH**/ ?>