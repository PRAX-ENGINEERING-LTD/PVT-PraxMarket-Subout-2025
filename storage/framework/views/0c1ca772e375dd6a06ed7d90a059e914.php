<?php $__env->startSection('content'); ?>

<?php $__env->startSection('main_content'); ?>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>My Posts</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard.index')); ?>"> <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg></a></li>
                    <li class="breadcrumb-item"><a class="decolorAnchorTag" href="<?php echo e(route('posts.index')); ?>">Posts</a></li>
                    <li class="breadcrumb-item active">My Posts</li>
                </ol>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid">

    <?php if(count($errors) > 0): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert',array('alertType' => 'error'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    <?php if(session('post_deleted')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('post_deleted')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php elseif(session('post_stored')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('post_stored')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php elseif(session('post_updated')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('post_updated')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>
    <div class="row">



        <?php if(isset($posts) && count($posts) > 0): ?>

        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="col-xl-6 col-12 postActionUpdate" id="postActionUpdate">
            <div class="card">
                <div class="card-header">
                    <h5><?php echo e($post->companyName); ?>


                    <?php if(!isset($post->isPromoted)): ?>
                        <a data-confirm-route="<?php echo e(route('promotePost', ['postID' => $post->id, 'action' => 'PROMOTE'])); ?>" class="confirmModalAlert bs-tooltip myPostToolTip pointer" data-bs-toggle="tooltip" data-bs-placement="top" title="Promote Post" data-original-title="Promote Post">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success feather feather-trending-up"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline><polyline points="17 6 23 6 23 12"></polyline></svg>
                        </a>
                        <?php endif; ?>
                    </h5>

                    <?php if(isset($post->isPromoted)): ?>
                    <p class="f-m-light mt-1">Promotion Status : <?php echo e($post->isPromoted); ?></p>
                    <?php endif; ?>

                    <p class="f-m-light mt-1"><?php echo e($post->createdDate); ?></p>


                </div>
                <div class="card-body">
                    <div class="carousel slide" id="carouselExampleSlidesOnly" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active"><img class="d-block w-100"
                                    src="<?php echo e(isset($post->path) ? Storage::disk('s3')->url($post->path) : ''); ?>" alt="drawing-room"></div>

                        </div>
                    </div>
                    <p class="f-m-light mt-1"><?php echo e($post->description); ?>


                </div>

            </div>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php else: ?>

        <p style="text-align: center;">No promoted Post for you..</p>

        <?php endif; ?>



    </div>

</div><!-- Container-fluid Ends-->

<?php echo $__env->make('appLayouts._confirmModal', [
'containerID' => 'postActionUpdate',
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/posts/promotedPosts.blade.php ENDPATH**/ ?>