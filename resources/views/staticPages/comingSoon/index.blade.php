{{-- Assuming 'appLayouts.app' is the intended layout --}}
@extends('appLayouts.app')

@section('title', 'Coming Soon with Background Image')

@section('css')
   <style>
    
    .comingsoon-bgimg{
        background-image: url("{{ asset('newAssets/img/dashboard/comingsoon.png') }}") !important;

    }
    .page-body-1:has(.comingsoon-bgimg) {
  padding: 0px !important;
}
   </style>
@endsection

@section('main_content')
    <!-- Page Body Start-->
    
  
    <div class="container-fluid p-0 m-0">
        <div class="comingsoon comingsoon-bgimg">
            <div class="comingsoon-inner text-center">
            <h5 style="color:black">Get ready for a game-changing tool crafted for the precision <br />engineering world, coming soon on PRAX Market!</h5>
                <img class="for-light" src="{{ asset('newAssets/img/dashboard/under1.png') }}" style="object-fit: cover;" alt="Logo for light theme">
                <div class="countdown d-none" id="clock-arrival" data-hours="1" data-minutes="2" data-seconds="3">
                    <ul>
                        <li><span class="days time"></span><span class="title">Days</span></li>
                        <li><span class="hours time"></span><span class="title">Hours</span></li>
                        <li><span class="minutes time"></span><span class="title">Minutes</span></li>
                        <li><span class="seconds time"></span><span class="title">Seconds</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{-- Add any JavaScript for the countdown timer or other functionality here if needed --}}
@endsection