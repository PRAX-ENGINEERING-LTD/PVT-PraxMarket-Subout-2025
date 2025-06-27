<?php $__env->startSection('title', 'Sign Up'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<link rel="stylesheet" href="<?php echo e(url('css/app.css')); ?>">

<!-- Include Cropper.js CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        try {
            new TomSelect("#single-select", {
                sortField: {
                    field: "text",
                    direction: "asc"
                },
                create: false,
                allowEmptyOption: true,
                closeAfterSelect: true,
            });
            console.log("TomSelect initialized successfully for #single-select");
        } catch (error) {
            console.error("Error initializing TomSelect:", error);
        }

        
    });
</script>

<script src="<?php echo e(asset('assets/js/tomselect.js')); ?>"></script>

<style>
    .detailedSignupHead {
        text-align: center;
        margin-bottom: 30px;
    }

    .text-danger-custom {
        color: #fc564a !important;
    }

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

    /* Simplified modal styles */
    #cropModal .modal-dialog {
        max-width: 600px;
        /* Slightly smaller width for simplicity */
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        justify-content: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #cropModal .modal-body {
        padding: 0;
        height: 400px;
        /* Fixed height for the cropping area */
    }

    #cropModal .modal-body img {
        max-height: 100%;
        width: 100%;
        object-fit: contain;
    }
</style>

<?php echo $__env->make('staticPages.layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->startSection('main_content'); ?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e($mapKey); ?>&libraries=places" async defer></script>

<!-- Include Cropper.js JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/tomselect.css')); ?>">

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-wrapper border rounded-3">
                        <?php if(session('status')): ?>
                        <?php echo $__env->make('appLayouts.addedLayouts._alert',
                        array('alertType' => 'success',
                        'message' => session('status')), array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        <?php endif; ?>
                        <form class="text-left needs-validation customForm" role="form" method="POST" id="frmCreateCompany" action="<?php echo e(route('signup.storeAddedDetailsOfCompany')); ?>" novalidate enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="detailedSignupHead">
                                <h4>Update your company details</h4>
                                <p>Enter your company details to create free trial account for 14 days</p>
                            </div>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label>Company Email</label>
                                    <input type="email" class="form-control adjustInputColor position-relative" id="email" name="email" value="<?php echo e($email ?? 'email'); ?>" placeholder="Company Email" readonly>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Contact Person Name</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="contactPersonName" name="contactPersonName" value="" placeholder="Contact Person Name" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid contact person name.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Postal Code</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="location" name="postalCode"  placeholder="Enter the postal code">
                                    <div class="invalid-feedback">
                                        Please provide a valid postal code.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4"> Address (Building number/name and Street name)</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="address" name="address" value="" placeholder="Address" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid address.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4"> City or town (write this in block capitals)</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="city" name="city" value="" placeholder="City or Town" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid city or town.
                                    </div>
                                </div>

                             

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Website</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="website" name="website" value="" placeholder="Website" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid website.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Registered Number</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="registeredNumber" name="registeredNumber" value="" placeholder="Registered Number" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid registered number.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Vat Registered Number</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="vatRegisteredNumber" name="vatRegisteredNumber" value="" placeholder="Vat Registered Number">
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
                                        <option value="<?php echo e($tempCatagory->id); ?>">
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
                                        <option value="<?php echo e($tempCountry->id); ?>"><?php echo e($tempCountry->name); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>
                                    <div class="invalid-feedback text-danger-custom">
                                        Please select a valid country.
                                    </div>
                                </div>

                              

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace lattitude d-none">
                                    <label class="form-label" for="inputEmail4">Lattitude</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="lattitude" name="lattitude" value="" placeholder="Enter the lattitude">
                                    <div class="invalid-feedback">
                                        Please provide a valid lattitude.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace longitude d-none">
                                    <label class="form-label" for="inputEmail4">Longitude</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="longitude" name="longitude" value="" placeholder="Enter the longitude">
                                    <div class="invalid-feedback">
                                        Please provide a valid longitude.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="file">Company Logo</label>
                                    <div class="upload-area" id="uploadArea" style="position: relative; height: 150px; width: 100%;">
                                        <input class="form-control adjustInputColor form-control-sm" id="file" name="file" type="file" accept=".jpg, .jpeg, .png" required style="display: none;">
                                        <div class="drag-text" id="dragText">
                                            <span>Browse Files</span><br>
                                            <small>Drag and drop files here</small>
                                        </div>
                                        <div id="previewContainer" style="display: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                                            <img id="imagePreview" src="#" alt="Image Preview" style="width: 100%; height: 100%; object-fit: contain;">
                                            <button type="button" id="closePreview" style="position: absolute; top: 5px; right: 5px; background: red; color: white; border: none; border-radius: 50%; width: 24px; height: 24px; cursor: pointer; line-height: 24px;">✖</button>
                                        </div>
                                    </div>
                                    <small class="text-danger-custom" id="companyError" style="display: none;">File size must be less than 6MB.</small>
                                    <div class="invalid-feedback">
                                        Please provide a valid company logo.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="cardLogo">Card Logo</label>
                                    <div class="upload-area" id="uploadAreaCard" style="position: relative; height: 150px; width: 100%;">
                                        <input class="form-control adjustInputColor form-control-sm" id="cardLogo" name="cardLogo" type="file" accept=".jpg, .jpeg, .png" required style="display: none;">
                                        <div class="drag-text" id="dragTextCard">
                                            <span>Browse Files</span><br>
                                            <small>Drag and drop files here</small>
                                        </div>
                                        <div id="previewContainerCard" style="display: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                                            <img id="imagePreviewCard" src="#" alt="Image Preview" style="width: 100%; height: 100%; object-fit: contain;">
                                            <button type="button" id="closePreviewCard" style="position: absolute; top: 5px; right: 5px; background: red; color: white; border: none; border-radius: 50%; width: 24px; height: 24px; cursor: pointer; line-height: 24px;">✖</button>
                                        </div>
                                    </div>
                                    <small class="text-danger-custom" id="companyError2" style="display: none;">File size must be less than 6MB.</small>
                                    <div class="invalid-feedback">
                                        Please provide a valid card logo.
                                    </div>
                                </div>

                                <!-- Cropping Modal -->
                                <div class="modal fade" id="cropModal" tabindex="-1" aria-labelledby="cropModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="cropModalLabel">Crop Image</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div style="position: relative; width: 100%; height: 100%;">
                                                    <img id="cropImage" src="#" alt="Image to Crop">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary" id="cropConfirmButton">Crop</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Description</label>
                                    <textarea type="text" id="description" name="description" rows="4" placeholder="Description" class="form-control adjustInputColor"></textarea>
                                    <div class="invalid-feedback">
                                        Please provide a valid description.
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-success" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('staticPages.layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script>
    const subcategories = <?php echo json_encode($subcatagories, 15, 512) ?>;
    console.log("Subcategories loaded:", subcategories);

    $(document).ready(function() {
        try {
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

            $("#catagoryIDs").on("change", function() {
                const selectedCategories = $(this).val();
                console.log("Selected Categories:", selectedCategories);

                subcategorySelect.clearOptions();

                const matchingSubcategories = subcategories.filter((subcat) =>
                    selectedCategories.includes(subcat.catagoryID)
                );

                console.log("Matching Subcategories:", matchingSubcategories);

                if (matchingSubcategories.length > 0) {
                    matchingSubcategories.forEach((subcat) => {
                        subcategorySelect.addOption({
                            value: subcat._id || subcat.id,
                            text: subcat.name,
                        });
                    });
                    subcategorySelect.refreshOptions();
                } else {
                    subcategorySelect.addOption({
                        value: "",
                        text: "No subcategories available",
                    });
                    subcategorySelect.refreshOptions();
                }
            });
            console.log("TomSelect for categories and subcategories initialized successfully");
        } catch (error) {
            console.error("Error initializing TomSelect for categories/subcategories:", error);
        }
    });
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
                    console.log("Form validation triggered for:", form.id);
                }, false);
            });
        }, false);
    })();
