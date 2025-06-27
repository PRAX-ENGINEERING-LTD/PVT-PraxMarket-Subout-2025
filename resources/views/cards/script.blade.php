<script>
    var stripe = Stripe(stripeKey);
    var elements = stripe.elements();
    var style = {
        base: {
            color: "#000000",

            '::placeholder': {
                color: '#929292',
            },
        },
    };

    var cardNumberElement = elements.create('cardNumber', {
        style: style,
        placeholder: CardNumberPlaceHolderText,
        classes: {
            base: 'form-control'
        },
    });
    cardNumberElement.mount('#card-number-element');
    var cardExpiryElement = elements.create('cardExpiry', {
        style: style,
        placeholder: CardExpiryPlaceHolderText,
        classes: {
            base: 'form-control'
        },
    });
    cardExpiryElement.mount('#card-expiry-element');

    var cardCvcElement = elements.create('cardCvc', {
        style: style,
        placeholder: CardCvvPlaceHolderText,
        classes: {
            base: 'form-control'
        },
    });
    cardCvcElement.mount('#card-cvc-element');


    // validation part
    var isCardCvvVerified = false;
    var isCardNumberVerified = false;
    var isCardExpiryVerified = false;


    // card number validation
    cardNumberElement.on('change', function(event) {
        const cardNumberValidationText = document.getElementById("cardNumberValidationText");
        cardNumberValidationText.classList.remove("d-none");
        var eventIdentifier = event.complete;
        if (eventIdentifier) {
            var isCardNumberVerified = true;
            const cardNumberValidationText = document.getElementById("cardNumberValidationText");
            cardNumberValidationText.classList.add("d-none");
            cardNumberValidationText.setAttribute("verified", "");
        } else {
            var isCardNumberVerified = false;
            const cardNumberValidationText = document.getElementById("cardNumberValidationText");
            cardNumberValidationText.classList.remove("d-none");
            cardNumberValidationText.removeAttribute("verified");
        }

        triggerRestrictions();

    });

    // card expiry validation

    cardExpiryElement.on('change', function(event) {
        const cardExpiryValidationText = document.getElementById("cardExpiryValidationText");
        cardExpiryValidationText.classList.remove("d-none");
        var eventIdentifierForCardExpiry = event.complete;
        if (eventIdentifierForCardExpiry) {
            var isCardExpiryVerified = true;
            const cardExpiryValidationText = document.getElementById("cardExpiryValidationText");
            cardExpiryValidationText.classList.add("d-none");
            cardExpiryValidationText.setAttribute("verified", "");

        } else {
            var isCardExpiryVerified = false;
            const cardExpiryValidationText = document.getElementById("cardExpiryValidationText");
            cardExpiryValidationText.classList.remove("d-none");
            cardExpiryValidationText.removeAttribute("verified");

        }
        triggerRestrictions();

    });

    // card cvv validation


    cardCvcElement.on('change', function(event) {
        const cardCvvValidationText = document.getElementById("cardCvvValidationText");
        cardCvvValidationText.classList.remove("d-none");
        var eventIdentifierForCardCvv = event.complete;
        if (eventIdentifierForCardCvv) {
            var isCardCvvVerified = true;
            const cardCvvValidationText = document.getElementById("cardCvvValidationText");
            cardCvvValidationText.classList.add("d-none");
            cardCvvValidationText.setAttribute("verified", "");

        } else {
            var isCardCvvVerified = false;
            const cardCvvValidationText = document.getElementById("cardCvvValidationText");
            cardCvvValidationText.classList.remove("d-none");
            cardCvvValidationText.removeAttribute("verified");

        }
        triggerRestrictions();
    });



    function triggerRestrictions() {


        var submitButton = $("#flexButton");


        var button = document.getElementById("flexButton");
        button.setAttribute("disabled", "");

        const cardCvvValidationText = document.getElementById("cardCvvValidationText");
        const cardExpiryValidationText = document.getElementById("cardExpiryValidationText");
        const cardNumberValidationText = document.getElementById("cardNumberValidationText");

        submitButton.prop("disabled", true);

        if (cardCvvValidationText.hasAttribute("verified")) {
            if (cardExpiryValidationText.hasAttribute("verified")) {
                if (cardNumberValidationText.hasAttribute("verified")) {
                    submitButton.prop("disabled", false);
                }
            }
        }

    }





    // Handle form submission
    const form = document.getElementById('frmAddCard');
    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        const result = await stripe.createToken(cardNumberElement);


        if (result.error) {
            reloadWithToast();
            return;
        }

        const stripeToken = result.token.id;


        // Fetch Setup Intent client secret from your server
        const response = await fetch(appurl + 'setup-intent?customerID=' + customerID + '&stripeToken=' + stripeToken, {
            method: 'GET'
        });

        const {
            client_secret,
            setupIntentID,
            stripeCustomerID
        } = await response.json();


        if (client_secret.length == 0) {
            reloadWithToast();
        } else {
            // Confirm the Setup Intent with setup_future_usage
            const {
                setupIntent,
                error
            } = await stripe.confirmCardSetup(client_secret, {
                payment_method: {
                    card: cardNumberElement,
                    billing_details: {
                        name: 'Stripe User',
                    }
                },
            });


            if (error) {
                reloadWithToast();
            } else {
                const response = await fetch(appurl + 'store-payment-details?customerID=' + customerID + '&stripeCustomerID=' + stripeCustomerID + '&setupIntentID=' + setupIntentID + '&paymentMethodID=' + setupIntent.payment_method, {
                    method: 'GET'
                });
                const {
                    customerIDData
                } = await response.json();

                window.location.href = reloadUrl;

            }
        }


    });



    function reloadWithToast() {
        location.reload();
        toastr.error(
            'Error while saving the card, please try again.',
            '', {
                timeOut: 3000, // Set timeout to 8 seconds
                fadeOut: 1,
                onHidden: function() {
                    location.reload(); // Reload the page when the toastr message is hidden
                }
            });
    }

    $(document).ready(function() {
        $('#processCardSegment').hide();
        setTimeout(function() {
            $('.alert').fadeOut('slow');
            $('#invalidDetails').removeClass('d-flex');
            $('#invalidDetails').addClass('d-none');
        }, 5000);




        $('#closeAlert').on('click', function() {
            $('#invalidDetails').removeClass('d-flex');
            $('#invalidDetails').addClass('d-none');
        });
        $('.custom-form').on('submit', function(event) {
            if (this.checkValidity()) {
                $('.buttonSubmit').attr('disabled', 'disabled'); // Disable submit button
            }
        });

    });
</script>