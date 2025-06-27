@extends('appLayouts.errorLayouts.master')

@section('title', 'Error 500')

@section('main_content')
    <div class="container">
        <svg>
            <use href="{{ asset('assets/svg/icon-sprite.svg#error-500') }}"></use>
        </svg>
        <div class="col-md-8 offset-md-2">
            <h3>Server Error</h3>
            <p class="sub-content">The server couldn't finish processing your request due to an error.</p>
        </div>
        <div><a class="btn btn-primary btn-lg" href="{{ url()->previous() }}">BACK TO PREVIOUS PAGE</a></div>
    </div>
@endsection
