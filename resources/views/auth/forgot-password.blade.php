@extends('appLayouts.authentication.master')

@section('title', 'Forgot Password')

@section('css')
@endsection
<!-- 
<style>
    .login-card {
        background: url('{{ url('assets/images/login/login_bg.jpg') }}') !important;
    }
</style> -->
@section('main_content')
<script src="{{asset('app-assets/src/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-7"><img class="bg-img-cover bg-center" src="{{ asset('assets/images/login/forgotImg.jpg') }}"
                alt="looginpage"></div>
        <div class="col-xl-5 p-0">
            <div class="login-card login-dark">
                <div>
                    <div><a class="logo text-start" href="{{ route('network.index') }}"><img class="img-fluid for-light"
                                src="{{ asset('newAssets/img/header/prax_logo1.png') }}" style="max-width: 200px;" alt="looginpage"><img
                                class="img-fluid for-dark" src="{{ asset('newAssets/img/header/prax_logo1.png') }}" style="max-width: 200px;"
                                alt="looginpage"></a></div>
                                @if(count($errors) > 0)
                        @include('appLayouts.addedLayouts._alert',array('alertType' => 'error'))
                        @endif
                        @if(Session("message"))
                        @include('appLayouts.addedLayouts._alert',array('alertType' => 'success','message' => Session("message")))
                        @endif
                    <div class="login-main">
                      
                        <form class="theme-form needs-validation" id="frmResetPassword" method="POST" action="{{ route('password.email') }}" novalidate>
                            @csrf
                            <h4>Forgot Password</h4>
                            <p>We will send you a link to reset password.</p>
                            <div class="form-group">
                                <label class="col-form-label">Email</label>
                                <input input id="email" placeholder="Enter your email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }} " for=" email" :value="__('Email')" type="email" name="email" :value="old('email')" required autofocus>
                            </div>


                            <button class="btn btn-primary btn-block w-100 mt-3 spinner-btn" type="submit"><span class="signInText">Submit</span></button>

                            <p class="mt-4 mb-0 text-center">Got Your Password?<a class="ms-2"
                                    href="{{route('login')}}">Sign In</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
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