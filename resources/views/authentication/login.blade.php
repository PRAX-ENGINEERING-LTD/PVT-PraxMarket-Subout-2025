@extends('appLayouts.authentication.master')

@section('title', 'Login')

@section('css')
<style>
    .login-card .login-main {
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px !important;
    }

    .form-new-check {
        display: flex !important;
        justify-content: space-between !important;
    }
</style>
@endsection

@section('main_content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-7"><img class="bg-img-cover bg-center" src="{{ asset('newAssets/img/login/2.jpg') }}"
                alt="looginpage"></div>
        <div class="col-xl-5 p-0">
            <div class="login-card login-dark">
                <div>
                    <div><a class="logo text-start" href="{{ url('/home.showHomePage') }}"><img class="img-fluid for-light"
                                src="{{ asset('newAssets/img/prax_logo.png') }}" style="width: 400px;" alt="looginpage"><img
                                class="img-fluid for-dark"
                                alt="looginpage"></a></div>
                    <div class="login-main">
                        <form class="theme-form">
                            <h4>Sign in to account</h4>
                            <p>Enter your email & password to login</p>
                            <div class="form-group">
                                <label class="col-form-label">Email Address</label>
                                <input class="form-control" type="email" required="" placeholder="test@gmail.com">
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Password</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="password" required=""
                                        placeholder="*********">
                                    <div class="show-hide"><span class="show"> </span></div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <div class="form-check form-new-check">

                                    <label class="text-muted form-check-label" for="checkbox1"><input class="checkbox-primary form-check-input" id="checkbox1" type="checkbox">Remember password</label>
                                    <label class=""><a class="" href="{{ url('/forgetpassword') }}">Forgot Password?</a></label>
                                </div>
                                <button class="btn btn-primary btn-block w-100 mt-3" type="submit">Sign in</button>
                            </div>
                            <!-- <h6 class="text-muted mt-4 or">Or Sign in with</h6> -->
                            <!-- <div class="social mt-4">
                                <div class="btn-showcase"><a class="btn btn-light" href="https://www.linkedin.com/login"
                                        target="_blank"><i class="fa-brands fa-linkedin-in"></i></a><a
                                        class="btn btn-light" href="https://twitter.com/login?lang=en"
                                        target="_blank"><i class="fa-brands fa-x-twitter"></i></a><a
                                        class="btn btn-light" href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f"></i></a><a class="btn btn-light"
                                        href="https://www.google.com/" target="_blank"><i
                                            class="fa-brands fa-google"></i></a></div>
                            </div> -->
                            <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2"
                                    href="{{ url('/signup') }}">Create Account</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection