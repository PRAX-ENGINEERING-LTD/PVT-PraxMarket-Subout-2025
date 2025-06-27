<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Prax Market</title>


</head>

<body>



    <?php echo $__env->make('staticPages.home.homeComponents.heromarquee', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


    <?php echo $__env->make('staticPages.home.homeComponents.carousenew', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('staticPages.home.homeComponents.cardmarquee', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('staticPages.home.homeComponents.cardsection', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('staticPages.home.homeComponents.hometimeline', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('staticPages.home.homeComponents.competitiveEdge', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('staticPages.home.homeComponents.partners', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('staticPages.addedContents.countnumber', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('staticPages.addedContents.faq', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('staticPages.addedContents.marquee', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>






    <!-- 
    <section  class="platform-section position-relative mt-5"  style="position: relative;overflow: hidden;">
        <h5 class="why-prax" style="text-align:center;margin-bottom:20px">
            <img src="<?php echo e(asset('newAssets/img/home/icons/zap.png')); ?>" style="width: 17px;" alt="icon" />
            <span style="font-size: 14px;">Why Prax Market?</span>
        </h5>

        <div class="container-fluid home-content" style="padding:40px">
            <h1 class="platform-title">A platform built for precision engineering<br>professionals, by industry experts.</h1>
            <p class="platform-subtitle">Designed with deep industry insights to help you connect,<br>innovate, and excel effortlessly.</p>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="platform-feature-card">
                        <div class="platform-feature-image">
                            <img src="<?php echo e(asset('newAssets/img/home/card/1.png')); ?>" alt="Seamless Connections" />
                        </div>
                        <h3 class="platform-feature-title">Seamless Connections</h3>
                        <p class="platform-feature-description">Instantly find the right suppliers, manufacturers, and customers without the hassle.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="platform-feature-card">
                        <div class="platform-feature-image">
                            <img src="<?php echo e(asset('newAssets/img/home/card/2.png')); ?>" alt="One-Stop Solution" />
                        </div>
                        <h3 class="platform-feature-title">One-Stop Solution</h3>
                        <p class="platform-feature-description">Access 13+ essential services, from CNC machining to delivery and finance, all in one place.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="platform-feature-card">
                        <div class="platform-feature-image">
                            <img src="<?php echo e(asset('newAssets/img/home/card/3.png')); ?>" alt="Boost Your Visibility" />
                        </div>
                        <h3 class="platform-feature-title">Boost Your Visibility</h3>
                        <p class="platform-feature-description">Showcase your business, display jobs, and attract valuable leads effortlessly.</p>
                    </div>
                </div>
            </div>

            <div class="row g-4 py-5">
                <div class="col-md-4">
                    <div class="platform-feature-card">
                        <div class="platform-feature-image">
                            <img src="<?php echo e(asset('newAssets/img/home/card/4.png')); ?>" alt="Seamless Connections" />
                        </div>
                        <h3 class="platform-feature-title">Save Time & Resources</h3>
                        <p class="platform-feature-description">No more endless searching—get
                            matched with the right partners
                            quickly and efficiently.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="platform-feature-card">
                        <div class="platform-feature-image">
                            <img src="<?php echo e(asset('newAssets/img/home/card/5.png')); ?>" alt="One-Stop Solution" />
                        </div>
                        <h3 class="platform-feature-title">Hyperlocal & Global Reach
                        </h3>
                        <p class="platform-feature-description">Think big, act smart. Find local
                            services or expand your business
                            worldwide.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="platform-feature-card">
                        <div class="platform-feature-image">
                            <img src="<?php echo e(asset('newAssets/img/home/card/6.png')); ?>" alt="Boost Your Visibility" />
                        </div>
                        <h3 class="platform-feature-title">Trust & Security
                        </h3>
                        <p class="platform-feature-description">Transparent pricing, secure
                            payments, and quality assurance
                            for a worry-free experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>  -->








    <?php echo $__env->make('staticPages.addedContents.join', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Include Marquee Here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<script>


document.addEventListener("DOMContentLoaded", function() {
            const buttons = document.querySelectorAll(".btn-why-one");

            function checkScroll() {
                buttons.forEach((button) => {
                    const buttonPosition = button.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;

                    if (buttonPosition < windowHeight - 50 && buttonPosition > 0) {
                        button.classList.add("visible"); // Add animation when in view
                    } else {
                        button.classList.remove("visible"); // Remove animation when out of view
                    }
                });
            }

            window.addEventListener("scroll", checkScroll);
            checkScroll(); // Check on page load
        });
</script>
</body>

</html><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/staticPages/home/homeComponents/secondaryPage.blade.php ENDPATH**/ ?>