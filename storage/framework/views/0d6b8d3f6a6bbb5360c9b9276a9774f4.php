<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Prax</title>
    <!-- Include particles.js library -->
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <style>
        .count-bg-one {
            background-image: url("<?php echo e(asset('newAssets/img/marquee/bg1.png')); ?>");
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
            /* padding: 20px 0; */
            position: relative;
            overflow: hidden;
            width: 80%;
            /* margin-bottom: 60px; */
            border-radius: 16px;
            /* Important to avoid overflow */

        }

        #particles-js-one {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            pointer-events: none;
            /* Add this so clicks pass through */
        }

        .numbers-section-join {
            position: relative;
            z-index: 1;
            padding: 80px 0 !important;
        }

        .title-count-join {
            font-size: 56px;
            font-family: "Manrope-Semi" !important;
            background: linear-gradient(290deg, rgb(245, 243, 255) 0%, rgb(196, 181, 253) 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 16px;
            margin-top: 16px;
        }

        .description-count-join {
            font-size: 20px;
            font-family: "Manrope-Light", sans-serif;
            width: 698px;
            max-width: 90%;
            margin: 0 auto;
            color: #fff;
        }

        .number-card {
            background: linear-gradient(152deg, #ede9fe 0%, #c4b5fd 100%);
            height: 250px;
            padding: 40px;
            margin: 20px 0;
            border: 1px solid #b79df0;
            border-radius: 10px;
            transition: 0.3s;
            position: relative;
            z-index: 1;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .number-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(139, 92, 246, 0.3);
        }

        .counter {
            font-size: 40px;
            font-weight: bold;
            color: rgb(124, 58, 237);
            margin-bottom: 15px;
        }

        .testimonials-btn2-one {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 9px 15px;
            border: 1px solid rgb(167, 139, 250);
            border-radius: 30px;
            backdrop-filter: blur(10px);
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            box-shadow: inset .3184767494094558px -.39809593676181976px .5098115483006286px -1px #a78bfac7, inset .9658024572418071px -1.207253071552259px 1.5460382806343045px -2px #a78bfaba, inset 2.5530614085937846px -3.1913267607422307px 4.086892346255328px -3px #a78bfa9c, inset 8px -10px 12.806248474865697px -4px #a78bfa33 !important;
            transition: 0.3sease-in-out;
            width: 182px;
            margin: 0 auto 20px;
        }

        .testimonials-btn2-one {
            opacity: 0;
            /* Initially hidden */
            transform: translateY(20px);
            /* Move slightly down */
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }

        .testimonials-btn2-one.visible {
            opacity: 1;
            /* Fully visible */
            transform: translateY(0);
        }



        /* .testimonials-btn2-one:hover {
            background: rgba(139, 92, 246, 0.2);
            box-shadow: 0 0 10px #8B5CF6;
        } */

        .number-card h4 {
            font-family: "Manrope-Bold", sans-serif;
            font-size: 18px;
            color: rgb(124, 58, 237);
            margin-bottom: 10px;
        }

        .number-card p {
            color: #4B5563;
            font-size: 16px;
            font-family: "Manrope-Regular", sans-serif;
        }

        .testi {
            white-space: nowrap;
        }

        .button-join {
            margin-top: 30px;
        }

        .button-join button {
            width: 142px;
            height: 54px;
            border: none;
            background-color: #563EE0;
            border-radius: 8px;
            font-family: "Manrope-Medium", sans-serif !important;
            color: #fff;
            font-size: 18px;

        }

        @media (max-width: 768px) {

            .count-bg-one {
                width: 100% !important;
                border-radius: 0px !important;
            }

            .title-count-join {
                font-size: 24px;
            }

            .description-count-join {
                font-size: 16px;
            }
            .testimonials-btn2-one{
               width: 178px;
            }
        }

        .join-bg {
            padding: 60px 0px;
            background-color: #f5f5f5;
        }

        .img-join {
            max-width: 20px;
            margin-left: 6px;
            margin-top: -2px;
        }
    </style>

    <!-- Include jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <section class="join-bg">
        <div class="container-fluid count-bg-one">
            <!-- Particles container -->
            <div id="particles-js-one"></div>

            <!-- Content (above particles) -->
            <div class="numbers-section-join">
                <div class="testimonials-btn2-one">
                    <span class="testi"> <span><img src="<?php echo e(asset('newAssets/img/home/icons/join.png')); ?>" loading="lazy" style="width: 19px;margin-top: -2px;"></span> <span style="margin-left: 5px;">Join PRAX Market</span></span>
                </div>

                <div style="text-align: center;">
                    <h2 class="title-count-join">Join PRAX Market Today.</h2>
                    <p class="description-count-join">
                        Unlock your potential in the precision engineering industry. Experience seamless collaboration, endless opportunities, and streamlined operations—all in one place.
                    </p>
                    <div class="button-join">
                        <a href="<?php echo e(route('signup')); ?>">
                            <button>Join Now <img src="<?php echo e(asset('newAssets/img/homecomponents/arrow.png')); ?>" style="width:16px;" loading="lazy" alt="" class="img-join"></button>
                        </a>

                    </div>

                </div>


            </div>
        </div>
    </section>


    <script>
        if (document.getElementById('particles-js-one')) {
            particlesJS('particles-js-one', {
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
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const buttons = document.querySelectorAll(".testimonials-btn2-one");

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

</html><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/staticPages/addedContents/join.blade.php ENDPATH**/ ?>