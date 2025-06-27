<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{asset('new-assets/img/favicon.ico')}}" />
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Terms And Conditions</title>
    <style>
        /* main {
            background-color: #fff;

            position: relative;
            z-index: 2;

            overflow: hidden;
            min-height: 100vh;
        } */
         
        .terms-header-main {
            /* background: linear-gradient(to right, #2b1055, #4c1d95); */
            color: white;
            padding: 4rem 2rem;
            text-align: center;
            position: relative;
            background-image: url("{{ asset('newAssets/img/marquee/bg1.png') }}");
            overflow: hidden;
            /* margin-bottom: 2rem; */
        }

        #particles-terms {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            pointer-events: none;
            /* Add this so clicks pass through */
        }

        .terms-header-main h1 {
            background: linear-gradient(290deg, rgb(245, 243, 255) 0%, rgb(196, 181, 253) 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: "Manrope-Bold" !important;
            font-size: 50px;
            position: relative;
            overflow: hidden;
        }

        .terms-bg {
            background-image: url("{{ asset('newAssets/img/privacypolicy/1.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 60px;

        }

        .terms-container {

            /* margin: 0 auto; */
            padding: 20px;

            border-radius: 8px;

        }

        .section-divider {
            height: 1px;
            background-color: #8e44ad;
            margin: 2rem 0;
        }

        .terms-header {
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

        .terms-container h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #333;
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }

        .terms-container ul {
            padding-left: 1.5rem;
        }

        .terms-containerul li {
            margin-bottom: 0.5rem;
        }

        .terms-head {
            font-size: 18px;
            font-family: 'Manrope-Bold' !important;
        }

        .terms-para {
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

    <div class="terms-header-main">
        <div id="particles-terms"></div>
        <h1>Terms and Conditions</h1>
    </div>

    <section class="terms-bg">

        <div class="container terms-container my-5">
            <div class="terms-header">
                <p class="last-updated"><strong>Effective Date: 23-02-2024</strong></p>
                <!-- <h1>Privacy Policy</h1> -->
                <p class="last-updated-2">These Terms and Conditions ("Terms") govern your use of the <strong>PRAX Market</strong> mobile application (the "App") provided by <strong>PRAX Market</strong>, an All-in-One Precision Engineering Industry Marketplace located at Unit 3 Enfield Court Nuffield Road, PE273NJ, St Ives, United Kingdom ("PRAX Market," "we," "us," or "our"). By accessing or using the App, you agree to be bound by these Terms. If you do not agree with these Terms, you may not use the App.</p>
            </div>

            <div class="border-line"></div>

            <section>
                <h2 class="terms-head">1. Account Registration</h2>
                <p class="terms-para"><strong>1.1</strong> In order to use certain features of the App, you may need to create an account. You agree to provide accurate and complete information during the registration process and to keep your account information updated.</p>
                <p class="terms-para"><strong>1.2</strong> You are responsible for maintaining the confidentiality of your account credentials, including your username and password. You agree not to share your account credentials with any third party.</p>
                <p class="terms-para"><strong>1.3</strong> You are solely responsible for any activity that occurs under your account. <strong>PRAX Market</strong> shall not be liable for any loss or damage arising from unauthorized access to or use of your account.</p>
                <!-- <ul class="terms-para">
                    <li>Contact information (such as name, address, email address, and phone number)</li>
                    <li>Payment information (such as credit card details or other payment method information)</li>
                    <li>Business information (such as company name, job title, and industry)</li>
                    <li>User-generated content (such as reviews, comments, or messages)</li>
                    <li>Usage data (such as IP address, browser type, device information, and website activity)</li>
                </ul> -->
            </section>

            <section>
                <h2 class="terms-head">2. Use of the App</h2>
                <p class="terms-para"><strong>2.1</strong> The App is intended for individuals who are at least 18 years old. By using the App, you represent and warrant that you are at least 18 years old.</p>
                <p class="terms-para"><strong>2.2</strong> You agree to use the App in compliance with all applicable laws, regulations, and these Terms.</p>
                <p class="terms-para"><strong>2.3</strong> You acknowledge that <strong>PRAX Market</strong> may update, modify, or discontinue the App, or any features within the App, at any time without prior notice.</p>
                <p class="terms-para"><strong>2.4</strong> You agree not to:</p>
                <ul class="terms-para">
                    <li>Use the App for any illegal or unauthorized purpose;</li>
                    <li>Interfere with or disrupt the operation of the App or servers hosting the App;</li>
                    <li>Upload, post, or transmit any content that is unlawful, harmful, threatening, abusive, harassing, defamatory, vulgar, obscene, or otherwise objectionable;</li>
                    <li>Impersonate any person or entity, or falsely state or otherwise misrepresent yourself or your affiliation with any person or entity;</li>
                    <li>Collect or store personal information of other users without their consent;</li>
                    <li>Use any automated means, including robots, crawlers, or data mining tools, to access or use the App;</li>
                    <li>Engage in any activity that may interfere with or disrupt the App or the servers hosting the App;</li>
                    <li>Attempt to gain unauthorized access to any portion of the App or any other systems or networks connected to the App;</li>
                </ul>
            </section>

            <section>
                <h2 class="terms-head">3. Intellectual Property</h2>
                <p class="terms-para"><strong>3.1</strong> The App, including its design, text, graphics, images, logos, trademarks, and other content, are owned by <strong>PRAX Market</strong> or its licensors and are protected by intellectual property laws.</p>
                <p class="terms-para"><strong>3.2</strong> You are granted a limited, non-exclusive, non-transferable, revocable license to use the App for your personal, non-commercial use. You may not reproduce, modify, distribute, or create derivative works of the App without prior written consent from <strong>PRAX Market</strong>.</p>
            </section>

            <section>
                <h2 class="terms-head">4. Privacy</h2>
                <p class="terms-para"><strong>4.1</strong> Your privacy is important to us. Please refer to our Privacy Policy for information on how we collect, use, and disclose your personal information.</p>
            </section>

            <section>
                <h2 class="terms-head">5. Disclaimer of Warranties</h2>
                <p class="terms-para"><strong>5.1</strong> The App is provided on an "as is" and "as available" basis. <strong>PRAX Market</strong> makes no warranties or representations, express or implied, regarding the App, including without limitation, its accuracy, completeness, reliability, or availability.</p>
                <p class="terms-para"><strong>5.2 PRAX Market</strong> does not warrant that the App will be error-free, secure, or uninterrupted, or that any defects will be corrected.</p>
                <p class="terms-para"><strong>5.3 PRAX Market</strong> shall not be liable for any direct, indirect, incidental, special, or consequential damages arising out of or in connection with the use or inability to use the App.</p>
            </section>

            <section>
                <h2 class="terms-head">6. Indemnification</h2>
                <p class="terms-para"><strong>6.1</strong> You agree to indemnify, defend, and hold harmless <strong>PRAX Market</strong> and its officers, directors, employees, and agents from and against any claims, liabilities, damages, losses, costs, or expenses, arising out of or in connection with your use of the App or any violation of these Terms.</p>
            </section>

            <section>
                <h2 class="terms-head">7. Governing Law and Dispute Resolution</h2>
                <p class="terms-para"><strong>7.1</strong> These Terms shall be governed by and construed in accordance with the laws of the United Kingdom.</p>
                <p class="terms-para"><strong>7.2</strong> Any dispute, controversy, or claim arising out of or relating to these Terms or the breach, termination, or invalidity thereof, shall be settled by arbitration in accordance with the rules of the United Kingdom.</p>
            </section>

            <section>
                <h2 class="terms-head">8. Contact Us</h2>
                <p class="terms-para">If you have any questions or concerns about this Terms and Conditions, please contact us at:</p>
                <address class="terms-para">
                    <strong>PRAX Market</strong><br>
                    Unit 3 Enfield Court, Nuffield Road,<br>
                    St Ives, PE273NJ, United Kingdom<br>
                    <strong>Land Line:</strong> +44 7961008744<br>
                    <strong>Email:</strong> <a href="mailto:info@praxmarket.com">info@praxmarket.com</a>
                </address>
            </section>

            <div class="mt-4">
                <p class="terms-para">By using our website or services, you acknowledge that you have read, understood, and agreed to these Terms and Conditions.

                </p>
            </div>


        </div>


    </section>







</body>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
    if (document.getElementById('particles-terms')) {
        particlesJS('particles-terms', {
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

</html>




