<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prax Market - Precision Engineering Platform</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section-2 {
            background-image: url("<?php echo e(asset('newAssets/img/home/ypraxbg.png')); ?>");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px 0;
            overflow: hidden;
        }

        .carousel-hero-title {
            font-size: 48px;
            font-weight: 700;
            background: linear-gradient(290deg, rgb(76,29,149) 100%, rgb(109,40,217) 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-align: start;
            line-height: 1.2;
            margin-bottom: 24px;
            font-family: "Manrope-Semi" !important;
        }

        .carousel-hero-subtitle {
            font-size: 20px;
            line-height: 1.6;
            max-width: 643px;
            text-align: start;
            color: #2E1065;
            font-family: "Manrope-Medium" !important;
        }

        .carousel-inner {
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .carousel-item {
            background: white;
            border-radius: 20px;
            padding: 24px;
            min-height: 663px;
            transition: all 0.6s ease-in-out; /* Use Bootstrap-compatible transition */
        }

        .carousel-feature-image {
            text-align: center;
            margin-bottom: 30px;
        }

        .carousel-feature-image img {
            max-width: 100%;
            height: auto;
        }

        .carousel-feature-title {
            font-size: 32px;
            font-weight: 600;
            text-align: center;
            margin-bottom: 16px;
            font-family: "Manrope-Bold" !important;
        }

        .carousel-feature-description {
            font-size: 28px;
            color: #000000;
            text-align: center;
            width: 462px;
            line-height: 1.6;
            margin: 0 auto;
            font-family: "Manrope-Medium" !important;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 40px !important;
            height: 40px !important;
            background-color: #7366ff !important;
            border-radius: 24%;
            top: 50% !important;
            transform: translateY(-50%);
            opacity: 1 !important;
            z-index: 10;
        }

        .carousel-control-prev {
            left: 12px !important;
        }

        .carousel-control-next {
            right: 12px !important;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            filter: invert(1);
        }

        @media (max-width: 991.98px) {
            .carousel-item {
                padding: 0 40px;
            }
            .carousel-control-prev {
                left: 5px;
            }
            .carousel-control-next {
                right: 5px;
            }
        }

        @media (max-width: 575.98px) {
            .carousel-item {
                padding: 0 30px;
            }
            .carousel-control-prev,
            .carousel-control-next {
                width: 32px;
                height: 32px;
            }
            .why-prax {
                padding: 20px !important;
            }
            .carousel-hero-title {
                text-align: center;
                font-size: 24px;
            }
            .why-prax-v2 {
                text-align: center !important;
            }
            .carousel-hero-subtitle {
                text-align: center !important;
                font-size: 16px;
            }
            .carousel-feature-title {
                font-size: 24px;
            }
            .carousel-feature-description {
                width: unset !important;
                font-size: 16px;
                padding-bottom: 20px;
            }
            .carousel-item {
                min-height: unset !important;
            }
        }

        .btn-why-one {
            box-shadow: inset .3184767494094558px -.39809593676181976px .5098115483006286px -1px #c4b5fdc7,
                        inset .9658024572418071px -1.207253071552259px 1.5460382806343045px -2px #c4b5fdba,
                        inset 2.5530614085937846px -3.1913267607422307px 4.086892346255328px -3px #c4b5fd9c,
                        inset 8px -10px 12.806248474865697px -4px #c4b5fd33 !important;
            font-family: 'Manrope-Medium' !important;
            padding: 10px;
            border-radius: 24px;
            border: 1px solid rgb(213, 213, 213) !important;
            font-size: 14px;
            width: 178px;
            height: 40px;
            background-color: #fff;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }

        .btn-why-one.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .why-prax {
            padding: 0px 80px;
        }
        .why-prax-v2 {
            text-align: start;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <section class="hero-section-2">
        <div class="container-fluid">
            <div class="row align-items-center why-prax">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <h5 class="why-prax-v2">
                        <button class="btn-why-one" style="font-family: 'Manrope-Medium';">
                            <img src="<?php echo e(asset('newAssets/img/home/icons/zap.png')); ?>" style="margin-right: 10px; margin-top: -3px; width:16px" loading="lazy">Why PRAX Market?
                        </button>
                    </h5>
                    <h1 class="carousel-hero-title">A platform built for <br /> precision engineering  <br />professionals, by industry <br /> experts.</h1>
                    <p class="carousel-hero-subtitle">Designed with deep industry insights to help you connect, innovate, <br />and excel effortlessly.</p>
                </div>
                <div class="col-lg-5">
                    <div id="praxCarousel" class="carousel slide carousel-container" data-bs-ride="carousel" data-bs-interval="4000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="carousel-feature-image">
                                    <img src="<?php echo e(asset('newAssets/img/home/card/1.png')); ?>" alt="Seamless Connections" loading="lazy" />
                                </div>
                                <h3 class="carousel-feature-title">Seamless Connections</h3>
                                <p class="carousel-feature-description">Instantly find the right suppliers, manufacturers, and customers without the hassle.</p>
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-feature-image">
                                    <img src="<?php echo e(asset('newAssets/img/home/card/2.png')); ?>" alt="One-Stop Solution" loading="lazy" />
                                </div>
                                <h3 class="carousel-feature-title">One-Stop Solution</h3>
                                <p class="carousel-feature-description">Access 13+ essential services, from CNC machining to delivery and finance, all in one place.</p>
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-feature-image">
                                    <img src="<?php echo e(asset('newAssets/img/home/card/3.png')); ?>" alt="Boost Your Visibility" loading="lazy" />
                                </div>
                                <h3 class="carousel-feature-title">Boost Your Visibility</h3>
                                <p class="carousel-feature-description">Showcase your business, display jobs, and attract valuable leads effortlessly.</p>
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-feature-image">
                                    <img src="<?php echo e(asset('newAssets/img/home/card/4.png')); ?>" alt="Save Time & Resources" loading="lazy" />
                                </div>
                                <h3 class="carousel-feature-title">Save Time & Resources</h3>
                                <p class="carousel-feature-description">No more endless searching—get matched with the right partners quickly and efficiently.</p>
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-feature-image">
                                    <img src="<?php echo e(asset('newAssets/img/home/card/5.png')); ?>" alt="Hyperlocal & Global Reach" loading="lazy"/>
                                </div>
                                <h3 class="carousel-feature-title">Hyperlocal & Global Reach</h3>
                                <p class="carousel-feature-description">Think big, act smart. Find local services or expand your business worldwide.</p>
                            </div>
                            <div class="carousel-item">
                                <div class="carousel-feature-image">
                                    <img src="<?php echo e(asset('newAssets/img/home/card/6.png')); ?>" alt="Trust & Security" loading="lazy" />
                                </div>
                                <h3 class="carousel-feature-title">Trust & Security</h3>
                                <p class="carousel-feature-description">Transparent pricing, secure payments, and quality assurance for a worry-free experience.</p>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#praxCarousel" data-bs-slide="prev">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 19L8 12L15 5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#praxCarousel" data-bs-slide="next">
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 5L16 12L9 19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Make the "Why Prax Market?" button visible on page load
            const button = document.querySelector('.btn-why-one');
            if (button) {
                button.classList.add('visible');
            }

            // Initialize Bootstrap carousel
            const carousel = document.querySelector('#praxCarousel');
            if (carousel) {
                new bootstrap.Carousel(carousel, {
                    interval: 4000, // Auto-slide every 4 seconds
                    wrap: true, // Loop back to first slide
                    pause: 'hover', // Pause on hover
                    touch: true, // Enable touch swipe
                    ride: 'carousel' // Start auto-sliding immediately
                });
            }
        });
    </script>
</body>
</html><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/staticPages/home/homeComponents/carousenew.blade.php ENDPATH**/ ?>