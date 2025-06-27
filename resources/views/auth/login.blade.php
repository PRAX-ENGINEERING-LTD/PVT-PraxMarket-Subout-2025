@extends('appLayouts.authentication.master')

@section('title', 'Login')

@section('css')
@endsection
<link rel="stylesheet" href="{{ url('css/app.css') }}">
<link rel="icon" type="image/x-icon" href="{{asset('newAssets/img/favicon.ico')}}" />
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@600&display=swap" rel="stylesheet">
@include('staticPages.layouts.header')

<style>
    .login-card{
        background-color: #f1f1f1 !important;
    }
    .login-new-img{
        width: 100%;
  height: 100vh;
  object-fit: cover;
  object-position: center;
  display: block;
    }

    @media (max-width: 768px) {
        .login-new-img {
      display: none !important;
    }
    .head-sign-new{
        text-align: center;
        font-size: 24px;
    }
    }
    .head-sign-new{
        font-weight: 600;
        color: #000;
        padding-bottom: 32px;
        font-family: "Manrope", sans-serif !important;
        font-size: 24px;
        text-align: center;
    }
</style>
@section('main_content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-5"><img class="login-new-img" src="{{ asset('assets/images/login/login-bg2.png') }}" alt="loginpage">
        </div>
        <div class="col-xl-7 p-0">
            <div class="login-card login-dark">
                <div>
                    <!-- <div><a class="logo text-start" href="{{ route('network.index') }}"><img class="img-fluid for-light"
                                src="{{ asset('assets/images/logo/praxlogo.png') }}" alt="looginpage"><img
                                class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo_dark.png') }}"
                                alt="looginpage"></a></div> -->
                                <h1 class="head-sign-new">Sign in to explore the industries</h1>
                    @if (session('status'))
                    @include('appLayouts.addedLayouts._alert',
                    array('alertType' => 'success',
                    'message' => session('status')))
                    @endif

                    <div class="login-main">
                        <form class="theme-form" method="POST" action="{{ route('login') }}" onsubmit="return validateForm()">
                            @csrf
                            <h4>Sign in to account</h4>
                            <p>Enter your email & password to login</p>
                            <div class="form-group">
                                <label class="col-form-label">Email Address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus placeholder="Enter your email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                                        placeholder="*********">
                                    
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-0">
                                <div class="form-check">
                                    <input class="checkbox-primary form-check-input" id="checkbox1" type="checkbox">
                                    <label class="text-muted form-check-label" for="checkbox1">Remember password</label>
                                </div>
                                @if (Route::has('password.request'))
                                <a class="link" href="{{ route('password.request') }}">Forgot password?</a>
                                @endif
                                <button class="btn btn-primary btn-block w-100 mt-3 spinner-btn" type="submit"><span class="signInText">Sign in</span></button>
                            </div>
                            <h6 class="text-muted mt-4 or d-none">Or Sign in with</h6>
                            <div class="social mt-4 d-none">
                                <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login"
                                        target="_blank"><i class="fa-brands fa-linkedin-in"></i></a><a class="btn btn-light"
                                        href="https://twitter.com/login?lang=en" target="_blank"><i
                                            class="fa-brands fa-x-twitter"></i></a><a class="btn btn-light"
                                        href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f"></i></a><a class="btn btn-light"
                                        href="https://www.google.com/" target="_blank"><i
                                            class="fa-brands fa-google"></i></a></div>
                            </div>
                            <p class="mt-4 mb-0 text-center d-none">Don't have account?<a class="ms-2" href="#">Create
                                    Account</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('staticPages.layouts.footer')
@include('staticPages.components.back-to-top')

@endsection

@section('scripts')
<script>
    function validateForm() {
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!email || !emailPattern.test(email)) {
            showError('email', 'Please enter a valid email address.');
            return false;
        }

        if (!password) {
            showError('password', 'Password is required.');
            return false;
        }

        return true;
    }

    function showError(inputId, message) {
        const input = document.getElementById(inputId);
        const feedback = input.nextElementSibling;

        if (feedback && feedback.classList.contains('invalid-feedback')) {
            feedback.innerHTML = '<strong>' + message + '</strong>';
        }

        input.classList.add('is-invalid');
    }

    $('.btn.spinner-btn').click(function(event) {
        event.preventDefault();

        var $btn = $(this);
        $btn.removeClass('btn-block');
        $btn.prop('disabled', true);
        $btn.append('<span class="spinner-border spinner-border-sm spinner_loader" role="status" aria-hidden="true"></span>');

        $('.signInText').addClass('d-none')
        $(this).parents('form')[0].submit();
    });
</script>
@endsection
