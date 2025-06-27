<?php $__env->startSection('content'); ?>

<?php $__env->startSection('main_content'); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#tbdItems").on('click', '.viewCompanyMachine', function() {
            var companyMachineID = $(this).closest('tr').attr("companyMachineID");
            window.location.href = "<?php echo e(url('view-companyMachines')); ?>" + "/" + companyMachineID;
        });


        $(".viewCompanyMachineInPopup").on("click", function() {
            var companyMachineUrl = $(this).attr("companyMachineUrl");
            $("#photoAsset").attr("src", companyMachineUrl);
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
                <h3>Company Machine</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard.index')); ?>"> <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg></a></li>
                    <li class="breadcrumb-item active">Company Machines</li>
                </ol>
            </div>
        </div>
    </div>
</div><!-- Container-fluid starts-->
<style>
    .dt-search {
        padding-right: 95px !important;
    }
</style>
<div class="container-fluid user-list-wrapper">
    <?php if(count($errors) > 0): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert',array('alertType' => 'error'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    <?php if(session('companyMachine_deleted')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('companyMachine_deleted')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php elseif(session('companyMachine_stored')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('companyMachine_stored')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php elseif(session('companyMachine_updated')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('companyMachine_updated')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header card-no-border text-end">
                    <div class="card-header-right-icon"><a class="btn btn-primary f-w-500"
                            href="<?php echo e(route('companyMachines.create')); ?>"><i class="fa-solid fa-plus pe-2"></i>Add Company Machine</a></div>
                </div>
                <div class="card-body pt-0 px-0">
                    <div class="list-product user-list-table">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table" id="<?php echo e(count($companyMachines) > 0 ? 'companyMachine-index-tables' : ''); ?>">

                                <thead>
                                    <tr>
                                        <th> <span class="c-o-light f-w-600">Name</span></th>
                                        <th> <span class="c-o-light f-w-600">Description</span></th>
                                        <th> <span class="c-o-light f-w-600">Updated At</span></th>
                                        <th> <span class="c-o-light f-w-600">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody id="tbdItems">

                                    <?php if(count($companyMachines) > 0): ?>
                                    <?php $__currentLoopData = $companyMachines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $companyMachine): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="pointer product-removes inbox-data" id="pageUpdateButtons1" companyMachineID="<?php echo e($companyMachine->id); ?>">
                                        <td class="viewCompanyMachine"> <?php echo e($companyMachine->machineName  ?? 'N/A'); ?></td>
                                        <td class="viewCompanyMachine"> <?php echo e($companyMachine->description  ?? 'N/A'); ?></td>

                                        <td class="viewCompanyMachine">
                                            <p><?php echo e($companyMachine->updatedDate); ?></p>
                                        </td>
                                        <td class="companyMachineActionUpdate" id="companyMachineActionUpdate">
                                            <div class="common-align gap-2 justify-content-start">
                                               
                                               
                                                <a href="<?php echo e(route('companyMachines.edit',$companyMachine->id)); ?>" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Delete">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success feather-edit  me-2">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                    </svg></a>
                                                <a data-destroy-route="<?php echo e(url('delete-company-machine')); ?>/<?php echo e($companyMachine->id); ?>" class="deleteConfirmSweetAlert bs-tooltip pointer" data-toggle="modal" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-danger feather feather-trash me-2">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    </svg></a>
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

<?php echo $__env->make('appLayouts._deleteModel', [
'containerID' => 'companyMachine-index-tables',
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/companyMachines/index.blade.php ENDPATH**/ ?>