<head>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>


<title>Verify your email</title>


<style>
    
    .comingsoon-bgimg{
        background-image: url("<?php echo e(asset('newAssets/img/dashboard/signv1bg.png')); ?>") !important;

    }
    .page-body-1:has(.comingsoon-bgimg) {
  padding: 0px !important;
}
.btn-sv1{
  background-color: #7366ff !important;
  color: #fff !important;

  font-size: 18px;
  margin-top: 10px !important;
}
.v2-p-1 {
        color: black !important;
        font-family: 'Manrope', sans-serif !important;
        font-weight: 500;
        font-size: 18px;
        margin-bottom: 0px !important;
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
            <h3>Verify your email</h3>
            <p class="sub-content">An verification mail has been sent to your below mail. Please verify at your earliest</p>
          </div>
          <div><a class="btn btn-primary btn-lg" href="#"><?php echo e($email ?? 'email'); ?></a></div>
        </div> -->

        <div class="container-fluid p-0 m-0">
        <div class="comingsoon comingsoon-bgimg">
            <div class="comingsoon-inner text-center">
            <img class="for-light" src="<?php echo e(asset('newAssets/img/dashboard/signv1.png')); ?>"  style="width:400px;height:400px;object-fit: cover;" alt="Logo for light theme">
            <h3 class="title-inital">Verify your email</h3>
            <p class="v2-p-1">Please check your inbox or click the button below to verify your email.</p>
               
            <div><a class="btn btn-lg btn-sv1" href="mailto:<?php echo e($email ?? 'email'); ?>"><?php echo e($email ?? 'email'); ?></a></div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('appLayouts.errorLayouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/signupPages/signupSuccess.blade.php ENDPATH**/ ?>