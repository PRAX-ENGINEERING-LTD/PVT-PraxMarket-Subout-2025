<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Prax Market Advantage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .advantage-bg {
            background-image: url("{{ asset('newAssets/img/marquee/bg1.png') }}");
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
            padding: 80px 0 !important;
            position: relative;
            overflow: hidden;
            /* Important to avoid overflow */

        }
        #particles-advantage {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            pointer-events: none;
            /* Add this so clicks pass through */
        }
        .advantage-header{
            padding: 20px;
        }

        .advantage-header h1 {
            font-size: 56px;
            font-weight: 500;
            background: linear-gradient(290deg, rgb(245, 243, 255) 0%, rgb(196, 181, 253) 100%);
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
            font-family: "Manrope-Semi" !important;
            font-size: 56px;
        }

        .advantage-header p {
            width: 504px;
            margin: 0 auto;
            font-size: 20px;
            margin-bottom: 40px;
            color: #E5E5E5;
            font-family: "Manrope-Medium" !important;
        }

        .feature-icon {
            width: 200px;
            height: 200px;
            margin: 0 auto;
        }

        .back-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background: var(--primary-purple);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .card-advantage {
            margin-left: 80px;
            margin-right: 80px;
            background-color: white;
            background-image: url("{{ asset('newAssets/img/home/advantage.png') }}");
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
            border-radius: 23px;
            padding: 32px;
            position: relative;
        }

        .img-advantage {
           max-width: 350px;
            object-fit: cover;
        }

        .card-advantage h2 {
            font-family: "Manrope-Bold" !important;
            font-size: 30px;

        }

        .card-advantage p {
            font-family: "Manrope-Medium" !important;
            font-size: 18px;
            width: 405px;
            margin: 0 auto;
        }
        @media (max-width: 768px) {
            .advantage-header p {
           width: unset;
           font-size: 16px;
           padding: 0px 30px;
           
        }
        .advantage-header h1{
            font-size: 24px;
        }
        .card-advantage h2{
            font-size: 24px;
        }
        .card-advantage p{
         font-size: 16px;
        }
        .img-advantage{
            max-width: 300px;

        }
        .card-advantage{
            border-radius: 0px;
            margin: 0px;
        }
        .card-advantage p{
            width: unset !important;
        }
    }
     .testimonials-btn-advan
     {
        display: flex;
    align-items: center;
    gap: 8px;
    padding: -2px 25px;
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
    width: 132px;
    margin: 0 auto;
    padding: 0px 16px 0px 16px;
    height: 40px;
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.6sease -in-out, transform 0.6sease -in-out;
    will-change: opacity, transform;
}
.testimonials-btn-advan{
            opacity: 0;
            /* Initially hidden */
            transform: translateY(20px);
            /* Move slightly down */
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }
.testimonials-btn-advan.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>

    <div class="container-fluid text-center advantage-bg">
    <div id="particles-advantage"></div>
        <div class="testimonials-btn-advan">
            <img src="{{ asset('newAssets/img/homecomponents/advantage/star.png') }}" loading="lazy" style="width: 16px;margin-top: -2px;"><span style="font-family: 'Manrope-Medium';" class="testi">Advantage</span></img>
        </div>
        <div class="advantage-header">
            <h1>The Prax Market Advantage.</h1>
            <p class="mt-3">
                Transform the way you do business with our all-in-one precision engineering platform.
            </p>
        </div>

        <div class="card-advantage">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="text-center">
                        <img src="{{ asset('newAssets/img/homecomponents/advantage/1.png') }}" loading="lazy" alt="Seamless Collaboration" class="img-advantage" />
                        <h2 class="mt-3">Seamless <br /> Collaboration</h2>
                        <p>Bringing manufacturers, customers, and <br /> suppliers together for effortless <br /> communication and streamlined workflows.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="text-center">
                        <img src="{{ asset('newAssets/img/homecomponents/advantage/2.png') }}" loading="lazy" alt="Industry Solutions" class="img-advantage" />
                        <h2 class="mt-3">Complete Industry <br /> Solutions</h2>
                        <p>From media promotion to CNC tool supply, we offer comprehensive solutions to ensure your success.</p>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4">
                    <div class="text-center">
                        <img src="{{ asset('newAssets/img/homecomponents/advantage/3.png') }}" loading="lazy" alt="Market Insight" class="img-advantage" />
                        <h2 class="mt-3">Trust & <br /> Security</h2>
                        <p>Funds are held securely until you approve the quality of your parts, with transparent pricing for a worry-free experience.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<script>
        $(document).ready(function() {
          

            // Only initialize particles for the marquee section
            if (document.getElementById('particles-advantage')) {
                particlesJS('particles-advantage', {
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
    </script>


<script>


document.addEventListener("DOMContentLoaded", function() {
            const buttons = document.querySelectorAll(".testimonials-btn-advan");

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
</html>