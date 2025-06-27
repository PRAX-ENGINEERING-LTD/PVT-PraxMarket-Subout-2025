<?php $__env->startSection('content'); ?>

<?php $__env->startSection('main_content'); ?>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3><?php echo e($subscription->name ?? 'Subscription'); ?></h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard.index')); ?>"> <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg></a></li>
                    <li class="breadcrumb-item"><a class="decolorAnchorTag" href="<?php echo e(route('subscriptions.index')); ?>">Subscriptions</a></li>
                    <li class="breadcrumb-item active"><?php echo e($subscription->name ?? 'Subscription'); ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <?php if(count($errors) > 0): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert',array('alertType' => 'error'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    <?php if(session('subscription_deleted')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('subscription_deleted')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php elseif(session('subscription_stored')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('subscription_stored')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php elseif(session('subscription_updated')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('subscription_updated')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Subscription Info</h5>
                        </div>
                        <div class="col-sm-6 showPageTools" id="showPageTools">
                            <div class="action-btn subscriptionActionUpdate" id="subscriptionActionUpdate">
                                <a href="<?php echo e(route('subscriptions.edit', $subscription->id)); ?>" class="bs-tooltip showToolTip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success feather-edit  me-2">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg></a>
                                <a data-destroy-route="<?php echo e(route('subscriptions.destroy', $subscription)); ?>" class="deleteConfirmSweetAlert bs-tooltip showToolTip pointer" data-toggle="modal" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-danger feather feather-trash me-2">
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
                            <label class="showRowHead">Name</label>
                            <p class="adjustInputColor"><?php echo e($subscription->name ?? 'N/A'); ?></p>
                        </div>


                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Amount</label>
                            <p class="adjustInputColor"><?php echo e($subscription->amount ?? 'N/A'); ?></p>
                        </div>


                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Duration</label>
                            <p class="adjustInputColor"><?php echo e($subscription->duration  ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Package Discount</label>
                            <p class="adjustInputColor"><?php echo e($subscription->packageDiscount  ?? 'N/A'); ?></p>
                        </div>



                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label>Updated By</label>
                            <p class="adjustInputColor"><?php echo e($subscription->getUpdatedUserID['name'] ?? 'N/A'); ?></p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Description</label>
                            <p class="adjustInputColor"><?php echo e($subscription->description  ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Status</label>
                            <?php if($subscription->status == Config::get('constants.status.inActive')): ?>
                            <p class="adjustInputColor"><span class="badge badge-light-danger"><?php echo e(str_replace('_', ' ', $subscription->status ?? 'N/A')); ?></span></p>
                            <?php else: ?>
                            <p class="adjustInputColor"><span class="badge badge-light-success"><?php echo e(str_replace('_', ' ', $subscription->status ?? 'N/A')); ?></span></p>
                            <?php endif; ?>
                        </div>

                        <div class="row">

                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                                <label class="showRowHead">Subscription Uploaded Image</label>
                                <img src="<?php echo e(isset($subscription->path) ? Storage::disk('s3')->url($subscription->path) : ''); ?>" alt="Uploaded Photo" width="300">
                            </div>
                        </div>




                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('appLayouts._deleteModel', [
'containerID' => 'showPageTools',
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/subscriptions/show.blade.php ENDPATH**/ ?>