</script>

<script>
    $(document).ready(function() {
        let cropper;
        let currentFile;
        let currentImagePreviewId;
        let currentPreviewContainerId;
        let currentDragTextId;
        let currentFileInputId;
        let currentErrorId;

        const cropModalElement = $("#cropModal");
        const cropModal = new bootstrap.Modal(cropModalElement[0], {
            backdrop: 'static',
            keyboard: false
        });
        const cropImage = $("#cropImage");
        const cropConfirmButton = $("#cropConfirmButton");

        const uploadArea = $("#uploadArea");
        const fileInput = $("#file");
        const previewContainer = $("#previewContainer");
        const imagePreview = $("#imagePreview");
        const closePreview = $("#closePreview");
        const dragText = $("#dragText");

        const uploadAreaCard = $("#uploadAreaCard");
        const fileInputCard = $("#cardLogo");
        const previewContainerCard = $("#previewContainerCard");
        const imagePreviewCard = $("#imagePreviewCard");
        const closePreviewCard = $("#closePreviewCard");
        const dragTextCard = $("#dragTextCard");

        $("#file").on("change", function() {
            var file = this.files[0];
            if (file) {
                var maxSize = 6 * 1024 * 1024;
                if (file.size > maxSize) {
                    $("#companyError").show();
                    $(this).val("");
                    console.log("Company Logo file size exceeds 6MB");
                } else {
                    $("#companyError").hide();
                    handleFile(file, "imagePreview", "previewContainer", "dragText", "file", "companyError");
                }
            }
        });

        $("#cardLogo").on("change", function() {
            var file = this.files[0];
            if (file) {
                var maxSize = 6 * 1024 * 1024;
                if (file.size > maxSize) {
                    $("#companyError2").show();
                    $(this).val("");
                    console.log("Card Logo file size exceeds 6MB");
                } else {
                    $("#companyError2").hide();
                    handleFile(file, "imagePreviewCard", "previewContainerCard", "dragTextCard", "cardLogo", "companyError2");
                }
            }
        });

        uploadArea.on("click", function(e) {
            if (previewContainer.css("display") === "none") {
                fileInput.click();
            }
            e.stopPropagation();
        });

        uploadAreaCard.on("click", function(e) {
            if (previewContainerCard.css("display") === "none") {
                fileInputCard.click();
            }
            e.stopPropagation();
        });

        fileInput.on("click", function(e) {
            e.stopPropagation();
        });

        fileInputCard.on("click", function(e) {
            e.stopPropagation();
        });

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

        closePreview.on("click", function() {
            if (cropper) {
                cropper.destroy();
                cropper = null;
            }
            previewContainer.hide();
            fileInput.val("");
            $("#companyError").hide();
            dragText.show();
            console.log("Company Logo preview closed");
        });

        closePreviewCard.on("click", function() {
            if (cropper) {
                cropper.destroy();
                cropper = null;
            }
            previewContainerCard.hide();
            fileInputCard.val("");
            $("#companyError2").hide();
            dragTextCard.show();
            console.log("Card Logo preview closed");
        });

        cropConfirmButton.on("click", function() {
            if (cropper) {
                const canvas = cropper.getCroppedCanvas({
                    width: cropper.getCropBoxData().width,
                    height: cropper.getCropBoxData().height,
                    fillColor: '#fff',
                    imageSmoothingEnabled: true,
                    imageSmoothingQuality: 'high',
                });

                const originalFileType = currentFile.type;
                const outputFormat = originalFileType;
                const outputFileName = outputFormat === 'image/png' ? `cropped_${currentFileInputId === 'file' ? 'company_logo' : 'card_logo'}.png` : `cropped_${currentFileInputId === 'file' ? 'company_logo' : 'card_logo'}.jpg`;

                const croppedDataUrl = canvas.toDataURL(outputFormat);

                $(`#${currentImagePreviewId}`).attr("src", croppedDataUrl).show();
                $(`#${currentPreviewContainerId}`).show();
                $(`#${currentDragTextId}`).hide();

                canvas.toBlob(function(blob) {
                    const file = new File([blob], outputFileName, {
                        type: outputFormat
                    });
                    const dataTransfer = new DataTransfer();
                    dataTransfer.items.add(file);
                    $(`#${currentFileInputId}`)[0].files = dataTransfer.files;

                    if (file.size > 6 * 1024 * 1024) {
                        $(`#${currentErrorId}`).show();
                        $(`#${currentFileInputId}`).val("");
                        $(`#${currentPreviewContainerId}`).hide();
                        $(`#${currentDragTextId}`).show();
                        console.log("Cropped image exceeds 6MB");
                    } else {
                        console.log("Cropped image successfully set for", currentFileInputId);
                    }
                }, outputFormat);

                cropper.destroy();
                cropper = null;
                cropModal.hide();
            }
        });

        function handleFile(file, imagePreviewId, previewContainerId, dragTextId, fileInputId, errorId) {
            const validTypes = ["image/jpeg", "image/jpg", "image/png"];
            if (!validTypes.includes(file.type)) {
                alert("Please upload a valid image file (JPG, JPEG, or PNG).");
                $(`#${fileInputId}`).val("");
                console.log("Invalid file type for", fileInputId);
                return false;
            }

            currentFile = file;
            currentImagePreviewId = imagePreviewId;
            currentPreviewContainerId = previewContainerId;
            currentDragTextId = dragTextId;
            currentFileInputId = fileInputId;
            currentErrorId = errorId;

            const reader = new FileReader();
            reader.onload = function(e) {
                cropImage.attr("src", e.target.result);
                cropModal.show();
                console.log("Crop modal opened for", fileInputId);
            };
            reader.onerror = function() {
                console.error("Error reading file for", fileInputId);
            };
            reader.readAsDataURL(file);
            return true;
        }

        cropModalElement.on('shown.bs.modal', function() {
            if (cropper) {
                cropper.destroy();
            }

            try {
                // Set aspect ratio based on file input (1:1 for Company Logo, 366:180 for Card Logo)
                const aspectRatio = currentFileInputId === 'file' ? 1 : 366 / 180;

                cropper = new Cropper(cropImage[0], {
                    aspectRatio: aspectRatio, // 1:1 for Company Logo, 366:180 for Card Logo
                    viewMode: 1,
                    autoCropArea: 0.5,
                    movable: true,
                    zoomable: false,
                    scalable: true,
                    rotatable: false,
                    background: false,
                    ready: function() {
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
                console.log("Cropper initialized successfully with aspect ratio:", aspectRatio);
            } catch (error) {
                console.error("Error initializing Cropper:", error);
            }
        });

        cropModalElement.on('hidden.bs.modal', function() {
            if (cropper) {
                cropper.destroy();
                cropper = null;
            }
            if ($(`#${currentPreviewContainerId}`).css("display") !== "block") {
                $(`#${currentFileInputId}`).val("");
                $(`#${currentErrorId}`).hide();
                $(`#${currentDragTextId}`).show();
                console.log("Modal closed without cropping, reset", currentFileInputId);
            }
        });
    });
</script>

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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.authentication.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/signupPages/detailedSignup.blade.php ENDPATH**/ ?>