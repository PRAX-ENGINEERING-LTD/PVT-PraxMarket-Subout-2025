@extends('appLayouts.errorLayouts.master')

@section('title', 'Error 404')

@section('main_content')
    <div class="container">
        <svg>
            <use href="{{ asset('assets/svg/icon-sprite.svg#error-404') }}"></use>
        </svg>
        <div class="col-md-8 offset-md-2">
            <h3>We Could not Find This Page</h3>
            <p class="sub-content">You may not be able to find the page you are searching for, or it may have been relocated
                or renamed.</p>
        </div>
        <div><a class="btn btn-primary btn-lg" href="{{ url()->previous() }}">BACK TO PREVIOUS PAGE</a></div>
    </div>
@endsection
