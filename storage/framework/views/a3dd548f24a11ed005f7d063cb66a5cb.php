<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Counter Animation with Particles</title>
    <!-- Include particles.js library -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <style>
        .count-bg {
            background-image: url("<?php echo e(asset('newAssets/img/marquee/bg1.png')); ?>");
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            pointer-events: none;
        }

        .numbers-section {
            position: relative;
            z-index: 1;
            padding: 0px !important;
        }

        .title-count {
            font-size: 56px;
            font-family: "Manrope-Semi" !important;
            background: linear-gradient(290deg, rgb(245, 243, 255) 0%, rgb(196, 181, 253) 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .description-count {
            font-size: 20px;
            font-family: "Manrope-Medium";
            width: 703px;
            padding-bottom: 56px;
            max-width: 90%;
            margin: 0 auto;
            color: #fff;
        }

        .number-card-count {
            background: linear-gradient(152deg, #ede9fe 0%, #c4b5fd 100%);
            height: 250px;
            padding: 0px 24px 0px 24px;
            margin: 20px 0;
            border: 1px solid #b79df0;
            border-radius: 0px;
            transition: transform 0.6s ease-in-out, opacity 0.6s ease-in-out, box-shadow 0.3s ease-in-out;
            position: relative;
            z-index: 1;
            text-align: start;
            display: flex;
            flex-direction: column;
            justify-content: center;
            perspective: 1000px;
            opacity: 0; /* Initial opacity for scroll animation */
        }

        /* First card: Slide in from left with rotateY */
        .number-card-count:nth-child(1) {
            transform: translateX(-80px) rotateY(-30deg);
        }

        .number-card-count:nth-child(1).visible {
            opacity: 1;
            transform: translateX(0) rotateY(0);
        }

        /* Second card: Zoom in from scaled down */
        .number-card-count:nth-child(2) {
            transform: scale(0.8);
        }

        .number-card-count:nth-child(2).visible {
            opacity: 1;
            transform: scale(1);
        }

        /* Third card: Slide in from right with rotateY */
        .number-card-count:nth-child(3) {
            transform: translateX(80px) rotateY(30deg);
        }

        .number-card-count:nth-child(3).visible {
            opacity: 1;
            transform: translateX(0) rotateY(0);
        }

        /* Fourth card: Zoom in from scaled down (repeating second animation) */
        .number-card-count:nth-child(4) {
            transform: scale(0.8);
        }

        .number-card-count:nth-child(4).visible {
            opacity: 1;
            transform: scale(1);
        }

        .number-card-count:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(139, 92, 246, 0.3);
        }

        .counter-count {
            font-size: 56px;
            font-weight: bold;
            font-family: "Manrope-Bold" !important;
            color: #7366FF;
            margin-bottom: 24px;
        }

        .testimonials-btn2-count {
            display: flex;
            align-items: center;
            gap: 8px;
            border: 1px solid rgb(167, 139, 250);
            border-radius: 30px;
            backdrop-filter: blur(10px);
            color: #fff;
            font-size: 14px;
            font-family: "Manrope-Medium" !important;
            cursor: pointer;
            box-shadow: inset .3184767494094558px -.39809593676181976px .5098115483006286px -1px #a78bfac7, inset .9658024572418071px -1.207253071552259px 1.5460382806343045px -2px #a78bfaba, inset 2.5530614085937846px -3.1913267607422307px 4.086892346255328px -3px #a78bfa9c, inset 8px -10px 12.806248474865697px -4px #a78bfa33 !important;
            transition: opacity 0.6s ease-in-out, transform 0.6s ease-in-out;
            width: 120px;
            margin: 0 auto;
            padding: 0px 16px 0px 16px;
            height: 40px;
            opacity: 0;
            transform: translateY(30px);
            will-change: opacity, transform;
        }

        .testimonials-btn2-count {
            opacity: 0;
            /* Initially hidden */
            transform: translateY(20px);
            /* Move slightly down */
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }

        .testimonials-btn2-count.visible {
            opacity: 1;
            /* Fully visible */
            transform: translateY(0);
        }
        
        .number-card-count h4 {
            font-family: "Manrope-Bold" !important;
            font-size: 20px;
            color: #7366FF;
            margin-bottom: 8px;
        }

        .number-card-count p {
            letter-spacing: 0.03rem;
            font-size: 18px;
            font-family: "Manrope-Medium" !important;
        }

        @media (max-width: 768px) {
            .title-count {
                font-size: 24px;
            }
            .counter-count{
               font-size: 35px;
            }
            .number-card-count p{
               font-size: 16px;
            }

            .description-count {
                font-size: 16px;
            }

            /* Reduce animation intensity for mobile */
            .number-card-count:nth-child(1) {
                transform: translateX(-40px) rotateY(-15deg);
            }

            .number-card-count:nth-child(2) {
                transform: scale(0.9);
            }

            .number-card-count:nth-child(3) {
                transform: translateX(40px) rotateY(15deg);
            }

            .number-card-count:nth-child(4) {
                transform: scale(0.9);
            }
        }
        .home-content-count{
            padding: 0px 40px 0px 40px;
        }
    </style>

    <!-- Include jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div class="container-fluid count-bg">
        <!-- Particles container -->
        <div id="particles-js"></div>

        <!-- Content (above particles) -->
        <div class="numbers-section">
            <div class="testimonials-btn2-count">
                <span class="testi">   <img src="<?php echo e(asset('newAssets/img/marquee/12.png')); ?>" loading="lazy" style="width: 16px;margin-top: -2px;"> <span style="margin-left: 5px;">Numbers</span></span>
            </div>

            <div style="text-align: center;">
                <h2 class="title-count">PRAX Market by the Numbers.</h2>
                <p class="description-count">
                    At PRAX Market, we believe in results. Our growing community of precision engineering professionals, trusted suppliers, and industry leaders is transforming the way business is done.
                </p>
            </div>

            <div class="row home-content-count moblie-view-home">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="number-card-count">
                        <h3 class="counter-count" data-target="1000+">0</h3>
                        <h4>Seamless Connections</h4>
                        <p>Effortlessly link with verified suppliers and customers to grow your business.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="number-card-count">
                        <h3 class="counter-count" data-target="50+">0</h3>
                        <h4>All-in-One Services</h4>
                        <p>Access everything from CNC machining to finance and delivery in one platform.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="number-card-count">
                        <h3 class="counter-count" data-target="256k">0</h3>
                        <h4>Precision Delivered</h4>
                        <p>High-quality parts and products supplied on time, every time.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="number-card-count">
                        <h3 class="counter-count" data-target="99%">0</h3>
                        <h4>Customer Satisfaction</h4>
                        <p>Trusted by industry professionals for reliability and excellence.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        if (document.getElementById('particles-js')) {
            particlesJS('particles-js', {
                "particles": {
                    "number": {
                        "value": 100,
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

        // Counter animation
        $(document).ready(function() {
            let animationActive = false;
            let isInView = false;
            const $section = $('.count-bg');
            const $counters = $('.counter-count');

            // Reset counters function
            function resetCounters() {
                $counters.text('0');
            }

            // Check if element is in viewport
            function isElementInViewport(el) {
                const $el = $(el);
                const windowHeight = $(window).height();
                const rect = $el[0].getBoundingClientRect();

                return (
                    rect.top <= windowHeight &&
                    rect.bottom >= 0
                );
            }

            // Animate counters
            function animateCounters() {
                $counters.each(function() {
                    const $counter = $(this);
                    const target = $counter.attr('data-target');
                    const finalTarget = parseInt(target.replace(/\D/g, ''));

                    let increment = Math.ceil(finalTarget / 200);
                    let current = 0;

                    const timer = setInterval(function() {
                        if (current < finalTarget) {
                            current += increment;
                            $counter.text(current);
                        } else {
                            clearInterval(timer);
                            $counter.text(target); // Add symbols back
                        }
                    }, 20);
                });

                setTimeout(function() {
                    animationActive = false;
                }, 4000);
            }

            // Handle scroll event
            $(window).on('scroll', function() {
                const currentlyInView = isElementInViewport($section);

                if (currentlyInView && !isInView && !animationActive) {
                    isInView = true;
                    animationActive = true;
                    animateCounters();
                }

                if (!currentlyInView && isInView) {
                    isInView = false;
                    resetCounters();
                }
            });

            // Check on page load
            if (isElementInViewport($section)) {
                isInView = true;
                animationActive = true;
                animateCounters();
            }
        });

        // Button scroll animation


        // Scroll animation for number cards
        document.addEventListener("DOMContentLoaded", function() {
            const cards = document.querySelectorAll(".number-card-count");

            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry, index) => {
                        if (entry.isIntersecting) {
                            setTimeout(() => {
                                entry.target.classList.add("visible");
                            }, index * 300); // 300ms delay for each card
                        } else {
                            entry.target.classList.remove("visible");
                        }
                    });
                },
                {
                    threshold: 0.3, // Trigger when 30% of card is visible
                    rootMargin: "0px 0px -50px 0px" // Trigger slightly early
                }
            );

            cards.forEach((card) => {
                observer.observe(card);
            });
        });
    </script>


<script>


document.addEventListener("DOMContentLoaded", function() {
            const buttons = document.querySelectorAll(".testimonials-btn2-count");

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

</html><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/staticPages/addedContents/countnumber.blade.php ENDPATH**/ ?>