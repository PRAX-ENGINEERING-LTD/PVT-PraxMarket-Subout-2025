<?php $__env->startSection('content'); ?>

<?php $__env->startSection('main_content'); ?>
<style>
.logo-container {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}
.logo-container .logo-item {
    /* flex: 1; */
    min-width: 0;
}
.logo-container .showRowHead {
    display: block;
    margin-bottom: 5px;
}
.logo-container .image-wrapper {
    border: 2px dotted #000;
    padding: 5px;
    display: inline-block;
}
.logo-container .image-wrapper img {
    width: 100%;
    height: 150px;
    /* object-fit: contain; */
}
.icon-resize a svg {
        width: 20px !important;
        height: 20px !important;

    }
    .networkLi{
        margin-left: 10px !important;
    }
</style>

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>My Profile</h3>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb">
                    <li class="breadcrumb-item icon-resize">
                        <a class="networkLi bs-tooltip <?php echo e(request()->is('*/dashboard*') ? 'active' : ''); ?>" data-bs-toggle="tooltip" title="Dashboard" data-tooltip="Dashboard View" href="<?php echo e(route('dashboard.index')); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" fill="none">
                                <path d="M2.25 7.55L9 2.3L15.75 7.55V15.8C15.75 16.198 15.592 16.579 15.311 16.861C15.029 17.142 14.648 17.3 14.25 17.3H3.75C3.352 17.3 2.971 17.142 2.689 16.861C2.408 16.579 2.25 16.198 2.25 15.8V7.55Z" fill="transparent" stroke-width="1.5" stroke="rgb(23,23,23)" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M6.75 17.3V9.8H11.25V17.3" fill="transparent" stroke-width="1.5" stroke="rgb(23,23,23)" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                        <a class="networkLi bs-tooltip <?php echo e(request()->is('*/network') ? 'active' : ''); ?>" data-bs-toggle="tooltip" title="Network" data-tooltip="Map View" href="<?php echo e(route('network.index')); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-share2-icon lucide-share-2">
                                <circle cx="18" cy="5" r="3" />
                                <circle cx="6" cy="12" r="3" />
                                <circle cx="18" cy="19" r="3" />
                                <line x1="8.59" x2="15.42" y1="13.51" y2="17.49" />
                                <line x1="15.41" x2="8.59" y1="6.51" y2="10.49" />
                            </svg>
                        </a>
                        <a class="networkLi bs-tooltip <?php echo e(request()->is('*/bookmark*') ? 'active' : ''); ?>" data-bs-toggle="tooltip" title="Bookmark" data-tooltip="Bookmark View" href="<?php echo e(route('bookmark.index')); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" fill="none">
                                <path d="M4.5 2.65V16.15L9 13.15L13.5 16.15V2.65H4.5Z" fill="transparent" stroke-width="1.5" stroke="rgb(34,34,34)" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>


                        <a class="networkLi bs-tooltip <?php echo e(request()->is('*/post*') ? 'active' : ''); ?>" data-bs-toggle="tooltip" title="Post View" data-tooltip="Map View" href="<?php echo e(route('post.viewBlogPages')); ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe-icon lucide-globe">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                                <path d="M2 12h20" />
                            </svg>
                        </a>
                        <a class="networkLi bs-tooltip <?php echo e(request()->is('*/premium-profile') ? 'active' : ''); ?>" data-bs-toggle="tooltip" title="Premium Profile" data-tooltip="Map View" href="<?php echo e(route('dataForPremiumProfile')); ?>" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
                                <path d="M200-160v-80h560v80H200Zm0-140-51-321q-2 0-4.5.5t-4.5.5q-25 0-42.5-17.5T80-680q0-25 17.5-42.5T140-740q25 0 42.5 17.5T200-680q0 7-1.5 13t-3.5 11l125 56 125-171q-11-8-18-21t-7-28q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820q0 15-7 28t-18 21l125 171 125-56q-2-5-3.5-11t-1.5-13q0-25 17.5-42.5T820-740q25 0 42.5 17.5T880-680q0 25-17.5 42.5T820-620q-2 0-4.5-.5t-4.5-.5l-51 321H200Zm68-80h424l26-167-105 46-133-183-133 183-105-46 26 167Zm212 0Z" />
                            </svg>
                        </a>
                    </li>
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
                            <h5>Company Info
                                <?php if(isset(Auth::user()->gatewayInfo)): ?>
                                <a href="<?php echo e(route('profile.updateCard')); ?>" class="btn btn-pill btn-outline-warning">Update Card</a>
                                <?php else: ?>
                                <a href="<?php echo e(route('profile.addCard')); ?>" class="btn btn-pill btn-outline-primary">Add Card</a>
                                <?php endif; ?>
                            </h5>
                        </div>
                        <div class="col-sm-6 showPageTools" id="showPageTools">
                            <div class="action-btn companyActionUpdate" id="companyActionUpdate">
                                <a href="<?php echo e(route('profile.updateCompanyDetails')); ?>" class="bs-tooltip showToolTip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Delete">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-success feather-edit  me-2">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                    </svg></a>
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
                            <p class="adjustInputColor"><?php echo e($company->contactPersonName  ?? 'N/A'); ?></p>
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
                            <label class="showRowHead">Lattitude</label>
                            <p class="adjustInputColor"><?php echo e($company->lattitude ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Longittude</label>
                            <p class="adjustInputColor"><?php echo e($company->longitude ?? 'N/A'); ?></p>
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
                            <?php if($company->status ?? 'N/A' == Config::get('constants.subscriptionStatus.active')): ?>
                            <p class="adjustInputColor"><span class="badge badge-light-danger"><?php echo e(str_replace('_', ' ', $company->status ?? 'N/A')); ?></span></p>
                            <?php elseif($company->status == Config::get('constants.subscriptionStatus.freeTrial')): ?>
                            <p class="adjustInputColor"><span class="badge badge-light-primary"><?php echo e(str_replace('_', ' ', $company->status ?? 'N/A')); ?></span></p>
                            <?php else: ?>
                            <p class="adjustInputColor"><span class="badge badge-light-success"><?php echo e(str_replace('_', ' ', $company->status ?? 'N/A')); ?></span></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-8 mb-3">
                            <div class="logo-container">
                                <!-- Company Logo -->
                                <div class="logo-item">
                                    <label class="showRowHead">Company Logo</label>
                                    <div class="image-wrapper">
                                        <img src="<?php echo e(isset($company->path) ? Storage::disk('s3')->url($company->path) : ''); ?>" alt="Uploaded Company Logo" style="width: 123px;height: 123px;">
                                    </div>
                                </div>
                                <!-- Card Image -->
                                <?php if(isset($company->cardpath)): ?>
                                <div class="logo-item">
                                    <label class="showRowHead">Card Image</label>
                                    <div class="image-wrapper">
                                        <img src="<?php echo e(isset($company->cardpath) ? Storage::disk('s3')->url($company->cardpath) : ''); ?>" alt="Uploaded Card Image" style="height:180px;width: 366px;">
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <?php if(isset($company->lattitude) && ($company->longitude)): ?>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-6 mb-3">
                            <label class="showRowHead">Company Location</label>
                            <script type="text/javascript">
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

                            <script async defer src="https://maps.googleapis.com/maps/api/js?key=<?php echo e(config('constants.websiteConfigurations.googleApiKey')); ?>&callback=map&callback=initMap" type="text/javascript"></script>

                            <div id="map" class="my-3"></div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if($errors->any()): ?>
<?php echo $__env->make('appLayouts.addedLayouts._alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/profilePages/myProfile.blade.php ENDPATH**/ ?>