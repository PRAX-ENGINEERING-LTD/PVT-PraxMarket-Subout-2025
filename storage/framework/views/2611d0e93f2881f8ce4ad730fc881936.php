



<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-wrapper border rounded-3">
                        <form class="text-left needs-validation customForm theme-form-posts" role="form" method="POST" id="frmCreatePosts" action="<?php echo e(($page=='editSlider') ? route('updateSlider') : route('sliders.store')); ?>" novalidate enctype="multipart/form-data">



                            <?php echo e(csrf_field()); ?>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Name</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="sliderName" name="sliderName" value="<?php echo e(!empty($slider->sliderName) ? $slider->sliderName : ''); ?>" placeholder="Enter the name" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid name.
                                    </div>
                                </div>

            
                

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Upload Photo</label>
                                    <input class="form-control adjustInputColor form-control-sm" id="file" name="file" type="file" accept=".jpg, .jpeg, .png" <?php if($page !=="editSlider" ): ?> required <?php endif; ?>>

                                    <small class="text-danger" id="photoError" style="display: none;">File size must be less than 6MB.</small>
                                    <div class="invalid-feedback">
                                        Please provide a valid file.
                                    </div>
                                </div>
                               

                                <input type="hidden" id="companyID" name="companyID" value="<?php echo e($companyID ?? ''); ?>" class=" form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?> round" placeholder="companyID" name="companyID" required readonly style="background-color: transparent!important;">



                                <?php if($page=='editSlider'): ?>
                                <input type="hidden" id="sliderID" name="sliderID" value="<?php echo e($slider->id ?? ''); ?>" class=" form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?> round"  required readonly style="background-color: transparent!important;">
                                <?php endif; ?>
                                
                               

                                <div class="col-12">
                                    <a class="btn btn-outline-danger me-3" href="<?php echo e(route('sliders.index')); ?>">
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


<?php if($page == "editSlider"): ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Uploaded Photo</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-wrapper border rounded-3">
                        <?php if(isset($slider->path)): ?>
                        <img src="<?php echo e($slider->path); ?>" alt="Uploaded Image" width="300">
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
                    $("#photoError").show();
                    $(this).val(""); // Clear the input
                } else {
                    $("#photoError").hide();
                }
            }
        });
    });
</script>

<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('theme-form-posts');
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
<?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/sliders/_form.blade.php ENDPATH**/ ?>