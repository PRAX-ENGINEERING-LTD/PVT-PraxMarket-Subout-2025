<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>

    <style>
        .footer-section {
            background-image: url("<?php echo e(asset('newAssets/img/footer/footer-bg.png')); ?>");
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
            padding: 80px 0px 0px 0px;
            position: relative;
            /* top: 0; */
            /* bottom: 0;
            left: 0; */
            width: 100%;
            /* background-color: #333; */
            color: white;
            /* padding: 2rem; */
            /* z-index: 1; */
            /* height: 100%; */
            overflow: hidden;
        }

        #particles-footer {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            pointer-events: none;
            /* Add this so clicks pass through */
        }

        .footer-heading {
            font-size: 20px;
            margin-bottom: 8px;
            margin-top: 36px;
            font-family: "Manrope-Semi" !important;
            color: rgb(212, 212, 212) !important;
        }

        .footer-link-new {
            display: block;
            padding: 12px;
            font-size: 16px;
            color: #fff;
            text-decoration: none;
            font-family: 'Manrope-Semi' !important;
            /* width: 215px; */
            border-radius: 8px;
            position: relative;
            overflow: hidden;
            transition: color 0.5s ease;
            z-index: 1;
        }

        .footer-link-new::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 0;
            height: 100%;
            background-color: #5B21B6;
            transition: all 0.5s ease;
            transform: translateX(-50%) scale(0);
            /* Start scaled down to 0 */
            transform-origin: center;
            /* Scale from the center */
            z-index: -1;
        }

        .footer-link-new:hover::before {
            width: 100%;
            transform: translateX(-50%) scale(1);
            /* Zoom to full size */
        }

        .footer-link-new:hover {
            color: #fff;
        }

        /* .footer-link-new:hover {
            background-color: #5B21B6;
            color: #fff;
        } */
        .footer-link-home {
            display: block;
            padding: 10px;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            font-family: 'Manrope-Semi' !important;
            width: 129px;
            border-radius: 8px;
            position: relative;
            overflow: hidden;
            transition: color 0.5s ease;
            z-index: 1;
        }

        .footer-link-home::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 0;
            height: 100%;
            background-color: #5B21B6;
            transition: all 0.5s ease;
            transform: translateX(-50%) scale(0);
            /* Start scaled down to 0 */
            transform-origin: center;
            /* Scale from the center */
            z-index: -1;
        }

        .footer-link-home:hover::before {
            width: 100%;
            transform: translateX(-50%) scale(1);
            /* Zoom to full size */
        }

        .footer-link-home:hover {
            color: #fff;
        }

        .footer-link {
            display: block;
            padding: 10px;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            font-family: 'Manrope-Semi' !important;
            width: 192px;
            border-radius: 8px;
            position: relative;
            overflow: hidden;
            transition: color 0.5s ease;
            z-index: 1;
        }

        .footer-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 0;
            height: 100%;
            background-color: #5B21B6;
            transition: all 0.5s ease;
            transform: translateX(-50%) scale(0);
            /* Start scaled down to 0 */
            transform-origin: center;
            /* Scale from the center */
            z-index: -1;
        }

        .footer-link:hover::before {
            width: 100%;
            transform: translateX(-50%) scale(1);
            /* Zoom to full size */
        }

        .footer-link:hover {
            color: #fff;
        }

        .footer-icon-social {
            width: 24px;
            /* margin-right: 5px; */
            transition: background 0.3s ease;
        }

        .footer-icon-social:hover {
            /* background-color: #5B21B6; */
            /* Purple background color as shown in the image */
            /* Increased padding to make the background wider and more visible */
            box-sizing: content-box;
            /* Ensures padding doesn't shrink the image */
        }

        /* .footer-link {
            color: white !important;
            text-decoration: none;
            transition: opacity 0.3s;
            display: block;
            margin-bottom: 15px;
        } */
        /* 
        .footer-link:hover {
            opacity: 0.8;
    color: #a990ff;
    background-color: antiquewhite;
    width: 200px;
    padding: 10px;
        } */

        .footer-link-last {
            display: block;
            padding: 10px;
            color: #fff;
            text-decoration: none;
            font-family: 'Manrope-Bold' !important;
            width: 175px;
            border-radius: 8px;
        }

        .address-block {
            margin-bottom: 20px;
            color: #fff;
            font-size: 16px;
            font-family: 'Manrope-Regular' !important;

        }

        .address-block p {
            color: #fff;
            font-size: 16px;
            margin-bottom: 0px !important;
            font-family: 'Manrope-Regular' !important;

        }

        .address-block p {
            color: #ffff;
        }

        .contact-item {
            display: flex;
            align-items: center;
            /* margin-bottom: 15px; */
        }

        .contact-icon {
            /* margin-right: 15px; */
            color: #a990ff;
        }

        .social-icons a {
            margin-right: 20px;
            font-size: 22px;
            transition: color 0.3s;
            color: rgb(98 80 216);
        }

        .social-icons a:hover {
            color: #a990ff;
        }

        .big-logo {
            font-size: 170px;
            font-weight: bold;
            color: #ffff;
            font-family: 'Manrope-Bold' !important;
            position: relative;
            overflow: hidden;
            margin-bottom: 20px;
            text-align: center;
            line-height: 1.2;
        }

        @media (max-1200px) {
            .big-logo {
                font-size: 120px;
            }
        }

        @media (max-800px) {
            .big-logo {
                font-size: 60px;
                margin-bottom: 15px;
                padding: 0 15px;
            }
        }

        @media (max-500px) {
            .big-logo {
                font-size: 40px;
                margin-bottom: 10px;
                padding: 0 10px;
            }
        }

        .copyright-circle {
            display: inline-block;
            border: 4px solid #513b98;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            text-align: center;
            line-height: 52px;
            font-size: 36px;
            margin-right: 5px;
            vertical-align: text-bottom;
        }



        .framer-badge {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background-color: white;
            color: #333;
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: 500;
        }

        .first-footer-col {
            font-family: 'Manrope-Light';
        }

        .contact-item {
            font-family: "Manrope-Bold";
        }

        .footer-link {
            font-family: "Manrope-Bold";
        }

        .footer-link-home {
            font-family: "Manrope-Bold";
        }

        .footer-sub {
            color: #fff;
            font-family: 'Manrope-Regular' !important;
            margin-bottom: 0px !important;
        }

        .footer-link-sub {
            text-decoration: underline !important;
            font-size: 16px;
            font-family: "Manrope-Regular" !important;
        }

        @media (max-width: 800px) {
            .home-content-footer {
                padding: 0px 20px !important;
            }

            .social-icons-mobile {
                display: flex !important;
                text-align: center;
                margin-top: 10px;
                margin-bottom: 20px;
                justify-content: center;
            }

            .moblie-view {
                text-align: center;
            }

            .social-media {
                display: block !important;
            }

            .footer-link::before {
                background-color: unset !important;
            }

            .footer-link-home::before {
                background-color: unset !important;
            }

            .footer-link-new::before {
                background-color: unset !important;
            }

            .footer-link-sub::before {
                background-color: unset !important;
            }

            .footer-link-new {
                width: unset !important;
            }

            .contact-item {
                justify-content: center;
            }


            /* .mobile-none {
                display: none;
            } */
            .big-logo {
                font-size: 80px;
            }
        }

        @media (max-width: 500px) {
            /* .mobile-none {
                display: none;
            } */

            .moblie-view {
                text-align: center;
            }

            .footer-section {
                padding-top: 50px;
            }

            .big-logo {
                font-size: 29px;
            }

            .social-media {
                display: block !important;
            }

            /* .nav-res-3 {
                display: none;
            } */
            .footer-link {
                width: unset !important;
            }

            .footer-link-home {
                width: unset !important;
            }

            .footer-link:hover {
                background-color: unset;
            }

            .footer-link-home:hover {
                background-color: unset;
            }

        }

        .footer-sub:hover {
            background-color: unset !important;
        }


        .scroll-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 40px;
            height: 40px;
            border: none;
            cursor: pointer;
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            transition: all 0.3s ease;
            background-color: rgb(115 102 255);
            font-family: "Inter";
            border: 1px solid var(--prax-blue);
            padding: 23px;
            border-radius: 8px;
            opacity: 0;
            transform: translateY(20px);
        }

        .scroll-to-top.visible {
            display: flex;
            opacity: 1;
            transform: translateY(0);
        }

        .scroll-to-top:hover {
            transform: translateY(-2px);
            background-color: rgb(94 83 209);
        }

        /* Tablet Devices */
        @media (max-width: 1024px) {
            .scroll-to-top {
                bottom: 30px;
                right: 30px;
                width: 45px;
                height: 45px;
                padding: 25px;
            }
        }

        /* Mobile Devices */
        @media (max-width: 768px) {
            .scroll-to-top {
                bottom: 20px;
                right: 15px;
                width: 35px;
                height: 35px;
                padding: 20px;
            }

            .center-item-container {
                width: 183px;
                height: 220px;
            }

            .marquee-item-label {
                font-size: 12px;
            }

        }

        /* Small Mobile Devices */
        @media (max-width: 480px) {
            .scroll-to-top {
                bottom: 15px;
                right: 10px;
                width: 32px;
                height: 32px;
                padding: 18px;
            }
        }

        .bg-social {
            padding: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 7px;
            position: relative;
            overflow: hidden;
            transition: color 0.5s ease;
            z-index: 1;
        }

        .bg-social::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            width: 0;
            height: 100%;
            background-color: #5B21B6;
            transition: all 0.5s ease;
            transform: translateX(-50%) scale(0);
            /* Start scaled down to 0 */
            transform-origin: center;
            /* Scale from the center */
            z-index: -1;
        }

        .bg-social:hover::before {
            width: 100%;
            transform: translateX(-50%) scale(1);
            /* Zoom to full size */
        }

        .bg-social:hover {
            color: #fff;
        }

        /* .bg-social:hover {
            background-color: #5b21b6;
            border-radius: 8px;
            justify-content: center;
            align-items: center;
        } */

        .social-media {
            display: flex;
            margin-left: 80px;
        }

        .footer-icon-social {
            width: 20px;
            /* Match the inline style */
            transition: background-color 0.3s ease;
            /* Smooth transition */
        }


        .row {
            display: flex;
            justify-content: space-between;
            /* Ensures even spacing between columns */
        }

        .col-md-3 {
            padding: 0px;
        }

        .col-m-2 {
            padding-left: 80px;
        }

        .col-m-3 {
            padding-left: 80px;
        }

        .col-m-4 {
            padding-left: 80px;
        }

        /* Ensure the container doesn't add extra padding that might interfere */
        .home-content-footer {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        /* Adjust for smaller screens to prevent excessive spacing */
        @media (max-width: 800px) {
            .col-m-2 {
                padding-left: 0px !important;
            }

            .col-m-3 {
                padding-left: 0px !important;
            }

            .col-m-4 {
                padding-left: 0px !important;
            }

            .first-col-res {
                margin-left: 0px !important;
            }

            .address-block p {
                margin-bottom: 20px !important;
            }

            .footer-sub {
                display: none;
            }

            .social-media {
                margin-left: 0px !important;
            }

            .footer-link {
                width: unset !important;
            }

            .footer-link-home {
                width: unset !important;

            }
        }

        .first-col-res {
            margin-left: 80px;
        }
    </style>
</head>

<body>

    <footer class="footer-section">
        <div class="container-fluid home-content-footer moblie-view">
            <div id="particles-footer"></div>
            <div class="row first-col-res" style="position: relative;overflow:hidden;">
                <!-- Column 1: Prax Market -->
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <h3 class="footer-heading">PRAX Market</h3>
                    <div class="address-block">
                        <p>Unit 3 Enfield Court Nuffield Road</p>
                        <p>PE273NJ St Ives</p>
                        <p>United Kingdom</p>
                    </div>
                    <p class="footer-sub">Phone : <a href="tel:00447961008" class="footer-link-last footer-link-sub d-inline">0044 7961008744</a></p>
                    <p class="footer-sub">Landline : <a href="tel:00441480759133" class="footer-link-last footer-link-sub  d-inline">0044 1480759133</a></p>
                    <p class="footer-sub">Email : <a href="mailto:info@praxmarket.com" class="footer-link-last footer-link-sub  d-inline">info@praxmarket.com</a></p>
                </div>

                <!-- Column 2: Contact Us -->
                <div class="col-lg-3 col-md-12 col-sm-12  col-m-2 mobile-none">
                    <h3 class="footer-heading">Contact Us</h3>
                    <div class="contact-item">
                        <div class="contact-icon">

                        </div>
                        <a href="tel:00447961008" style="white-space: nowrap;" class="footer-link-new"> <img src="<?php echo e(asset('newAssets/img/footer/phone.png')); ?>" style="width: 20px;margin-right: 8px;"> 0044 7961008744</a>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">

                        </div>
                        <a href="tel:00441480759133" style="white-space: nowrap;" class="footer-link-new"> <img src="<?php echo e(asset('newAssets/img/footer/call.png')); ?>" style="width: 20px;margin-right: 8px;">0044 1480759133</a>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">

                        </div>
                        <a href="mailto:info@praxmarket.com" style="white-space: nowrap;" class="footer-link-new"> <img src="<?php echo e(asset('newAssets/img/footer/mail.png')); ?>" style="width: 20px;margin-right: 8px;">info@praxmarket.com</a>
                    </div>
                </div>

                <!-- Column 3: Nav Links -->
                <div class="col-lg-3 col-md-12 col-sm-12 col-m-3 nav-res-3">
                    <h3 class="footer-heading">Nav Links</h3>
                    <a href="<?php echo e(route('home.showHomePage')); ?>" class="footer-link-home">Home</a>
                    <a href="<?php echo e(route('home.showAboutUsPage')); ?>" class="footer-link-home">About us</a>
                    <a href="<?php echo e(route('home.showHowItWorksPage')); ?>" class="footer-link-home">How it works</a>
                    <a href="<?php echo e(route('home.showPricingPage')); ?>" class="footer-link-home">Pricing</a>
                    <a href="<?php echo e(route('home.showContactUsPage')); ?>" class="footer-link-home">Contact us</a>
                </div>

                <!-- Column 4: Legal -->
                <div class="col-lg-3 col-md-12 col-sm-12 col-m-4">
                    <h3 class="footer-heading">Legal</h3>

                    <a href="<?php echo e(route('home.showPrivacyPolicy')); ?>" target="_blank" class="footer-link footer-link-res">Privacy Policy</a>
                    <a href="<?php echo e(route('home.showTermsAndConditions')); ?>" target="_blank" class="footer-link footer-link-res">Terms & Conditions</a>
                    <a href="<?php echo e(route('home.showUsagePolicy')); ?>" target="_blank" class="footer-link  footer-link-res">Usage Policy</a>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <div class="social-media">
                        <span class="me-3" style="font-size: 20px;font-family:Manrope-Medium;color: rgb(212, 212, 212) !important;margin-top:5px">Social Media:</span>
                        <div class="social-icons-mobile" style="display: flex;">
                            <div class="bg-social">
                                <a href="#"> <img src="<?php echo e(asset('newAssets/img/footer/1.png')); ?>" class="footer-icon-social" style="width: 20px;margin-left:10px;margin-right:10px"></a>
                            </div>
                            <div class="bg-social">
                                <a href="#"><img src="<?php echo e(asset('newAssets/img/footer/2.png')); ?>" class="footer-icon-social" style="width: 20px;margin-left:10px;margin-right:10px"></a>
                            </div>
                            <div class="bg-social">
                                <a href="#"><img src="<?php echo e(asset('newAssets/img/footer/3.png')); ?>" class="footer-icon-social" style="width: 20px;margin-left:10px;margin-right:10px"></a>
                            </div>

                            <div class="bg-social">
                                <a href="#"><img src="<?php echo e(asset('newAssets/img/footer/4.png')); ?>" class="footer-icon-social" style="width: 20px;margin-left:10px;margin-right:10px"></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Logo Section -->
            <div class="row">
                <div class="col-12 text-center">
                    <div class="big-logo">
                        ©PRAX MARKET
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll to top button -->
        <!-- <div id="scrollToTopBtn" class="scroll-to-top" aria-label="Scroll to top">
            <img src="<?php echo e(asset('newAssets/img/home/arrow-up.png')); ?>" style="width: 26px;" alt="Facebook">
        </div> -->

    </footer>


    <!-- Bootstrap JS and Icons -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script>
        if (document.getElementById('particles-footer')) {
            particlesJS('particles-footer', {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 1000
                        }
                    },
                    "color": {
                        "value": "#8B5CF6"
                    },
                    "shape": {
                        "type": "circle"
                    },
                    "opacity": {
                        "value": 1,

                    },
                    "size": {
                        "value": 1,
                    },
                    "move": {
                        "enable": true,
                        "speed": 1,
                        "direction": "none",
                        "random": false,
                        "out_mode": "out"
                    },
                    "line_linked": {
                        "enable": false,

                    },
                }
            });
        }
        // JavaScript to handle the footer reveal effect
        // document.addEventListener('DOMContentLoaded', function() {
        //     const mainContent = document.querySelector('.main-content');
        //     const footer = document.querySelector('.footer-section');
        //     const footerHeight = footer.offsetHeight;

        //     let lastScrollPosition = 0;
        //     let ticking = false;

        //     function onScroll() {
        //         lastScrollPosition = window.scrollY;
        //         if (!ticking) {
        //             window.requestAnimationFrame(function() {

        //                 const viewportHeight = window.innerHeight;

        //                 const documentHeight = document.body.clientHeight;


        //                 if (lastScrollPosition + viewportHeight > documentHeight - footerHeight) {
        //                     const diff = (lastScrollPosition + viewportHeight) - (documentHeight - footerHeight);
        //                     const translateY = Math.min(diff, footerHeight);
        //                     mainContent.style.transform = `translateY(-${translateY}px)`;
        //                 } else {
        //                     mainContent.style.transform = 'translateY(0)';
        //                 }

        //                 ticking = false;
        //             });

        //             ticking = true;
        //         }
        //     }

        //     window.addEventListener('scroll', onScroll);

        //     onScroll();
        // });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const scrollToTopBtn = document.getElementById("scrollToTopBtn");

            if (scrollToTopBtn) {
                window.addEventListener("scroll", () => {
                    if (window.scrollY > 300) {
                        scrollToTopBtn.classList.add("visible");
                    } else {
                        scrollToTopBtn.classList.remove("visible");
                    }
                });

                function smoothScrollToTop(duration) {
                    const start = window.scrollY;
                    const startTime = performance.now();

                    // Adjust duration based on screen size and scroll distance
                    const screenHeight = window.innerHeight;
                    const scrollDistance = window.scrollY;
                    const adjustedDuration = Math.min(
                        duration * (scrollDistance / screenHeight),
                        duration
                    );

                    function scrollAnimation(currentTime) {
                        const elapsedTime = currentTime - startTime;
                        const progress = Math.min(elapsedTime / adjustedDuration, 1);
                        const ease = easeInOutQuint(progress);
                        window.scrollTo(0, start * (1 - ease));

                        if (progress < 1) {
                            requestAnimationFrame(scrollAnimation);
                        }
                    }

                    // Smoother easing function (Quintic)
                    function easeInOutQuint(t) {
                        return t < 0.5 ? 16 * t * t * t * t * t : 1 + 16 * (--t) * t * t * t * t;
                    }

                    requestAnimationFrame(scrollAnimation);
                }

                scrollToTopBtn.addEventListener("click", () => {
                    // Adjust base duration based on screen size
                    const baseSpeed = window.innerWidth <= 768 ? 1500 : 2000;
                    smoothScrollToTop(baseSpeed);
                });
            }
        });
    </script>
</body>

</html><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/staticPages/layouts/footer.blade.php ENDPATH**/ ?>