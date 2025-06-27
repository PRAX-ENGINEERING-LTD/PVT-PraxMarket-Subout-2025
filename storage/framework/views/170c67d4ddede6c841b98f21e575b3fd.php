<?php $__env->startSection('content'); ?>

<?php $__env->startSection('main_content'); ?>
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3><?php echo e($company->name ?? 'Company'); ?></h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard.index')); ?>"> <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg></a></li>
                    <li class="breadcrumb-item"><a class="decolorAnchorTag" href="<?php echo e(route('companies.index')); ?>">Companies</a></li>
                    <li class="breadcrumb-item active"><?php echo e($company->name ?? 'Company'); ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
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
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Company Info</h5>
                        </div>
                        <div class="col-sm-6 showPageTools" id="showPageTools">
                            <div class="action-btn companyActionUpdate" id="companyActionUpdate">
                                <a data-confirm-route="<?php echo e(route('updateCompanyBookMarks', ['companyID' => $company->id, 'action' => 'REMOVE','authID' => Auth::user()->id])); ?>" class="confirmModalAlert bs-tooltip d-none" data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Bookmark" data-original-title="Remove Bookmark">


                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success feather feather-check-circle me-2">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>


                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-md-6 col-sm-12 col-12 d-none" id="pageActionButtons">

                    </div>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Company Name</label>
                            <p class="adjustInputColor"><?php echo e($company->name ?? 'Customer Name'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Company Email</label>
                            <p class="adjustInputColor"><?php echo e($company->email ?? 'Customer Email'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Contact Person Name</label>
                            <p class="adjustInputColor"><?php echo e($company->contactPersonName ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Contact Number </label>
                            <p class="adjustInputColor"><?php echo e($company->contactNumber ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Company Address </label>
                            <p class="adjustInputColor"><?php echo e($company->address ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Company city </label>
                            <p class="adjustInputColor"><?php echo e($company->city ?? 'N/A'); ?></p>
                        </div>


                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Postal Code </label>
                            <p class="adjustInputColor"><?php echo e($company->postalCode ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Website </label>
                            <p class="adjustInputColor"><?php echo e($company->website ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Registered Number </label>
                            <p class="adjustInputColor"><?php echo e($company->registeredNumber ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Vat Registered Number </label>
                            <p class="adjustInputColor"><?php echo e($company->vatRegisteredNumber ?? 'N/A'); ?></p>
                        </div>


                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Country</label>
                            <p class="adjustInputColor"><?php echo e($company->countryName ?? 'N/A'); ?></p>
                        </div>

                        
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Distance From Me</label>
                            <p class="adjustInputColor"><?php echo e($company->distanceFromYou ?? 'N/A'); ?></p>
                        </div>


                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Lattitude</label>
                            <p class="adjustInputColor"><?php echo e($company->lattitude ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Longittude</label>
                            <p class="adjustInputColor"><?php echo e($company->longitude ?? 'N/A'); ?></p>

                        </div>


                        

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Created At</label>
                            <p class="adjustInputColor"><?php echo e($company->created_at); ?></p>

                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Company Available Status</label>
                            <?php if(isset($company->companyAvailablityStatus)): ?>
                            <p class="adjustInputColor">
                                <?php if($company->companyAvailablityStatus == "IMMEDIATE"): ?>
                                IMMEDIATELY AVAILABLE <span style="display:inline-block; width:8px; height:8px; border-radius:50%; background-color:green; margin-left:5px;"></span>
                                <?php elseif($company->companyAvailablityStatus == "WEEKS"): ?>
                                4 TO 6 WEEKS <span style="display:inline-block; width:8px; height:8px; border-radius:50%; background-color:blue; margin-left:5px;"></span>
                                <?php else: ?>
                                2 TO 3 MONTHS <span style="display:inline-block; width:8px; height:8px; border-radius:50%; background-color:red; margin-left:5px;"></span>
                                <?php endif; ?>
                            </p>
                            <?php else: ?>
                            <p class="adjustInputColor">N/A</p>
                            <?php endif; ?>
                        </div>

                        

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Status</label>
                            <?php if($company->status ?? 'N/A' == Config::get('constants.status.inActive')): ?>
                            <p class="adjustInputColor"><span class="badge badge-light-danger"><?php echo e(str_replace('_', ' ', $company->status ?? 'N/A')); ?></span></p>
                            <?php else: ?>
                            <p class="adjustInputColor"><span class="badge badge-light-success"><?php echo e(str_replace('_', ' ', $company->status ?? 'N/A')); ?></span></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row">


                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3">
                            <label class="showRowHead">Company Logo</label>

                            <div id="companyLogo" class="my-3">
                                <div style="border: 2px dotted #000; padding: 5px; display: inline-block;">
                                    <img src="<?php echo e(isset($company->path) ? Storage::disk('s3')->url($company->path) : ''); ?>" alt="Uploaded Company">
                                </div>
                            </div>


                        </div>

                        <?php if(isset($company->lattitude) && isset($company->longitude)): ?>

                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3">
                            <label class="showRowHead">Company Location</label>
                            <script>
                                let map;
                                let latCng = parseFloat("<?php echo e($company->lattitude); ?>");
                                let lngCng = parseFloat("<?php echo e($company->longitude); ?>");

                                function initMap() {
                                    map = new google.maps.Map(document.getElementById("map"), {
                                        center: {
                                            lat: latCng,
                                            lng: lngCng
                                        },
                                        zoom: 8,
                                        scrollwheel: true,
                                    });
                                    const uluru = {
                                        lat: latCng,
                                        lng: lngCng
                                    };
                                    let marker = new google.maps.Marker({
                                        position: uluru,
                                        map: map,
                                        draggable: true
                                    });
                                    google.maps.event.addListener(marker, 'position_changed',
                                        function() {
                                            let lat = marker.position.lat()
                                            let lng = marker.position.lng()
                                            $('#lat').val(lat)
                                            $('#lng').val(lng)
                                        })
                                    google.maps.event.addListener(map, 'click',
                                        function(event) {
                                            pos = event.latLng
                                            marker.setPosition(pos)
                                        })
                                }
                            </script>

                            <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo e($company->mapurl); ?>&callback=initMap" type="text/javascript"></script>

                            <div id="map" class="my-3"></div>
                        </div>

                        <?php endif; ?>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php echo $__env->make('appLayouts._deleteModel', [
'containerID' => 'showPageTools',
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


<?php echo $__env->make('appLayouts._confirmModal', [
'containerID' => 'companyActionUpdate',
], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/companies/show.blade.php ENDPATH**/ ?>