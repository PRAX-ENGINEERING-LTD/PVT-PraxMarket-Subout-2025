<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Providers</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Particles.js -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

    <style>
        .card-bg {
            background-image: url("{{ asset('newAssets/img/homecomponents/Services/bg3.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            /* margin-top: 80px; */
        }

        .card-header {
            text-align: center;
            padding: 20px !important;
        }

        .card-header h1 {
            font-size: 56px;
            font-weight: bold;
            margin-bottom: 0.5rem;
            font-family: "Manrope-Semi" !important;
        }

        .card-header p {
            font-size: 20px;
            max-width: 800px;
            margin: 0 auto;
            font-family: "Manrope-Medium", sans-serif;
        }

        .btn-find {
            background-color: #5e4afa;
            color: white;
            padding: 0.5rem 1.5rem;
            border-radius: 8px;
            font-weight: 500;
            border: none;
        }

        .btn-find:hover {
            background-color: #4937e8;
            color: white;
        }

        .feature-card {
            background-image: url("{{ asset('newAssets/img/homecomponents/Services/bg2.png') }}");
            border-radius: 16px;
            color: white;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            background-size: cover;
            background-position: top;
            background-repeat: no-repeat;
            transition: transform 0.6s ease-in-out, opacity 0.6s ease-in-out, box-shadow 0.3s ease-in-out;
            transform-origin: center;
            perspective: 1000px;
            position: relative;
            overflow: hidden;
            opacity: 0; /* Initial opacity for scroll animation */
        }

        /* First card: First step - off-screen left with rotation, Finish step - centered */
        .feature-card:nth-child(1) {
            transform: translateX(-80px) rotateY(-30deg);
        }

        .feature-card:nth-child(1).visible {
            opacity: 1;
            transform: translateX(0) rotateY(0);
        }

        /* Second card: First step - scaled down, Finish step - full size */
        .feature-card:nth-child(2) {
            transform: scale(0.8);
        }

        .feature-card:nth-child(2).visible {
            opacity: 1;
            transform: scale(1);
        }

        /* Third card: First step - off-screen right with rotation, Finish step - centered */
        .feature-card:nth-child(3) {
            transform: translateX(80px) rotateY(30deg);
        }

        .feature-card:nth-child(3).visible {
            opacity: 1;
            transform: translateX(0) rotateY(0);
        }

        .card-particles {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .feature-card h3,
        .feature-card p,
        .feature-card .icon-container {
            position: relative;
            z-index: 1;
        }

        .feature-card:hover {
            transform: translateX(-10px) translateY(-10px) rotate(3deg); /* Preserve original hover effect */
        }

        .feature-card h3 {
            font-size: 20px;
            font-family: "Manrope-Bold", sans-serif;
        }

        .feature-card p {
            font-size: 18px;
            opacity: 0.9;
            font-family: "Manrope-Medium", sans-serif;
            color: #D4D4D4;
            margin-bottom: 0px;
        }

        .icon-container {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            font-size: 1.5rem;
        }

        .heart-icon {
            color: #ffcc00;
        }

        .location-icon {
            color: #ff9900;
        }

        .time-icon {
            color: #ffcc00;
        }

        .border-line {
            border-bottom: 2px solid;
            border-image: linear-gradient(to right, transparent, #A855F7, transparent) 1;
            border-image-slice: 1;
        }

        .icon-service {
            width: 32px;
            object-fit: cover;
        }

        .btn-service-one-new {
            box-shadow: inset .3184767494094558px -.39809593676181976px .5098115483006286px -1px #c4b5fdc7, inset .9658024572418071px -1.207253071552259px 1.5460382806343045px -2px #c4b5fdba, inset 2.5530614085937846px -3.1913267607422307px 4.086892346255328px -3px #c4b5fd9c, inset 8px -10px 12.806248474865697px -4px #c4b5fd33 !important;
            font-family: 'Manrope-Medium' !important;
            padding: 10px;
            border-radius: 24px;
            border: 1px solid rgb(213, 213, 213) !important;
            font-size: 14px;
            width: 159px ;
            background-color: #fff;
        }

        .btn-service-one-new {
            opacity: 0;
            /* Initially hidden */
            transform: translateY(20px);
            /* Move slightly down */
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }
        .btn-service-one-new.visible {
            opacity: 1 !important;
            transform: translateY(0) !important;
        }
        .btn-service-two {
            background-color: #7366FF !important;
            margin-bottom: 30px;
            font-family: "Manrope-Medium", sans-serif !important;
            color: #fff !important;
            padding: 10px;
            height: 47px;
        }

        @media (max-width: 768px) {
            .card-header h1 {
                font-size: 24px;
            }

            .card-header p {
                font-size: 16px;
            }
            .btn-service-one-new{
              width: 148px;
             }
             .feature-card p{
                  font-size: 16px;
             }

            /* Reduce animation intensity for mobile */
            .feature-card:nth-child(1) {
                transform: translateX(-40px) rotateY(-15deg);
            }

            .feature-card:nth-child(2) {
                transform: scale(0.9);
            }

            .feature-card:nth-child(3) {
                transform: translateX(40px) rotateY(15deg);
            }
        }
        .find-provide{
            margin-top: 80px;
        }
        .fetured-new-pb{
            padding-bottom: 80px;
        }
    </style>
</head>

<body>
    <section class="card-bg">
        <div class="border-line"></div>
        <div class="container">
            <!-- Top Button -->
            <div class="text-center find-provide">
                <button class="btn-service-one-new" style="font-family: 'Manrope-Medium';">
                    <img src="{{ asset('newAssets/img/homecomponents/Services/Icons/user.png') }}" style="margin-right: 10px; margin-top: -3px; width:16px">Find Providers
                </button>
            </div>

            <!-- Header Section -->
            <div class="card-header">
                <h1>Find Specialised Service Providers.</h1>
                <p>From CNC machining to high-precision tooling, discover thousands of service providers tailored to your business needs.</p>
                <!-- <button class="btn btn-find mt-4 btn-service-two">Find Providers</button> -->
            </div>

            <!-- Feature Cards -->
            <div class="row g-4  fetured-new-pb">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="icon-container">
                            <img src="{{ asset('newAssets/img/homecomponents/Services/Icons/1.png') }}" alt="" class="icon-service" />
                        </div>
                        <h3>Services you Would Love</h3>
                        <p>Find 1000s of Specialised service Providers to meet your business needs.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="icon-container">
                            <img src="{{ asset('newAssets/img/homecomponents/Services/Icons/3.png') }}" alt="" class="icon-service" />
                        </div>
                        <h3>Think Globally Act Locally</h3>
                        <p>We're committed to delivering hyperlocal services, ensuring your convenience.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="icon-container">
                            <img src="{{ asset('newAssets/img/homecomponents/Services/Icons/2.png') }}" alt="" class="icon-service" />
                        </div>
                        <h3>Get The Job Done On Time</h3>
                        <p>Flawless results, delivered on schedule. Experience excellence in every step.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    
        // Scroll animation for feature cards
        document.addEventListener("DOMContentLoaded", function() {
            const cards = document.querySelectorAll(".feature-card");

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

        // Particle animations
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.feature-card').forEach((card, index) => {
                const particlesId = `particles-card-${index}`;
                const particlesContainer = document.createElement('div');
                particlesContainer.id = particlesId;
                particlesContainer.className = 'card-particles';
                card.insertBefore(particlesContainer, card.firstChild);

                particlesJS(particlesId, {
                    "particles": {
                        "number": {
                            "value": 50,
                            "density": {
                                "enable": true,
                                "value_area": 300
                            }
                        },
                        "color": {
                            "value": "#8B5CF6"
                        },
                        "shape": {
                            "type": "circle"
                        },
                        "opacity": {
                            "value": 1
                        },
                        "size": {
                            "value": 1
                        },
                        "move": {
                            "enable": true,
                            "speed": 1,
                            "direction": "none",
                            "random": true,
                            "out_mode": "out"
                        },
                        "line_linked": {
                            "enable": false
                        }
                    }
                });

                document.getElementById(particlesId).style.opacity = '0';
                card.addEventListener('mouseenter', () => {
                    document.getElementById(particlesId).style.opacity = '1';
                });
                card.addEventListener('mouseleave', () => {
                    document.getElementById(particlesId).style.opacity = '0';
                });
            });
        });
    </script>


<script>


document.addEventListener("DOMContentLoaded", function() {
            const buttons = document.querySelectorAll(".btn-service-one-new");

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