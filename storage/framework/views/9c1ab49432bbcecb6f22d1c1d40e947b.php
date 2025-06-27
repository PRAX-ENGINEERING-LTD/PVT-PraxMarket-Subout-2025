<?php $__env->startSection('content'); ?>

<?php $__env->startSection('main_content'); ?>
<style>
.icon-resize a svg{
  width: 20px !important;
  height:20px !important;

}

</style>

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Premium Profile Settings</h3>
            </div>
            <div class="col-sm-6">
  <ol class="breadcrumb">
      <li class="breadcrumb-item icon-resize">
          <a class="networkLi bs-tooltip" data-bs-toggle="tooltip" title="Network" data-tooltip="Map View" href="<?php echo e(route('network.index')); ?>"> <i data-feather="home"></i></a>
          <a class="networkLi bs-tooltip" data-bs-toggle="tooltip" title="Post View" data-tooltip="Map View" href="<?php echo e(route('post.viewBlogPages')); ?>"> <i data-feather="globe"></i></a>
          <a class="networkLi bs-tooltip" data-bs-toggle="tooltip" title="Premium Profile" data-tooltip="Map View" href="<?php echo e(route('dataForPremiumProfile')); ?>" target="_blank"> <i data-feather="user"></i></a>


      </li>
  </ol>
</div>
            <!-- <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('network.index')); ?>"> <svg class="stroke-icon">
                                <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#stroke-home')); ?>"></use>
                            </svg></a></li>
                    <li class="breadcrumb-item active">Premium Profile Settings</li>
                </ol>
            </div> -->
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
                            <h5>Profile Info</h5>
                        </div>
                        <div class="col-sm-6 showPageTools" id="showPageTools">
                            <div class="action-btn companyActionUpdate" id="companyActionUpdate">
                                <a href="<?php echo e(route('profile.updatePremiumProfileDetails')); ?>" class="bs-tooltip showToolTip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Premium Profile" data-original-title="Edit Premium Profile">
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
                            <p class="adjustInputColor"><?php echo e(Auth::user()->name ?? 'Company Name'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Company Tagline</label>
                            <p class="adjustInputColor"><?php echo e($premiumProfile->companyTagline ?? 'Company Tagline'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Company Specialist In</label>
                            <p class="adjustInputColor"><?php echo e($premiumProfile->companySpecialistIn ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Contact Employee Count </label>
                            <p class="adjustInputColor"><?php echo e($premiumProfile->employeeCount ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Facebook Url </label>
                            <p class="adjustInputColor"><?php echo e($premiumProfile->facebookurl ?? 'N/A'); ?></p>
                        </div>


                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Facebook Fpllowers Count </label>
                            <p class="adjustInputColor"><?php echo e($premiumProfile->fbCount ?? 'N/A'); ?></p>
                        </div>



                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Linkedin Url </label>
                            <p class="adjustInputColor"><?php echo e($premiumProfile->linkedInUrl ?? 'N/A'); ?></p>
                        </div>


                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Linkedin Followers count </label>
                            <p class="adjustInputColor"><?php echo e($premiumProfile->linkedInCount ?? 'N/A'); ?></p>
                        </div>


                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">X Url </label>
                            <p class="adjustInputColor"><?php echo e($premiumProfile->xUrl ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">X Followers Count </label>
                            <p class="adjustInputColor"><?php echo e($premiumProfile->xCount ?? 'N/A'); ?></p>
                        </div>


                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Youtube Url </label>
                            <p class="adjustInputColor"><?php echo e($premiumProfile->youtubeUrl ?? 'N/A'); ?></p>
                        </div>


                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Youtube Followers Count </label>
                            <p class="adjustInputColor"><?php echo e($premiumProfile->youtubeCount ?? 'N/A'); ?></p>
                        </div>


                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Instagram Url </label>
                            <p class="adjustInputColor"><?php echo e($premiumProfile->instagramUrl ?? 'N/A'); ?></p>
                        </div>


                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Instagram Followers Count </label>
                            <p class="adjustInputColor"><?php echo e($premiumProfile->instaCount ?? 'N/A'); ?></p>
                        </div>


                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Pintrest Url </label>
                            <p class="adjustInputColor"><?php echo e($premiumProfile->pinterestUrl ?? 'N/A'); ?></p>
                        </div>


                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Pintrest Followers Count </label>
                            <p class="adjustInputColor"><?php echo e($premiumProfile->pinterestCount ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Company Overview A </label>
                            <p class="adjustInputColor"><?php echo e($premiumProfile->companyOverviewA ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Company Overview B </label>
                            <p class="adjustInputColor"><?php echo e($premiumProfile->companyOverviewB ?? 'N/A'); ?></p>
                        </div>

                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">Layout Type</label>
                            <p class="adjustInputColor"><?php echo e(str_replace('_', ' ', $premiumProfile->layoutType ?? 'N/A')); ?></p>
                            
                        </div>


                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-3">
                            <label class="showRowHead">What We do Contents</label>
                            <?php if(isset($premiumProfile->jobTags) && count($premiumProfile->jobTags) > 0): ?>
                            <p class="adjustInputColor"><?php echo e(implode(', ', $premiumProfile->jobTags)); ?></p>
                            <?php else: ?>
                            <p class="adjustInputColor">N/A</p>
                            <?php endif; ?>
                        </div>





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
                            <h5>Company Slider Video</h5>
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
<?php if($errors->any()): ?>
<?php echo $__env->make('appLayouts.addedLayouts._alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/profilePages/myPremiumProfile.blade.php ENDPATH**/ ?>