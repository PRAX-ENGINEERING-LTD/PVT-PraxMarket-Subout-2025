<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('new-assets/img/favicon.ico')); ?>" />
    <link rel="stylesheet" href="<?php echo e(url('css/app.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Privacy Policy</title>
    <style>
        /* main {
            background-color: #fff;

            position: relative;
            z-index: 2;

            overflow: hidden;
            min-height: 100vh;
        } */
        .privacy-header-main {
            /* background: linear-gradient(to right, #2b1055, #4c1d95); */
            color: white;
            padding: 4rem 2rem;
            text-align: center;
            position: relative;
            background-image: url("<?php echo e(asset('newAssets/img/marquee/bg1.png')); ?>");
            overflow: hidden;
            /* margin-bottom: 2rem; */
        }

        #particles-privacy {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            pointer-events: none;
            /* Add this so clicks pass through */
        }

        .privacy-header-main h1 {
            background: linear-gradient(290deg, rgb(245, 243, 255) 0%, rgb(196, 181, 253) 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: "Manrope-Bold" !important;
            font-size: 50px;
            position: relative;
            overflow: hidden;
        }

        .privacy-bg {
            background-image: url("<?php echo e(asset('newAssets/img/privacypolicy/1.png')); ?>");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 60px;

        }

        .privacy-container {

            /* margin: 0 auto; */
            padding: 20px;

            border-radius: 8px;

        }

        .section-divider {
            height: 1px;
            background-color: #8e44ad;
            margin: 2rem 0;
        }

        .privacy-header {
            margin-bottom: 2rem;
        }

        .last-updated {
            /* color: #6c757d; */
            margin-bottom: 1.5rem;
            font-size: 20px;
            font-family: 'Manrope-Bold' !important;
        }

        .last-updated-2 {
            font-family: 'Manrope-Medium' !important;
            font-size: 20px;
        }

        .privacy-container h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #333;
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }

        .privacy-container ul {
            padding-left: 1.5rem;
        }

        .privacy-containerul li {
            margin-bottom: 0.5rem;
        }

        .privacy-head {
            font-size: 18px;
            font-family: 'Manrope-Bold' !important;
        }

        .privacy-para {
            font-size: 16px;
            font-family: 'Manrope-Medium' !important;
        }

        .border-line {
            /* width: 100%;
            height: 200px; */
            /* Adjust height as needed */
            border-bottom: 2px solid;
            border-image: linear-gradient(to right, transparent, #A855F7, transparent) 1;
            border-image-slice: 1;
            /* Important to show gradient */
            /* padding: 20px; */
        }

    </style>
</head>

<body>

    <div class="privacy-header-main">
        <div id="particles-privacy"></div>
        <h1>Privacy Policy</h1>
    </div>

    <section class="privacy-bg">

        <div class="container privacy-container my-5">
            <div class="privacy-header">
                <p class="last-updated"><strong>Last updated: 23-02-2024</strong></p>
                <!-- <h1>Privacy Policy</h1> -->
                <p class="last-updated-2">At <strong>PRAX Market</strong> ("us", "we", or "our"), we are committed to protecting the privacy and personal information of our users. This Privacy Policy outlines how we collect, use, and disclose personal information when you use our website or services.</p>
            </div>

            <div class="border-line"></div>

            <section>
                <h2 class="privacy-head">1. Collection of Personal Information</h2>
                <p class="privacy-para">We may collect personal information from you when you visit our website, register an account, make a purchase, communicate with us, or participate in any activities on our platform. The types of personal information we may collect include:</p>
                <ul class="privacy-para">
                    <li>Contact information (such as name, address, email address, and phone number)</li>
                    <li>Payment information (such as credit card details or other payment method information)</li>
                    <li>Business information (such as company name, job title, and industry)</li>
                    <li>User-generated content (such as reviews, comments, or messages)</li>
                    <li>Usage data (such as IP address, browser type, device information, and website activity)</li>
                </ul>
            </section>

            <section>
                <h2 class="privacy-head">2. Use of Personal Information</h2>
                <p class="privacy-para">We use the personal information we collect for various purposes, including:</p>
                <ul class="privacy-para">
                    <li>To provide and improve our services, products, and customer support</li>
                    <li>To process transactions and fulfill orders</li>
                    <li>To communicate with you about our products, services, and promotions</li>
                    <li>To personalise your experience on our platform</li>
                    <li>To analyse and understand how our website is used</li>
                    <li>To comply with legal obligations and protect our rights</li>
                </ul>
            </section>

            <section>
                <h2 class="privacy-head">3. Disclosure of Personal Information</h2>
                <p class="privacy-para">We may disclose your personal information to third parties in the following circumstances:</p>
                <ul class="privacy-para">
                    <li>Service Providers: We may share your personal information with third-party service providers who assist us in operating our business, such as payment processors, shipping companies, and marketing agencies. These service providers are authorised to use your personal information only as necessary to provide services to us.</li>
                    <li>Business Transfers: In the event of a merger, acquisition, or sale of all or a portion of our assets, your personal information may be transferred to the acquiring company.</li>
                    <li>Legal Requirements: We may disclose your personal information if required to do so by law or in response to valid requests by public authorities (e.g., government agencies, law enforcement).</li>
                </ul>
            </section>

            <section>
                <h2 class="privacy-head">4. Security</h2>
                <p class="privacy-para">We take reasonable measures to protect the personal information we collect from unauthorised access, disclosure, alteration, or destruction. However, please note that no method of transmission over the internet or electronic storage is 100% secure, and we cannot guarantee absolute security.</p>
            </section>

            <section>
                <h2 class="privacy-head">5. Cookies and Tracking Technologies</h2>
                <p class="privacy-para">We use cookies and similar tracking technologies to enhance your browsing experience, analyse website traffic, and personalise content. You can manage your cookie preferences through your browser settings. Please note that disabling cookies may affect certain functionality on our website.</p>
            </section>

            <section>
                <h2 class="privacy-head">6. Your Rights</h2>
                <p class="privacy-para">You have certain rights regarding your personal information, including the right to access, update, or delete your information. If you would like to exercise any of these rights, please contact us using the contact information provided below.</p>
            </section>

            <section>
                <h2 class="privacy-head">7. Changes to this Privacy Policy</h2>
                <p class="privacy-para">We may update this Privacy Policy from time to time to reflect changes in our practices or legal obligations. We encourage you to review this page periodically for the latest information on our privacy practices.</p>
            </section>

            <section>
                <h2 class="privacy-head">8. Contact Us</h2>
                <p class="privacy-para">If you have any questions or concerns about this Privacy Policy or our privacy practices, please contact us at:</p>
                <address class="privacy-para">
                    <strong>PRAX Market</strong><br>
                    Unit 3 Enfield Court, Nuffield Road,<br>
                    St Ives, PE273NJ, United Kingdom<br>
                    <strong>Land Line:</strong> +44 7961008744<br>
                    <strong>Email:</strong> <a href="mailto:info@praxmarket.com">info@praxmarket.com</a>
                </address>
            </section>

            <div class="mt-4">
                <p class="privacy-para">By using our website or services, you agree to the terms of this Privacy Policy.</p>
            </div>


        </div>


    </section>







</body>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    if (document.getElementById('particles-privacy')) {
        particlesJS('particles-privacy', {
            "particles": {
                "number": {
                    "value": 200,
                    "density": {
                        "enable": true,
                        "value_area": 1000
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

                },
            }
        });
    }
</script>

</html><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/staticPages/privacypolicy/privacypolicyComponents/privacypolicy.blade.php ENDPATH**/ ?>