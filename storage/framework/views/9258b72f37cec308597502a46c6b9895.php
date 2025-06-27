<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <style>
        /* Your existing CSS remains unchanged */
        .pricing-bg {
            background-image: url("<?php echo e(asset('newAssets/img/pricing/bg1.png')); ?>");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 80px;
        }

        .toggle-container {
            display: inline-flex;
            background-color: #fff;
            border-radius: 30px;
            padding: 8px;
            border: 1px solid #7c4dff;
            margin: 30px auto;
            box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 2px, rgba(0, 0, 0, 0.07) 0px 2px 4px, rgba(0, 0, 0, 0.07) 0px 4px 8px, rgba(0, 0, 0, 0.07) 0px 8px 16px, rgba(0, 0, 0, 0.07) 0px 16px 32px, rgba(0, 0, 0, 0.07) 0px 32px 64px;
        }

        .toggle-option {
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 500;
            font-family: 'Manrope-Bold' !important;
        }

        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 59px;
            height: 28px;
            margin: 5px 5px;
        }

        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: box-shadow 0.2s cubic-bezier(0.4, 0, 0.2, 1) 0s;
            border-radius: 34px;
            box-shadow: rgb(140 138 138 / 62%) 0px 0px 5px inset, rgb(202 196 196 / 21%) 0px 0px 0px 24px inset, #22cc3f 0px 0px 0px 0px inset, rgb(127 125 125 / 45%) 0px 1px 0px 0px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 25px;
            width: 25px;
            left: 3px;
            bottom: 1px;
            background-color: #f5f5f5;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked+.slider {
            background-color: #7C3AED;
        }

        input:checked+.slider:before {
            transform: translateX(26px);
        }

        .pricing-section {
            padding: 0 15px;
        }

        .pricing-card {
            background-color: white;
            background-image: url("<?php echo e(asset('newAssets/img/pricing/bg2.png')); ?>");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 16px;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #eaf0dd;
            height: 100%;
        }

        .pricing-header {
            margin-bottom: 15px;
        }

        .pricing-name {
            color: #7c4dff;
            font-weight: 600;
            margin-bottom: 15px;
            font-size: 16px;
            font-family: 'Manrope-Semi' !important;
        }

        .pricing-price {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 10px;
            font-family: 'Manrope-Bold' !important;
        }

        .pricing-description {
            font-size: 14px;
            margin-bottom: 20px;
            margin-top: 20px;
            font-family: 'Manrope-Semi' !important;
        }

        .pricing-features {
            margin-top: 20px;
        }

        .pricing-features h5 {
            font-family: 'Manrope-Bold' !important;
            font-size: 20px;
        }

        .feature-item {
            display: flex;
            align-items: baseline;
            margin-bottom: 10px;
            font-size: 14px;
            font-family: 'Manrope-Medium' !important;
        }

        .feature-check {
            color: #28a745;
            margin-right: 8px;
        }

        .feature-cross {
            color: #dc3545;
            margin-right: 8px;
        }

        .get-started-btn {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f1f1f1;
            color: #7c4dff;
            border: 1px solid #7c4dff;
            padding: 12px 0;
            border-radius: 12px;
            font-weight: 500;
            width: 100%;
            text-decoration: none;
            transition: all 0.3s;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
            font-family: 'Manrope-Bold' !important;
            cursor: pointer;
            overflow: hidden;
        }

        .particles-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            pointer-events: none;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .get-started-btn:hover .particles-container {
            opacity: 1;
        }

        .get-started-btn span {
            position: relative;
            z-index: 2;
        }

        .premium-btn {
            background-color: #533BD8;
            color: white;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
            cursor: pointer;
            overflow: hidden;
            position: relative;
            margin-bottom: 24px;
        }

        .premium-btn:hover .particles-container {
            opacity: 1;
        }

        .premium-btn span {
            position: relative;
            z-index: 2;
        }

        .popular-badge {
            background: linear-gradient(to right, #6F61FB, #4A30E0);
            color: white;
            font-size: 15px;
            padding: 5px 10px;
            border-radius: 0px 10px 0px 16px;
            position: absolute;
            top: 0px;
            right: 0px;
            font-family: 'Manrope-Bold' !important;
        }

        .discount {
            font-size: 19px;
            margin-left: 33px;
            /* border: 1px solid green; */
            padding: 8px;
            color: green;
            border-radius: 4px;
            /* background-color: #F0FDF4; */
            text-decoration: line-through;
        }

        .pricing-header-section {
            padding-bottom: 56px;
            padding-top: 20px;
        }

        .pricing-header-section h1 {
            font-family: 'Manrope-Semi' !important;
            font-size: 56px;
        }

        .pricing-header-section p {
            text-align: center;
            width: 800px;
            margin: 0 auto;
            font-size: 20px;
            font-family: 'Manrope-Medium' !important;
        }

        .btn-service-pricing {
            box-shadow: rgba(196, 181, 253, 0.78) 0.318477px -0.398096px 0.509812px -1px inset, rgba(196, 181, 253, 0.73) 0.965802px -1.20725px 1.54604px -2px inset, rgba(196, 181, 253, 0.61) 2.55306px -3.19133px 4.08689px -3px inset, rgba(196, 181, 253, 0.2) 8px -10px 12.8062px -4px inset !important;
            font-family: 'Manrope-Medium' !important;
            padding: 8px;
            border-radius: 24px;
            border: 1px solid rgb(213, 213, 213);
            font-size: 14px;
            width: 101px;
            background-color: #fff;
        }

        @media (max-width: 768px) {
            .pricing-bg {
                padding: 30px;
            }

            .pricing-header-section p {
                width: unset;
                font-size: 16px !important;
            }

            .pricing-header-section h1 {
                font-size: 24px;
            }

            .pricing-section {
                margin-bottom: 20px;
            }

            .discount {
                margin-left: 13px;
                font-size: 15px;
            }

            .count-bg-one {
                border-radius: 0px !important;
            }
        }

        .pricing-start-1 {
            font-size: 16px;
            font-family: 'Manrope-Bold' !important;
        }

        .hr-4 {
            width: 100%;
            border-bottom: 1px solid #dcdcdc;
            display: block;
            margin: 0;
        }

        .count-bg-one {
            background-image: url("<?php echo e(asset('newAssets/img/marquee/bg1.png')); ?>");
            background-size: cover;
            background-position: bottom;
            background-repeat: no-repeat;
            position: relative;
            overflow: hidden;
            width: 80%;
            border-radius: 16px;
        }

        #particles-js-one {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            pointer-events: none;
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
            transition: 0.3s ease-in-out;
            width: 182px !important;
            margin: 0 auto 20px;
        }

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
            }

            .title-count-join {
                font-size: 30px;
            }

            .description-count-join {
                font-size: 16px;
            }
        }

        .join-bg {
            padding: 60px 0px;
            background-color: #fff;
        }

        .img-join {
            max-width: 20px;
            margin-left: 6px;
            margin-top: -2px;
        }
    </style>
