

<script type="text/javascript">
    $(document).ready(function() {


        $('form#frmCreateCatagory').submit(function(e) {
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

        new TomSelect("#my-single-select", {
            placeholder: "Select an option", // Placeholder text
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
                        <form class="text-left needs-validation customForm" role="form" method="POST" id="frmCreateCatagory" action="<?php echo e(($page=='editCatagory') ? route('catagories.update', $catagory) : route('catagories.store')); ?>" novalidate enctype="multipart/form-data">
                            <?php if($page=='editCatagory'): ?>
                            <?php echo e(method_field('PUT')); ?>

                            <?php endif; ?>

                            <?php echo e(csrf_field()); ?>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Catagory Name</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="name" name="name" value="<?php echo e(old('name', !empty($catagory->name) ? $catagory->name : '')); ?>" placeholder="Catagory Name" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid catagory name.
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Order Number</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="orderNumber" name="orderNumber" value="<?php echo e(old('orderNumber', !empty($catagory->orderNumber) ? $catagory->orderNumber : '')); ?>" placeholder="Order Number" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid order number.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Category Logo</label>
                                    <input class="form-control adjustInputColor form-control-sm" id="file" name="file" type="file" accept=".jpg, .jpeg, .png" <?php if($page !=="editCatagory" ): ?> required <?php endif; ?>>

                                    <small class="text-danger" id="catagoryError" style="display: none;">File size must be less than 6MB.</small>
                                    <div class="invalid-feedback">
                                        Please provide a valid catagory.
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Job Form</label>

                                    <select id="my-single-select" class="" id="jobFormType" name="jobFormType" required>
                                        <option value="">Select the Material Status...</option>

                                        <option value="" disabled="disabled" selected>Select Job Type</option>
                                        <option value="MACHINIST_FORM" <?php if(old('jobFormType', !empty($catagory->jobFormType) ? $catagory->jobFormType : '')=="MACHINIST_FORM"): ?> selected="selected" <?php endif; ?>>MACHINIST FORM</option>
                                        <option value="TOOLING_FORM" <?php if(old('jobFormType', !empty($catagory->jobFormType) ? $catagory->jobFormType : '')=="TOOLING_FORM"): ?> selected="selected" <?php endif; ?>>TOOLING FORM</option>
                                        <option value="MATERIAL_SUPPLIER_FORM" <?php if(old('jobFormType', !empty($catagory->jobFormType) ? $catagory->jobFormType : '')=="MATERIAL_SUPPLIER_FORM"): ?> selected="selected" <?php endif; ?>>MATERIAL SUPPLIER FORM</option>

                                    </select>
                                    <div class="invalid-feedback" style="color: #fc564a;">
                                        Please select a valid job form.
                                    </div>
                                </div>

                                <!-- jQuery & Tom Select Initialization Script -->


                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="col-form-label m-l-10">Status</label>
                                    <div class="icon-state">
                                        <label class="switch mb-0">
                                            <input type="checkbox" name="status" id="status"
                                                <?php if (isset($catagory->status) && $catagory->status === 'ACTIVE') echo 'checked'; ?>>
                                            <span class="switch-state bg-success"></span>
                                        </label>
                                    </div>
                                </div>





                                <div class="col-12">
                                    <a class="btn btn-outline-danger me-3" href="<?php echo e($page == 'editCatagory' ? route('catagories.show',$catagory) : route('catagories.index')); ?>">
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

<?php if($page == "editCatagory"): ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Uploaded Catagory</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-wrapper border rounded-3">
                        <?php if(isset($catagory->path)): ?>
                        <img src="<?php echo e(Storage::disk('s3')->url($catagory->path)); ?>" alt="Uploaded Image" width="300">
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
        $("#file").on("change", function() {
            var file = this.files[0];
            if (file) {
                var maxSize = 6 * 1024 * 1024; // 11MB in bytes
                if (file.size > maxSize) {
                    $("#catagoryError").show();
                    $(this).val(""); // Clear the input
                } else {
                    $("#catagoryError").hide();
                }
            }
        });
    });
</script><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/catagories/_form.blade.php ENDPATH**/ ?>