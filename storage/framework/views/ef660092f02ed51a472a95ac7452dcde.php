<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .contact-container {
            padding:64px 40px 40px 40px;
            background-image: url("<?php echo e(asset('newAssets/img/about/bg1.png')); ?>");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .contact-left {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /* padding: 2rem; */
        }

        .contact-left h1 {
            font-size: 56px;
            font-family: "Manrope-Semi" !important;
            margin-bottom: 1.5rem;
        }

        .contact-left p {
            font-size: 20px;
            text-align: center;
            margin-bottom:0px;
            width: 400px;
            font-family: "Manrope-Medium" !important;
        }

        .illustration-container {
            max-width: 400px;
            margin: 0 auto;
        }

        .contact-form {
            background-color: #e5e5e5;
            padding: 2rem;
            border-radius: 10px;
        }

        .contact-form h2 {
            font-size: 32px;
            font-family: "Manrope-Semi" !important;
            margin-bottom: 1.5rem;
        }

        .form-control {
            border-radius: 8px;
    padding: 12px;
    margin-bottom: 1rem;
    font-size: 14px !important;
    font-family: "Manrope-Medium" !important;
    color: #999 !important;
    height: 40px;
        }

        .form-label {
            color: #999999;
            font-family: "Manrope-Medium" !important;
            font-size: 14px;
        }

        textarea.form-control {
            min-height: 120px;
        }

        .btn-clear-contact {
            background-color: #fff;
    color: #7366ff;
    border: 1px solid #7366ff;
    border-radius: 8px;
    padding: 12px;
    font-family: "Manrope-Medium" !important;
    cursor: pointer;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
        }

        .btn-submit-contact {
            background-color: #7366ff;
            color: white;
            border: none;
            border-radius: 8px;
            height: 40px;
            padding: 12px;
            font-family: "Manrope-Medium" !important;
            cursor: pointer;
            display: flex;
    justify-content: center;
    align-items: center;
        }

        @media (max-width: 768px) {
            .contact-container {
                padding: 30px;
            }
            .contact-left h1{
                font-size: 24px;
            }
            .contact-left p{
                font-size: 16px;
                width: unset;
            }
            .contact-form h2{
                font-size: 24px;
                text-align: center;
            }
        }

        /* Modal CSS */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .modal.show {
            display: flex;
        }

        .modal-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(3px);
        }

        .modal-content {
            position: relative;
            background-color: #f9f9f9;
            width: 90%;
            max-width: 500px;
            padding: 30px;
            border-radius: 8px;
            z-index: 1001;
        }

        .modal-close {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: #aaa;
            color: white;
            width: 30px;
            height: 30px;
            border: none;
            border-radius: 4px;
            font-size: 20px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-close:hover {
            background-color: #999;
        }

        .modal-body {
            text-align: center;
        }

        .modal-illustration {
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .modal-illustration img {
            max-width: 100%;
            height: auto;
        }

        .thank-you-heart {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #6c63ff;
            color: white;
            font-weight: bold;
            padding: 15px 25px;
            border-radius: 50px;
        }

        .modal h2 {
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: #333;
        }

        .modal p {
            color: #666;
            line-height: 1.6;
        }

        .form-control {
            border: none;
        }

        .form-control:focus {
            box-shadow: none;
            outline: none;
        }
        
        textarea.form-control::placeholder {
    color: #999999 !important;
}

input.form-control::placeholder {
    color: #999999 !important;
}
    </style>
</head>

<body>
    <div class="container-fluid contact-container">
        <div class="row">
            <!-- Left column with heading and illustration -->
            <div class="col-md-6 contact-left">
                <h1>Contact Us</h1>
                <p>Feel Free to contact us any time. We will get back to you as soon as we can!.</p>
                <img src="<?php echo e(asset('newAssets/img/contact/1.png')); ?>" alt="" style="width: 100%; object-fit: cover; max-width: 440px;" loading="lazy" class="img-fluid">
            </div>

            <!-- Right column with contact form -->
            <div class="col-md-6">
                <div class="contact-form">
                    <h2>Contact Us</h2>
                    <form id="contactForm" method="POST" action="<?php echo e(route('submitRequest')); ?>">
                        <?php echo csrf_field(); ?> <!-- Add CSRF token for Laravel -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter Your Number" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" placeholder="Your message..." required></textarea>
                        </div>
                        <div class="row g-3">
                            <div class="col-6">
                                <button type="submit" id="submitBtn" class="btn-submit-contact w-100">Submit</button>
                            </div>
                            <div class="col-6">
                                <button type="button" id="clearBtn" class="btn-clear-contact w-100">Clear</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="successModal" class="modal">
        <div class="modal-overlay"></div>
        <div class="modal-content">
            <button class="modal-close">×</button>
            <div class="modal-body">
                <div class="modal-illustration">
                    <img src="<?php echo e(asset('newAssets/img/contact/2.png')); ?>"  loading="lazy" alt="Thank you illustration">
                </div>
                <h2>Thank you for contacting us</h2>
                <p>Your message has been successfully submitted. Our team has received your inquiry and will get back to you shortly.</p>
            </div>
        </div>
    </div>

    <div id="errorModal" class="modal">
        <div class="modal-overlay"></div>
        <div class="modal-content">
            <button class="modal-close">×</button>
            <div class="modal-body">
                <div class="modal-illustration">
                    <img src="<?php echo e(asset('newAssets/img/contact/3.png')); ?>" loading="lazy" alt="Error illustration">
                </div>
                <h2>Submission Error</h2>
                <p>We're sorry, but it seems there was an issue submitting your form. Please check your information and try again.</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            const clearBtn = document.getElementById('clearBtn');
            const submitBtn = document.getElementById('submitBtn');
            const successModal = document.getElementById('successModal');
            const errorModal = document.getElementById('errorModal');
            const modalCloseButtons = document.querySelectorAll('.modal-close');
            const modalOverlays = document.querySelectorAll('.modal-overlay');

            // Form submission with AJAX
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(contactForm);
                submitBtn.disabled = true; // Disable button to prevent multiple submissions

                // console.log('Form submitted, sending request...');
                // console.log('Form Data:', Object.fromEntries(formData));

                fetch(contactForm.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value // CSRF token for Laravel
                        }
                    })
                    .then(response => {
                        // console.log('Response status:', response.status); // Log HTTP status
                        return response.json();
                    })
                    .then(data => {
                        submitBtn.disabled = false; // Re-enable button
                        console.log('Server Response:', data); // Log the full response data

                        if (data.success === true) {
                            // console.log('Success is true, showing success modal');
                            showModal(successModal);
                            contactForm.reset(); // Clear form on success
                        } else {
                            // console.log('Success is false, showing error modal');
                            showModal(errorModal);
                        }
                    })
                    .catch(error => {
                        submitBtn.disabled = false; // Re-enable button on error
                        // console.log('Error occurred:', error); // Log any errors
                        showModal(errorModal);
                    });
            });

            // Clear button event
            clearBtn.addEventListener('click', function() {
                contactForm.reset();
                // console.log('Form cleared');
            });

            // Close modal when clicking the close button
            modalCloseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    closeAllModals();
                    // console.log('Modal closed by close button');
                });
            });

            // Close modal when clicking the overlay
            modalOverlays.forEach(overlay => {
                overlay.addEventListener('click', function() {
                    closeAllModals();
                    // console.log('Modal closed by overlay click');
                });
            });

            // Close modals when pressing Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeAllModals();
                    // console.log('Modal closed by Escape key');
                }
            });

            // Function to show a modal
            function showModal(modal) {
                closeAllModals();
                modal.classList.add('show');
                document.body.style.overflow = 'hidden';
                // console.log(`Showing modal: ${modal.id}`);
            }

            // Function to close all modals
            function closeAllModals() {
                successModal.classList.remove('show');
                errorModal.classList.remove('show');
                document.body.style.overflow = '';
                // console.log('All modals closed');
            }
        });
    </script>
</body>

</html><?php /**PATH /var/www/html/prax/PVT-PraxMarket-website-2025/resources/views/staticPages/contactUs/contactUsComponents/contactUs.blade.php ENDPATH**/ ?>