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
        .usage-header-main {
            /* background: linear-gradient(to right, #2b1055, #4c1d95); */
            color: white;
            padding: 4rem 2rem;
            text-align: center;
            position: relative;
            background-image: url("{{ asset('newAssets/img/marquee/bg1.png') }}");
            overflow: hidden;
            /* margin-bottom: 2rem; */
        }

        #particles-usage {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            pointer-events: none;
            /* Add this so clicks pass through */
        }

        .usage-header-main h1 {
            background: linear-gradient(290deg, rgb(245, 243, 255) 0%, rgb(196, 181, 253) 100%);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: "Manrope-Bold" !important;
            font-size: 50px;
            position: relative;
            overflow: hidden;
        }

        .usage-bg {
            background-image: url("{{ asset('newAssets/img/privacypolicy/1.png') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 60px;

        }

        .usage-container {

            /* margin: 0 auto; */
            padding: 20px;

            border-radius: 8px;

        }

        .section-divider {
            height: 1px;
            background-color: #8e44ad;
            margin: 2rem 0;
        }

        .usage-header {
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

        .usage-container h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #333;
            margin-top: 1.5rem;
            margin-bottom: 1rem;
        }

        .usage-container ul {
            padding-left: 1.5rem;
        }

        .usage-containerul li {
            margin-bottom: 0.5rem;
        }

        .usage-head {
            font-size: 18px;
            font-family: 'Manrope-Bold' !important;
        }

        .usage-para {
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

    <div class="usage-header-main">
        <div id="particles-usage"></div>
        <h1>Usage Policy</h1>
    </div>

    <section class="usage-bg">

        <div class="container usage-container my-5">
            <div class="usage-header">
                <p class="last-updated"><strong>Effective Date: 23-02-2024</strong></p>
                <!-- <h1>Privacy Policy</h1> -->
                <!-- <p class="last-updated-2">PRAX Market ("PRAX", "we", "us", or "our") is committed to protecting the privacy and security of the personal data we collect and process in accordance with applicable data protection laws, including the General Data Protection Regulation (GDPR) in the United Kingdom. This Data Usage Policy outlines how we collect, use, disclose, and store personal data obtained from individuals who visit our website or use our services.</p> -->
            </div>

            <div class="border-line"></div>

            <section>
                <h2 class="usage-head">1. Introduction</h2>
                <p class="usage-para"><strong>PRAX Market</strong> ("PRAX", "we", "us", or "our") is committed to protecting the privacy and security of the personal data we collect and process in accordance with applicable data protection laws, including the General Data Protection Regulation (GDPR) in the United Kingdom. This Data Usage Policy outlines how we collect, use, disclose, and store personal data obtained from individuals who visit our website or use our services</p>
                <!-- <ul class="terms-para">
                    <li>Contact information (such as name, address, email address, and phone number)</li>
                    <li>Payment information (such as credit card details or other payment method information)</li>
                    <li>Business information (such as company name, job title, and industry)</li>
                    <li>User-generated content (such as reviews, comments, or messages)</li>
                    <li>Usage data (such as IP address, browser type, device information, and website activity)</li>
                </ul> -->
            </section>

            <section>
                <h2 class="usage-head">2. Information We Collect</h2>
                <p class="usage-para"><strong>2.1</strong> Personal Data</p>
                <p class="usage-para">We may collect and process the following categories of personal data:</p>
                <ul class="usage-para">
                    <li><strong>Contact Information</strong>: Name, address, email address, and telephone number.</li>
                    <li><strong>Business Information</strong>: Company name, job title, and industry.</li>
                    <li><strong>Financial Information</strong>Bank account details and payment information.</li>
                    <li><strong>Website Usage Information</strong>: IP address, browser type, operating system, and other technical information collected through cookies and similar technologies.</li>
                    <li><strong>Communications</strong>: Any information you provide to us when contacting us via phone, email, or other means of communication.</li>
                </ul>
                <p class="usage-para"><strong>2.2</strong>Children's Personal Data</p>
                <p class="usage-para">Our services are not intended for individuals under the age of 16. We do not knowingly collect or process personal data from children without prior verifiable parental consent. If we become aware that we have collected personal data from a child without parental consent, we will take steps to delete such information promptly.</p>
            </section>

            <section>
                <h2 class="usage-head">3. How We Use Personal Data</h2>
                <p class="usage-para">We may use personal data for the following purposes:</p>
                <ul class="usage-para">
                    <li><strong>Service Providers</strong>: We may engage third-party service providers to assist us in delivering our services and processing personal data on our behalf. These service providers are contractually bound to handle personal data in accordance with applicable data protection laws.</li>
                    <li><strong>Business Transfers</strong>: In the event of a merger, acquisition, or sale of all or a portion of our assets, personal data may be transferred to the acquiring entity.</li>
                    <li><strong>Legal Compliance</strong>We may disclose personal data if required to do so by law or in response to valid legal requests.</li>
                </ul>
            </section>

            <section>
                <h2 class="usage-head">4. Disclosure of Personal Data</h2>
                <p class="usage-para">We may use personal data for the following purposes:</p>
                <ul class="usage-para">
                    <li><strong>Providing Services</strong>: To facilitate and deliver the services requested by our users, including processing orders, managing accounts, and providing customer support.</li>
                    <li><strong>Communication</strong>: To respond to inquiries, provide information about our products and services, and send marketing communications (where permitted by applicable laws).</li>
                    <li><strong>Payment Processing: </strong>To process payments and prevent fraudulent transactions.</li>
                    <li><strong>Legal Obligations: </strong> To comply with legal obligations, such as tax and accounting requirements, and to protect our rights, property, or safety, and that of our users and others.</li>
                </ul>
            </section>

            <section>
                <h2 class="usage-head">5. Data Security</h2>
                <p class="usage-para"> We implement appropriate technical and organisational measures to protect personal data against unauthorised access, alteration, disclosure, or destruction. However, no method of transmission over the internet or electronic storage is completely secure. Therefore, while we strive to protect personal data, we cannot guarantee its absolute security.</p>
            </section>

            <section>
                <h2 class="usage-head">6. Data Retention</h2>
                <p class="usage-para">We retain personal data for as long as necessary to fulfill the purposes outlined in this Data Usage Policy, unless a longer retention period is required or permitted by law. When personal data is no longer necessary, we will securely delete or anonymize it.

</p>
            </section>

            <section>
                <h2 class="usage-head">7. Your Rights</h2>
                <p class="usage-para">You have certain rights regarding your personal data, including the right to access, rectify, erase, restrict or object to the processing of your personal data. To exercise these rights, or if you have any questions or concerns about our data usage practices, please contact us using the contact information provided below.</p>
            </section>

            <section>
                <h2 class="usage-head">8. Contact Us</h2>
                <p class="usage-para">If you have any questions or concerns about this Terms and Conditions, please contact us at:</p>
                <address class="usage-para">
                    <strong>PRAX Market</strong><br>
                    Unit 3 Enfield Court, Nuffield Road,<br>
                    St Ives, PE273NJ, United Kingdom<br>
                    <strong>Land Line:</strong> +44 7961008744<br>
                    <strong>Email:</strong> <a href="mailto:info@praxmarket.com">info@praxmarket.com</a>
                </address>
            </section>

            <div class="mt-4">
                <p class="usage-para">We may update this Data Usage Policy from time to time. Any changes will be posted on our website, and the effective date will be revised accordingly. It is your responsibility to review this policy periodically to stay informed about how we collect, use, disclose, and store personal data.
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