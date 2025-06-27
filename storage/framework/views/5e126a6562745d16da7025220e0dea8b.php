<?php $__env->startSection('content'); ?>

<?php $__env->startSection('main_content'); ?>


<script type="text/javascript">
    $(document).ready(function() {



        new TomSelect("#single-select-one", {

            create: false, // Disable option to create new items
            allowEmptyOption: true, // Allow empty option to reset or leave unselected
            closeAfterSelect: true, // Close dropdown after selection
        });

        new TomSelect("#single-select-layout", {

create: false, // Disable option to create new items
allowEmptyOption: true, // Allow empty option to reset or leave unselected
closeAfterSelect: true, // Close dropdown after selection
});

        new TomSelect(".select-what-we-do", {
            maxItems: 6,
            create: false,
            hideSelected: true,
            plugins: ["remove_button"],
            sortField: {
                field: "text",
                direction: "asc",
            },
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            }
        });

        $('form#frmUpdatePremiumProfile').submit(function(e) {
            var form = $(this);
            // HTML5 validility checker
            if (form[0].checkValidity() === false) {
                // not valid
                form.addClass('was-validated');
                $('html,body').animate({
                    scrollTop: $('.was-validated .form-control:invalid').first().offset().top - 400
                }, 'slow');
                e.preventDefault();
                e.stopPropagation();
                return;
            }
            // valid, do something else ...
        });



    });
</script>


