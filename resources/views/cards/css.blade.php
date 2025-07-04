<style>
        * {
        font-family: "Helvetica Neue", Helvetica;
        font-size: 15px;
        font-variant: normal;
        padding: 0;
        margin: 0;
    }

    html {
        height: 100%;
    }

    body {
        background: #E6EBF1;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100%;
    }

    form {
        width: 480px;
        margin: 20px 0;
    }

    .group {
        background: white;
        box-shadow: 0 7px 14px 0 rgba(49, 49, 93, 0.10), 0 3px 6px 0 rgba(0, 0, 0, 0.08);
        border-radius: 4px;
        margin-bottom: 20px;
    }

    label {
        position: relative;
        color: #8898AA;
        font-weight: 300;
        height: 40px;
        line-height: 40px;
        margin-left: 20px;
        display: flex;
        flex-direction: row;
    }

    .group label:not(:last-child) {
        border-bottom: 1px solid #F0F5FA;
    }

    label>span {
        width: 120px;
        text-align: right;
        margin-right: 30px;
    }

    .field {
        background: transparent;
        font-weight: 300;
        border: 0;
        color: #31325F;
        outline: none;
        flex: 1;
        padding-right: 10px;
        padding-left: 10px;
        cursor: text;
    }

    .field::-webkit-input-placeholder {
        color: #CFD7E0;
    }

    .field::-moz-placeholder {
        color: #CFD7E0;
    }

    button {
        float: left;
        display: block;
        background: #666EE8;
        color: white;
        box-shadow: 0 7px 14px 0 rgba(49, 49, 93, 0.10), 0 3px 6px 0 rgba(0, 0, 0, 0.08);
        border-radius: 4px;
        border: 0;
        margin-top: 20px;
        font-size: 15px;
        font-weight: 400;
        width: 100%;
        height: 40px;
        line-height: 38px;
        outline: none;
    }

    button:focus {
        background: #555ABF;
    }

    button:active {
        background: #43458B;
    }

    .outcome {
        float: left;
        width: 100%;
        padding-top: 8px;
        min-height: 24px;
        text-align: center;
    }

    .success,
    .error {
        display: none;
        font-size: 13px;
    }

    .success.visible,
    .error.visible {
        display: inline;
    }

    .error {
        color: #E4584C;
    }

    .success {
        color: #666EE8;
    }

    .success .token {
        font-weight: 500;
        font-size: 13px;
    }

    .cardInputField {
        background: #0f0f0f
    }

    .ElementsApp input {
        color: #929292 !important;
    }

    .custom-form .form-control {
        height: 56px !important;
        padding: 20px 20px !important;
        color: #929292 !important;
    }

    .byChecking {
        font-size: 14px !important;
        color: #fff;
        font-weight: normal;
    }

    .termsOfUse {
        color: #3989f9;
        text-decoration: underline
    }

    .bill p span {
        color: #3989f9;
        font-weight: bold;
        font-size: 14px !important;
        margin-left: 0px;
    }

    .bill p {
        font-size: 14px !important;

    }

    .validationStyle {
        border: 1px solid #dc3545 !important;
        box-shadow: none !important;
    }


    .form-check-input:disabled~.form-check-label,
    .form-check-input[disabled]~.form-check-label {
        cursor: default;
    }

    #cardNumberValidationText,
    #cardExpiryValidationText,
    #cardCvvValidationText {
        color: #eb1c26;

    }

    .navbar-toggler {
        width: auto !important;
    }

    .navbar-toggler:focus {

        background: none !important;
    }

    .selected-option:before {
        top: 10px !important;
    }

    @media (max-width:1300px) {
        .btn-sumbit {
            height: auto !important;
            font-size: 16px !important;
        }
    }

</style>