<?php $__env->startSection('content'); ?>

<?php $__env->startSection('main_content'); ?>


<script type="text/javascript">
    $(document).ready(function() {

      
     


        new TomSelect("#my-single-select", {
            placeholder: "Select an option", // Placeholder text
            create: false, // Disable option to create new items
            allowEmptyOption: true, // Allow empty option to reset or leave unselected
            closeAfterSelect: true, // Close dropdown after selection
        });



    });
</script>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Edit Premium Profile</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard.index')); ?>"> <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg></a></li>
                    <li class="breadcrumb-item active">Edit Premium Profile</li>
                </ol>
            </div>
        </div>
    </div>
</div><!-- Container-fluid starts-->
<?php if($errors->any()): ?>
<?php echo $__env->make('appLayouts.addedLayouts._alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-wrapper border rounded-3">
                        <form class="text-left needs-validation customForm" role="form" method="POST" id="frmCreateCompany" action="<?php echo e(route('companies.updatePremiumProfileDetails')); ?>" novalidate enctype="multipart/form-data">
                           

                            <?php echo e(csrf_field()); ?>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Company Tagline</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="companyTagline" name="companyTagline" value="<?php echo e(old('companyTagline', !empty($company->premiumProfileData->companyTagline) ? $company->premiumProfileData->companyTagline : '')); ?>" placeholder="Company Tagline" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid company tagline.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Company Specialist In</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="companySpecialistIn" name="companySpecialistIn" value="<?php echo e(old('companySpecialistIn', !empty($company->premiumProfileData->companySpecialistIn) ? $company->premiumProfileData->companySpecialistIn : '')); ?>" placeholder="Company Specialist In" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid company specialist in.
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="description">Company Overview</label>
                                    <textarea type="text" id="companyOverview" name="companyOverview" rows="1" placeholder="Company Overview" required class="form-control adjustInputColor"><?php echo e($company->premiumProfileData->companyOverview ?? old('companyOverview')); ?></textarea>
                                    <div class="invalid-feedback">
                                        Please provide a valid company overview.
                                    </div>
                                </div>


                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Employee Count</label>

                                    <select id="my-single-select" class="" id="employeeCount" name="employeeCount" required>
                                        <option value="">Select Employee Count...</option>

                                        <option value="" disabled="disabled" selected>Select Employee Count</option>
                                        <option value="UNDER_10" <?php if(old('employeeCount', !empty($company->premiumProfileData->companySpecialistIn) ? $company->premiumProfileData->companySpecialistIn : '')=="UNDER_10"): ?> selected="selected" <?php endif; ?>>0 TO 10</option>
                                        <option value="UNDER_50" <?php if(old('employeeCount', !empty($company->premiumProfileData->companySpecialistIn) ? $company->premiumProfileData->companySpecialistIn : '')=="UNDER_50"): ?> selected="selected" <?php endif; ?>>10 TO 50</option>
                                        <option value="UNDER_100" <?php if(old('employeeCount', !empty($company->premiumProfileData->companySpecialistIn) ? $company->premiumProfileData->companySpecialistIn : '')=="UNDER_100"): ?> selected="selected" <?php endif; ?>>50 TO 100</option>
                                        <option value="UNDER_1000" <?php if(old('employeeCount', !empty($company->premiumProfileData->companySpecialistIn) ? $company->premiumProfileData->companySpecialistIn : '')=="UNDER_1000"): ?> selected="selected" <?php endif; ?>>ABOVE 100</option>

                                    </select>
                                    <div class="invalid-feedback" style="color: #fc564a;">
                                        Please select a valid employee count.
                                    </div>
                                </div>

                                

                               

                               

                               

                            

                               
                        

                                <div class="col-12">
                                    <a class="btn btn-outline-danger me-3" href="<?php echo e(route('dashboard.index')); ?>">
                                        Cancel
                                    </a>
                                    <button class="btn btn-success" type="submit">Save
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('customForm');
            Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/companies/editPremiumProfile.blade.php ENDPATH**/ ?>