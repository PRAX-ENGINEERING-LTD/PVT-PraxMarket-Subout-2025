<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Competitive Advantage with Prax Market</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        /* Prevent horizontal overflow */
        html, body {
            overflow-x: hidden;
            width: 100%;
            position: relative;
        }

        .timeline-bg {
            max-width: 100%;
            
        }
        .timeline-bg {
            background-image: url("<?php echo e(asset('newAssets/img/homecomponents/timeline/bg1.png')); ?>");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .header-timeline {
            text-align: center;
            padding: 20px;
        }

        .header-timeline h1 {
            font-weight: 700;
            font-size: 56px;
            margin-bottom: 0.5rem;
            font-family: 'Manrope-Semi' !important;
        }

        .header-timeline p {
            max-width: 600px;
            margin: 0 auto;
            font-size: 20px;
            font-family: 'Manrope-Medium' !important;
        }

        /* Timeline styles */
        .timeline {
            position: relative;
            padding: 60px 0;
        }

/*       
        .timeline::before {
            content: '';
            position: absolute;
            width: 3px;
            background-color: #e0e0e0;
            top: 60px; 
            bottom: 0; 
            left: 50%;
            margin-left: -1px;
            z-index: 0;
        } */

        /* Active line - grows as you scroll (purple) */
        .timeline-progress {
            position: absolute;
    width: 3px;
    background-color: #7366FF;
    top: 223px;
    left: 50%;
    margin-left: -1px;
    z-index: 1;
    height: 0;
    transition:  height 0.5 ease;
        }

        .timeline-item {
            position: relative;
        }

        .timeline-item:last-child {
            margin-bottom: 0;
        }

        .timeline-icon {
            width: 50px;
            height: 50px;
            position: absolute;
            background-color: #e0e0e0;
            left: 50%;
            top: 0; /* Adjusted to align icons at the top of each item */
            margin-left: -25px;
            margin-top: 158px; /* Removed margin-top to align properly */
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 20px;
            z-index: 2;
            box-shadow: 0 0 0 4px white;
            transition: all 0.3s ease;
        }

        .timeline-icon i {
            font-size: 20px;
            color: white;
            transition: all 0.3s ease;
        }

        .timeline-icon.active {
            background-color: #7366FF; /* Kept as per your original code */
            transform: scale(1.2);
        }

        .timeline-content {
            padding: 20px 0;
            opacity: 0.5;
            transition: all 0.5s ease;
        }

        .timeline-content.active {
            opacity: 1;
        }

        .timeline-card {
            background-color: white;
            border-radius: 10px;
            padding: 1.5rem;
            border: 1px solid #eee;
            transform: translateY(20px);
            transition: all 0.5s ease;
            border: 1px solid rgb(213, 213, 213);
        }

        .timeline-card.active {
            transform: translateY(0);
        }

        .timeline-card h3 {
            font-size: 24px;
            margin-bottom: 1rem;
            font-family: 'Manrope-Bold' !important;
        }

        .timeline-card p {
            font-size: 20px;
            margin-bottom: 0;
            font-family: 'Manrope-Medium' !important;
        }

        .timeline-image-container {
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0.7;
            transition: all 0.5s ease;
        }

        .timeline-image-container.active {
            opacity: 1;
        }

        .timeline-image {
            max-width: 445px;
            height: auto;
            border-radius: 8px;
            transition: all 0.5s ease;
            transform: scale(0.95);
        }

        .timeline-image.active {
            transform: scale(1);
        }

        .timeline-heading {
            text-align: center;
            margin-bottom: 1rem;
        }

        .timeline-heading .number {
            font-weight: 700;
            font-size: 1.2rem;
            display: block;
            margin-bottom: 0.5rem;
            color: #7952b3;
            opacity: 0.7;
            transition: all 0.3s ease;
        }

        .timeline-heading .number.active {
            opacity: 1;
        }

        .timeline-heading .title {
            font-size: 30px;
            font-family: 'Manrope-Semi';
        }

        /* Responsive styles */
        @media (max-width: 425px) {
            .timeline::before,
            .timeline-progress {
                left: 40px;
            }

            .timeline-icon {
                left: 40px;
                margin-left: 0;
                top: 20px;
            }

            .timeline-content {
                width: calc(100% - 80px);
                margin-left: 80px;
            }

            .timeline-heading {
                text-align: center;
                margin-top: 60px;
            }

            .timeline-image-container {
                margin-top: 20px;
                margin-bottom: 20px;
            }
            
            /* Fix for mobile responsiveness */
            .row {
                margin-left: 0;
                margin-right: 0;
            }
            
            .col-md-5 {
                padding-left: 0;
                padding-right: 0;
            }
            
            .timeline-image {
                max-width: 100%;
                height: auto;
            }
            
            .header-timeline h1 {
                font-size: 24px;
                word-wrap: break-word;
            }
            
            .header-timeline p {
                font-size: 16px;
                padding: 0 15px;
            }
            
            .timeline::before {
                display: none;
            }
            .timeline-progress {
                display: none;
            }
            .timeline-icon {
                display: none;
            }
            .timeline-card {
                display: none;
            }
            .timeline-content {
                display: none;
            }
            .btn-service-timeline{
                width: 207px !important;
            }
            .timeline-heading .title{
                font-size: 24px;
            }
        }
        @media (max-width: 768px) {
            .timeline-heading .title{
                font-size: 24px;
            }
            .timeline-card p{
                font-size: 16px;

            }
            .header-timeline h1{
                font-size: 24px;

            }
            .header-timeline p{
                font-size: 16px;

            }
        }

        .btn-service-timeline {
            box-shadow: inset .3184767494094558px -.39809593676181976px .5098115483006286px -1px #c4b5fdc7, inset .9658024572418071px -1.207253071552259px 1.5460382806343045px -2px #c4b5fdba, inset 2.5530614085937846px -3.1913267607422307px 4.086892346255328px -3px #c4b5fd9c, inset 8px -10px 12.806248474865697px -4px #c4b5fd33 !important;
            font-family: 'Manrope-Medium' !important;
            padding: 10px;
            border-radius: 24px;
            border: 1px solid rgb(213, 213, 213) !important;
            background-color: #ffff;
            font-size: 14px;
            width: 132px;
        }

        .btn-service-timeline {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
        }

        .btn-service-timeline.visible {
            opacity: 1;
            transform: translateY(0);
        }

.timeline-inside-img{
    width: 27px;
    height: 27px;
    margin-right: 10px;
    margin-left: -4px;
}

.time-ul li {
    position: relative;
    padding-left: 36px;
    font-size: 16px;
    line-height: 1.4;
    font-family: "Manrope-medium" !important;
}
        
    </style>
</head>

<body>
    <div class="container timeline-bg">
        <div class="text-center mt-5">
            <button class="btn-service-timeline" style="font-family: 'Manrope-Medium';">
                <img src="<?php echo e(asset('newAssets/img/homecomponents/timeline/advantages1.png')); ?>" style="margin-right: 10px; margin-top: -3px; width:16px" loading="lazy">Advantage
            </button>
        </div>
        <div class="header-timeline">
            <h1>Experience Advantages at Every Step.</h1>
            <p>Transform the way you do business with our all-in-one precision  engineering platform.</p>
        </div>

        <div class="timeline">
            <!-- Progress line that will fill as user scrolls -->
            <div class="timeline-progress"></div>

            <!-- Feature 1 -->
            <div class="timeline-item" id="item1" data-position="0">
                <div class="timeline-icon" id="icon1">
                   01
                </div>

                <div class="row align-items-center">
                    <div class="col-md-5" style="text-align: center;">
                        <div class="timeline-image-container" data-aos="fade-right">
                            <img src="<?php echo e(asset('newAssets/img/homecomponents/timeline/1.png')); ?>" alt="Central Hub Illustration" loading="lazy" class="timeline-image">
                        </div>
                        <!-- <div class="timeline-heading">
                            <span class="title">1. A Central Hub <br /> for Growth</span>
                        </div> -->
                    </div>

                    <div class="col-md-5 offset-md-2">
                        <div class="timeline-content" data-aos="fade-left">
                            <div class="timeline-card">
                                <h3><img src="<?php echo e(asset('newAssets/img/homecomponents/timeline/7.png')); ?>" loading="lazy" class="timeline-inside-img" alt="">Find What You Need</h3>
                                <ul class="time-ul">
                                    <li><p>Easily identify the right supplier or service for your requirements.</p></li>
                                    <li><p>Search by location and view results on an interactive map.</p> </li>
                                    <li><p>Check company availability directly through search.</p> </li>
                                </ul>
                                <!---->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature 2 -->
            <div class="timeline-item" id="item2" data-position="1">
                <div class="timeline-icon" id="icon2">
                   02
                </div>

                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="timeline-content" data-aos="fade-right">
                            <div class="timeline-card">
                                <h3><img src="<?php echo e(asset('newAssets/img/homecomponents/timeline/8.png')); ?>" loading="lazy" class="timeline-inside-img" alt="">Choose the Right Partner</h3>
                                <ul class="time-ul">
                                    <li><p>Find trusted suppliers using search and filters.</p></li>
                                    <li><p>Connect quickly through built-in messaging or requests.</p> </li>
                                    <li><p>View and share reviews to build trust.</p> </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 offset-md-2">
                        <div class="timeline-image-container" data-aos="fade-left">
                            <img src="<?php echo e(asset('newAssets/img/homecomponents/timeline/2.png')); ?>" loading="lazy" alt="Premium Profiles Illustration" class="timeline-image">
                        </div>
                        <!-- <div class="timeline-heading">
                            <span class="title">2. Showcase Your Business with Premium Profiles</span>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- Feature 3 -->
            <div class="timeline-item" id="item3" data-position="2">
                <div class="timeline-icon" id="icon3">
                  03
                </div>

                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="timeline-image-container" data-aos="fade-right">
                            <img src="<?php echo e(asset('newAssets/img/homecomponents/timeline/3.png')); ?>" loading="lazy" alt="Jobs and Projects Illustration" class="timeline-image">
                        </div>
                        <!-- <div class="timeline-heading">
                            <span class="title">3. Display Your Jobs and Projects</span>
                        </div> -->
                    </div>

                    <div class="col-md-5 offset-md-2">
                        <div class="timeline-content" data-aos="fade-left">
                            <div class="timeline-card">
                                <h3><img src="<?php echo e(asset('newAssets/img/homecomponents/timeline/9.png')); ?>" loading="lazy" class="timeline-inside-img" alt="">Build Long-Term Relationships</h3>
                                <ul class="time-ul">
                                    <li><p>Save and bookmark preferred suppliers for future needs.</p></li>
                                    <li><p>Follow their updates and stay informed about their services.</p> </li>
                                    <li><p>Recommend partners to help promote each other’s business.</p> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature 4 -->
            <div class="timeline-item" id="item4" data-position="3">
                <div class="timeline-icon" id="icon4">
                   04
                </div>

                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="timeline-content" data-aos="fade-right">
                            <div class="timeline-card">
                                <h3><img src="<?php echo e(asset('newAssets/img/homecomponents/timeline/10.png')); ?>" loading="lazy" class="timeline-inside-img" alt="">Stay Active & Visible</h3>
                                <ul class="time-ul">
                                    <li><p>Share your work, projects, and expertise with the community.</p></li>
                                    <li><p>Post regular updates to stay visible in the industry.</p> </li>
                                    <li><p>Use built-in email tools to reach new and existing customers.</p> </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 offset-md-2">
                        <div class="timeline-image-container" data-aos="fade-left">
                            <img src="<?php echo e(asset('newAssets/img/homecomponents/timeline/4.png')); ?>" loading="lazy" alt="R&D Companies Illustration" class="timeline-image">
                        </div>
                        <!-- <div class="timeline-heading">
                            <span class="title">4. Supporting R&D <br />Companies</span>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="timeline-item" id="item3" data-position="2">
                <div class="timeline-icon" id="icon3">
                  05
                </div>

                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="timeline-image-container" data-aos="fade-right">
                            <img src="<?php echo e(asset('newAssets/img/homecomponents/timeline/5.png')); ?>" loading="lazy" alt="Jobs and Projects Illustration" class="timeline-image">
                        </div>
                        <!-- <div class="timeline-heading">
                            <span class="title">3. Display Your Jobs and Projects</span>
                        </div> -->
                    </div>

                    <div class="col-md-5 offset-md-2">
                        <div class="timeline-content" data-aos="fade-left">
                            <div class="timeline-card">
                                <h3><img src="<?php echo e(asset('newAssets/img/homecomponents/timeline/11.png')); ?>" loading="lazy" class="timeline-inside-img" alt="">Grow Your Network</h3>
                                <ul class="time-ul">
                                    <li><p>Connect with more businesses across the industry.</p></li>
                                    <li><p>Earn rewards for successful referrals and connections.</p> </li>
                                    <li><p>Highlight your team’s skills and build your company profile.</p> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="timeline-item" id="item4" data-position="3">
                <div class="timeline-icon" id="icon4">
                   06
                </div>

                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="timeline-content" data-aos="fade-right">
                            <div class="timeline-card">
                                <h3><img src="<?php echo e(asset('newAssets/img/homecomponents/timeline/12.png')); ?>" loading="lazy" class="timeline-inside-img" alt="">Manage Everything in One Place</h3>
                                <ul class="time-ul">
                                    <li><p>Track all projects and communication in one dashboard.</p></li>
                                    <li><p>Reduce time and cost with streamlined workflows.</p> </li>
                                    <li><p>Get support throughout the entire process—from inquiry to delivery.</p> </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 offset-md-2">
                        <div class="timeline-image-container" data-aos="fade-left">
                            <img src="<?php echo e(asset('newAssets/img/homecomponents/timeline/6.png')); ?>" loading="lazy" alt="R&D Companies Illustration" class="timeline-image">
                        </div>
                        <!-- <div class="timeline-heading">
                            <span class="title">4. Supporting R&D <br />Companies</span>
                        </div> -->
                    </div>
                </div>
            </div>
       
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Initialize AOS animation library
        AOS.init({
            duration: 1000,
            once: false,
            mirror: true
        });

        // Get all timeline items and elements
        const timelineItems = document.querySelectorAll('.timeline-item');
        const timelineIcons = document.querySelectorAll('.timeline-icon');
        const progressLine = document.querySelector('.timeline-progress');
        const timeline = document.querySelector('.timeline');

        // Calculate position values
        function calculatePositions() {
            const timelineTop = timeline.getBoundingClientRect().top + window.scrollY;
            const timelineHeight = timeline.offsetHeight;

            // Get the position of the first and last icons
            const firstIcon = timelineIcons[0];
            const lastIcon = timelineIcons[timelineIcons.length - 1];
            const firstIconTop = firstIcon.getBoundingClientRect().top + window.scrollY + (firstIcon.offsetHeight / 2);
            const lastIconTop = lastIcon.getBoundingClientRect().top + window.scrollY + (lastIcon.offsetHeight / 2);
            const lineHeight = lastIconTop - firstIconTop;

            // Adjust the progress line to start at the first icon
            progressLine.style.top = `${firstIconTop - timelineTop}px`;

            // Set positions for each item relative to timeline
            timelineItems.forEach((item, index) => {
                const itemMiddle = item.getBoundingClientRect().top + (item.offsetHeight / 2) + window.scrollY;
                const positionPercentage = (itemMiddle - firstIconTop) / lineHeight;
                item.setAttribute('data-position', positionPercentage);
            });
        }

        // Update active state on scroll
        function updateTimelineStates() {
            const scrollTop = window.scrollY;
            const windowHeight = window.innerHeight;
            const timelineTop = timeline.getBoundingClientRect().top + window.scrollY;

            // Get the position of the first and last icons
            const firstIcon = timelineIcons[0];
            const lastIcon = timelineIcons[timelineIcons.length - 1];
            const firstIconTop = firstIcon.getBoundingClientRect().top + window.scrollY + (firstIcon.offsetHeight / 2);
            const lastIconTop = lastIcon.getBoundingClientRect().top + window.scrollY + (lastIcon.offsetHeight / 2);
            const lineHeight = lastIconTop - firstIconTop;

            // Calculate how far down the timeline we've scrolled
            let scrollPosition = (scrollTop + windowHeight / 2) - firstIconTop;
            scrollPosition = Math.max(0, Math.min(scrollPosition, lineHeight));
            const scrollPercentage = scrollPosition / lineHeight;

            // Update progress line height
            progressLine.style.height = `${scrollPercentage * lineHeight}px`;

            // Activate icons and content based on scroll position
            timelineItems.forEach((item, index) => {
                const itemRect = item.getBoundingClientRect();
                const itemPosition = parseFloat(item.getAttribute('data-position')) || 0;

                // Check if the item should be active based on scroll progress
                const isActive = scrollPercentage >= itemPosition;
                const isInView = (itemRect.top <= windowHeight * 0.7 && itemRect.bottom >= windowHeight * 0.3);

                if (isActive || isInView) {
                    // Activate current item
                    timelineIcons[index].classList.add('active');
                    item.querySelector('.timeline-content').classList.add('active');
                    item.querySelector('.timeline-card').classList.add('active');
                    item.querySelector('.timeline-image-container').classList.add('active');
                    item.querySelector('.timeline-image').classList.add('active');
                    if (item.querySelector('.number')) {
                        item.querySelector('.number').classList.add('active');
                    }
                } else {
                    // Deactivate items not in view
                    timelineIcons[index].classList.remove('active');
                    item.querySelector('.timeline-content').classList.remove('active');
                    item.querySelector('.timeline-card').classList.remove('active');
                    item.querySelector('.timeline-image-container').classList.remove('active');
                    item.querySelector('.timeline-image').classList.remove('active');
                    if (item.querySelector('.number')) {
                        item.querySelector('.number').classList.remove('active');
                    }
                }
            });
        }

        // Initialize and add event listeners
        window.addEventListener('load', function() {
            calculatePositions();
            updateTimelineStates();
        });

        window.addEventListener('resize', calculatePositions);
        window.addEventListener('scroll', updateTimelineStates);
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const buttons = document.querySelectorAll(".btn-service-timeline");

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

</html><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/staticPages/home/homeComponents/hometimeline.blade.php ENDPATH**/ ?>