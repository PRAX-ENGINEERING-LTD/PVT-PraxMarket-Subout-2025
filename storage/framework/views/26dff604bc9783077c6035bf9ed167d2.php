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
                <h3>Companies</h3>
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

    <?php if(session('company_deleted')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('company_deleted')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php elseif(session('company_stored')): ?>
    <?php echo $__env->make('appLayouts.addedLayouts._alert', array('alertType' => 'success',
    'message' => session('company_stored')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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
                            <table class="table" id="<?php echo e(count($companies) > 0 ? 'company-index-tables' : ''); ?>">

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
                                                <a href="<?php echo e(route('companies.edit', $company->id)); ?>" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Delete">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success feather-edit  me-2">
                                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                    </svg></a>
                                                <a data-destroy-route="<?php echo e(route('companies.destroy', $company)); ?>" class="deleteConfirmSweetAlert bs-tooltip pointer" data-toggle="modal" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-danger feather feather-trash me-2">
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
'containerID' => 'company-index-tables',
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/companies/index.blade.php ENDPATH**/ ?>