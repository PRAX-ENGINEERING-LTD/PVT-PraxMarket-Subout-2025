<?php $__env->startSection('title', 'Error 403'); ?>

<?php $__env->startSection('main_content'); ?>
    <div class="container">
          <svg> 
            <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#error-403')); ?>"></use>
          </svg>
          <div class="col-md-8 offset-md-2">
            <h3>Forbidden Error</h3>
            <p class="sub-content">If you receive a 403 Forbidden error, either verify your access privileges or get in touch with the server administrator to obtain the necessary authorization.</p>
          </div>
          <div><a class="btn btn-primary btn-lg" href="<?php echo e(url()->previous()); ?>">BACK TO PREVIOUS PAGE</a></div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('appLayouts.errorLayouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/errors/403.blade.php ENDPATH**/ ?>