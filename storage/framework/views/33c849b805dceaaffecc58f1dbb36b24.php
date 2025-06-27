<?php $__env->startSection('content'); ?>
<?php $__env->startSection('main_content'); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $('#password, #confirmPassword').prop("required", false);
        $('#password').keypress(function(e) {
            $('#password, #confirmPassword').prop("required", true);
        });
    });
</script>

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Edit My Company</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('network.index')); ?>"> <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg></a></li>
                    <li class="breadcrumb-item"><a class="decolorAnchorTag" href="<?php echo e(route('profile.showMyAccountPage')); ?>"><?php echo e($company->name); ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit My Company</li>
                </ol>
            </div>
        </div>
    </div>
</div><!-- Container-fluid starts-->

<script type="text/javascript">
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            }
        });

        $('form#frmCreateCompany').submit(function(e) {
            var form = $(this);
            // HTML5 validity checker
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

        $('#email').focusout(function() {
            var email = $(this).val();
            $.ajax({
                type: "POST",
                async: false,
                url: "<?php echo e(route('company-email-validation')); ?>",
                data: {
                    email: email,
                    currentEmail: "<?php echo e($company->email ?? null); ?>"
                },
                success: function(data) {
                    data === 'Email Already Exist' ? ($('#emailAlreadyExistsError').css('display', 'block') &&
                            $('#btnSubmit').prop('disabled', true)) :
                        ($('#emailAlreadyExistsError').css('display', 'none') &&
                            $('#btnSubmit').prop('disabled', false))
                },
                failure: function(data) {}
            });
        });

        $('.password').focusout(function() {
            var password = $(".password").val();
            var confirmPassword = $(".confirmPassword").val();

            if (confirmPassword && password && confirmPassword !== password) {
                $("#invalid-feedback").hide();
                $("#samePasswordEnterError").show() && $('#btnSubmit').prop('disabled', true);
            } else if (confirmPassword === password && $('#emailAlreadyExistsError').css('display', 'none')) {
                $("#samePasswordEnterError").hide() && $('#btnSubmit').prop('disabled', false);
                $("#samePasswordEnterError").hide();
            } else {
                $("#samePasswordEnterError").hide() && $('#btnSubmit').prop('disabled', false);
            }
        });

        $('.confirmPassword').focusout(function() {
            var password = $(".password").val();
            var confirmPassword = $(".confirmPassword").val();
            if (confirmPassword && password && confirmPassword !== password) {
                $("#invalid-feedback").hide();
                $("#samePasswordEnterError").show() && $('#btnSubmit').prop('disabled', true);
            } else if (confirmPassword === password && $('#emailAlreadyExistsError').css('display', 'none')) {
                $("#samePasswordEnterError").hide() && $('#btnSubmit').prop('disabled', false);
                $("#samePasswordEnterError").hide();
                $("#samePasswordEnterError").hide() && $('#btnSubmit').prop('disabled', false);
            } else {
                $("#samePasswordEnterError").hide() && $('#btnSubmit').prop('disabled', false);
            }
        });

        $(".confirmPassword").focusin(function() {
            $("#samePasswordEnterError").hide() && $('#btnSubmit').prop('disabled', false);
        });

        new TomSelect("#single-select", {
            sortField: {
                field: "text",
                direction: "asc"
            },
            create: false, // Disable option to create new items
            allowEmptyOption: true, // Allow empty option to reset or leave unselected
            closeAfterSelect: true, // Close dropdown after selection
        });

        new TomSelect("#single-select-one", {
            create: false, // Disable option to create new items
            allowEmptyOption: true, // Allow empty option to reset or leave unselected
            closeAfterSelect: true, // Close dropdown after selection
        });
    });
</script>

<!-- Include Cropper.js CSS and JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>

