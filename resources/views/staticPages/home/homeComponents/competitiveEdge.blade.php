<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Layout</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <style>
        .section {
            display: flex;
            align-items: center;
            border-radius: 10px 0 0 10px;
            overflow: hidden;
            margin-bottom: 20px;
            height: 150px;
        }

        .content {
            flex-grow: 1;
            padding: 8px;
            color: #000000;
            position: relative;
            height: 100%;
        }

        ul {
            list-style: none;
            padding-left: 0 !important;
        }

        ul li {
            position: relative;
            padding-left: 20px;
            font-size: 16px;
            line-height: 1.4;
            font-family: "Manrope-medium" !important;
        }

        ul li:before {
            content: "•";
            color: #000000;
            position: absolute;
            left: 0;
        }

        .first-head-1 {
            background-color: #fff;
            height: 113px;
            position: relative;
        }

        .first-head-2 {
            background-color: #fff;
            margin-top: 10px !important;
            height: 113px;
            position: relative;
        }

        .first-head-3 {
            background-color: #fff;
            margin-top: 10px !important;
            height: 113px;
            position: relative;
        }

        .first-head-4 {
            background-color: #fff;
            margin-top: 10px !important;
            height: 113px;
            position: relative;
        }

        .first-head-5 {
            background-color: #fff;
            margin-top: 10px !important;
            height: 113px;
            position: relative;
        }

        .head-1-smart {
            background-image: url("{{ asset('newAssets/img/homecomponents/competitiveedge/1.png') }}");
            background-size: cover;
            background-position: center;
            height: 136px;
            background-repeat: no-repeat;
            /* background-color: cadetblue; */
            /* Fallback color */
        }

        .head-2-smart {
            background-image: url("{{ asset('newAssets/img/homecomponents/competitiveedge/2.png') }}");
            background-size: cover;
            background-position: center;
            height: 136px;
            background-repeat: no-repeat;
            /* background-color: cadetblue; */
            /* Fallback color */
        }

        .head-3-smart {
            background-image: url("{{ asset('newAssets/img/homecomponents/competitiveedge/3.png') }}");
            background-size: cover;
            height: 136px;
            background-position: center;
            background-repeat: no-repeat;
            /* background-color: cadetblue; */
            /* Fallback color */
        }

        .head-4-smart {
            background-image: url("{{ asset('newAssets/img/homecomponents/competitiveedge/4.png') }}");
            background-size: cover;
            background-position: center;
            height: 136px;
            background-repeat: no-repeat;
            /* background-color: cadetblue; */
            /* Fallback color */
        }

        .head-5-smart {
            background-image: url("{{ asset('newAssets/img/homecomponents/competitiveedge/5.png') }}");
            background-size: cover;
            background-position: center;
            height: 136px;
            background-repeat: no-repeat;
            /* background-color: cadetblue; */
            /* Fallback color */
        }

        .head-left {
            font-size: 24px;
            color: #ffffff;
            display: flex;
            align-items: center;
            padding: 20px;
            margin: 0 auto;
            width: 235px;
            /* white-space: nowrap; */
            font-family: "Manrope-Bold" !important;
        }

        .head-left img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

        .head-right {
            font-size: 18px;
            font-family: "Manrope-Bold" !important;
        }

        .competive-main {
            padding: 80px !important;
            background-image: url("{{ asset('newAssets/img/marquee/bg1.png') }}");
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        /* Ensure head-*-smart takes full height and aligns content */
        .head-1-smart,
        .head-2-smart,
        .head-3-smart,
        .head-4-smart,
        .head-5-smart {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            height: 113px;
            width: 30%;
            /* Adjust width to balance with content */
        }

        #competive-js {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            pointer-events: none;
        }

        .description-count-c {
            font-size: 20px;
            font-family: "Manrope-Medium";
            /* width: 637px; */
            padding-bottom: 48px;
            max-width: 90%;
            margin: 0 auto;
            color: #fff;
        }

        .testimonials-btn2-competive {
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
            transition: opacity 0.6sease-in-out, transform 0.6sease-in-out;
            width: 216px;
            margin: 0 auto;
            padding: 0px 16px 0px 16px;
            height: 40px;
            opacity: 0;
            transform: translateY(30px);
            will-change: opacity, transform;
        }

        .testimonials-btn2-competive {
            opacity: 0;
            /* Initially hidden */
            transform: translateY(20px);
            /* Move slightly down */
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }

        .testimonials-btn2-competive.visible {
            opacity: 1;
            /* Fully visible */
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            .head-right {
                display: none;
            }

            .content ul li {
                display: none;
            }

            .head-5-smart {
                background-size: unset !important;
            }

            .head-4-smart {
                background-size: unset !important;
            }

            .head-3-smart {
                background-size: unset !important;
            }

            .head-2-smart {
                background-size: unset !important;
            }

            .head-1-smart {
                background-size: unset !important;
            }

            .competive-main {
                padding: 20px !important;
            }

            .description-count-c {
                font-size: 16px;
            }

            .head-left {
                font-size: 20px;
                white-space: nowrap;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid competive-main mt-5">
        <div id="competive-js"></div>
        <div class="testimonials-btn2-competive">
            <span class="testi"> <img src="{{ asset('newAssets/img/homecomponents/competitiveedge/6.png') }}" loading="lazy" style="width: 16px;margin-top: -2px;"> <span style="margin-left: 5px;">Competitive Advantage</span></span>
        </div>

        <div style="text-align: center;">
            <h2 class="title-count">Promotes Your Competitive Edge.
            </h2>
            <p class="description-count-c">
                PRAX Market helps you clearly show your strengths to potential buyers, partners, and collaborators.
            </p>
        </div>
        <div class="row first-head-1">
            <div class="col-lg-5 head-1-smart">
                <h3 class="head-left">Smart Pricing Advantage</h3>
            </div>
            <div class="col-lg-7">
                <div class="content">
                    <h3 class="head-right">The platform makes your competitive pricing more visible to buyers:
                    </h3>
                    <ul>
                        <li>Display competitive pricing, contract orders and exclusive deals to attract attention.</li>
                        <li>Highlight cost-saving opportunities for potential customers.</li>
                        <li>Help buyers compare offers and see the value you bring.</li>

                    </ul>
                </div>
                <div class="arrow"></div>
            </div>
        </div>
        <div class="row first-head-2">
            <div class="col-lg-5 head-2-smart">
                <h3 class="head-left">Stand Out from the Crowd</h3>
            </div>
            <div class="col-lg-7">
                <div class="content">
                    <h3 class="head-right">The platform showcases what makes your business unique:
                    </h3>
                    <ul>
                        <li>List specialised or hard-to-find products and services.</li>
                        <li>Add clear descriptions that highlight your key differentiators.</li>
                        <li>Showcase your specific work and tools with clear visuals and standout features.</li>

                    </ul>
                </div>
                <div class="arrow"></div>
            </div>
        </div>
        <div class="row first-head-3">
            <div class="col-lg-5 head-3-smart">
                <h3 class="head-left">Stronger Connections</h3>
            </div>
            <div class="col-lg-7">
                <div class="content">
                    <h3 class="head-right">The platform helps you build and leverage a continuous network of collaborators:

                    </h3>
                    <ul>
                        <li>Share who you work with — partners, suppliers, and customers.</li>
                        <li>Showcase your delivery capabilities and service responsiveness.</li>
                        <li>Let buyers see the advantages of working with a well-connected business.</li>

                    </ul>
                </div>
                <div class="arrow"></div>
            </div>
        </div>
        <div class="row first-head-4">
            <div class="col-lg-5 head-4-smart">
                <h3 class="head-left">Future-Ready Solutions</h3>
            </div>
            <div class="col-lg-7">
                <div class="content">
                    <h3 class="head-right">The platform demonstrates your innovation and forward-thinking capabilities:

                    </h3>
                    <ul>
                        <li>Highlight your use of advanced technologies and tools.</li>
                        <li>Explain how you solve problems efficiently and adapt to change.</li>
                        <li>Position your company as forward-thinking and competitive.</li>

                    </ul>
                </div>
                <div class="arrow"></div>
            </div>
        </div>
        <div class="row first-head-5">
            <div class="col-lg-5 head-5-smart">
                <h3 class="head-left">Built-in Trust</h3>
            </div>
            <div class="col-lg-7">
                <div class="content">
                    <h4 class="head-right">The platform builds buyer confidence through visible proof of your reliability:
                    </h4>
                    <ul>
                        <li>Collect and showcase customer feedback and ratings.</li>
                        <li>Highlight quality standards, certifications, and audit results.</li>
                        <li>Reinforce trust through clear communication and consistent service.</li>

                    </ul>
                </div>
                <div class="arrow"></div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            if (document.getElementById('competive-js')) {
                particlesJS('competive-js', {
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
        });



        document.addEventListener("DOMContentLoaded", function() {
            const buttons = document.querySelectorAll(".testimonials-btn2-competive");

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

</html>