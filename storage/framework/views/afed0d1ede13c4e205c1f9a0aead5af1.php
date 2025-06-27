<?php $__env->startSection('content'); ?>

<?php $__env->startSection('main_content'); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#tbdItems").on('click', '.viewCompany', function() {
            var companyID = $(this).closest('tr').attr("companyID");
            window.location.href = "<?php echo e(route('companies.index')); ?>/" + companyID;
        });
        $(".deleteCompany").click(function() {
            var companyID = $(this).attr("companyID");
            $("#divDeleteConfirmationModel").modal('show');
            $("#frmDeleteModel").append("<input type='hidden' name='_method' value='DELETE'>");
            $("#frmDeleteModel").attr("action", "<?php echo e(route('companies.index')); ?>/" + companyID);
        });
        $(".viewCompanyInPopup").on("click", function() {
            var companyUrl = $(this).attr("companyUrl");
            $("#photoAsset").attr("src", companyUrl);
        });

        $("#verticalModal").on("hidden.bs.modal", function() {
            $("#photoAsset").attr("src", ""); // Reset the image source
        });
    });
</script>

<style>
    .dt-search {
        padding-right: 30px !important;
    }
</style>

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Approve Companies</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard.index')); ?>"> <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg></a></li>
                    <li class="breadcrumb-item active">Companies</li>
                </ol>
            </div>
        </div>
    </div>
</div><!-- Container-fluid starts-->

<div class="container-fluid user-list-wrapper">
    <?php if(count($errors) > 0): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert',array('alertType' => 'error'), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>

    <?php if(session('APPROVED')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('APPROVED')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php elseif(session('REJECTED')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('REJECTED')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php elseif(session('company_updated')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('company_updated')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php endif; ?>
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header card-no-border text-end">
                    <div class="card-header-right-icon"><a class="btn btn-primary f-w-500"
                            href="<?php echo e(route('companies.create')); ?>"><i class="fa-solid fa-plus pe-2"></i>Add Company</a></div>
                </div>
                <div class="card-body pt-0 px-0">
                    <div class="list-product user-list-table">
                        <div class="table-responsive custom-scrollbar">
                            <table class="table" id="<?php echo e(count($companies) > 0 ? 'company-approve-tables' : ''); ?>">

                                <thead>
                                    <tr>
                                        <th> <span class="c-o-light f-w-600">Name</span></th>
                                        <th> <span class="c-o-light f-w-600">Email</span></th>
                                        <th> <span class="c-o-light f-w-600">Mobile</span></th>
                                        <th> <span class="c-o-light f-w-600">Address</span></th>
                                        <th> <span class="c-o-light f-w-600">Subscription</span></th>
                                        <th> <span class="c-o-light f-w-600">Status</span></th>

                                        <th> <span class="c-o-light f-w-600">Updated At</span></th>
                                        <th> <span class="c-o-light f-w-600">Actions</span></th>
                                    </tr>
                                </thead>
                                <tbody id="tbdItems">

                                    <?php if(count($companies) > 0): ?>
                                    <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="pointer product-removes inbox-data" id="pageUpdateButtons1" companyID="<?php echo e($company->id); ?>">
                                        <td class="viewCompany"> <?php echo e($company->name  ?? 'N/A'); ?></td>
                                        <td class="viewCompany"> <?php echo e($company->companyEmail  ?? 'N/A'); ?></td>
                                        <td class="viewCompany"> <?php echo e($company->contactNumber  ?? 'N/A'); ?></td>
                                        <td class="viewCompany"> <?php echo e($company->address  ?? 'N/A'); ?></td>
                                        <td class="viewCompany"> <?php echo e($company->address  ?? 'N/A'); ?></td>

                                        <?php if($company->status == 'INACTIVE'): ?>
                                        <td class="viewCompany"><span class="badge badge-light-danger"><?php echo e(str_replace('_', ' ', $company->status ?? 'N/A')); ?></span></td>
                                        <?php else: ?>
                                        <td class="viewCompany"><span class="badge badge-light-success"><?php echo e(str_replace('_', ' ', $company->status ?? 'N/A')); ?></span></td>
                                        <?php endif; ?>


                                        <td class="viewCompany">
                                            <p><?php echo e($company->updated_at); ?></p>
                                        </td>
                                        <td class="companyActionUpdate" id="companyActionUpdate">
                                            <div class="common-align gap-2 justify-content-start">
                                                <a class="bs-tooltip pointer viewCompanyInPopup" companyUrl="<?php echo e(isset($company->path) ? Storage::disk('s3')->url($company->path) : ''); ?>" data-toggle="modal" data-bs-target="#verticalModal" aria-hidden="true" data-bs-toggle="modal" data-bs-placement="top"> <svg class="text-primary feather feather-eye me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="View Company Logo" data-original-title="View Company Logo" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg> </a>
                                                <a data-confirm-route="<?php echo e(route('updateCompanyApprovalStatus', ['companyID' => $company->id, 'action' => 'APPROVED'])); ?>" class="confirmModalAlert bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Approve Company" data-original-title="Approve Company">


                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success feather feather-check-circle me-2">
                                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                    </svg>


                                                </a>
                                                <a data-confirm-route="<?php echo e(route('updateCompanyApprovalStatus', ['companyID' => $company->id, 'action' => 'REJECTED'])); ?>" class="confirmModalAlert bs-tooltip pointer" data-toggle="modal" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Reject Company" data-original-title="Reject Company">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-danger feather feather-x-circle  me-2">
                                                        <circle cx="12" cy="12" r="10"></circle>
                                                        <line x1="15" y1="9" x2="9" y2="15"></line>
                                                        <line x1="9" y1="9" x2="15" y2="15"></line>
                                                    </svg>
                                                </a>
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


<?php echo $__env->make('appLayouts._confirmModal', [
'containerID' => 'companyActionUpdate',
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/companies/approveCompany.blade.php ENDPATH**/ ?>