<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Update Premium Profle Details</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard.index')); ?>"> <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg></a></li>
                    <li class="breadcrumb-item active">Update Premium Profle Details</li>
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
                        <form class="text-left needs-validation customForm" role="form" method="POST" id="frmUpdatePremiumProfile" action="<?php echo e(route('profile.storePremiumProfileDetails')); ?>" novalidate enctype="multipart/form-data">

                            <?php echo e(csrf_field()); ?>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Company Tagline</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="companyTagline" name="companyTagline" value="<?php echo e(old('companyTagline', !empty($premiumProfile->companyTagline) ? $premiumProfile->companyTagline : '')); ?>" placeholder="Enter your Company Tagline">
                                    <div class="invalid-feedback">
                                        Please provide a valid company tagline.
                                    </div>
                                </div>


                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Company Specilist In</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="companySpecialistIn" name="companySpecialistIn" value="<?php echo e(old('companySpecialistIn', !empty($premiumProfile->companySpecialistIn) ? $premiumProfile->companySpecialistIn : '')); ?>" placeholder="Specialist In">
                                    <div class="invalid-feedback">
                                        Please provide a valid company Specilist in.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Facebook Url</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="facebookurl" name="facebookurl" value="<?php echo e(old('facebookurl', !empty($premiumProfile->facebookurl) ? $premiumProfile->facebookurl : '')); ?>" placeholder="Enter your facebook url">
                                    <div class="invalid-feedback">
                                        Please provide a valid facebook url.
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Facebook Followers Count</label>
                                    <input type="number" class="form-control adjustInputColor" min="1" autocomplete="off" id="fbCount" value="<?php echo e(old('fbCount', !empty($premiumProfile->fbCount) ? $premiumProfile->fbCount : '')); ?>" name="fbCount" placeholder="Facebook Followers Count">
                                    <div class="invalid-feedback">
                                        Please provide a valid facebook followers Count.
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">LinkedIn Url</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="linkedInUrl" name="linkedInUrl" value="<?php echo e(old('linkedInUrl', !empty($premiumProfile->linkedInUrl) ? $premiumProfile->linkedInUrl : '')); ?>" placeholder="Enter your linkedIn Url">
                                    <div class="invalid-feedback">
                                        Please provide a valid linkedIn url.
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">LinkedIn Followers Count</label>
                                    <input type="number" class="form-control adjustInputColor" min="1" autocomplete="off" id="linkedInCount" name="linkedInCount" value="<?php echo e(old('linkedInCount', !empty($premiumProfile->linkedInCount) ? $premiumProfile->linkedInCount : '')); ?>" placeholder="LinkedIn Followers Count">
                                    <div class="invalid-feedback">
                                        Please provide a valid LinkedIn followers Count.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">X Url</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="xUrl" name="xUrl" value="<?php echo e(old('xUrl', !empty($premiumProfile->xUrl) ? $premiumProfile->xUrl : '')); ?>" placeholder="Enter your X Url">
                                    <div class="invalid-feedback">
                                        Please provide a valid X url.
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">X Followers Count</label>
                                    <input type="number" class="form-control adjustInputColor" min="1" autocomplete="off" id="xCount" name="xCount" value="<?php echo e(old('xCount', !empty($premiumProfile->xCount) ? $premiumProfile->xCount : '')); ?>" placeholder="X Followers Count">
                                    <div class="invalid-feedback">
                                        Please provide a valid X followers Count.
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Youtube Url</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="youtubeUrl" name="youtubeUrl" value="<?php echo e(old('youtubeUrl', !empty($premiumProfile->youtubeUrl) ? $premiumProfile->youtubeUrl : '')); ?>" placeholder="Enter your youtube Url">
                                    <div class="invalid-feedback">
                                        Please provide a valid youtube Url.
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Youtube Followers Count</label>
                                    <input type="number" class="form-control adjustInputColor" min="1" autocomplete="off" id="youtubeCount" name="youtubeCount" value="<?php echo e(old('youtubeCount', !empty($premiumProfile->youtubeCount) ? $premiumProfile->youtubeCount : '')); ?>" placeholder="Youtube Followers Count">
                                    <div class="invalid-feedback">
                                        Please provide a valid youtube followers Count.
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Instagram Url</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="instagramUrl" name="instagramUrl" value="<?php echo e(old('instagramUrl', !empty($premiumProfile->instagramUrl) ? $premiumProfile->instagramUrl : '')); ?>" placeholder="Enter your instagram Url">
                                    <div class="invalid-feedback">
                                        Please provide a valid instagram Url.
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Instagram Followers Count</label>
                                    <input type="number" class="form-control adjustInputColor" min="1" autocomplete="off" id="instaCount" name="instaCount" value="<?php echo e(old('instaCount', !empty($premiumProfile->instaCount) ? $premiumProfile->instaCount : '')); ?>" placeholder="Instagram Followers Count">
                                    <div class="invalid-feedback">
                                        Please provide a valid Instagram followers Count.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Pinterest Url</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="pinterestUrl" name="pinterestUrl" value="<?php echo e(old('pinterestUrl', !empty($premiumProfile->pinterestUrl) ? $premiumProfile->pinterestUrl : '')); ?>" placeholder="Enter your pinterest Url">
                                    <div class="invalid-feedback">
                                        Please provide a valid pinterest Url.
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Pinterest Followers Count</label>
                                    <input type="number" class="form-control adjustInputColor" min="1" autocomplete="off" id="pinterestCount" name="pinterestCount" value="<?php echo e(old('pinterestCount', !empty($premiumProfile->pinterestCount) ? $premiumProfile->pinterestCount : '')); ?>" placeholder="Pinterest Followers Count">
                                    <div class="invalid-feedback">
                                        Please provide a valid Pinterest followers Count.
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="description">Company Overview A</label>
                                    <textarea type="text" id="companyOverviewA" name="companyOverviewA" maxlength="700" rows="3" placeholder="Company Overview A" class="form-control adjustInputColor"><?php echo e($premiumProfile->companyOverviewA ?? old('companyOverviewA')); ?></textarea>
                                </div>

                                <div class="col-12 col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="description">Company Overview B</label>
                                    <textarea type="text" id="companyOverviewB" name="companyOverviewB" maxlength="700" rows="3" placeholder="Company Overview B" class="form-control adjustInputColor"><?php echo e($premiumProfile->companyOverviewB ?? old('companyOverviewB')); ?></textarea>
                                </div>

                                <div class="col-12 col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="inputState">Company Employee Count</label>
                                    <select id="single-select-one" placeholder="Select the employee count.." autocomplete="off" id="employeeCount" name="employeeCount">
                                        <option value="">Select the employee count...</option>
                                        <option value="1-10" <?php if(old('employeeCount', !empty($premiumProfile->employeeCount) ? $premiumProfile->employeeCount : '')== "1-10"): ?> selected="selected" <?php endif; ?> >1-10</option>
                                        <option value="10-50" <?php if(old('employeeCount', !empty($premiumProfile->employeeCount) ? $premiumProfile->employeeCount : '')=="10-50"): ?> selected="selected" <?php endif; ?>>10-50</option>
                                        <option value="50-100" <?php if(old('employeeCount', !empty($premiumProfile->employeeCount) ? $premiumProfile->employeeCount : '')=="50-100"): ?> selected="selected" <?php endif; ?>>50-100</option>
                                        <option value="100+" <?php if(old('employeeCount', !empty($premiumProfile->employeeCount) ? $premiumProfile->employeeCount : '')=="100+"): ?> selected="selected" <?php endif; ?>>100+</option>

                                    </select>
                                    <div class="invalid-feedback text-danger-custom">
                                        Please select a valid availablity status.
                                    </div>

                                </div>

                                <div class="col-12 col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="inputState">Layout Type</label>
                                    <select id="single-select-layout" placeholder="Select the layout type.." autocomplete="off" id="layoutType" name="layoutType">
                                        <option value="">Select the layout type...</option>
                                        <option value="TYPE_A" <?php if(old('layoutType', !empty($premiumProfile->layoutType) ? $premiumProfile->layoutType : '')== "TYPE_A"): ?> selected="selected" <?php endif; ?> >LAYOUT A</option>
                                        <option value="TYPE_B" <?php if(old('layoutType', !empty($premiumProfile->layoutType) ? $premiumProfile->layoutType : '')=="TYPE_B"): ?> selected="selected" <?php endif; ?>>LAYOUT B</option>
                       |

                                    </select>
                                    <div class="invalid-feedback text-danger-custom">
                                        Please Select the layout type.
                                    </div>

                                </div>

                               

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="inputState">What We do</label>
                                    <select class="select-what-we-do" placeholder="Select the items..." autocomplete="off" id="jobIds" name="jobIds[]" multiple>
                                        <option disabled="disabled" value="" selected="selected">Select the items</option>
                                        <?php if(isset($premiumProfile->jobTypes) && count($premiumProfile->jobTypes) > 0): ?>
                                        <?php $__currentLoopData = $premiumProfile->jobTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tempJobType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($tempJobType->id); ?>"
                                            <?php if(in_array($tempJobType->id, $premiumProfile->jobIds ?? [])): ?> selected <?php endif; ?>>
                                            <?php echo e($tempJobType->name); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>
                                    <div class="invalid-feedback text-danger-custom">
                                        Please select the categories.
                                    </div>
                                </div>


                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Slider Video</label>
                                    <input class="form-control adjustInputColor form-control-sm" id="file" name="file" type="file" accept=".mp4">

                                    <small class="text-danger" id="videoError" style="display: none;">File size must be less than 6MB.</small>
                                    <div class="invalid-feedback">
                                        Please provide a valid file.
                                    </div>
                                </div>




                                <div class="col-12">
                                    <a class="btn btn-outline-danger me-3" href="<?php echo e(route('profile.updatePremiumProfileDetails')); ?>">
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

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Uploaded Video</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-wrapper border rounded-3">
                        <?php if(isset($premiumProfile->path)): ?>
                        <video width="300" height="300" controls>
                            <source src="<?php echo e($premiumProfile->path); ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <?php else: ?>
                        <p>No Video Found</p>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#file").on("change", function() {
            var file = this.files[0];
            if (file) {
                var maxSize = 6 * 1024 * 1024; // 6MB in bytes
                if (file.size > maxSize) {
                    $("#videoError").show();
                    $(this).val(""); // Clear the input
                } else {
                    $("#videoError").hide();
                }
            }
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/premiumprofile/form.blade.php ENDPATH**/ ?>