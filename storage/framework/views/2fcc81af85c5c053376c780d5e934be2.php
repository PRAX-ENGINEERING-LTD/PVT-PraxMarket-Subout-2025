<script type="text/javascript">
    $(document).ready(function() {



        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            }
        });


        $('form#frmCreateCompany').submit(function(e) {
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

        $('#companyEmail').focusout(function() {
            var email = $(this).val();
            $.ajax({
                type: "POST",
                async: false,
                url: "<?php echo e(route('company-email-validation')); ?>",
                data: {
                    email: email,
                    currentEmail: "<?php echo e($company->companyEmail ?? null); ?>"
                },
                success: function(data) {
                    data === 'Email Already Exist' ? ($('#emailAlreadyExistsError').css('display', 'block') &&
                            $('#btnSubmit').prop('disabled', true)) :
                        ($('#emailAlreadyExistsError').css('display', 'none') &&
                            $('#btnSubmit').prop('disabled', false))

                },
                failure: function(data) {
                    console.log(data);
                }
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

        new TomSelect("#single-select-sub", {
            sortField: {
                field: "text",
                direction: "asc"
            },
            create: false, // Disable option to create new items
            allowEmptyOption: true, // Allow empty option to reset or leave unselected
            closeAfterSelect: true, // Close dropdown after selection
        });

        new TomSelect(".select-catagories", {
            maxItems: null,
            create: false,
            hideSelected: true,
            plugins: ['remove_button'],
            sortField: {
                field: "text",
                direction: "asc"
            }
        });

        new TomSelect(".select-sub-catagories", {
            maxItems: null,
            create: false,
            hideSelected: true,
            plugins: ['remove_button'],
            sortField: {
                field: "text",
                direction: "asc"
            }
        });

        

    });
</script>


<style>

</style>

<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(config('constants.websiteConfigurations.googleApiKey')); ?>&libraries=places" async defer></script>


<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-wrapper border rounded-3">
                        <form class="text-left needs-validation customForm" role="form" method="POST" id="frmCreateCompany" action="<?php echo e(($page=='editCompany') ? route('companies.update', $company) : route('companies.store')); ?>" novalidate enctype="multipart/form-data">
                            <?php if($page=='editCompany'): ?>
                            <?php echo e(method_field('PUT')); ?>

                            <?php endif; ?>

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
                                    <input type="email" class="form-control adjustInputColor position-relative" id="companyEmail" name="companyEmail" value="<?php echo e(old('companyEmail', !empty($company->companyEmail) ? $company->companyEmail : '')); ?>" placeholder="Company Email" required="">
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
                                    <label class="form-label" for="inputEmail4"> Full postcode (write this in block capitals)</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="postalCode" name="postalCode" value="<?php echo e(old('postalCode', !empty($company->postalCode) ? $company->postalCode : '')); ?>" placeholder="Postal Code" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid postal code.
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
                                    <label for="inputState">Catagories</label>
                                    <select class="select-catagories" placeholder="Select the catagories..." autocomplete="off" id="catagoryIDs" name="catagoryIDs[]" autocomplete="off" multiple required>

                                        <?php if(isset($catagories) && count($catagories) > 0): ?>
                                        <option disabled="disabled" value="" selected="selected">Select catagories</option>
                                        <?php $__currentLoopData = $catagories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tempCatagory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($tempCatagory->id); ?>"
                                            <?php if(in_array($tempCatagory->id, $selectedCatagories)): ?> selected <?php endif; ?>>
                                            <?php echo e($tempCatagory->name); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>



                                    </select>
                                    <div class="invalid-feedback">
                                        Please select the catagories.
                                    </div>

                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="inputState">Sub Catagories</label>
                                    <select class="select-sub-catagories" placeholder="Select the sub catagories..." autocomplete="off" id="subCatagoryIDs" name="subCatagoryIDs[]" autocomplete="off" multiple required>

                                        <?php if(isset($subcatagories) && count($subcatagories) > 0): ?>
                                        <option disabled="disabled" value="" selected="selected">Select sub catagories</option>
                                        <?php $__currentLoopData = $subcatagories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tempSubCatagory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($tempSubCatagory->id); ?>"
                                            <?php if(in_array($tempSubCatagory->id, $selectedSubCatagories)): ?> selected <?php endif; ?>>
                                            <?php echo e($tempSubCatagory->name); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>



                                    </select>
                                    <div class="invalid-feedback">
                                        Please select the sub catagories.
                                    </div>

                                </div>


                                <div class="col-12 col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="inputState">Countries</label>
                                    <select id="single-select" placeholder="Select the country..." autocomplete="off" id="countryID" name="countryID" required>
                                        <option value="">Select the Country...</option>

                                        <?php if(isset($countries) && count($countries)>0): ?>
                                        <option disabled="disabled" value="" selected="selected">Select the Country</option>
                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tempCountry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($tempCountry->id); ?>" <?php if(isset($company["countryID"])): ?> <?php echo e(( $company["countryID"] == $tempCountry->id)? "selected" :""); ?> <?php endif; ?>><?php echo e($tempCountry->name); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid country.
                                    </div>

                                </div>

                                <div class="col-12 col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label for="inputState">Subscription Type</label>
                                    <select id="single-select-sub" placeholder="Select the subscription type..." autocomplete="off" id="subscriptionID" name="subscriptionID" required>
                                        <option value="">Select the subscription type...</option>

                                        <?php if(isset($subscriptions) && count($subscriptions)>0): ?>
                                        <option disabled="disabled" value="" selected="selected">Select the subscription type</option>
                                        <?php $__currentLoopData = $subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tempSubscription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($tempSubscription->id); ?>" <?php if(isset($company["subscriptionID"])): ?> <?php echo e(( $company["subscriptionID"] == $tempSubscription->id)? "selected" :""); ?> <?php endif; ?>><?php echo e($tempSubscription->name); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid subscription type.
                                    </div>

                                </div>



                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Google Locations</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="location" placeholder="Enter the location">
                                    <div class="invalid-feedback">
                                        Please provide a valid postal code.
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Lattitude</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="lattitude" name="lattitude" value="<?php echo e(old('lattitude', !empty($company->lattitude) ? $company->lattitude : '')); ?>" placeholder="Enter the lattitude" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid lattitude.
                                    </div>
                                </div>


                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Longitude</label>
                                    <input type="text" class="form-control adjustInputColor" maxlength="75" autocomplete="off" id="longitude" name="longitude" value="<?php echo e(old('longitude', !empty($company->longitude) ? $company->longitude : '')); ?>" placeholder="Enter the longitude" required="">
                                    <div class="invalid-feedback">
                                        Please provide a valid longitude.
                                    </div>
                                </div>





                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="form-label" for="inputEmail4">Company Logo</label>
                                    <input class="form-control adjustInputColor form-control-sm" id="file" name="file" type="file" accept=".jpg, .jpeg, .png" <?php if($page !=="editCompany" ): ?> required <?php endif; ?>>

                                    <small class="text-danger" id="companyError" style="display: none;">File size must be less than 6MB.</small>
                                    <div class="invalid-feedback">
                                        Please provide a valid company.
                                    </div>
                                </div>


                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="col-form-label m-l-10">Status</label>
                                    <div class="icon-state">
                                        <label class="switch mb-0">
                                            <input type="checkbox" name="status" id="status"
                                                <?php if (isset($company->status) && $company->status === 'ACTIVE') echo 'checked'; ?>>
                                            <span class="switch-state bg-success"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6 col-lg-6 mb-3 improveSpace">
                                    <label class="col-form-label m-l-10">Is Approved</label>
                                    <div class="icon-state">
                                        <label class="switch mb-0">
                                            <input type="checkbox" name="isApproved" id="isApproved"
                                                <?php if (isset($company->isApproved) && $company->isApproved === true) echo 'checked'; ?>>
                                            <span class="switch-state bg-success"></span>
                                        </label>
                                    </div>
                                </div>




                                <div class="col-12">
                                    <a class="btn btn-outline-danger me-3" href="<?php echo e($page == 'editCompany' ? route('companies.show',$company) : route('companies.index')); ?>">
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

<?php if($page == "editCompany"): ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Uploaded Company Logo</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-wrapper border rounded-3">
                        <?php if(isset($company->path)): ?>
                        <img src="<?php echo e(Storage::disk('s3')->url($company->path)); ?>" alt="Uploaded Image" width="300">
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
                    $("#companyError").show();
                    $(this).val(""); // Clear the input
                } else {
                    $("#companyError").hide();
                }
            }
        });
    });
</script>


<script>
    function initAutocomplete() {
        const locationInput = document.getElementById('location');
        const latitudeInput = document.getElementById('lattitude');
        const longitudeInput = document.getElementById('longitude');

        // Initialize Google Places Autocomplete
        const autocomplete = new google.maps.places.Autocomplete(locationInput);
        autocomplete.addListener('place_changed', function() {
            const place = autocomplete.getPlace();

            // Ensure a place was selected
            if (place.geometry) {
                latitudeInput.value = place.geometry.location.lat();
                longitudeInput.value = place.geometry.location.lng();
            } else {
                alert("No valid location selected!");
            }
        });
    }

    // Load the function when the window loads
    window.onload = initAutocomplete;
</script><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/companies/_form.blade.php ENDPATH**/ ?>