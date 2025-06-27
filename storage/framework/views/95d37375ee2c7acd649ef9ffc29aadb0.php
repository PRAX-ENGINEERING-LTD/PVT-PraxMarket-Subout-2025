<head>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>



<title>Free Trial Success</title>


<style>
    .comingsoon-bgimg {
        background-image: url("<?php echo e(asset('newAssets/img/dashboard/signv1bg.png')); ?>") !important;

    }

    .page-body-1:has(.comingsoon-bgimg) {
        padding: 0px !important;
    }

    .v2-p {
        color: black !important;
        font-family: 'Manrope', sans-serif !important;
        font-weight: 500;
        font-size: 18px;
    }

    .title-inital {
        font-size: 24px;
    font-family: 'Manrope', sans-serif !important;
    font-weight: 700;
    color: black;
    margin-bottom: 5px;
    }
</style>
<?php $__env->startSection('main_content'); ?>
<!-- <div class="container">
    <svg>
        <use href="<?php echo e(asset('assets/svg/icon-sprite.svg#ord-success')); ?>"></use>
    </svg>
    <div class="col-md-8 offset-md-2">
        <h3>Free Trial Success</h3>
        <h2>Hi <?php echo e($companyresponse->name ?? 'User'); ?></h2>

        <p class="sub-content">Your free trial has been successfully started.</p>
        <p class="sub-content">Enjoy the epidome of industry revolution .</p>

       
    </div>
</div> -->
<div class="container-fluid p-0 m-0">
    <div class="comingsoon comingsoon-bgimg">
        <div class="comingsoon-inner text-center">
            <img class="for-light" src="<?php echo e(asset('newAssets/img/dashboard/signv2.png')); ?>" style="width:400px;height:400px;object-fit: cover;" alt="Logo for light theme">
            <h3 class="title-inital">Welcome to PRAX Market</h3>
            <p class="v2-p">Once your account is verified and approved, you’ll be ready to explore everything PRAX <br />Market has to offer.<br />

                As a welcome gift, we've activated your 14-day free trial — you'll have full access as soon <br /> as your account is approved.<br />   

                We’ll notify you by email once the approval is complete.<br />

                Thanks for joining us!</p>  
            <p style="text-align: center"><a href="<?php echo e(route('signup.loginToConsole', ['companyID' => $companyresponse->id])); ?>"
                    style="padding: 10px; background-color: #7366ff; color: #fff; display: inline-block; border-radius: 4px">Go to Console</a></p>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('appLayouts.errorLayouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/signupPages/freeTrialSuccess.blade.php ENDPATH**/ ?>