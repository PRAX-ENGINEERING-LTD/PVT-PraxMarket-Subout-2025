<script>
    $(document).ready(function() {

        $.ajax({
            url: "<?php echo e(route('getAvailableSlots')); ?>", // adjust if needed
            type: "GET",
            dataType: "json",
            success: function(dates) {


                flatpickr('.singleDate', {
                    dateFormat: "Y-m-d",
                    minDate: "today",
                    enable: dates
                });
            },
            error: function() {
                alert('slot not available');
                flatpickr('.singleDate', {
                    dateFormat: "Y-m-d",
                    minDate: "today",
                    enable: []
                });
            }
        });

    });
</script>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-wrapper border rounded-3">
                        <form class="text-left needs-validation customForm theme-form-posts" role="form" method="POST" id="frmCreatePosts" action="<?php echo e(($page=='editAdvertisement') ? route('updateAdvertisement') : route('advertisements.store')); ?>" novalidate enctype="multipart/form-data">



                            <?php echo e(csrf_field()); ?>

                            <div class="row">
                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Name</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="name" name="name" value="<?php echo e(!empty($advertisement->name) ? $advertisement->name : ''); ?>" placeholder="Enter the name" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid name.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Available Slot</label>
                                    <input type="text" class="singleDate form-control adjustInputColor" maxlength="75" autocomplete="off" id="slotDate" name="slotDate" value="<?php echo e(!empty($advertisement->slotDate) ? $advertisement->slotDate : ''); ?>" placeholder="Select the slot" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid slot.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Url to point</label>
                                    <input type="text" class="form-control adjustInputColor" autocomplete="off" id="url" name="url" value="<?php echo e(!empty($advertisement->url) ? $advertisement->url : ''); ?>" placeholder="Enter the url" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid url.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Description</label>
                                    <textarea class="form-control adjustInputColor" rows="3" id="description" name="description" placeholder="description..." required=""><?php echo e($advertisement->description ?? ''); ?></textarea>
                                    <div class="invalid-feedback">
                                        Please provide a valid description.
                                    </div>
                                </div>




                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Upload Photo</label>
                                    <input class="form-control adjustInputColor form-control-sm" id="file" name="file" type="file" accept=".jpg, .jpeg, .png" <?php if($page !=="editAdvertisement" ): ?> required <?php endif; ?>>

                                    <small class="text-danger" id="photoError" style="display: none;">File size must be less than 6MB.</small>
                                    <div class="invalid-feedback">
                                        Please provide a valid file.
                                    </div>
                                </div>



                                <?php if($page=='editAdvertisement'): ?>
                                <input type="hidden" id="advertisementID" name="advertisementID" value="<?php echo e($advertisement->id ?? ''); ?>" class=" form-control <?php echo e($errors->has('email') ? ' is-invalid' : ''); ?> round" required readonly style="background-color: transparent!important;">
                                <?php endif; ?>


                                <div class="col-12">
                                    <a class="btn btn-outline-danger me-3" href="<?php echo e(route('advertisements.index')); ?>">
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


<?php if($page == "editAdvertisement"): ?>

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
                        <?php if(isset($advertisement->path)): ?>
                        <img src="<?php echo e($advertisement->path); ?>" alt="Uploaded Image" width="300">
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
</script><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/advertisements/_form.blade.php ENDPATH**/ ?>