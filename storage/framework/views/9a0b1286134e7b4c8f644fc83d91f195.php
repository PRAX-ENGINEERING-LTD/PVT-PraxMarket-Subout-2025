<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('newAssets/img/favicon.ico')); ?>" />
    <link rel="stylesheet" href="<?php echo e(url('css/app.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Pricing</title>
    <style>
        main {
            background-color: #fff;

            position: relative;
            z-index: 2;

            overflow: hidden;
            min-height: 100vh;
        }
    </style>
</head>

<body>
    <?php echo $__env->make('staticPages.layouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


    <main>
    <?php echo $__env->make('staticPages.pricing.pricingComponents.pricing', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </main>

    <?php echo $__env->make('staticPages.layouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('staticPages.components.back-to-top', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>




</body>

</html><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/staticPages/pricing/index.blade.php ENDPATH**/ ?>