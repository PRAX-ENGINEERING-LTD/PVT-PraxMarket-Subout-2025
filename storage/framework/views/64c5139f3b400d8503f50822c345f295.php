<?php $__env->startSection('content'); ?>

<?php $__env->startSection('main_content'); ?>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3><?php echo e($user->name ?? 'User'); ?></h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard.index')); ?>"> <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg></a></li>
                    <li class="breadcrumb-item"><a class="decolorAnchorTag" href="<?php echo e(route('users.index')); ?>">Users</a></li>
                    <li class="breadcrumb-item active"><?php echo e($user->name ?? 'User'); ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <?php if(count($errors) > 0): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert',array('alertType' => 'error'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    <?php if(session('user_deleted')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('user_deleted')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php elseif(session('user_stored')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('user_stored')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php elseif(session('user_updated')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('user_updated')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>User Info</h5>
                        </div>
                        <div class="col-sm-6 showPageTools" id="showPageTools">
                            <div class="action-btn userActionUpdate" id="userActionUpdate">
                                <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="bs-tooltip showToolTip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success feather-edit  me-2">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg></a>
                                <a data-destroy-route="<?php echo e(route('users.destroy', $user)); ?>" class="deleteConfirmSweetAlert bs-tooltip showToolTip pointer" data-toggle="modal" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-danger feather feather-trash me-2">
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
                            <p class="adjustInputColor"><?php echo e($user->name); ?></p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Email</label>
                            <p class="adjustInputColor"><?php echo e($user->email); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Role</label>

                            <?php if($user->role[0] == 'ADMIN'): ?>
                            <p class="viewUser"><span class="badge badge-light-danger"><?php echo e(str_replace('_', ' ', $user->role[0] ?? 'N/A')); ?></span></p>
                            <?php else: ?>
                            <p class="viewUser"><span class="badge badge-light-primary"><?php echo e(str_replace('_', ' ', $user->role[0] ?? 'N/A')); ?></span></p>
                            <?php endif; ?>
                        </div>


                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Created By</label>
                            <p class="adjustInputColor"><?php echo e($user->getUserID['name'] ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label>Updated By</label>
                            <p class="adjustInputColor"><?php echo e($user->getUpdatedUserID['name'] ?? 'N/A'); ?></p>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Status</label>
                            <?php if($user->status == Config::get('constants.status.inActive')): ?>
                            <p class="adjustInputColor"><span class="badge badge-light-danger"><?php echo e(str_replace('_', ' ', $user->status ?? 'N/A')); ?></span></p>
                            <?php else: ?>
                            <p class="adjustInputColor"><span class="badge badge-light-success"><?php echo e(str_replace('_', ' ', $user->status ?? 'N/A')); ?></span></p>
                            <?php endif; ?>
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
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/users/show.blade.php ENDPATH**/ ?>