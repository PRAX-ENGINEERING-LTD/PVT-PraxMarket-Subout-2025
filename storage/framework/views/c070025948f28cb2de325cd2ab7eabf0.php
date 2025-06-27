<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continuous Marquee Loop</title>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <style>
        .marquee-bg {
            position: relative;
            /* Add this */
            background-image: url("<?php echo e(asset('newAssets/img/marquee/bg1.png')); ?>");
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
            padding: 80px 0px;
            overflow: hidden;
            /* Add this to contain the particles */
        }

        #particles-marquee {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            pointer-events: none;
            /* Add this so clicks pass through */
        }

        .marquee-cont {
            text-align: center;
            padding: 15px;
            color: #fff;
        }

        .marquee-cont h1 {
            font-size: 56px;
            font-family: "Manrope-Semi" !important;
            background: linear-gradient(290deg, rgb(245, 243, 255) 0%, rgb(196, 181, 253) 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

        }

        .marquee-cont p {
            font-size: 20px;
            font-family: "Manrope-Medium" !important;
            width: 592px;
            margin: 0 auto;

        }


        .testimonials-btn {
            display: flex
;
    align-items: center;
    gap: 8px;
    border: 1px solid rgb(167, 139, 250);
    border-radius: 30px;
    /* background: rgba(255, 255, 255, 0.1); */
    backdrop-filter: blur(10px);
    color: #fff;
    font-size: 14px;
    font-family: "Manrope-Medium" !important;
    cursor: pointer;
    box-shadow: inset .3184767494094558px -.39809593676181976px .5098115483006286px -1px #a78bfac7, inset .9658024572418071px -1.207253071552259px 1.5460382806343045px -2px #a78bfaba, inset 2.5530614085937846px -3.1913267607422307px 4.086892346255328px -3px #a78bfa9c, inset 8px -10px 12.806248474865697px -4px #a78bfa33 !important;
    transition: 0.3sease -in-out;
    width: 146px;
    margin: 0 auto;
    padding: 0px 16px 0px 16px;
    height: 40px;
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.6sease -in-out, transform 0.6sease -in-out;
    will-change: opacity, transform;
        }

        .testimonials-btn {
            opacity: 0;
            /* Initially hidden */
            transform: translateY(20px);
            /* Move slightly down */
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }

        .testimonials-btn.visible {
            opacity: 1;
            /* Fully visible */
            transform: translateY(0);
        }

        .marquee-wrapper-com {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
            padding: 20px 0;
            border-radius: 10px;
            position: relative;
            display: flex;
        }

        .marquee {
            display: flex;
            gap: 50px;
            animation: scroll 30s linear infinite;
        }

        /* Clone for seamless loop */
        .marquee-clone {
            display: flex;
            gap: 50px;
            animation: scroll2 50s linear infinite;
            /* Matching animation time */
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        @keyframes scroll2 {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(0);
            }
        }

        .marquee-item {
            display: inline-block;
            margin: 0;
            padding: 24px;
            background-image: url("<?php echo e(asset('newAssets/img/marquee/bg2.png')); ?>");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 400px;
            text-align: left;
            flex-shrink: 0;
        }

        .marquee-item b {
            color: #EEC643;
             font-size: 16px;
             font-family: "Manrope-Bold" !important;
             font-style: italic;
             padding-left: 10px;
        }

        /* .marquee-item:hover {
            transform: scale(1.05);
        } */

        .marquee-wrapper-com:hover .marquee {
            animation-play-state: paused;
        }


        .img-with-p p {
            margin-bottom: 16px;
            margin-top: 16px;
            color: #fff;
            font-size: 18px;
            white-space: break-spaces;
            font-family: 'Manrope-Medium' !important;
        }

        /* .img-with-p {
            padding: 15px;
        } */

        .testi {
            font-size: 15px;
            color: #fff;
            font-family: "Manrope-Medium" !important;
        }

        @media (max-width: 768px) {
            .marquee-cont p {
                width: unset;
                font-size: 16px;
                padding: 0px 30px;
            }

            .marquee-cont h1 {
                font-size: 24px;
            }
            .img-with-p p{
               font-size: 16px;
            }
        }
    </style>

</head>

<body>

    <div class="container-fluid marquee-bg">
        <div id="particles-marquee"></div>
        <div class="testimonials-btn">
            <img src="<?php echo e(asset('newAssets/img/home/testi.png')); ?>" loading="lazy" style="width: 16px;margin-top: -2px;"><span class="testi">Testimonials</span></img>
        </div>
        <div class="marquee-cont">
            <h1>What Our Clients Say</h1>
            <p>Join thousands of precision engineering professionals who trust PRAX Market to simplify their work and grow their business. Here's what they have to say:</p>
        </div>

        <div class="marquee-wrapper-com">
            <div class="marquee">
                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/men/1.jpg" width="48" style="border-radius:50%" />
                    <b> Nova Robotics Inc.</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>

                </div>

                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/women/2.jpg" loading="lazy" width="50" style="border-radius:50%" />
                    <b> TechCorp</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>
                </div>

                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/men/3.jpg" width="50" style="border-radius:50%" />
                    <b> Global Solutions</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>
                </div>
                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/men/1.jpg" loading="lazy" width="50" style="border-radius:50%" />
                    <b> Nova Robotics Inc.</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>
                </div>

                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/women/2.jpg" loading="lazy" width="50" style="border-radius:50%" />
                    <b> TechCorp</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>
                </div>

                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/men/3.jpg" loading="lazy" width="50" style="border-radius:50%" />
                    <b> Global Solutions</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>
                </div>
                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/men/1.jpg" loading="lazy" width="50" style="border-radius:50%" />
                    <b> Nova Robotics Inc.</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>
                </div>

                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/women/2.jpg" loading="lazy" width="50" style="border-radius:50%" />
                    <b> TechCorp</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>
                </div>

                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/men/3.jpg" loading="lazy" width="50" style="border-radius:50%" />
                    <b> Global Solutions</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>
                </div>
            </div>
            <div class="marquee-clone">
                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/men/1.jpg" width="48" style="border-radius:50%" />
                    <b> Nova Robotics Inc.</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>

                </div>

                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/women/2.jpg" loading="lazy" width="50" style="border-radius:50%" />
                    <b> TechCorp</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>
                </div>

                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/men/3.jpg" width="50" style="border-radius:50%" />
                    <b> Global Solutions</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>
                </div>
                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/men/1.jpg" loading="lazy" width="50" style="border-radius:50%" />
                    <b> Nova Robotics Inc.</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>
                </div>

                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/women/2.jpg" loading="lazy" width="50" style="border-radius:50%" />
                    <b> TechCorp</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>
                </div>

                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/men/3.jpg" loading="lazy" width="50" style="border-radius:50%" />
                    <b> Global Solutions</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>
                </div>
                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/men/1.jpg" loading="lazy" width="50" style="border-radius:50%" />
                    <b> Nova Robotics Inc.</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>
                </div>

                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/women/2.jpg" width="50" loading="lazy" style="border-radius:50%" />
                    <b> TechCorp</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>
                </div>

                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/men/3.jpg" loading="lazy" width="50" style="border-radius:50%" />
                    <b> Global Solutions</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>
                </div>
                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/men/3.jpg" loading="lazy" width="50" style="border-radius:50%" />
                    <b> Global Solutions</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>
                </div>
                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/men/1.jpg" width="50" loading="lazy" style="border-radius:50%" />
                    <b> Nova Robotics Inc.</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>
                </div>

                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/women/2.jpg" width="50" loading="lazy" style="border-radius:50%" />
                    <b> TechCorp</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>
                </div>

                <div class="marquee-item">
                    <img src="https://randomuser.me/api/portraits/men/3.jpg" loading="lazy" width="50" style="border-radius:50%" />
                    <b> Global Solutions</b>
                    <div class="img-with-p">

                        <p>Their innovative solutions and precision craftsmanship set the gold standard.</p>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                        <img src="<?php echo e(asset('newAssets/img/marquee/star.png')); ?>" loading="lazy" style="width: 19px;"></img>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Clone the marquee content for seamless loop
            const originalMarquee = document.querySelector('.marquee');
            const clone = originalMarquee.cloneNode(true);
            clone.classList.remove('marquee');
            clone.classList.add('marquee-clone');
            document.querySelector('.marquee-wrapper-com').appendChild(clone);
        });

        if (document.getElementById('particles-marquee')) {
            particlesJS('particles-marquee', {
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
    </script>

<script>


document.addEventListener("DOMContentLoaded", function() {
            const buttons = document.querySelectorAll(".testimonials-btn");

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

</html><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/staticPages/addedContents/marquee.blade.php ENDPATH**/ ?>