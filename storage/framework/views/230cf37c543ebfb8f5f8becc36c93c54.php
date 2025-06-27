<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engineering Services Carousel</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header-section {
            text-align: center;
            padding: 20px 0px 30px 0px;
            max-width: 800px;
            margin: 0 auto;
        }

        .header-section h1 {
            font-size: 56px;
            font-family: 'Manrope-Semi' !important;
            margin-bottom: 0.5rem;
        }

        .header-section p {
            font-size: 20px;
            font-family: 'Manrope-Medium' !important;
            line-height: 1.5;
            width: 513px;
            margin: 0 auto;
        }

        .services-container {
            overflow: hidden;
            position: relative;
            margin: 0px 80px;
        }

        .services-track {
            display: flex;
            animation: scroll 80s linear infinite;
            width: max-content; /* Ensure track is wide enough for all cards */
        }

        /* .services-container:hover .services-track {
            animation-play-state: paused;
        } */

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-33.33%); /* Move by 1/3 since we triple the content */
            }
        }

        .service-card {
            flex: 0 0 auto;
            width: 300px;
            margin-right: 40px;
            text-align: left;
            position: relative;
            overflow: hidden;
            height: 500px;
            transition: all 0.3s ease;
        }

        .service-card-img {
            width: 100%;
            height: 291px;
            object-fit: contain;
            margin-bottom: 20px;
            border-radius: 0px;
            background-color: #fff;
            transition: all 0.5s ease;
            /* padding: 10px; */
        }

        .service-badge {
            display: flex;
            align-items: center;
            background-color: #7366FF;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.9rem;
            margin-bottom: 10px;
            width: fit-content;
            transition: all 0.5s ease;
            position: relative;
            font-size: 16px;
            font-family: "Manrope-Medium" !important;
            z-index: 2;
        }

        .brief-case-img {
            width: 18px;
            height: 18px;
            margin-right: 5px;
        }

        .service-title {
            font-family: 'Manrope-Bold' !important;
            font-size: 20px;
            color: black;
            margin-bottom: 12px;
            transition: all 0.5s ease;
            position: relative;
            z-index: 1;
        }

        .service-description {
            font-size: 16px;
            color: #737373;
            font-family: 'Manrope-Regular' !important;
            line-height: 1.4;
            transition: all 0.5s ease;
            position: relative;
            z-index: 0;
        }

        .service-card:hover .service-description {
            transform: translateY(-70px);
            opacity: 0.9;
        }

        .service-card:hover .service-title {
            transform: translateY(40px);
        }

        .service-card:hover .service-badge {
            transform: translateY(110px);
        }

        @media (max-width: 768px) {
            .header-section p {
                width: unset;
                font-size: 16px;
                padding: 0px 30px;
            }
            .header-section h1 {
                font-size: 24px;
            }
            .services-container {
                margin: 0px !important;
            }
        }

        .btn-service-marquee {
            box-shadow: inset .3184767494094558px -.39809593676181976px .5098115483006286px -1px #c4b5fdc7, 
                        inset .9658024572418071px -1.207253071552259px 1.5460382806343045px -2px #c4b5fdba, 
                        inset 2.5530614085937846px -3.1913267607422307px 4.086892346255328px -3px #c4b5fd9c, 
                        inset 8px -10px 12.806248474865697px -4px #c4b5fd33 !important;
            font-family: 'Manrope-Medium' !important;
            padding: 10px;
            border-radius: 24px;
            border: 1px solid rgb(213, 213, 213) !important;
            font-size: 14px;
            width: 168px;
            background-color: #fff;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }

        .btn-service-marquee.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .explore-bg {
            background-image: url("<?php echo e(asset('newAssets/img/home/explore1.png')); ?>");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px;
        }
    </style>
</head>
<body>
    <div class="container-fluid explore-bg">
        <div class="text-center">
            <button class="btn-service-marquee" style="font-family: 'Manrope-Medium';">
                <img src="<?php echo e(asset('newAssets/img/home/icons/search.png')); ?>" style="margin-right: 10px; margin-top: -3px; width:16px" loading="lazy">Explore Services
            </button>
        </div>
        <div class="header-section">
            <h1>Comprehensive Services<br>Tailored for You.</h1>
            <p>At PRAX Market, we provide a full suite of services designed to meet all your precision engineering needs:</p>
        </div>

        <div class="services-container">
            <div class="services-track" id="services-track">
                <!-- Service 1 -->
                <div class="service-card">
                    <img class="service-card-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Images/img1/1.png')); ?>" alt="CNC Machining Services">
                    <div class="service-badge"> <img class="brief-case-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Icons/briefcase-business.png')); ?>" alt="R&D" loading="lazy">90+</div>
                    <h3 class="service-title">CNC Machining Services</h3>
                    <p class="service-description">Get top-tier CNC machining services with high precision and efficiency, ensuring flawless parts every time.</p>
                </div>
                <!-- Service 2 -->
                <div class="service-card">
                    <img class="service-card-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Images/img1/2.png')); ?>" alt="Sheet Metal Fabrication">
                    <div class="service-badge"> <img class="brief-case-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Icons/briefcase-business.png')); ?>" alt="R&D" loading="lazy">50+</div>
                    <h3 class="service-title">Sheet Metal Fabrication</h3>
                    <p class="service-description">Find expert sheet metal fabrication services for durable, high-quality components.</p>
                </div>
                <!-- Service 3 -->
                <div class="service-card">
                    <img class="service-card-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Images/img1/3.png')); ?>" alt="Surface Treatment & Finishing">
                    <div class="service-badge"> <img class="brief-case-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Icons/briefcase-business.png')); ?>" alt="R&D">100+</div>
                    <h3 class="service-title">Surface Treatment & Finishing</h3>
                    <p class="service-description">Enhance the durability and performance of your parts with industry-leading surface treatment solutions.</p>
                </div>
                <!-- Service 4 -->
                <div class="service-card">
                    <img class="service-card-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Images/img1/4.png')); ?>" alt="Metrology & Inspection Services">
                    <div class="service-badge"> <img class="brief-case-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Icons/briefcase-business.png')); ?>" alt="R&D">80+</div>
                    <h3 class="service-title">Metrology & Inspection Services</h3>
                    <p class="service-description">Achieve precision with advanced metrology and inspection services for quality assurance.</p>
                </div>
                <!-- Service 5 -->
                <div class="service-card">
                    <img class="service-card-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Images/img1/5.png')); ?>" alt="Materials Suppliers">
                    <div class="service-badge"> <img class="brief-case-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Icons/briefcase-business.png')); ?>" alt="R&D">70+</div>
                    <h3 class="service-title">Materials Suppliers</h3>
                    <p class="service-description">Find and purchase the best tools, equipment, and materials—all in one convenient marketplace.</p>
                </div>
                <!-- Service 6 -->
                <div class="service-card">
                    <img class="service-card-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Images/img1/6.png')); ?>" alt="CNC Cutting Tool Suppliers">
                    <div class="service-badge"> <img class="brief-case-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Icons/briefcase-business.png')); ?>" alt="R&D">90+</div>
                    <h3 class="service-title">CNC Cutting Tool Suppliers</h3>
                    <p class="service-description">Access a wide range of cutting tools to optimise your machining and production efficiency.</p>
                </div>
                <!-- Service 7 -->
                <div class="service-card">
                    <img class="service-card-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Images/img1/7.png')); ?>" alt="Precision Grinding Services">
                    <div class="service-badge"><img class="brief-case-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Icons/briefcase-business.png')); ?>" alt="R&D">50+</div>
                    <h3 class="service-title">Precision Grinding Services</h3>
                    <p class="service-description">Enhance accuracy with advanced precision grinding services for superior quality and performance.</p>
                </div>
                <!-- Service 8 -->
                <div class="service-card">
                    <img class="service-card-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Images/img1/8.png')); ?>" alt="Logistics & Supply Chain Support">
                    <div class="service-badge"> <img class="brief-case-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Icons/briefcase-business.png')); ?>" alt="R&D">100+</div>
                    <h3 class="service-title">Logistics & Supply Chain Support</h3>
                    <p class="service-description">Enjoy seamless logistics and delivery solutions to get your parts and products on time, every time.</p>
                </div>
                <!-- Service 9 -->
                <div class="service-card">
                    <img class="service-card-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Images/img1/9.png')); ?>" alt="3D Printing Services">
                    <div class="service-badge"> <img class="brief-case-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Icons/briefcase-business.png')); ?>" alt="R&D">70+</div>
                    <h3 class="service-title">3D Printing Services</h3>
                    <p class="service-description">Transform ideas with advanced 3D printing services for rapid prototyping and production.</p>
                </div>
                <!-- Service 10 -->
                <div class="service-card">
                    <img class="service-card-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Images/img1/10.png')); ?>" alt="Technology & R&D">
                    <div class="service-badge"> <img class="brief-case-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Icons/briefcase-business.png')); ?>" alt="R&D">80+</div>
                    <h3 class="service-title">Technology & R&D</h3>
                    <p class="service-description">Accelerate innovation with specialised research and development support to bring your ideas to life.</p>
                </div>
                <!-- Service 11 -->
                <div class="service-card">
                    <img class="service-card-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Images/img1/11.png')); ?>" alt="Machine & Equipment Suppliers">
                    <div class="service-badge"> <img class="brief-case-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Icons/briefcase-business.png')); ?>" alt="R&D">90+</div>
                    <h3 class="service-title">Machine & Equipment Suppliers</h3>
                    <p class="service-description">Get the latest and most advanced machinery from leading suppliers to boost your production capacity.</p>
                </div>
                <!-- Service 12 -->
                <div class="service-card">
                    <img class="service-card-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Images/img1/12.png')); ?>" alt="Finance & Business Services">
                    <div class="service-badge"> <img class="brief-case-img" src="<?php echo e(asset('newAssets/img/homecomponents/Services/Icons/briefcase-business.png')); ?>" alt="R&D">90+</div>
                    <h3 class="service-title">Finance & Business Services</h3>
                    <p class="service-description">Empower growth with advanced finance and business services for strategic success and prosperity.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const track = document.querySelector('#services-track');
            const originalCards = track.innerHTML;
            track.innerHTML = originalCards + originalCards + originalCards; // Triple the content for seamless looping

            const buttons = document.querySelectorAll(".btn-service-marquee");

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
    </script>
</body>
</html><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/staticPages/home/homeComponents/cardmarquee.blade.php ENDPATH**/ ?>