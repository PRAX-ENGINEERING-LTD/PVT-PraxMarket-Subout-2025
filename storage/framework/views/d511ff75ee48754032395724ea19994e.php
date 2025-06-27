<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prax Market Features</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header-howitworks {
            text-align: center;
            padding: 20px;
            font-size: 56px;
            font-family: 'Manrope-Semi' !important;
        }

        .feature-card-how {
            background: linear-gradient(155deg, rgb(115 102 255) 0%, rgb(76, 29, 149) 100%);
            color: white;
            border-radius: 15px;
            padding: 24px;
            height: 100%;
            transition: transform 0.6s ease-in-out, opacity 0.6s ease-in-out;
            perspective: 1000px;
            opacity: 0; /* Initial opacity for scroll animation */
        }

        /* Feature card animations */
        .feature-card-how:nth-child(1) {
            transform: translateX(-80px) rotateY(-30deg);
        }

        .feature-card-how:nth-child(1).visible {
            opacity: 1;
            transform: translateX(0) rotateY(0);
        }

        .feature-card-how:nth-child(2) {
            transform: scale(0.8);
        }

        .feature-card-how:nth-child(2).visible {
            opacity: 1;
            transform: scale(1);
        }

        .feature-card-how:nth-child(3) {
            transform: translateX(80px) rotateY(30deg);
        }

        .feature-card-how:nth-child(3).visible {
            opacity: 1;
            transform: translateX(0) rotateY(0);
        }

        .feature-card-how:nth-child(4) {
            transform: translateX(-80px) rotateY(-30deg);
        }

        .feature-card-how:nth-child(4).visible {
            opacity: 1;
            transform: translateX(0) rotateY(0);
        }

        .feature-card-how:nth-child(5) {
            transform: scale(0.8);
        }

        .feature-card-how:nth-child(5).visible {
            opacity: 1;
            transform: scale(1);
        }

        .feature-card-how:nth-child(6) {
            transform: translateX(80px) rotateY(30deg);
        }

        .feature-card-how:nth-child(6).visible {
            opacity: 1;
            transform: translateX(0) rotateY(0);
        }

        #particles-how-it {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            pointer-events: none;
        }

        .step-number {
            background-color: white;
            color: black;
            border-radius: 24px;
            width: 48px;
            height: 41px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Manrope-Bold' !important;
            font-weight: bolder;
            margin-right: 10px;
            box-shadow: rgba(196, 181, 253, 0.78) 0.318477px -0.398096px 0.509812px -1px inset, rgba(196, 181, 253, 0.73) 0.965802px -1.20725px 1.54604px -2px inset, rgba(196, 181, 253, 0.61) 2.55306px -3.19133px 4.08689px -3px inset, rgba(196, 181, 253, 0.2) 8px -10px 12.8062px -4px inset;
            font-size: 14px;
        }

        .step-title {
            font-size: 24px;
            font-weight: bold;
            width: 300px;
            font-family: 'Manrope-Semi' !important;
        }

        .card-image-how {
            background-color: white;
            border-radius: 10px;
            margin: 15px 0;
            padding: 10px;
            overflow: hidden;
        }

        .card-image-how img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .description-how {
            font-size: 16px;
            margin-top: 10px;
            font-family: 'Manrope-Medium' !important;
        }

        .howwork-bg {
            background-image: url("<?php echo e(asset('newAssets/img/about/bg1.png')); ?>");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px;
        }

        .btn-service-one {
            box-shadow: rgba(196, 181, 253, 0.78) 0.318477px -0.398096px 0.509812px -1px inset, rgba(196, 181, 253, 0.73) 0.965802px -1.20725px 1.54604px -2px inset, rgba(196, 181, 253, 0.61) 2.55306px -3.19133px 4.08689px -3px inset, rgba(196, 181, 253, 0.2) 8px -10px 12.8062px -4px inset !important;
            font-family: 'Manrope-Medium' !important;
            padding:8px;
            border-radius: 24px;
            border: 1px solid rgb(213, 213, 213);
            font-size: 14px;
            width: 144px;
            background-color: white;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }

        .btn-service-one.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .video-container-frame {
            position: relative;
            height: 748px;
            overflow: hidden;
            background-color: #35216b;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            margin: 0 auto;
        }

        video {
            position: absolute;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 0;
        }

        .content-frame {
            position: relative;
            height: 100%;
            z-index: 1;
        }

        .card-container {
            position: absolute;
            bottom: 60px;
            width: 100%;
            display: flex;
            justify-content: center;
            padding: 0 20px;
        }

        .card-how {
            background-color: #7950dd;
            border: none;
            border-radius: 8px;
            padding: 15px 20px;
            width: auto;
            min-width: 180px;
            margin: 0 10px;
            border: 1px solid #fff;
            position: relative;
            cursor: pointer;
            height: 100%;
        }

        .card-body {
            padding: 10px;
        }

        .card-title-how {
            margin-bottom: 0;
            font-size: 14px;
            font-family: 'Manrope-Bold' !important;
        }

        .unlock-bg {
            background-image: url("<?php echo e(asset('newAssets/img/howitworks/bg.png')); ?>");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px;
        }

        .how-hero-section {
            background-image: url("<?php echo e(asset('newAssets/img/about/bg1.png')); ?>");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 0px 148px;
        }

        .howit-hero-img {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .howit-hero-img img {
            max-width: 100%;
            height: auto;
        }

        .main-title-howit {
            font-size: 56px;
            font-weight: bold;
            line-height: 1.1;
            width: 634px;
            margin-bottom: 2rem;
            font-family: "Manrope-Semi" !important;
        }

        .description-howit {
            font-size: 20px;
            line-height: 1.6;
            font-family: "Manrope-Medium" !important;
        }
        @media (max-width: 425px) {
            .video-container-frame{
                max-height: 500px !important;
            }
            .video-container-frame{
                background-image: url("<?php echo e(asset('newAssets/img/marquee/bg1.png')); ?>") !important;
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;

            }
            .unlock-bg{
                background-image: unset;
            }
        }

        @media (max-width: 768px) {
            .howit-hero-img img{
max-width: 400px;
            }
            .unlock-bg{
                background-image: unset;
            }
            .video-container-frame{
                background-image: url("<?php echo e(asset('newAssets/img/marquee/bg1.png')); ?>") !important;
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;

            }
            .video-container-frame video{
                display: none;
            }
            .video-container-frame{
                max-height: 300px;
            }
            .how-hero-section {
                padding: 30px;
            }

            .main-title-howit {
                font-size: 24px;
                text-align: center !important;
                width: unset;
            }

            .btn-service-one{
width: 130px;
            }
            .description-howit {
                text-align: center;
                font-size: 16px;
            }

            .how-hero-button {
                text-align: center !important;
            }

            .howwork-bg {
                padding: 10px;
            }

            .video-container-frame {
                width: 100%;
                border-radius: 0px;
            }

            .count-bg-one {
                border-radius: 0px !important;
            }

            .header-howitworks {
                font-size: 30px;
            }

            .unlock-bg {
                padding: unset !important;
            }

            .btn-service-one {
                margin-top: 30px;
            }

            .main-unlock {
                font-size: 24px !important;
            }

            .semi-how {
                font-size: 24px !important;
            }

            .step-title {
                font-size: 16px !important;
            }
            .description-how{
                font-size: 16px !important;
            }

            /* Reduce animation intensity for mobile for feature-card-how */
            .feature-card-how:nth-child(1),
            .feature-card-how:nth-child(4) {
                transform: translateX(-40px) rotateY(-15deg);
            }

            .feature-card-how:nth-child(2),
            .feature-card-how:nth-child(5) {
                transform: scale(0.9);
            }

            .feature-card-how:nth-child(3),
            .feature-card-how:nth-child(6) {
                transform: translateX(40px) rotateY(15deg);
            }
        }

        .tooltip-content {
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            width: 280px;
            color: black;
            background-color: white;
            border-radius: 8px;
            padding: 15px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
            z-index: 100;
            text-align: left;
            margin-bottom: 10px;
        }

        .tooltip-content:after {
            content: '';
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            border-width: 10px;
            border-style: solid;
            border-color: white transparent transparent transparent;
        }

        .card-how:hover .tooltip-content {
            opacity: 1;
            visibility: visible;
        }

        .tooltip-content .check-item {
            margin-bottom: 8px;
            font-size: 15px;
            font-family: "Manrope-Medium" !important;
        }

        .tooltip-content .check-item:before {
            content: '✓';
            color: black;
            margin-right: 5px;
            font-weight: bold;
        }

        .main-unlock {
            font-family: "Manrope-Semi" !important;
        }

        .semi-how {
            font-family: "Manrope-Semi" !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid how-hero-section">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="text-start mb-3 how-hero-button">
                        <button class="btn-service-one" style="font-family: 'Manrope-Medium';">
                            <img src="<?php echo e(asset('newAssets/img/homecomponents/circle-help.png')); ?>" loading="lazy" style="margin-right: 10px; margin-top: -3px; width:16px">How it works
                        </button>
                    </div>
                    <h1 class="main-title-howit">
                        Your Smart Solution for <br />
                        Precision Engineering.
                    </h1>
                    <p class="description-howit">
                        At PRAX Market, we're dedicated to transforming the precision engineering industry.
                        Our mission is to create a dynamic marketplace that fosters connections, streamlines
                        processes, and accelerates business success.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="howit-hero-img">
                    <img src="<?php echo e(asset('newAssets/img/howitworks/hero1.png')); ?>" loading="lazy" alt="" class="about-hero-img">
                </div>
            </div>
        </div>
    </div>

    <section class="unlock-bg">
        <div class="text-center">
            <button class="btn-service-one" style="font-family: 'Manrope-Medium';">
                <img src="<?php echo e(asset('newAssets/img/homecomponents/circle-help.png')); ?>" loading="lazy" style="margin-right: 10px; margin-top: -3px; width:16px">How it works
            </button>
        </div>
        <div class="header-howitworks">
            <h1 style="font-size: 56px;" class="main-unlock">Unlock More Benefits <br />
                with PRAX Market</h1>
        </div>

        <div class="video-container-frame">
            <video autoplay muted loop id="myVideo">
                <source src="<?php echo e(asset('newAssets/img/howitworks/Video.mp4')); ?>" loading="lazy" preload="none" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>

            <div class="content-frame">
                <div class="container-fluid">
                    <div id="particles-how-it"></div>
                    <div class="row justify-content-center card-container">
                        <div class="col-lg-2 col-md-5 col-sm-10 mb-3 mx-3">
                            <div class="card-how text-center text-white">
                                <div class="card-body">
                                    <div class="tooltip-content">
                                        <div class="check-item">Premium profiles help you stand out and attract new clients.</div>
                                        <div class="check-item">Showcasing your capabilities on our dashboard increases exposure.</div>
                                        <div class="check-item">Job postings and capacity listings ensure your services get noticed.</div>
                                    </div>
                                    <h5 class="card-title-how">Business Growth & Visibility</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-5 col-sm-10 mb-3 mx-3">
                            <div class="card-how text-center text-white">
                                <div class="card-body">
                                    <div class="tooltip-content">
                                        <div class="check-item"> Access material suppliers, tool manufacturers, and service providers.</div>
                                        <div class="check-item">Get competitive pricing and reliable delivery.</div>
                                        <div class="check-item">Compare suppliers to make the best business decisions.</div>
                                    </div>
                                    <h5 class="card-title-how">Trusted Supplier Network</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-5 col-sm-10 mb-3 mx-3">
                            <div class="card-how text-center text-white">
                                <div class="card-body">
                                    <div class="tooltip-content">
                                        <div class="check-item">Gain visibility for innovative projects and ideas.</div>
                                        <div class="check-item">Connect with investors, clients, and potential collaborators.</div>
                                        <div class="check-item">Reduce the effort needed to promote and fund research initiatives.</div>
                                    </div>
                                    <h5 class="card-title-how">Support for R&D Companies</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-5 col-sm-10 mb-3 mx-3">
                            <div class="card-how text-center text-white">
                                <div class="card-body">
                                    <div class="tooltip-content">
                                        <div class="check-item">Place and track orders with ease.</div>
                                        <div class="check-item">Work with reliable partners for on-time deliveries.</div>
                                        <div class="check-item">Ensure smooth operations with minimal disruptions.</div>
                                    </div>
                                    <h5 class="card-title-how">Effortless Order & Delivery</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid howwork-bg">
        <div class="text-center">
            <button class="btn-service-one" style="font-family: 'Manrope-Medium';">
                <img src="<?php echo e(asset('newAssets/img/homecomponents/circle-help.png')); ?>" loading="lazy" style="margin-right: 10px; margin-top: -3px; width:16px">How it works
            </button>
        </div>
        <div class="header-howitworks">
            <h1 style="font-size: 56px;" class="semi-how">How PRAX Market Works?</h1>
        </div>

        <div class="row g-4">
            <!-- Column 1 -->
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="feature-card-how">
                    <div class="d-flex align-items-center mb-3">
                        <div class="step-number">01</div>
                        <div class="step-title">Create Your Account</div>
                    </div>
                    <div class="card-image-how">
                        <img src="<?php echo e(asset('newAssets/img/howitworks/1.png')); ?>" loading="lazy" alt="" class="">
                    </div>
                    <div class="description-how">
                        Signing up is quick, easy, and free! Simply enter your basic details and unlock access to a thriving marketplace for precision engineering professionals.
                    </div>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="feature-card-how">
                    <div class="d-flex align-items-center mb-3">
                        <div class="step-number">02</div>
                        <div class="step-title">Explore the Marketplace</div>
                    </div>
                    <div class="card-image-how">
                        <img src="<?php echo e(asset('newAssets/img/howitworks/2.png')); ?>" loading="lazy" alt="" class="">
                    </div>
                    <div class="description-how">
                        Discover a dynamic network of manufacturers, suppliers, and customers. Browse company profiles, explore projects, and find the perfect partners to work with.
                    </div>
                </div>
            </div>

            <!-- Column 3 -->
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="feature-card-how">
                    <div class="d-flex align-items-center mb-3">
                        <div class="step-number">03</div>
                        <div class="step-title">Connect & Collaborate</div>
                    </div>
                    <div class="card-image-how">
                        <img src="<?php echo e(asset('newAssets/img/howitworks/3.png')); ?>" loading="lazy" alt="" class="">
                    </div>
                    <div class="description-how">
                        Start meaningful conversations! Reach out to suppliers, manufacturers, or customers to discuss collaborations, job opportunities, or business partnerships.
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 py-5">
            <!-- Column 1 -->
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="feature-card-how">
                    <div class="d-flex align-items-center mb-3">
                        <div class="step-number">04</div>
                        <div class="step-title">Post Jobs or Find Work</div>
                    </div>
                    <div class="card-image-how">
                        <img src="<?php echo e(asset('newAssets/img/howitworks/4.png')); ?>" loading="lazy" alt="" class="">
                    </div>
                    <div class="description-how">
                        Looking for skilled professionals? Post job listings and attract the right talent. Searching for opportunities? Browse projects that match your expertise and take your business forward.
                    </div>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="feature-card-how">
                    <div class="d-flex align-items-center mb-3">
                        <div class="step-number">05</div>
                        <div class="step-title">Order CNC Cutting Tools with Ease</div>
                    </div>
                    <div class="card-image-how">
                        <img src="<?php echo e(asset('newAssets/img/howitworks/5.png')); ?>" loading="lazy" alt="" class="">
                    </div>
                    <div class="description-how">
                        Need high-quality cutting tools? Find trusted suppliers, compare options, and place orders directly—all within the PRAX Market platform.
                    </div>
                </div>
            </div>

            <!-- Column 3 -->
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="feature-card-how">
                    <div class="d-flex align-items-center mb-3">
                        <div class="step-number">06</div>
                        <div class="step-title">Secure Payments & Quality Assurance</div>
                    </div>
                    <div class="card-image-how">
                        <img src="<?php echo e(asset('newAssets/img/howitworks/6.png')); ?>" loading="lazy" alt="" class="">
                    </div>
                    <div class="description-how">
                        Your transactions are protected. Payments are held securely until you approve the quality of received parts or services—ensuring trust and satisfaction.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('staticPages.addedContents.join', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Only initialize particles for the marquee section
            if (document.getElementById('particles-how-it')) {
                particlesJS('particles-how-it', {
                    "particles": {
                        "number": {
                            "value": 50,
                            "density": {
                                "enable": true,
                                "value_area": 800
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
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Button scroll animation
            const buttons = document.querySelectorAll(".btn-service-one");

            function checkScroll() {
                buttons.forEach((button) => {
                    const buttonPosition = button.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;

                    if (buttonPosition < windowHeight - 50 && buttonPosition > 0) {
                        button.classList.add("visible");
                    } else {
                        button.classList.remove("visible");
                    }
                });
            }

            window.addEventListener("scroll", checkScroll);
            checkScroll();
        });

        // Scroll animation for feature-card-how elements
        document.addEventListener("DOMContentLoaded", function() {
            const cards = document.querySelectorAll(".feature-card-how");

            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry, index) => {
                        if (entry.isIntersecting) {
                            setTimeout(() => {
                                entry.target.classList.add("visible");
                            }, index * 300);
                        } else {
                            entry.target.classList.remove("visible");
                        }
                    });
                },
                {
                    threshold: 0.3,
                    rootMargin: "0px 0px -50px 0px"
                }
            );

            cards.forEach((card) => {
                observer.observe(card);
            });
        });
    </script>
</body>

</html><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/staticPages/howItWorks/howItWorksComponent/component.blade.php ENDPATH**/ ?>