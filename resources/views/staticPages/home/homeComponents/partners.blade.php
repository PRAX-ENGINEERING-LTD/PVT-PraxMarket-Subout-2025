<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner Logo Marquee</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .partners-bg {
            background-image: url("{{ asset('newAssets/img/homecomponents/timeline/bg1.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .partners-section {
            padding: 32px 0;
        }

        .partners-section h1 {
            font-size: 56px;
            margin: 16px 0px;
            color: #111;
            font-family: "Manrope-Semi", sans-serif !important;
        }

        .partners-section p {
            font-size: 20px;
            margin-bottom: 3rem;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
            font-family: "Manrope-Medium", sans-serif !important;
        }

        .logo-slider {
            position: relative;
            overflow: hidden;
            padding-bottom: 80px;
            white-space: nowrap;
            margin-left: 30px;
            margin-right: 30px;
        }

        .logo-slide-track {
            display: flex;
            animation: scroll 25s linear infinite;
            width: max-content;
        }

        .logo-slide {
            padding: 0 40px;
            flex-shrink: 0;
        }

        .logo-slide img {
            width: 100%;
            max-height: 80px;
            object-fit: cover;
        }

        @keyframes scroll {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-50%);
            }
        }

        /* Add gradient fade effect to sides */
        .logo-slider::before,
        .logo-slider::after {
            content: "";
            position: absolute;
            top: 0;
            width: 100px;
            height: 100%;
            z-index: 2;
        }

        .logo-slider::before {
            left: 0;
            background: linear-gradient(to right, #fff, transparent);
        }

        .logo-slider::after {
            right: 0;
            background: linear-gradient(to left, #fff, transparent);
        }

        .btn-trust-one {
            box-shadow: inset .3184767494094558px -.39809593676181976px .5098115483006286px -1px #c4b5fdc7, inset .9658024572418071px -1.207253071552259px 1.5460382806343045px -2px #c4b5fdba, inset 2.5530614085937846px -3.1913267607422307px 4.086892346255328px -3px #c4b5fd9c, inset 8px -10px 12.806248474865697px -4px #c4b5fd33 !important;
            font-family: 'Manrope-Medium' !important;
            padding: 10px;
            border-radius: 24px;
            border: 1px solid rgb(213, 213, 213) !important;
            font-size: 14px;
            width: 114px !important ;
            background-color: #fff;
        }
        .btn-trust-one {
            opacity: 0;
            /* Initially hidden */
            transform: translateY(20px);
            /* Move slightly down */
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }

        .btn-trust-one.visible {
            opacity: 1;
            /* Fully visible */
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            .partners-section h1 {
                font-size: 24px;
            }
            .partners-section p {
                font-size: 16px;
                padding: 0px 30px;
            }
            .logo-slide img{
                max-height: 60px;
            }
        }
    </style>
</head>

<body>
    <section class="partners-section partners-bg">
        <div class="container">
            <div class="text-center mt-5">
                <button class="btn-trust-one">
                    <img src="{{ asset('newAssets/img/homecomponents/partners/handshake.png') }}" style="margin-right: 10px; margin-top: -3px; width:16px" loading="lazy">Partners
                </button>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h1>Our Trusted Partners</h1>
                    <p>Our trusted partners help drive innovation, efficiency, and seamless connections across the industry.</p>
                </div>
            </div>
        </div>

        <div class="container px-0">
            <div class="logo-slider">
                <div class="logo-slide-track">
                    <!-- Original logos -->
                    <div class="logo-slide">
                        <img src="{{ asset('newAssets/img/homecomponents/heromarquee/logo-group1.png') }}" loading="lazy" alt="Partner Logo">
                    </div>
                    <!-- Duplicate logos will be added via JavaScript -->
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Handle button animation
            const buttons = document.querySelectorAll(".btn-trust-one");

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

            // Handle logo marquee infinite loop
            const logoTrack = document.querySelector('.logo-slide-track');
            const originalLogos = logoTrack.querySelectorAll('.logo-slide');

            // Create two sets of logos for seamless looping
            originalLogos.forEach(logo => {
                const clone = logo.cloneNode(true);
                logoTrack.appendChild(clone);
            });

            // Ensure the track has enough width for smooth animation
            const totalWidth = logoTrack.scrollWidth;
            logoTrack.style.width = `${totalWidth}px`;
        });
    </script>
</body>

</html>