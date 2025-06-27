@extends('appLayouts.authentication.master')

@section('title', 'Forgot Password')

@section('css')
<style>
    .login-card-new {
        background-image: url("{{ asset('newAssets/img/signup/login_bg.jpg') }}") !important;
    }
</style>
@endsection
@section('main_content')
<!-- loader starts-->
<div class="loader-wrapper">
    <div class="loader-index"> <span></span></div>
    <svg>
        <defs></defs>
        <filter id="goo">
            <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
            <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
            </fecolormatrix>
        </filter>
    </svg>
</div>
<!-- loader ends-->
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="login-card login-card-new login-dark">
                    <div>
                        <div><a class="logo" href="{{ url('/home.showHomePage') }}"><img class="img-fluid for-light" style="width: 400px;"
                                    src="{{ asset('newAssets/img/prax_logo.png') }}" alt="looginpage"><img></a></div>
                        <div class="login-main">
                            <form class="theme-form" onsubmit="return validateForm()">
                                <h6 class="mt-4">Create Your Password</h6>
                                <div class="form-group">
                                    <label class="col-form-label">New Password</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="new_password" id="new_password" placeholder="*********">
                                        <div class="show-hide"><span class="show"></span></div>
                                        <span id="password_error" class="text-danger"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label">Retype Password</label>
                                    <input class="form-control" type="password" name="confirm_password" id="confirm_password" placeholder="*********">
                                    <span id="confirm_password_error" class="text-danger"></span>
                                </div>

                                <div class="form-group mb-0">
                                    <div class="form-check">
                                        <input class="checkbox-primary form-check-input" id="checkbox1" type="checkbox">
                                        <label class="text-muted form-check-label" for="checkbox1">Remember password</label>
                                    </div>
                                    <button class="btn btn-primary btn-block w-100 mt-3" type="submit">Done</button>
                                </div>
                                <p class="mt-4 mb-0 text-center">Already have a password?<a class="ms-2" href="{{ url('/login') }}">Sign in</a></p>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script>

function validateForm() {
    let password = document.getElementById("new_password").value;
    let confirmPassword = document.getElementById("confirm_password").value;
    let passwordError = document.getElementById("password_error");
    let confirmPasswordError = document.getElementById("confirm_password_error");

    passwordError.innerHTML = "";
    confirmPasswordError.innerHTML = "";

    if (password == "") {
        passwordError.innerHTML = "New Password is required!";
        return false;
    }

    if (password.length < 6) {
        passwordError.innerHTML = "Password must be at least 6 characters!";
        return false;
    }

    if (confirmPassword == "") {
        confirmPasswordError.innerHTML = "Retype Password is required!";
        return false;
    }

    if (password !== confirmPassword) {
        confirmPasswordError.innerHTML = "Passwords do not match!";
        return false;
    }

    return true;
}


const showHide = document.querySelector('.show-hide span');
const passwordField = document.getElementById("new_password");

showHide.onclick = function () {
    if (passwordField.type === "password") {
        passwordField.type = "text";
        showHide.textContent = "";
    } else {
        passwordField.type = "password";
        showHide.textContent = "";
    }
};

</script>
@endsection