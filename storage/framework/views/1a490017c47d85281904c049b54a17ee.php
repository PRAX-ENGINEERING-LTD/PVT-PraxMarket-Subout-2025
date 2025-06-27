<?php $__env->startSection('content'); ?>

<?php $__env->startSection('main_content'); ?>


<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Referals</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('network.index')); ?>"> <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg></a></li>
                    <li class="breadcrumb-item active">Referals</li>
                </ol>
            </div>
        </div>
    </div>
</div><!-- Container-fluid starts-->

<style>
    .dt-search {
        padding-right: 25px !important;
    }
</style>

<div class="container-fluid user-list-wrapper">
    <?php if(count($errors) > 0): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert',array('alertType' => 'error'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    <?php if(session('referal_deleted')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('referal_deleted')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php elseif(session('referal_stored')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('referal_stored')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php elseif(session('referal_updated')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('referal_updated')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header card-no-border text-end">
                    <div class="card-header-right-icon"><button class="btn btn-primary f-w-500" id="referBtn"
                          ><i class="fa-solid fa-plus pe-2"></i>Add Referal</button></div>
                </div>

                <div class="card-body pt-0 px-0">
                    <div class="list-product user-list-table">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table" id="<?php echo e(count($referals) > 0 ? 'referal-index-tables' : ''); ?>">

                                <thead>
                                    <tr>
                                        <th> <span class="c-o-light f-w-600">SI NO</span></th>
                                        <th> <span class="c-o-light f-w-600">Name</span></th>
                                        <th> <span class="c-o-light f-w-600">Email</span></th>
                                        <th> <span class="c-o-light f-w-600">Referal Code</span></th>
                                        <th> <span class="c-o-light f-w-600">Status</span></th>
                                    </tr>
                                </thead>
                                <tbody id="tbdItems">

                                    <?php if(count($referals) > 0): ?>
                                    <?php $__currentLoopData = $referals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $referal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="pointer product-removes inbox-data" id="pageUpdateButtons1" referalID="<?php echo e($referal->id); ?>">
                                        <td class="viewReferal"> <?php echo e($index + 1  ?? 'N/A'); ?></td>

                                        <td class="viewReferal"> <?php echo e($referal->referedName  ?? 'N/A'); ?></td>

                                        <td class="viewReferal"> <?php echo e($referal->email ?? 'N/A'); ?></td>

                                        <td class="viewReferal">
                                            <p><?php echo e($referal->referalCode ?? ''); ?></p>
                                        </td>

                                        <?php if($referal->status ?? '' == 'PENDING'): ?>
                                        <td class="viewReferal"><span class="badge badge-light-danger"><?php echo e(str_replace('_', ' ', $referal->status ?? 'N/A')); ?></span></td>
                                        <?php else: ?>
                                        <td class="viewReferal"><span class="badge badge-light-primary"><?php echo e(str_replace('_', ' ', $referal->status ?? 'N/A')); ?></span></td>
                                        <?php endif; ?>



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

<?php echo $__env->make('appLayouts._deleteModel', [
'containerID' => 'referal-index-tables',
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php echo $__env->make('profilePages.referalPartner', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/profilePages/referals.blade.php ENDPATH**/ ?>