<!DOCTYPE html>
<html lang="en" <?php if(Route::currentRouteName()=='admin.rtl_layout' ): ?> dir="rtl" <?php endif; ?>>

<head>
    <?php echo $__env->make('appLayouts.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('appLayouts.css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>

    .page-body-wrapper1{
        background-color: #F2F2F3 !important;
    }
    .page-body-1{ 
        margin-top: 64px !important;
    }
    .page-body-1:has(.comingsoon-bgimg) {
  padding: 0px !important;
}
</style>


<?php switch(Route::currentRouteName()):
case ('admin.default_dashboard'): ?>

<body onload="startTime()">
    <?php break; ?>

    <?php case ('admin.box_layout'): ?>

    <body class="box-layout">
        <?php break; ?>

        <?php case ('admin.rtl_layout'): ?>

        <body class="rtl">
            <?php break; ?>

            <?php case ('admin.dark_layout'): ?>

            <body class="dark-only">
                <?php break; ?>

                <?php default: ?>

                <body>
                    <?php endswitch; ?>
                    <!-- loader starts-->
                    <div class="loader-wrapper">
                        <div class="loader-index"><span></span></div>
                        <svg>
                            <defs></defs>
                            <filter id="goo">
                                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                                </fecolormatrix>
                            </filter>
                        </svg>
                    </div>
                    <!-- loader ends-->

                    <!-- tap on top starts-->
                    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
                    <!-- tap on tap ends-->

                    <!-- page-wrapper Start-->
                    <div class="page-wrapper compact-wrapper" id="pageWrapper">
                        <?php echo $__env->make('appLayouts.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                        <!-- Page Body Start-->
                        <div class="page-body-wrapper page-body-wrapper1">
                            <?php echo $__env->make('appLayouts._sideMenu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


                            <div class="page-body page-body-1">
                                <?php echo $__env->yieldContent('main_content'); ?>
                            </div>
                            <?php echo $__env->make('appLayouts.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                        </div>
                    </div>
                    <?php echo $__env->make('appLayouts.scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
                    <?php echo $__env->make('appLayouts.comingsoon_layouts.scripts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

                    <script>
                        var deleteTrashGif = "<?php echo e(asset('assets/images/gif/trash.gif')); ?>";
                    </script>

                   


                </body>

</html><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/appLayouts/app.blade.php ENDPATH**/ ?>