<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAX Market</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .about-section {
            background-image: url("{{ asset('newAssets/img/about/bg1.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px;

        }

        .about-tag {
            color: #7366FF;
            font-size: 20px;
            margin-bottom: 1rem;
            font-family: "Manrope-Bold" !important;
        }

        .about-tag-one {
            color: #7366FF;
            font-size: 24px;
            margin-bottom: 1rem;
            font-family: "Manrope-Bold" !important;
        }

        .main-title {
            font-size: 51px;
    font-weight: bold;
    line-height: 1.1;
    margin-bottom: 2rem;
    font-family: "Manrope-Semi" !important;
    /* white-space: pre-line; */
    /* max-width: 1025px; */
        }



        .main-title-solution {
            padding-left: 64px;
    font-size: 32px;
    font-weight: bold;
    line-height: 1.4;
    margin-bottom: 2rem;
    font-family: "Manrope-Bold" !important;
    /* width: 800px; */
    margin: 0 auto;
    padding-right: 64px;
        }

        .title-highlight {
            color: #a3a3a3;
            font-size: 51px;
            font-family: "Manrope-Semi" !important;

        }
        .title-highlight-one {
            color: #a3a3a3;
            font-size: 40px;
            font-family: "Manrope-Semi" !important;

        }


        .description {
            font-size: 20px;
            /* color: #333; */
            line-height: 1.6;
            font-family: "Manrope-Medium" !important;
        }

        .about-img {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .about-img img {
            /* max-width: 648px; */
            height: auto;
            /* border-radius: 4px; */
        }

        .about-hero-img{
            max-width: 100%;
            height: auto;
            /* border-radius: 4px; */
        }

     


        .about-section-one {
            background-image: url("{{ asset('newAssets/img/about/bg2.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px;
            text-align: center;

        }

        .main-title-one {
            font-size: 56px;
            font-weight: bold;
            line-height: 1.1;
            /* margin-bottom: 2rem; */
            font-family: "Manrope-Semi" !important;
        }

        .description-one {
            font-size: 1.1rem;
            /* color: #333; */
            font-size: 32px;
            line-height: 1.6;
            font-family: "Manrope-Medium" !important;
        }

        .text-purple {
            color: #8257e6;
            font-weight: 500;
        }

        .mission-title {
            font-size: 56px;
            margin-bottom: 1.5rem;
            font-family: "Manrope-Semi" !important;
        }

        .mission-p {
            font-size: 24px;
            font-family: "Manrope-Medium" !important;
        }

        .mission-ul {
            font-family: "Manrope-Medium" !important;
            font-size: 25px;
        }

        /* Visualization styles */
        .purple-text {
            color: #7366FF !important;
        }

        .core-values-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .core-values-title {
            text-align: center;
            margin-bottom: 10px;
            font-size: 56px;
            font-family: "Manrope-Semi" !important;
        }

        .core-values-title-purple {
            font-size: 20px;
            margin-bottom: 20px;
            font-family: "Manrope-Bold" !important;
            text-align: center;
        }

        .core-values-subtitle {
            text-align: center;
            font-size: 32px;
            margin-bottom: 40px;
            font-family: "Manrope-Medium" !important;
        }

        .value-card {
            border-radius: 10px;
    padding: 24px;
    /* height: 100%; */
    width: 336px;
    height: 160px;
    display: block;
    text-align: start;

        }

        .value-card-border-one {
            border: 1px solid #CA8A04;
        }

        .value-card-border-two {
            border: 1px solid #EA580C;
        }

        .value-card-border-three {
            border: 1px solid #2563EB;
        }

        .value-card-border-four {
            border: 1px solid #7C3AED;
        }

        .value-card-border-five {
            border: 1px solid #2BA34A;
        }

        .value-card.yellow {
            background-color: #FEFCE8;
        }

        .value-card.orange {
            background-color: #FFF7ED;
        }

        .value-card.blue {
            background-color: #EFF6FF;
        }

        .value-card.purple {
            background-color: #F5F3FF;
        }

        .value-card.green {
            background-color: #F0FDF4;
        }

        .value-title {
            /* font-weight: bold; */
            font-size: 1.4rem;
            margin-bottom: 0px;
            font-family: "Manrope-Bold" !important;
        }

        .value-description {
            font-size: 1.1rem;
            font-family: "Manrope-Medium" !important;

        }

        .value-description-yellow {
            width: 300px;
            color: #D78F04;
            font-size: 20px;
            font-family: "Manrope-Medium" !important;

        }

        .value-description-orange {
            color: #EA580C;
            font-size: 20px;
            width: 300px;
            font-family: "Manrope-Medium" !important;

        }

        .value-description-blue {
            color: #2563EB;
            font-size: 20px;
            font-family: "Manrope-Medium" !important;
            width: 300px;

        }

        .value-description-purple {
            color: #7366FF !important;
            font-size: 20px;
            font-family: "Manrope-Medium" !important;
            width: 300px;
        }

        .value-description-green {
            color: #2BA34A;
            font-size: 20px;
            font-family: "Manrope-Medium" !important;
            width: 300px;
        }


        .yellow-text {
            color: #CA8A04;
            font-size: 20px;
            font-family: "Manrope-Bold" !important;
        }

        .orange-text {
            color: #EA580C;
            font-size: 20px;
            font-family: "Manrope-Bold" !important;
        }

        .blue-text {
            color: #2563EB;
            font-size: 20px;
            font-family: "Manrope-Bold" !important;
        }

        .purple-text {
            color: #8a2be2;
            font-size: 20px;
            font-family: "Manrope-Bold" !important;
        }

        .green-text {
            color: #2e8b57;
            font-size: 20px;
            font-family: "Manrope-Bold" !important;
        }

        /* .check-icon {
            margin-right: 10px;
        } */

        .core-bg {
            background-image: url("{{ asset('newAssets/img/about/bg1.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            /* padding: 80px; */

        }

        .about-philosophy-bg {
            background-color: #ddd6fe;
            padding: 80px;
        }

        .about-mission {
            background-image: url("{{ asset('newAssets/img/about/bg1.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px;

        }

        @media (max-width: 768px) {
            .about-section-one {
                padding:24px 10px 24px 10px;
            }

            .main-title {
                font-size: 25px !important;
            }

            .about-section {
                padding:24px 10px 24px 10px
            }

            .about-content {
                text-align: center;
            }

            .about-tag {
                margin-top: 10px;
                font-size: 18px;
            }

            /* .main-title-solution {
                font-size: 20px;

            } */

            .about-mission {
                padding: 10px;
            }

            .mission-p {
                font-size: 16px;
            }

            .mission-ul {
                font-size: 16px;
                display: inline-grid;

            }

            .about-philosophy-bg {
                padding: 24px 10px 24px 10px;
            }

            .mission-ul li {
                text-align: start;
            }

            .count-bg-one {
                border-radius: 0px !important;
            }
            .main-title-two{
                width: unset;
        font-size: 24px;
        padding-right: 0px !important;
        padding-left: 0px !important;
            }
            .title-highlight-one{
                font-size: 18px;
            }
            .main-title-new{
            font-size: 24px !important;
            font-family: "Manrope-Semi" !important;
        }
        .description-one{
            font-size: 16px;
        }
        .title-highlight-new{
            font-size: 24px !important;
            color: #a3a3a3;
            font-family: "Manrope-Semi" !important;
        }
        .main-title-new-2{
            font-size: 16px !important;
            font-family: "Manrope-Semi" !important;
        }
        .title-highlight-new-2{
            font-size: 16px !important;
            color: #a3a3a3;
            font-family: "Manrope-Semi" !important;
        }
        .main-title-one{
            font-size: 24px;
        }
        .mission-title{
            font-size: 24px;
        }
        .title-highlight-new-story{
            font-size: 16px !important;
        }
        .main-title-new-story{
            font-size: 16px !important;
        }
        .core-values-title{
            font-size: 24px;
        }
        .core-values-subtitle{
            font-size: 16px;
        }
        .value-card{
            margin-bottom: 20px;
        }
        .card-color{
            margin-bottom: 0px !important;
        }
        .description{
            font-size: 16px;
            /* padding: 0px 10px; */
        }
        /* .about-img img{
max-width: 394px;
        } */
        .about-tag-one{
font-size: 18px;
margin-top: 10px;
        }
        .purple-text{
         font-size: 18px;
        }
        .yellow-text{
            font-size: 18px;
        }
        .orange-text{
            font-size: 18px;
        }
        .blue-text{
            font-size: 18px;
        }
        .green-text{
            font-size: 18px;
        }
        .value-description-yellow{
            font-size: 16px;
            width: unset !important;
            
        }
        .value-description-orange{
            font-size: 16px;
            width: unset !important;
        }
        .value-description-blue{
            font-size: 16px;
            width: unset !important;
        }
        .value-description-purple{
           font-size: 16px;
            width: unset !important;
        }
        .value-description-green{
            font-size: 16px;
            width: unset !important;
        }
        }
        .story-img{
            /* height: 600px !important; */
    border-radius: 4px;
    width: 100% !important;
        }

        .main-title-two{
            /* width: 1049px; */
    margin: 0 auto;
padding-right: 140px;
padding-left: 140px;
        }
        .main-title-new{
            font-size: 51px;
            font-family: "Manrope-Semi" !important;
        }
        .title-highlight-new{
            font-size: 51px;
            color: #a3a3a3;
            font-family: "Manrope-Semi" !important;
        }
        .main-title-new-2{
            font-size: 40px;
            font-family: "Manrope-Semi" !important;
        }
        .title-highlight-new-2{
            font-size: 40px;
            color: #a3a3a3;
            font-family: "Manrope-Semi" !important;
        }
        .main-title-new-story{
            font-size: 30px;
            font-family: "Manrope-Semi" !important;
        }
        .title-highlight-new-story{
            font-size: 30px;
            color: #a3a3a3;
            font-family: "Manrope-Semi" !important;
        }
        .card-color{
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container-fluid about-section">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <div class="about-tag">About PRAX Market</div>
                    <h1 class="main-title-new">
                        The Most Comprehensive Platform <span class="title-highlight-new">for Precision Engineering</span>
                    </h1>
                    <p class="description">
                        At PRAX Market, we're dedicated to transforming the precision engineering industry.
                        Our mission is to create a dynamic marketplace that fosters connections, streamlines
                        processes, and accelerates business success.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-img">
                <img src="{{ asset('newAssets/img/about/1.jpg') }}" alt=""  loading="lazy" class="about-hero-img">
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container-fluid about-section-one mt-5">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="about-content">
                        <div class="about-tag-one">Solution</div>
                        <h1 class="main-title-two">
                            <span class="title-highlight-new-2">With a deep understanding of the challenges faced by manufacturers, customers, and suppliers,</span><span class="main-title-new-2">we have built an innovative platform</span>
                            <span class="title-highlight-new-2">that connects them seamlessly—driving efficiency, growth, and innovation.</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="container-fluid about-section">
    <div class="row align-items-center">
        <!-- TEXT COLUMN -->
        <div class="col-lg-6 order-1 order-md-2">
            <div class="about-content">
                <div class="about-tag">About PRAX Market</div>
                <h1 class="main-title-one">Our Vision</h1>
                <p class="description-one">
                    To be the driving force behind the transformation of the precision engineering industry. We aim to redefine what’s possible and inspire a new era of engineering excellence by creating an ecosystem where businesses can thrive and innovate.
                </p>
            </div>
        </div>

        <!-- IMAGE COLUMN -->
        <div class="col-lg-6 order-1 order-md-1">
            <div class="about-img">
                <img src="{{ asset('newAssets/img/about/vision.png') }}" loading="lazy" alt="Laptop on concrete blocks" class="img-fluid w-100">
            </div>
        </div>
    </div>
</div>



    <div class="container-fluid about-mission">
        <div class="row align-items-center">
            <!-- Left column with text content -->
            <div class="col-md-6">
                <div class="about-content">
                    <p class="about-tag">About PRAX Market</p>
                    <h1 class="mission-title">Our Mission</h1>
                    <p class="mission-p">Our mission is to simplify complexity and unlock the full potential of precision engineering. PRAX Market provides a robust platform where:</p>
                    <ul class="mission-ul">
                        <li><strong>Manufacturers</strong> find top-tier talent.</li>
                        <li><strong>Customers</strong> discover exceptional solutions.</li>
                        <li><strong>CNC cutting tool suppliers</strong> connect effortlessly with their target audience.</li>
                    </ul>
                    <p class="mission-p">By bridging the gaps between businesses, we ensure a smarter, more efficient industry for all</p>
                </div>
            </div>

            <!-- Right column with visualization -->
            <div class="col-md-6">
                <img src="{{ asset('newAssets/img/about/Mission.png') }}"  loading="lazy" alt="" style="width: 100%;object-fit:cover">
            </div>
        </div>
    </div>

    <section>
        <div class="container-fluid about-section-one mt-5 pe-lg-4">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-img"> 
                        <img src="{{ asset('newAssets/img/about/2.png') }}"  loading="lazy" alt="Laptop on concrete blocks" class="story-img img-fluid w-100">
                    </div>
                </div>

                <div class="col-lg-7 pe-lg-4">
                    <div class="about-content">
                        <div class="about-tag-one">Our Story</div>
                        <h1>
                            <span class="title-highlight-new-story">PRAX Market was,</span> <span class="main-title-new-story">born from a shared vision and a passion</span><span class="title-highlight-new-story">for empowering precision engineering professionals. Our founders, with years of industry experience, witnessed inefficiencies, communication gaps, and missed opportunities. This inspired them to create a </span><span class="main-title-new-story">platform that fosters collaboration, eliminates obstacles, and drives innovation</span><span class="title-highlight-new-story"> the industry.</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-philosophy-bg">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Left column with text content -->
                <div class="col-md-6">
                    <div class="about-content">
                        <p class="about-tag">About PRAX Market</p>
                        <h1 class="mission-title">Our Philosophy</h1>
                        <p class="mission-p">We believe greatness is achieved when minds converge, ideas align, and expertise meets opportunity. Collaboration is at the heart of our philosophy, enabling professionals to thrive in an interconnected world. PRAX Market serves as a catalyst for:</p>
                        <ul class="mission-ul">
                            <li><strong>Seamless communication</strong></li>
                            <li><strong>Effective partnerships</strong></li>
                            <li><strong>Innovative solutions</strong></li>
                        </ul>
                        <p class="mission-p">Together, we are shaping the future of precision engineering.</p>
                    </div>
                </div>

                <!-- Right column with visualization -->
                <div class="col-md-6">
                    <img src="{{ asset('newAssets/img/about/our1.png') }}"  loading="lazy" alt="" style="width: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </section>


    <section class="core-bg py-5">
        <div class="container core-values-container">
            <h4 class="purple-text core-values-title-purple">About PRAX Market</h4>
            <h1 class="core-values-title">Our Core Values</h1>
            <p class="core-values-subtitle">Our commitment to excellence is built upon five key values:</p>

            <div class="row  justify-content-center card-color">
                <div class="col-md-4" style="width: 358px;">
                    <div class="value-card yellow  value-card-border-one">
                        <h3 class="value-title">
                            <span class="check-icon yellow-text">✓</span>
                            <span class="yellow-text">Collaboration</span>
                        </h3>
                        <p class="value-description value-description-yellow">Bringing professionals together to drive industry <br />success.</p>
                    </div>
                </div>
                <div class="col-md-4" style="width: 358px;">
                    <div class="value-card orange value-card-border-two">
                        <h3 class="value-title">
                            <span class="check-icon orange-text">✓</span>
                            <span class="orange-text">Integrity</span>
                        </h3>
                        <p class="value-description value-description-orange">Ensuring transparency, trust, and reliability in all <br /> interactions.</p>
                    </div>
                </div>
                <div class="col-md-4" style="width: 358px;">
                    <div class="value-card blue value-card-border-three">
                        <h3 class="value-title">
                            <span class="check-icon blue-text">✓</span>
                            <span class="blue-text">Innovation</span>
                        </h3>
                        <p class="value-description value-description-blue">Embracing new ideas and technologies to enhance precision engineering.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4" style="width: 358px;">
                    <div class="value-card purple value-card-border-four">
                        <h3 class="value-title">
                            <span class="check-icon purple-text">✓</span>
                            <span class="purple-text">Excellence</span>
                        </h3>
                        <p class="value-description value-description-purple">Setting high standards in everything we do.</p>
                    </div>
                </div>
                <div class="col-md-4" style="width: 358px;">
                    <div class="value-card green value-card-border-five">
                        <h3 class="value-title">
                            <span class="check-icon green-text">✓</span>
                            <span class="green-text">Community</span>
                        </h3>
                        <p class="value-description value-description-green">Creating a thriving ecosystem of professionals, manufacturers, and suppliers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('staticPages.addedContents.join')

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>