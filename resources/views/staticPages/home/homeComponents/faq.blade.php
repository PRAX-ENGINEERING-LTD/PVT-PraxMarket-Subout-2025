<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAX Market FAQ</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <style>
        .faq-bg {
            background-image: url("{{ asset('newAssets/img/homecomponents/timeline/bg1.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .accordion {
            width: 80%;
            margin: 20px auto;
            background-image: url("{{ asset('newAssets/img/marquee/bg1.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 30px;
            border-radius: 30px;
            position: relative;
            overflow: hidden;
            margin-bottom: 80px;
        }

        .accordion-item {
            border: none !important;
            margin-bottom: 10px;
            overflow: hidden;
            background: transparent !important;
            border-bottom: 1px solid !important;
            /* Set border width */
            border-image: linear-gradient(to right, rgb(109, 40, 217), rgb(109, 40, 217), transparent) 1 !important;
            /* Adjust color and opacity */
            position: relative;

        }

        .accordion-item:last-child {
            border-bottom: none !important;
            /* Removes border from the last item */
        }

        .accordion-header {
            font-family: "Manrope-Bold" !important;
            font-size: 20px !important;
        }

        .accordion-body {
            font-family: 'Manrope-Medium' !important;
            font-size: 18px !important;
            position: relative;
        }

        .accordion-header,
        .accordion-body {
            padding: 16px;
            cursor: pointer;
            font-weight: 500;
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* background-image: url("{{ asset('newAssets/img/marquee/bg1.png') }}"); */
            background-size: cover;
            background-position: center;
            color: white;
            border: none !important;
            border-radius: 0 !important;
        }

        .accordion-button {
            background: transparent !important;
            box-shadow: none !important;
            border: none !important;
        }

        .accordion-button:focus {
            outline: none !important;
            box-shadow: none !important;
        }

        .accordion-body {
            display: none;
            /* Ensures all FAQ answers are initially hidden */
            padding: 16px;
            border-top: none !important;
        }

        .particles-container {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            pointer-events: none;
            display: none;
            /* Initially hidden */
        }


        .indicator {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgb(237, 233, 254);
            /* Purple background */
            color: rgb(124 58 237);
            /* White text */
            border-radius: 50%;
            /* Makes it a perfect circle */
            font-weight: bold;
            font-size: 20px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        /* Add hover effect for a better UI */
        .accordion-header:hover .indicator {
            background-color: rgb(237, 233, 254);
            ;
            /* Darker purple on hover */
            transform: scale(1.1);
            /* Slightly enlarges the circle */
        }

        .faq h1 {
            font-family: "Manrope-Bold", sans-serif !important;
            font-size: 50px;
            margin-bottom: 1rem;

        }

        .faq p {
            font-family: "Manrope-Medium", sans-serif !important;
            width: 700px;
            margin: 0 auto;
            font-size: 19px;
        }

        @media (max-width: 768px) {

            .accordion {
                width: 100% !important;
            }

            .faq-res {
                font-size: 14px;
            }

            .accordion {
                border-radius: 0px !important;
            }

            .accordion-body {

                font-size: 14px !important;
            }

            .faq p {
                width: unset !important;
            }
        }

        .btn-faq-one {
            box-shadow: inset .3184767494094558px -.39809593676181976px .5098115483006286px -1px #c4b5fdc7, inset .9658024572418071px -1.207253071552259px 1.5460382806343045px -2px #c4b5fdba, inset 2.5530614085937846px -3.1913267607422307px 4.086892346255328px -3px #c4b5fd9c, inset 8px -10px 12.806248474865697px -4px #c4b5fd33 !important;
            font-family: 'Manrope-Medium' !important;
            padding: 10px;
            border-radius: 24px;
            border: 1px solid rgb(213, 213, 213) !important;
            font-size: 14px;
            width: 124px !important;
        }
    </style>
</head>

<body>
    <div class="container faq faq-bg">
        <div class="text-center mt-5">
            <button class="btn-faq-one">
                <img src="{{ asset('newAssets/img/homecomponents/circle-help.png') }}" style="margin-right: 10px;
    margin-top: -3px; width:18px">FAQ
            </button>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center" style="padding: 20px;">
                <h1>Got Questions? <br />
                    We're Here to Help!</h1>
                <p>PRAX Market is built to make precision engineering seamless and efficient. If you have any questions or need assistance, our team is ready to support you.</p>
            </div>
        </div>
    </div>
    <div class="accordion">
        <!-- FAQ Item 1 -->
        <div class="accordion-item">
            <div class="accordion-header">
                <span class="faq-res">What is PRAX Market?</span>
                <span class="indicator">+</span>
            </div>
            <div class="accordion-body">
                <div class="particles-container" id="particles-1"></div>
                PRAX Market is an all-in-one platform connecting manufacturers, suppliers, and customers in the precision engineering industry. We make it easy to find the right partners, access essential services, and grow your business.
            </div>
        </div>

        <!-- FAQ Item 2 -->
        <div class="accordion-item">
            <div class="accordion-header">
                <span class="faq-res">How does PRAX Market work?</span>
                <span class="indicator">+</span>
            </div>
            <div class="accordion-body">
                <div class="particles-container" id="particles-2"></div>
                Simply sign up, create your profile, and start connecting with trusted suppliers and customers. You can showcase your business, post jobs, access services, and manage transactions securely.
            </div>
        </div>

        <!-- FAQ Item 3 -->
        <div class="accordion-item">
            <div class="accordion-header">
                <span class="faq-res">What services are available on PRAX Market?</span>
                <span class="indicator">+</span>
            </div>
            <div class="accordion-body">
                <div class="particles-container" id="particles-3"></div>
                We offer 13+ essential services, including CNC machining, sheet metal, 3D printing, surface treatment, material supply, cutting tool suppliers, finance, and delivery services.
            </div>
        </div>

        <!-- FAQ Item 4 -->
        <div class="accordion-item">
            <div class="accordion-header">
                <span class="faq-res">How do I join PRAX Market?</span>
                <span class="indicator">+</span>
            </div>
            <div class="accordion-body">
                <div class="particles-container" id="particles-4"></div>
                Simply sign up, create your business profile, and start connecting with the precision engineering community today!
            </div>
        </div>
    </div>

    <script>
        // Particles configuration
        $(document).ready(function() {


            $(".accordion-header").click(function() {
                var body = $(this).next(".accordion-body");
                var indicator = $(this).find(".indicator");
                var particlesContainer = body.find(".particles-container");

                $(".accordion-body").not(body).slideUp();
                $(".accordion-header .indicator").not(indicator).text("+");
                $(".particles-container").not(particlesContainer).hide();

                if (body.is(":visible")) {
                    body.slideUp();
                    indicator.text("+");
                    particlesContainer.hide();
                } else {
                    body.slideDown(function() {
                        particlesContainer.show();
                        particlesJS(particlesContainer.attr("id"), {
                            "particles": {
                                "number": {
                                    "value": 400,
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
                                    "value": 2,
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
                                }
                            }
                        });
                    });
                    indicator.text("−");
                }
            });

        });
    </script>

</body>

</html>