</head>

<body>
    <div class="container-fluid pricing-bg">
        <div class="text-center">
            <button class="btn-service-pricing" style="font-family: 'Manrope-Medium';">
                <img src="<?php echo e(asset('newAssets/img/pricing/crown.png')); ?>" style="margin-right: 10px; margin-top: -3px; width:16px" loading="lazy">Pricing
            </button>
        </div>
        <div class="pricing-header-section">
            <h1 class="mb-2" style="text-align: center;">Simple Pricing for Growing Businesses.</h1>
            <p class="mt-2" style="text-align: center;">Access all the features you need to connect, grow, and succeed in the precision engineering industry. Easy, flexible, and built to support your journey.</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <div class="toggle-container">
                    <span id="monthly" class="toggle-option">Billed Monthly</span>
                    <label class="toggle-switch">
                        <input type="checkbox" id="billing-toggle">
                        <span class="slider"></span>
                    </label>
                    <span id="yearly" class="toggle-option">Billed Yearly</span>
                </div>
            </div>
        </div>

        <!-- Monthly Pricing Cards -->
        <div class="row justify-content-center monthly-cards">
            <!-- Premium Plan (Monthly) -->
            <div class="col-md-6 pricing-section">
                <div class="pricing-card position-relative">
                    <div class="pricing-header">
                        <h4 class="pricing-name">Basic</h4>
                        <h2 class="pricing-price">£ 35/month</h2>
                        <p class="pricing-description">Premium Plan – Great for businesses seeking flexibility and premium features.</p>
                    </div>
                    <a href="#" class="get-started-btn premium-btn particle-effect">
                        <div class="particles-container"></div>
                        <img src="<?php echo e(asset('newAssets/img/pricing/1.png')); ?>" style="margin-right: 12px; width:18px" loading="lazy">
                        <span class="pricing-start-1">Get Started</span>
                    </a>
                    <div class="hr-4"></div>
                    <div class="pricing-features">
                        <h5>Features</h5>
                        <div class="feature-item">
                            <span class="feature-check"><img src="<?php echo e(asset('newAssets/img/pricing/tick.png')); ?>" style="margin-right:2px; margin-top: -3px; width:15px" loading="lazy"></span>
                            <span>Premium Profile – Showcase your company with features like capacity display, slides, and feedback!</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check"><img src="<?php echo e(asset('newAssets/img/pricing/tick.png')); ?>" style="margin-right:2px; margin-top: -3px; width:15px" loading="lazy"></span>
                            <span>Free Browsing – Access local companies through our map.</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check"><img src="<?php echo e(asset('newAssets/img/pricing/tick.png')); ?>" style="margin-right:2px; margin-top: -3px; width:15px" loading="lazy"></span>
                            <span>Free Blog Post – Gain visibility on our social media platforms.</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check"><img src="<?php echo e(asset('newAssets/img/pricing/tick.png')); ?>" style="margin-right:2px; margin-top: -3px; width:15px" loading="lazy"></span>
                            <span>Free RFQs – Send unlimited RFQs to precision engineering suppliers.</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check"><img src="<?php echo e(asset('newAssets/img/pricing/tick.png')); ?>" style="margin-right:2px; margin-top: -3px; width:15px" loading="lazy"></span>
                            <span>Free Access to Job Offers – Easily find and apply for available job opportunities.</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check"><img src="<?php echo e(asset('newAssets/img/pricing/tick.png')); ?>" style="margin-right:2px; margin-top: -3px; width:15px" loading="lazy"></span>
                            <span>Free Media Package – Your content reaches up to 10,000 precision engineering experts each month.</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check"><img src="<?php echo e(asset('newAssets/img/pricing/tick.png')); ?>" style="margin-right:2px; margin-top: -3px; width:15px" loading="lazy"></span>
                            <span>5% Discount on all media products.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Elite Plan (Monthly) -->
            <!-- <div class="col-md-6 pricing-section">
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h4 class="pricing-name">Elite</h4>
                        <h2 class="pricing-price">£ 249/month</h2>
                        <p class="pricing-description">Elite Plan – Best for long-term savings and maximum efficiency.</p>
                    </div>
                    <a href="#" class="get-started-btn premium-btn particle-effect">
                        <div class="particles-container"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right me-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
                        </svg>
                        <span>Get Started</span>
                    </a>
                    <div class="hr-4"></div>
                    <div class="pricing-features">
                        <h5>Features</h5>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Premium Profile – Showcase your company with features like capacity display, slides, and feedback!</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Free Browsing – Access local companies through our map.</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Free Blog Post – Gain visibility on our social media platforms.</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Free RFQs – Send unlimited RFQs to precision engineering suppliers.</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Free Access to Job Offers – Easily find and apply for available job opportunities.</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Free Media Package – Your content reaches up to 10,000 precision engineering falling back to monthly cards when toggle is clicked -->
                        <!-- </div>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>10% Discount on all media products.</span>
                        </div>
                    </div>
                </div> -->
            <!-- </div>  -->
        </div>

        <!-- Yearly Pricing Cards -->
        <div class="row justify-content-center yearly-cards" style="display: none;">
            <!-- Premium Plan (Yearly) -->
            <div class="col-md-6 pricing-section">
                <div class="pricing-card position-relative">
                    <div class="pricing-header">
                        <h4 class="pricing-name">Premium</h4>
                        <h2 class="pricing-price"> £ 350/Year <span class="discount d-none">£ 400</span></h2>
                        <p class="pricing-description">Premium Plan – Great for businesses seeking flexibility and premium features.</p>
                    </div>
                    <a href="#" class="get-started-btn premium-btn particle-effect">
                        <div class="particles-container"></div>
                        <img src="<?php echo e(asset('newAssets/img/pricing/1.png')); ?>" style="margin-right: 12px; width:18px" loading="lazy">
                        <span class="pricing-start-1">Get Started</span>
                    </a>
                    <div class="hr-4"></div>
                    <div class="pricing-features">
                        <h5>Features</h5>
                        <div class="feature-item">
                            <span class="feature-check"><img src="<?php echo e(asset('newAssets/img/pricing/tick.png')); ?>" style="margin-right:2px; margin-top: -3px; width:15px" loading="lazy"></span>
                            <span>Premium Profile – Showcase your company with features like capacity display, slides, and feedback!</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check"><img src="<?php echo e(asset('newAssets/img/pricing/tick.png')); ?>" style="margin-right:2px; margin-top: -3px; width:15px" loading="lazy"></span>
                            <span>Free Browsing – Access local companies through our map.</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check"><img src="<?php echo e(asset('newAssets/img/pricing/tick.png')); ?>" style="margin-right:2px; margin-top: -3px; width:15px" loading="lazy"></span>
                            <span>Free Blog Post – Gain visibility on our social media platforms.</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check"><img src="<?php echo e(asset('newAssets/img/pricing/tick.png')); ?>" style="margin-right:2px; margin-top: -3px; width:15px" loading="lazy"></span>
                            <span>Free RFQs – Send unlimited RFQs to precision engineering suppliers.</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check"><img src="<?php echo e(asset('newAssets/img/pricing/tick.png')); ?>" style="margin-right:2px; margin-top: -3px; width:15px" loading="lazy"></span>
                            <span>Free Access to Job Offers – Easily find and apply for available job opportunities.</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check"><img src="<?php echo e(asset('newAssets/img/pricing/tick.png')); ?>" style="margin-right:2px; margin-top: -3px; width:15px" loading="lazy"></span>
                            <span>Free Media Package – Your content reaches up to 10,000 precision engineering experts each month.</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check"><img src="<?php echo e(asset('newAssets/img/pricing/tick.png')); ?>" style="margin-right:2px; margin-top: -3px; width:15px" loading="lazy"></span>
                            <span>5% Discount on all media products.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Elite Plan (Yearly) -->
            <!-- <div class="col-md-6 pricing-section">
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h4 class="pricing-name">Elite</h4>
                        <h2 class="pricing-price">£ 2599/year <span class="discount">15% Discount</span></h2>
                        <p class="pricing-description">Elite Plan – Best for long-term savings and maximum efficiency.</p>
                    </div>
                    <a href="#" class="get-started-btn premium-btn particle-effect">
                        <div class="particles-container"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right me-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
                        </svg>
                        <span>Get Started</span>
                    </a>
                    <div class="hr-4"></div>
                    <div class="pricing-features">
                        <h5>Features</h5>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Premium Profile – Showcase your company with features like capacity display, slides, and feedback!</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Free Browsing – Access local companies through our map.</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Free Blog Post – Gain visibility on our social media platforms.</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Free RFQs – Send unlimited RFQs to precision engineering suppliers.</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Free Access to Job Offers – Easily find and apply for available job opportunities.</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>Free Media Package – Your content reaches up to 10,000 precision engineering experts each month.</span>
                        </div>
                        <div class="feature-item">
                            <span class="feature-check">✓</span>
                            <span>10% Discount on all media products.</span>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <section class="join-bg">
        <div class="container-fluid count-bg-one">
            <div id="particles-js-one"></div>
            <div class="numbers-section-join">
                <div class="testimonials-btn2-one">
                    <span class="testi"><span><img src="<?php echo e(asset('newAssets/img/home/icons/join.png')); ?>" loading="lazy" style="width: 19px;margin-top: -2px;"></span> <span style="margin-left: 5px;">Join PRAX Market</span></span>
                </div>
                <div style="text-align: center;">
                    <h2 class="title-count-join">Join PRAX Market Today.</h2>
                    <p class="description-count-join">
                        Unlock your potential in the precision engineering industry. Experience seamless collaboration, endless opportunities, and streamlined operations—all in one place.
                    </p>
                    <div class="button-join">
                        <button>Join Now <img src="<?php echo e(asset('newAssets/img/homecomponents/arrow.png')); ?>" style="width:16px;" loading="lazy" alt="" class="img-join"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const toggle = document.getElementById('billing-toggle');
            const monthlyLabel = document.getElementById('monthly');
            const yearlyLabel = document.getElementById('yearly');
            const monthlyCards = document.querySelector('.monthly-cards');
            const yearlyCards = document.querySelector('.yearly-cards');

            // Initialize: Show monthly cards
            monthlyCards.style.display = 'flex';
            yearlyCards.style.display = 'none';
            monthlyLabel.style.fontWeight = '600';
            monthlyLabel.style.color = '#7c4dff';
            yearlyLabel.style.fontWeight = '500';
            yearlyLabel.style.color = '#333';

            toggle.addEventListener('change', function() {
                if (this.checked) {
                    // Show yearly cards
                    monthlyCards.style.display = 'none';
                    yearlyCards.style.display = 'flex';
                    yearlyLabel.style.fontWeight = '600';
                    yearlyLabel.style.color = '#7c4dff';
                    monthlyLabel.style.fontWeight = '500';
                    monthlyLabel.style.color = '#333';
                } else {
                    // Show monthly cards
                    yearlyCards.style.display = 'none';
                    monthlyCards.style.display = 'flex';
                    monthlyLabel.style.fontWeight = '600';
                    monthlyLabel.style.color = '#7c4dff';
                    yearlyLabel.style.fontWeight = '500';
                    yearlyLabel.style.color = '#333';
                }
            });

            // Particle effects for buttons
            let buttonCounter = 0;

            function setupParticlesForButton(btn, color) {
                const containerId = "particles-container-" + buttonCounter++;
                const particlesContainer = btn.querySelector('.particles-container');
                particlesContainer.id = containerId;

                btn.addEventListener("mouseenter", function() {
                    if (!btn.particlesInitialized) {
                        particlesJS(containerId, {
                            "particles": {
                                "number": {
                                    "value": 80,
                                    "density": {
                                        "enable": true,
                                        "value_area": 300
                                    }
                                },
                                "color": {
                                    "value": color
                                },
                                "shape": {
                                    "type": "circle"
                                },
                                "opacity": {
                                    "value": 0.8
                                },
                                "size": {
                                    "value": 1
                                },
                                "move": {
                                    "enable": true,
                                    "speed": 2,
                                    "direction": "none",
                                    "random": true,
                                    "out_mode": "bounce"
                                },
                                "line_linked": {
                                    "enable": false
                                }
                            }
                        });
                        btn.particlesInitialized = true;
                    }
                });
            }

            const premiumBtns = document.querySelectorAll(".premium-btn.particle-effect");
            premiumBtns.forEach(function(btn) {
                setupParticlesForButton(btn, "#ffffff");
            });

            const regularBtns = document.querySelectorAll(".get-started-btn.particle-effect:not(.premium-btn)");
            regularBtns.forEach(function(btn) {
                setupParticlesForButton(btn, "#8B5CF6");
            });
        });

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
    </script>
</body>

</html><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/staticPages/pricing/pricingComponents/pricing.blade.php ENDPATH**/ ?>