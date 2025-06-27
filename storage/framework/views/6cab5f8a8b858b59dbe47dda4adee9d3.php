<script type="text/javascript">
    $(document).ready(function() {


        if ("<?php echo e($page=='editJob'); ?>") {

            $(document).on('click', '.editPageSubmitBtn', function() {
                document.getElementById("password").required = false;
                document.getElementById("confirmPassword").required = false;
            });
        }



        $('form#frmCreateJob').submit(function(e) {
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


        new TomSelect("#single-select", {

            create: false, // Disable option to create new items
            allowEmptyOption: true, // Allow empty option to reset or leave unselected
            closeAfterSelect: true, // Close dropdown after selection
        });

        new TomSelect("#single-select-one", {

            create: false, // Disable option to create new items
            allowEmptyOption: true, // Allow empty option to reset or leave unselected
            closeAfterSelect: true, // Close dropdown after selection
        });



        new TomSelect(".select-job-types", {

            create: false, // Disable option to create new items
            allowEmptyOption: true, // Allow empty option to reset or leave unselected
            closeAfterSelect: true, // Close dropdown after selection
        });






    });
</script>


<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-wrapper border rounded-3">
                        <form class="text-left needs-validation customForm" role="form" method="POST" id="frmCreateJob" action="<?php echo e(($page=='editJob') ? route('job.updateJob') : route('jobs.store')); ?>" novalidate enctype="multipart/form-data">


                            <?php echo e(csrf_field()); ?>

                            <div class="row">


                                <div class="col-md-12 col-lg-12 mb-3 improveSpace">
                                    <label for="inputState">Job Type</label>
                                    <select class="select-job-types" placeholder="Select the job type..." autocomplete="off" id="jobTypeID" name="jobTypeID">
                                        <option disabled="disabled" value="" selected="selected">Select job type</option>
                                        <?php if(isset($jobTypes) && count($jobTypes) > 0): ?>
                                        <?php $__currentLoopData = $jobTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tempJobType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($tempJobType->id); ?>" jobFormType="<?php echo e($tempJobType->jobFormType); ?>"
                                            <?php if(isset($job->jobTypeID)): ?> <?php echo e(( $job->jobTypeID == $tempJobType->id)? "selected" :""); ?> <?php endif; ?>><?php echo e($tempJobType->name); ?>

                                        </option>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>
                                    <div class="invalid-feedback text-danger-custom">
                                        Please select the Job Type.
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Project / Job Name / Number</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="name" name="name" value="<?php echo e(old('name', !empty($job->name) ? $job->name : '')); ?>" placeholder="Job Name" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid job name.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Your Name</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="providerName" name="providerName" value="<?php echo e(old('providerName', !empty($job->providerName) ? $job->providerName : '')); ?>" placeholder="Job Name" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid name.
                                    </div>
                                </div>




                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Part Number</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="partNumber" name="partNumber" value="<?php echo e(old('partNumber', !empty($job->partNumber) ? $job->partNumber : '')); ?>" placeholder="Part Number">
                                    <div class="invalid-feedback">
                                        Please provide a valid part number.
                                    </div>
                                </div>



                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Quantity</label>
                                    <input type="number" class="form-control adjustInputColor" min="1" autocomplete="off" id="quantity" name="quantity" value="<?php echo e(old('quantity', !empty($job->quantity) ? $job->quantity : '')); ?>" placeholder="Quantity">
                                    <div class="invalid-feedback">
                                        Please provide a valid quantity.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Material</label>
                                    <input type="text" class="form-control adjustInputColor" autocomplete="off" id="material" name="material" value="<?php echo e(old('material', !empty($job->material) ? $job->material : '')); ?>" placeholder="Material">
                                    <div class="invalid-feedback">
                                        Please provide a valid material.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Finishing</label>
                                    <input type="text" class="form-control adjustInputColor" autocomplete="off" id="finishing" name="finishing" value="<?php echo e(old('finishing', !empty($job->finishing) ? $job->finishing : '')); ?>" placeholder="Finishing">
                                    <div class="invalid-feedback">
                                        Please provide a valid finishing.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="message" class="form-label">Description</label>
                                    <textarea class="form-control adjustInputColor" id="description" name="description" placeholder="Job Description..." required=""><?php echo e($job->description ?? ''); ?></textarea>
                                    <div class="invalid-feedback">
                                        Please provide a valid description.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="message" class="form-label">Additional Information</label>
                                    <textarea class="form-control adjustInputColor" id="additionalInformation" name="additionalInformation" placeholder="Additional Information..."><?php echo e($job->additionalInformation ?? ''); ?></textarea>
                                    <div class="invalid-feedback">
                                        Please provide a valid Information.
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="inputState">Job Status</label>
                                    <select id="single-select" placeholder="Select the status..." autocomplete="off" id="jobAccessStatus" name="jobAccessStatus" required>
                                        <option value="">Select the status...</option>
                                        <option value="DISPLAY_AND_KEEP" <?php if(old('jobAccessStatus', !empty($job->jobAccessStatus) ? $job->jobAccessStatus : '')== "DISPLAY_AND_KEEP"): ?> selected="selected" <?php endif; ?> >DISPLAY TO SUPPLIER AND KEEP IT TO WORKSHOP</option>
                                        <option value="KEEP_TO_WORKSHOP" <?php if(old('jobAccessStatus', !empty($job->jobAccessStatus) ? $job->jobAccessStatus : '')=="KEEP_TO_WORKSHOP"): ?> selected="selected" <?php endif; ?>>KEEP IN WORKSHOP</option>

                                    </select>
                                    <div class="invalid-feedback text-danger-custom">
                                        Please select a valid status.
                                    </div>

                                </div>

                                <div class="col-12 col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="inputState">Job Visiblity</label>
                                    <select id="single-select-one" placeholder="Select the visiblity status..." autocomplete="off" id="jobVisiblityStatus" name="jobVisiblityStatus" required>
                                        <option value="">Select the visiblity status...</option>
                                        <option value="ALL_SUPPLIERS" <?php if(old('jobVisiblityStatus', !empty($job->jobVisiblityStatus) ? $job->jobVisiblityStatus : '')== "ALL_SUPPLIERS"): ?> selected="selected" <?php endif; ?> >ALL SUPPLIERS</option>
                                        <option value="BOOKMARKED_SUPPLIERS" <?php if(old('jobVisiblityStatus', !empty($job->jobVisiblityStatus) ? $job->jobVisiblityStatus : '')=="BOOKMARKED_SUPPLIERS"): ?> selected="selected" <?php endif; ?>>BOOKMARKED SUPPLIERS</option>
                                        <option value="SELECT_SUPPLIERS" <?php if(old('jobVisiblityStatus', !empty($job->jobVisiblityStatus) ? $job->jobVisiblityStatus : '')=="SELECT_SUPPLIERS"): ?> selected="selected" <?php endif; ?>>SELECT SUPPLIERS</option>

                                    </select>
                                    <div class="invalid-feedback text-danger-custom">
                                        Please select a valid visiblity status.
                                    </div>

                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="inputState">Suppliers</label>
                                    <select class="select-suppliers" placeholder="Select the Suppliers..." autocomplete="off" id="supplierIDs" name="supplierIDs[]" multiple>
                                        <option disabled="disabled" value="" selected="selected">Select Suppliers</option>
                                        <?php if(isset($suppliers) && count($suppliers) > 0): ?>
                                        <?php $__currentLoopData = $suppliers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tempSupplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($tempSupplier->id); ?>"
                                            <?php if(in_array($tempSupplier->id, $selectedSuppliers)): ?> selected <?php endif; ?>>
                                            <?php echo e($tempSupplier->name); ?>

                                        </option>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>
                                    <div class="invalid-feedback text-danger-custom">
                                        Please select the Suppliers.
                                    </div>
                                </div>





                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Job Images</label>
                                    <input class="form-control adjustInputColor form-control-sm" id="jobImages" name="jobImages" type="file" accept=".jpg, .jpeg, .png" <?php if($page !=="editJob" ): ?> required <?php endif; ?>>

                                    <small class="text-danger" id="jobError" style="display: none;">File size must be less than 6MB.</small>
                                    <div class="invalid-feedback">
                                        Please provide a valid job images.
                                    </div>
                                </div>


                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Job Documents</label>
                                    <input class="form-control adjustInputColor form-control-sm" id="jobDocs" name="jobDocs" type="file" accept=".pdf, .mp4" <?php if($page !=="editJob" ): ?> required <?php endif; ?>>

                                    <small class="text-danger" id="jobDocError" style="display: none;">File size must be less than 6MB.</small>
                                    <div class="invalid-feedback">
                                        Please provide a valid job documents.
                                    </div>
                                </div>


                                <?php if($page=='editJob'): ?>
                                <input type="hidden" id="jobID" name="jobID" value="<?php echo e($job->id ?? ''); ?>" class=" form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?> round" required readonly style="background-color: transparent!important;">
                                <?php endif; ?>



                                <div class="col-12">
                                    <a class="btn btn-outline-danger me-3" href="<?php echo e(route('jobs.index')); ?>">
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

<?php if($page == "editJob"): ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Uploaded Job Image</h5>
                        </div>
                        <?php if(isset($job->jobDocPath)): ?>
                        <div class="col-sm-6">
                            <a href="<?php echo e(Storage::disk('s3')->url($job->jobDocPath)); ?>" target="_blank" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Show Supporting Document" data-original-title="Show Supporting Document">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-warning feather feather-file-text me-2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                    <polyline points="10 9 9 9 8 9"></polyline>
                                </svg></a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-wrapper border rounded-3">
                        <?php if(isset($job->jobImagePath)): ?>
                        <img src="<?php echo e(Storage::disk('s3')->url($job->jobImagePath)); ?>" alt="Uploaded Image" width="300">
                        <?php else: ?>
                        <p>No Image Found</p>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>

<script>
    $(document).ready(function() {
        $("#jobImages").on("change", function() {
            var file = this.files[0];
            if (file) {
                var maxSize = 6 * 1024 * 1024; // 11MB in bytes
                if (file.size > maxSize) {
                    $("#jobError").show();
                    $(this).val(""); // Clear the input
                } else {
                    $("#jobError").hide();
                }
            }
        });

        $("#jobDocs").on("change", function() {
            var file = this.files[0];
            if (file) {
                var maxSize = 6 * 1024 * 1024; // 11MB in bytes
                if (file.size > maxSize) {
                    $("#jobDocError").show();
                    $(this).val(""); // Clear the input
                } else {
                    $("#jobDocError").hide();
                }
            }
        });



    });
</script>

<script>
    $(document).ready(function() {
        // Initially hide the Suppliers field
        $(".select-suppliers").closest(".col-md-6").hide();

        $("#single-select-one").change(function() {
            var selectedValue = $(this).val();
            var supplierField = $(".select-suppliers");
            var supplierContainer = supplierField.closest(".col-md-6");

            if (selectedValue === "SELECT_SUPPLIERS") {

                const type = new TomSelect(".select-suppliers", {
                    maxItems: null,
                    create: false,
                    hideSelected: true,
                    plugins: ["remove_button"]

                });
                supplierContainer.show();
                supplierField.prop("required", true);
            } else {
                supplierContainer.hide();
                supplierField.prop("required", false);
                supplierField.val(""); // Reset selection
            }
        });
    });
</script>
<script>
  $(document).ready(function() {
    var storedValuesForTable = <?php echo json_encode($storedValuesForTable); ?>;

    $("#jobTypeID").change(function() {
        var jobFormType = $(this).find(":selected").attr("jobFormType");

        if (jobFormType === "SUPPLIER") {
            $("#material").closest(".col-md-6").hide().find("input").prop("required", false).val("");
            $("#finishing").closest(".col-md-6").hide().find("input").prop("required", false).val("");
            $("#quantity").closest(".col-md-6").hide().find("input").prop("required", false).val("");
            $("#partNumber").closest(".col-md-6").hide().find("input").prop("required", false).val("");
            $("#additionalInformation").closest(".col-md-6").hide().find("input").prop("required", false).val("");

            $("#supplierTableContainer").remove(); // Remove old table if present

            var supplierTable = `
            <div id="supplierTableContainer" class="mt-4 mb-4">
                <h5>Supplier Material Details</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Material</th>
                            <th>Grade</th>
                            <th>Dimension</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="supplierTableBody"></tbody>
                </table>
                <input type="hidden" id="requiredProperties" name="requiredProperties">
            </div>
            `;

            $("#jobDocs").closest(".col-md-6").after(supplierTable);

            // Populate stored values if they exist
            if (storedValuesForTable && storedValuesForTable.length > 0) {
                storedValuesForTable.forEach(function(row, index) {
                    addRow(row.materialCore, row.gradeCore, row.dimensionCore, row.quantityCore);
                });
            } else {
                // Add an empty row if no stored data
                addRow("", "", "", "");
            }
        } else {
            $("#supplierTableContainer").remove();
        }
    }).change(); // Trigger change on page load

    // Function to add a row
    function addRow(material = "", grade = "", dimension = "", quantity = "") {
        var rowCount = $("#supplierTableBody tr").length;
        var actionButton = rowCount === 0
            ? `<button type="button" class="btn btn-success addRow">Add</button>`
            : `<button type="button" class="btn btn-danger removeRow">Remove</button>`;

        var newRow = `
        <tr>
            <td><input type="text" class="form-control supplierInput" name="materialCore[]" value="${material}" required></td>
            <td><input type="text" class="form-control supplierInput" name="gradeCore[]" value="${grade}" required></td>
            <td><input type="text" class="form-control supplierInput" name="dimensionCore[]" value="${dimension}" required></td>
            <td><input type="text" class="form-control supplierInput" name="quantityCore[]" value="${quantity}" required></td>
            <td>${actionButton}</td>
        </tr>
        `;

        $("#supplierTableBody").append(newRow);
        updateHiddenField();
    }

    // Add row event
    $(document).on("click", ".addRow", function() {
        addRow();
    });

    // Remove row event
    $(document).on("click", ".removeRow", function() {
        $(this).closest("tr").remove();
        updateHiddenField();
        maintainFirstRowAction(); // Ensure first row remains "Add"
    });

    // Ensure first row always has "Add" button
    function maintainFirstRowAction() {
        $("#supplierTableBody tr").each(function(index) {
            var actionCell = $(this).find("td:last-child");
            actionCell.html(index === 0 
                ? `<button type="button" class="btn btn-success addRow">Add</button>` 
                : `<button type="button" class="btn btn-danger removeRow">Remove</button>`);
        });
    }

    // Update hidden field when input fields change
    $(document).on("focusout", ".supplierInput", function() {
        updateHiddenField();
    });

    function updateHiddenField() {
        var supplierData = [];

        $("#supplierTableBody tr").each(function() {
            var materialCore = $(this).find("td:eq(0) input").val();
            var gradeCore = $(this).find("td:eq(1) input").val();
            var dimensionCore = $(this).find("td:eq(2) input").val();
            var quantityCore = $(this).find("td:eq(3) input").val();

            if (materialCore && gradeCore && dimensionCore && quantityCore) { // Ensure all fields are filled
                supplierData.push({
                    materialCore: materialCore,
                    gradeCore: gradeCore,
                    dimensionCore: dimensionCore,
                    quantityCore: quantityCore
                });
            }
        });

        $("#requiredProperties").val(JSON.stringify(supplierData));
    }
});


</script><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/jobs/_form.blade.php ENDPATH**/ ?>