<style>
    .upload-area {
        border: 2px dashed #ccc;
        padding: 20px;
        text-align: center;
        cursor: pointer;
        background-color: #f9f9f9;
    }

    .upload-area:hover {
        background-color: #e9ecef;
    }

    .drag-text {
        color: #666;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .drag-text span {
        color: #007bff;
        font-weight: bold;
    }

    /* Ensure the modal body doesn't add extra padding that affects the image size */
    #cropModal .modal-body {
        overflow: hidden;
    }

    /* Fix modal dialog width */
    #cropModal .modal-dialog {
        width: 800px !important;
        max-width: 800px !important;
        margin: 0 auto !important;
    }

    /* Ensure the modal content and body maintain fixed dimensions */
    #cropModal .modal-content,
    #cropModal .modal-body {
        width: 100%;
        height: 580px;
        /* Header (~60px) + Body (500px) + Footer (~60px) */
    }

    #cropModal .modal-body {
        height: 500px;
    }

    /* Ensure the modal is centered vertically and horizontally */
    #cropModal .modal-dialog-centered {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto !important;
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
    }

    #cropModal .modal-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    /* Flex container for logos */
    .logo-container {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .logo-container .logo-item {
        /* flex: 1; */
        min-width: 0;
    }

    .logo-container .form-label {
        display: block;
        margin-bottom: 5px;
    }
</style>

<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(config('constants.websiteConfigurations.googleApiKey')); ?>&libraries=places" async defer></script>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-wrapper border rounded-3">
                        <form class="text-left needs-validation customForm" role="form" method="POST" id="frmCreateCompany" action="<?php echo e(route('profile.updateMyCompanyDetails')); ?>" novalidate enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Company Name</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="name" name="name" value="<?php echo e(old('name', !empty($company->name) ? $company->name : '')); ?>" placeholder="Company Name" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid company name.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label>Company Email</label>
                                    <input type="email" class="form-control adjustInputColor position-relative" id="email" name="email" value="<?php echo e(old('email', !empty($company->email) ? $company->email : '')); ?>" placeholder="Company Email" required="">
                                    <span class="invalid-feedback emailAlreadyExistsError text-danger" id="emailAlreadyExistsError" style="display:none;">The Email Already Exists!</span>
                                    <div class="invalid-feedback">
                                        Please provide a valid email.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputPassword4">Password</label>
                                    <input minlength="6" type="password" autocomplete="off" class="form-control adjustInputColor position-relative password" min="6" id="password" name="password" placeholder="Password" required="">
                                    <div class="invalid-feedback" id="password">
                                        Please provide a valid password.
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputPassword4">Confirm Password</label>
                                    <input minlength="6" type="password" autocomplete="off" id="confirmPassword" name="confirmPassword" class="form-control adjustInputColor position-relative confirmPassword" placeholder="Confirm Password" required="">
                                    <div class="invalid-feedback text-danger" id="samePasswordEnterError">
                                        Please enter the same password.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Contact Person Name</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="contactPersonName" name="contactPersonName" value="<?php echo e(old('contactPersonName', !empty($company->contactPersonName) ? $company->contactPersonName : '')); ?>" placeholder="Contact Person Name" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid contact person name.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Contact Number</label>
                                    <input type="number" min="1" class="form-control adjustInputColor adjustInputColor" autocomplete="off" id="contactNumber" name="contactNumber" value="<?php echo e(old('contactNumber', !empty($company->contactNumber) ? $company->contactNumber : '')); ?>" placeholder="Contact Number" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid contact number.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Postal Code</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="location" name="postalCode" value="<?php echo e(old('postalCode', !empty($company->postalCode) ? $company->postalCode : '')); ?>" placeholder="Enter the postal code" required>
                                    <div class="invalid-feedback">
                                        Please provide a valid postal code.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4"> Address (Building number/name and Street name)</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="address" name="address" value="<?php echo e(old('address', !empty($company->address) ? $company->address : '')); ?>" placeholder="Address" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid address.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4"> City or town (write this in block capitals)</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="city" name="city" value="<?php echo e(old('city', !empty($company->city) ? $company->city : '')); ?>" placeholder="City or Town" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid city or town.
                                    </div>
                                </div>



                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Website</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="website" name="website" value="<?php echo e(old('website', !empty($company->website) ? $company->website : '')); ?>" placeholder="Website" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid website.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Registered Number</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="registeredNumber" name="registeredNumber" value="<?php echo e(old('registeredNumber', !empty($company->registeredNumber) ? $company->registeredNumber : '')); ?>" placeholder="Registered Number" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid registered number.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Vat Registered Number</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="vatRegisteredNumber" name="vatRegisteredNumber" value="<?php echo e(old('vatRegisteredNumber', !empty($company->vatRegisteredNumber) ? $company->vatRegisteredNumber : '')); ?>" placeholder="Vat Registered Number">
                                    <div class="invalid-feedback">
                                        Please provide a valid Vat Registered Number.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="inputState">Categories</label>
                                    <select class="select-catagories" placeholder="Select the categories..." autocomplete="off" id="catagoryIDs" name="catagoryIDs[]" multiple required>
                                        <option disabled="disabled" value="" selected="selected">Select categories</option>
                                        <?php if(isset($catagories) && count($catagories) > 0): ?>
                                        <?php $__currentLoopData = $catagories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tempCatagory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($tempCatagory->id); ?>"
                                            <?php if(in_array($tempCatagory->id, $selectedCatagories)): ?> selected <?php endif; ?>>
                                            <?php echo e($tempCatagory->name); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>
                                    <div class="invalid-feedback text-danger-custom">
                                        Please select the categories.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="inputState">Subcategories</label>
                                    <select class="select-sub-catagories" placeholder="Select the subcategories..." autocomplete="off" id="subCatagoryIDs" name="subCatagoryIDs[]" multiple>
                                        <option disabled="disabled" value="" selected="selected">Select subcategories</option>
                                        <!-- Options will be dynamically added here -->
                                    </select>
                                    <div class="invalid-feedback text-danger-custom">
                                        Please select the subcategories.
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="inputState">Country</label>
                                    <select id="single-select" placeholder="Select the country..." autocomplete="off" id="countryID" name="countryID" required>
                                        <option value="">Select the Country...</option>
                                        <?php if(isset($countries) && count($countries)>0): ?>
                                        <option disabled="disabled" value="" selected="selected">Select the Country</option>
                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tempCountry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($tempCountry->id); ?>" <?php if(isset($company->countryID)): ?> <?php echo e(( $company->countryID == $tempCountry->id)? "selected" :""); ?> <?php endif; ?>><?php echo e($tempCountry->name); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>
                                </div>



                                <div class="col-md-6 col-lg-6 mb-3 improveSpace lattitude d-none">
                                    <label class="form-label" for="inputEmail4">Lattitude</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="lattitude" name="lattitude" value="<?php echo e(old('lattitude', !empty($company->lattitude) ? $company->lattitude : '')); ?>" placeholder="Enter the lattitude">
                                    <div class="invalid-feedback">
                                        Please provide a valid lattitude.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace longitude d-none">
                                    <label class="form-label" for="inputEmail4">Longitude</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="longitude" name="longitude" value="<?php echo e(old('longitude', !empty($company->longitude) ? $company->longitude : '')); ?>" placeholder="Enter the longitude">
                                    <div class="invalid-feedback">
                                        Please provide a valid longitude.
                                    </div>
                                </div>

                                <!-- Cropping Modal -->
                                <div class="modal fade" id="cropModal" tabindex="-1" aria-labelledby="cropModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" style="max-width: 800px;">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="cropModalLabel">Crop Image</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body" style="height: 500px; padding: 0;">
                                                <div style="position: relative; width: 100%; height: 100%;">
                                                    <img id="cropImage" src="#" alt="Image to Crop" style="width: 100%; height: 100%; object-fit: cover;">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary" id="cropConfirmButton">Crop</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="description">Description</label>
                                    <textarea type="text" id="description" name="description" rows="1" placeholder="Description" class="form-control adjustInputColor"><?php echo e($company->description ?? old('description')); ?></textarea>
                                </div>

                                <div class="col-12 col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="inputState">Capacity Available Status</label>
                                    <select id="single-select-one" placeholder="Select the availablity status..." autocomplete="off" id="companyAvailablityStatus" name="companyAvailablityStatus" required>
                                        <option value="">Select the availablity status...</option>
                                        <option value="IMMEDIATE" <?php if(old('companyAvailablityStatus', !empty($company->companyAvailablityStatus) ? $company->companyAvailablityStatus : '')== "IMMEDIATE"): ?> selected="selected" <?php endif; ?> >Available Immediately - Green Spotlight</option>
                                        <option value="WEEKS" <?php if(old('companyAvailablityStatus', !empty($company->companyAvailablityStatus) ? $company->companyAvailablityStatus : '')=="WEEKS"): ?> selected="selected" <?php endif; ?>>4 to 6 Weeks - Blue Spotlight</option>
                                        <option value="MONTHS" <?php if(old('companyAvailablityStatus', !empty($company->companyAvailablityStatus) ? $company->companyAvailablityStatus : '')=="MONTHS"): ?> selected="selected" <?php endif; ?>>2 to 3 Months - Orange Spotlight</option>
                                    </select>
                                    <div class="invalid-feedback text-danger-custom">
                                        Please select a valid availablity status.
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-8 mb-3 improveSpace">
                                    <!-- <label class="form-label">Logos</label> -->
                                    <div class="logo-container">
                                        <!-- Company Logo -->
                                        <div class="logo-item">
                                            <label class="form-label" for="file">Company Logo</label>
                                            <div class="upload-area" id="uploadArea" style="position: relative;width:200px;height:150px">
                                                <input class="form-control adjustInputColor form-control-sm" id="file" name="file" type="file" accept=".jpg, .jpeg, .png" <?php if($page !=="editCompany" ): ?> required <?php endif; ?> style="display: none;">
                                                <div class="drag-text" id="dragText" <?php if($page=="editCompany" && isset($company->path)): ?> style="display: none;" <?php endif; ?>>
                                                    <span>Browse</span><br>
                                                    <small>Drag and drop files here</small>
                                                </div>
                                                <div id="previewContainer" <?php if(!($page=="editCompany" && isset($company->path))): ?> style="display: none;" <?php endif; ?> style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                                                    <img id="imagePreview" src="<?php echo e(($page == 'editCompany' && isset($company->path)) ? Storage::disk('s3')->url($company->path) : '#'); ?>" alt="Company Logo Preview" style="width: 150px; height: 130px; object-fit: contain;margin-top:8px">
                                                    <button type="button" id="closePreview" style="position: absolute; top: 2px; right: 16px; background: red; color: white; border: none; border-radius: 50%; width: 24px; height: 24px; cursor: pointer; line-height: 24px;">✖</button>
                                                </div>
                                            </div>
                                            <small class="text-danger" id="companyError" style="display: none;">File size must be less than 6MB.</small>
                                            <div class="invalid-feedback">
                                                Please provide a valid company logo.
                                            </div>
                                        </div>

                                        <!-- Card Logo -->
                                        <div class="logo-item">
                                            <label class="form-label" for="cardLogo">Card Image</label>
                                            <div class="upload-area" id="uploadAreaCard" style="position: relative;height:200px;width:450px">
                                                <input class="form-control adjustInputColor form-control-sm" id="cardLogo" name="cardLogo" type="file" accept=".jpg, .jpeg, .png"  style="display: none;">
                                                <div class="drag-text" id="dragTextCard" <?php if($page=="editCompany" && isset($company->cardpath)): ?> style="display: none;" <?php endif; ?>>
                                                    <span>Browse</span><br>
                                                    <small>Drag and drop files here</small>
                                                </div>
                                                <div id="previewContainerCard" <?php if(!($page=="editCompany" && isset($company->cardpath))): ?> style="display: none;" <?php endif; ?> style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                                                    <img id="imagePreviewCard" src="<?php echo e(($page == 'editCompany' && isset($company->cardpath)) ? Storage::disk('s3')->url($company->cardpath) : '#'); ?>" alt="Card Logo Preview" style="width:407px; height: 186px;margin-top:6px">
                                                    <button type="button" id="closePreviewCard" style="position: absolute; top: 2px; right: 5px; background: red; color: white; border: none; border-radius: 50%; width: 24px; height: 24px; cursor: pointer; line-height: 24px;">✖</button>
                                                </div>
                                            </div>
                                            <small class="text-danger-custom" id="companyError2" style="display: none;">File size must be less than 6MB.</small>
                                            <div class="invalid-feedback">
                                                Please provide a valid card logo.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <a class="btn btn-outline-danger me-3" href="<?php echo e(route('profile.showMyAccountPage')); ?>">
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
    $(document).ready(function() {
        // Variables for cropping
        let cropper;
        let currentFile;
        let currentImagePreviewId;
        let currentPreviewContainerId;
        let currentDragTextId;
        let currentFileInputId;
        let currentErrorId;

        const cropModalElement = $("#cropModal");
        const cropModal = new bootstrap.Modal(cropModalElement[0]);
        const cropImage = $("#cropImage");
        const cropConfirmButton = $("#cropConfirmButton");

        // Company Logo Upload Area
        const uploadArea = $("#uploadArea");
        const fileInput = $("#file");
        const previewContainer = $("#previewContainer");
        const imagePreview = $("#imagePreview");
        const closePreview = $("#closePreview");
        const dragText = $("#dragText");

        // Card Logo Upload Area
        const uploadAreaCard = $("#uploadAreaCard");
        const fileInputCard = $("#cardLogo");
        const previewContainerCard = $("#previewContainerCard");
        const imagePreviewCard = $("#imagePreviewCard");
        const closePreviewCard = "#closePreviewCard";
        const dragTextCard = $("#dragTextCard");

        // Handler for Company Logo
        $("#file").on("change", function() {
            var file = this.files[0];
            if (file) {
                var maxSize = 6 * 1024 * 1024; // 6MB in bytes
                if (file.size > maxSize) {
                    $("#companyError").show();
                    $(this).val(""); // Clear the input
                } else {
                    $("#companyError").hide();
                    handleFile(file, "imagePreview", "previewContainer", "dragText", "file", "companyError");
                }
            }
        });

        // Handler for Card Logo
        $("#cardLogo").on("change", function() {
            var file = this.files[0];
            if (file) {
                var maxSize = 6 * 1024 * 1024; // 6MB in bytes
                if (file.size > maxSize) {
                    $("#companyError2").show();
                    $(this).val(""); // Clear the input
                } else {
                    $("#companyError2").hide();
                    handleFile(file, "imagePreviewCard", "previewContainerCard", "dragTextCard", "cardLogo", "companyError2");
                }
            }
        });

        // Trigger file input when clicking the Company Logo upload area
        uploadArea.on("click", function(e) {
            if (previewContainer.css("display") === "none") {
                fileInput.click();
            }
            e.stopPropagation();
        });

        // Trigger file input when clicking the Card Logo upload area
        uploadAreaCard.on("click", function(e) {
            if (previewContainerCard.css("display") === "none") {
                fileInputCard.click();
            }
            e.stopPropagation();
        });

        // Prevent file input click from bubbling up to upload area (Company Logo)
        fileInput.on("click", function(e) {
            e.stopPropagation();
        });

        // Prevent file input click from bubbling up to upload area (Card Logo)
        fileInputCard.on("click", function(e) {
            e.stopPropagation();
        });

        // Handle drag and drop for Company Logo
        uploadArea.on("dragover", function(e) {
            e.preventDefault();
            if (previewContainer.css("display") === "none") {
                uploadArea.css("background-color", "#e1e1e1");
            }
        });

        uploadArea.on("dragleave", function() {
            uploadArea.css("background-color", "#f9f9f9");
        });

        uploadArea.on("drop", function(e) {
            e.preventDefault();
            uploadArea.css("background-color", "#f9f9f9");
            if (previewContainer.css("display") === "none") {
                const files = e.originalEvent.dataTransfer.files;
                if (files.length > 0) {
                    fileInput[0].files = files;
                    handleFile(files[0], "imagePreview", "previewContainer", "dragText", "file", "companyError");
                }
            }
        });

        // Handle drag and drop for Card Logo
        uploadAreaCard.on("dragover", function(e) {
            e.preventDefault();
            if (previewContainerCard.css("display") === "none") {
                uploadAreaCard.css("background-color", "#e1e1e1");
            }
        });

        uploadAreaCard.on("dragleave", function() {
            uploadAreaCard.css("background-color", "#f9f9f9");
        });

        uploadAreaCard.on("drop", function(e) {
            e.preventDefault();
            uploadAreaCard.css("background-color", "#f9f9f9");
            if (previewContainerCard.css("display") === "none") {
                const files = e.originalEvent.dataTransfer.files;
                if (files.length > 0) {
                    fileInputCard[0].files = files;
                    handleFile(files[0], "imagePreviewCard", "previewContainerCard", "dragTextCard", "cardLogo", "companyError2");
                }
            }
        });

        // Close preview and reset input for Company Logo
        closePreview.on("click", function() {
            if (cropper) {
                cropper.destroy();
                cropper = null;
            }
            previewContainer.hide();
            fileInput.val(""); // Clear the file input
            $("#companyError").hide();
            dragText.show();
        });

        // Close preview and reset input for Card Logo
        $(closePreviewCard).on("click", function() {
            if (cropper) {
                cropper.destroy();
                cropper = null;
            }
            previewContainerCard.hide();
            fileInputCard.val(""); // Clear the file input
            $("#companyError2").hide();
            dragTextCard.show();
        });

        // Handle crop confirmation
        cropConfirmButton.on("click", function() {
            if (cropper) {
                const canvas = cropper.getCroppedCanvas({
                    width: cropper.getCropBoxData().width, // Use the crop box width
                    height: cropper.getCropBoxData().height, // Use the crop box height
                    fillColor: '#fff',
                    imageSmoothingEnabled: true,
                    imageSmoothingQuality: 'high', // Ensure high quality
                });

                // Get the original file type
                const originalFileType = currentFile.type;
                const outputFormat = originalFileType; // Use the original format (e.g., image/jpeg or image/png)
                const outputFileName = outputFormat === 'image/png' ? `cropped_${currentFileInputId === 'file' ? 'company_logo' : 'card_logo'}.png` : `cropped_${currentFileInputId === 'file' ? 'company_logo' : 'card_logo'}.jpg`;

                // Convert cropped image to data URL with original format
                const croppedDataUrl = canvas.toDataURL(outputFormat);

                // Update preview with cropped image
                $(`#${currentImagePreviewId}`).attr("src", croppedDataUrl).show();
                $(`#${currentPreviewContainerId}`).show();
                $(`#${currentDragTextId}`).hide();

                // Convert data URL to Blob for form submission
                canvas.toBlob(function(blob) {
                    const file = new File([blob], outputFileName, {
                        type: outputFormat
                    });
                    const dataTransfer = new DataTransfer();
                    dataTransfer.items.add(file);
                    $(`#${currentFileInputId}`)[0].files = dataTransfer.files;

                    // Check file size after cropping
                    if (file.size > 6 * 1024 * 1024) {
                        $(`#${currentErrorId}`).show();
                        $(`#${currentFileInputId}`).val(""); // Clear the input
                        $(`#${currentPreviewContainerId}`).hide();
                        $(`#${currentDragTextId}`).show();
                    }
                }, outputFormat); // Use original format without quality parameter for PNG

                // Destroy cropper and close modal
                cropper.destroy();
                cropper = null;
                cropModal.hide();
            }
        });

        function handleFile(file, imagePreviewId, previewContainerId, dragTextId, fileInputId, errorId) {
            // Check file type
            const validTypes = ["image/jpeg", "image/jpg", "image/png"];
            if (!validTypes.includes(file.type)) {
                alert("Please upload a valid image file (JPG, JPEG, or PNG).");
                $(`#${fileInputId}`).val("");
                return false;
            }

            // Store the current file and context
            currentFile = file;
            currentImagePreviewId = imagePreviewId;
            currentPreviewContainerId = previewContainerId;
            currentDragTextId = dragTextId;
            currentFileInputId = fileInputId;
            currentErrorId = errorId;

            // Display image in the cropping modal
            const reader = new FileReader();
            reader.onload = function(e) {
                cropImage.attr("src", e.target.result);
                cropModal.show();
            };
            reader.readAsDataURL(file);
            return true;
        }

        // Reinitialize Cropper.js every time the modal is shown
        cropModalElement.on('shown.bs.modal', function() {
            // Destroy any existing cropper instance
            if (cropper) {
                cropper.destroy();
            }

            // Set aspect ratio based on file input (1:1 for Company Logo, 366:180 for Card Logo)
            const aspectRatio = currentFileInputId === 'file' ? 1 : 366 / 180;

            // Initialize Cropper.js in the modal
            cropper = new Cropper(cropImage[0], {
                aspectRatio: aspectRatio, // 1:1 for Company Logo, 366:180 for Card Logo
                viewMode: 1,
                autoCropArea: 0.5, // Set to 50% of the container area
                movable: true,
                zoomable: false, // Disable zooming
                scalable: true,
                rotatable: false,
                background: false, // Remove the default background grid for cleaner look
                ready: function() {
                    // Center the crop box after initialization
                    const containerData = cropper.getContainerData();
                    const cropBoxData = cropper.getCropBoxData();
                    const newLeft = (containerData.width - cropBoxData.width) / 2;
                    const newTop = (containerData.height - cropBoxData.height) / 2;
                    cropper.setCropBoxData({
                        left: newLeft,
                        top: newTop
                    });
                }
            });
        });

        // Clean up cropper when modal is closed without cropping
        cropModalElement.on('hidden.bs.modal', function() {
            if (cropper) {
                cropper.destroy();
                cropper = null;
            }
            // If modal is closed without cropping, reset the file input
            if ($(`#${currentPreviewContainerId}`).css("display") !== "block") {
                $(`#${currentFileInputId}`).val("");
                $(`#${currentErrorId}`).hide();
                $(`#${currentDragTextId}`).show();
            }
        });

        // Prevent modal resizing on window resize (e.g., console open/close)
        $(window).on('resize', function() {
            const modalDialog = cropModalElement.find('.modal-dialog');
            modalDialog.css({
                'width': '800px',
                'max-width': '800px'
            });
        });
    });
</script>

<?php if($page == "editCompany"): ?>
<script>
    const subcategories = <?php echo json_encode($subcatagories, 15, 512) ?>; // Convert PHP array to JavaScript
    const selectedCategories = <?php echo json_encode($selectedCatagories, 15, 512) ?>; // Stored category IDs
    const selectedSubcategories = <?php echo json_encode($selectedSubCatagories, 15, 512) ?>; // Stored subcategory IDs

    $(document).ready(function() {
        // Initialize TomSelect for Categories
        const categorySelect = new TomSelect(".select-catagories", {
            maxItems: null,
            create: false,
            hideSelected: true,
            plugins: ["remove_button"],
            sortField: {
                field: "text",
                direction: "asc",
            },
            onInitialize: function() {
                // Pre-select stored categories
                selectedCategories.forEach(id => this.addItem(id));
            }
        });

        // Initialize TomSelect for Subcategories
        const subcategorySelect = new TomSelect(".select-sub-catagories", {
            maxItems: null,
            create: false,
            hideSelected: true,
            plugins: ["remove_button"],
            sortField: {
                field: "text",
                direction: "asc",
            }
        });

        // Function to Load and Pre-select Subcategories
        function updateSubcategories(selectedCategoryIds) {
            // Clear previous options
            subcategorySelect.clearOptions();

            // Filter subcategories based on selected categories
            const matchingSubcategories = subcategories.filter(subcat =>
                selectedCategoryIds.includes(subcat.catagoryID)
            );

            // Add filtered subcategories to dropdown
            if (matchingSubcategories.length > 0) {
                matchingSubcategories.forEach(subcat => {
                    subcategorySelect.addOption({
                        value: subcat._id || subcat.id,
                        text: subcat.name,
                    });
                });

                // Refresh options
                subcategorySelect.refreshOptions();

                // Pre-select stored subcategories
                selectedSubcategories.forEach(id => {
                    subcategorySelect.addItem(id);
                });
            } else {
                // Optional: If no subcategories, show a message
                subcategorySelect.addOption({
                    value: "",
                    text: "No subcategories available",
                });
                subcategorySelect.refreshOptions();
            }
        }

        // Load subcategories on page load if categories are pre-selected
        updateSubcategories(selectedCategories);

        // Update subcategories when category selection changes
        $("#catagoryIDs").on("change", function() {
            updateSubcategories($(this).val());
        });
    });
</script>
<?php else: ?>
<script>
    const subcategories = <?php echo json_encode($subcatagories, 15, 512) ?>; // Convert PHP array to JavaScript

    $(document).ready(function() {
        // Initialize TomSelect instances
        const categorySelect = new TomSelect(".select-catagories", {
            maxItems: null,
            create: false,
            hideSelected: true,
            plugins: ["remove_button"],
            sortField: {
                field: "text",
                direction: "asc",
            },
        });

        const subcategorySelect = new TomSelect(".select-sub-catagories", {
            maxItems: null,
            create: false,
            hideSelected: true,
            plugins: ["remove_button"],
            sortField: {
                field: "text",
                direction: "asc",
            },
        });

        // Event Listener for Category Dropdown
        $("#catagoryIDs").on("change", function() {
            const selectedCategories = $(this).val(); // Get selected category IDs

            // Clear existing subcategory options in TomSelect
            subcategorySelect.clearOptions();

            // Filter and Add Matching Subcategories
            const matchingSubcategories = subcategories.filter((subcat) =>
                selectedCategories.includes(subcat.catagoryID)
            );

            if (matchingSubcategories.length > 0) {
                matchingSubcategories.forEach((subcat) => {
                    subcategorySelect.addOption({
                        value: subcat._id || subcat.id, // Use appropriate ID field
                        text: subcat.name, // Subcategory name
                    });
                });

                // Refresh options to update the TomSelect dropdown
                subcategorySelect.refreshOptions();
            } else {
                // Optional: Add a fallback option if no subcategories match
                subcategorySelect.addOption({
                    value: "",
                    text: "No subcategories available",
                });
                subcategorySelect.refreshOptions();
            }
        });
    });
</script>
<?php endif; ?>

<script>
    function initAutocomplete() {



        const locationInput = document.getElementById('location');
        const latitudeInput = document.getElementById('lattitude');
        const longitudeInput = document.getElementById('longitude');
        const addressInput = document.getElementById('address');
        const cityInput = document.getElementById('city');

        let typedLocation = ''; // Variable to store user input

        locationInput.addEventListener('input', function() {
            typedLocation = locationInput.value.trim();
        });

        const autocomplete = new google.maps.places.Autocomplete(locationInput);

        autocomplete.addListener('place_changed', function() {

            const place = autocomplete.getPlace();

            if (!place.geometry) {
                alert("No Valid Location Found");
                return;
            }


            // Extract lat/lng
            const lat = place.geometry.location.lat();
            const lng = place.geometry.location.lng();
            latitudeInput.value = lat;
            longitudeInput.value = lng;
            // Get formatted address
            const fullAddress = place.formatted_address || '';
            addressInput.value = fullAddress;
            locationInput.value = fullAddress; // Update the input box with formatted address

            // Extract city
            let city = '';
            let country = '';
            if (place.address_components) {
                for (const component of place.address_components) {
                    const types = component.types;

                    if (types.includes("locality") || types.includes("postal_town")) {
                        city = component.long_name;
                    }

                    if (types.includes("country")) {
                        country = component.long_name;
                    }
                }
            }

            cityInput.value = city.toUpperCase();
            locationInput.value = typedLocation;


        });



        locationInput.addEventListener('input', function() {
            const currentInput = locationInput.value.trim();
            console.log("User input:", currentInput);

            if (currentInput === '') {
                latitudeInput.value = '';
                longitudeInput.value = '';
                addressInput.value = '';
                cityInput.value = '';
            }
        });
    }

    window.onload = initAutocomplete;
</script>





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

<?php if($errors->any()): ?>
<?php echo $__env->make('appLayouts.addedLayouts._alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/profilePages/updateMyProfile.blade.php ENDPATH**/ ?>