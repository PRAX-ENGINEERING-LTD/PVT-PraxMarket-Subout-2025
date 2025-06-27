<!DOCTYPE html>
<html lang="en" @if (Route::currentRouteName()=='admin.rtl_layout' ) dir="rtl" @endif>

<head>
    @include('appLayouts.head')
    @include('appLayouts.css')
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>

    .page-body-wrapper1{
        background-color: #F2F2F3 !important;
    }
    .page-body-1{ 
        margin-top: 64px !important;
    }
    .page-body-1:has(.comingsoon-bgimg) {
  padding: 0px !important;
}
</style>


@switch(Route::currentRouteName())
@case('admin.default_dashboard')

<body onload="startTime()">
    @break

    @case('admin.box_layout')

    <body class="box-layout">
        @break

        @case('admin.rtl_layout')

        <body class="rtl">
            @break

            @case('admin.dark_layout')

            <body class="dark-only">
                @break

                @default

                <body>
                    @endswitch
                    <!-- loader starts-->
                    <div class="loader-wrapper">
                        <div class="loader-index"><span></span></div>
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
                    <div class="page-wrapper compact-wrapper" id="pageWrapper">
                        @include('appLayouts.header')

                        <!-- Page Body Start-->
                        <div class="page-body-wrapper page-body-wrapper1">
                            @include('appLayouts._sideMenu')


                            <div class="page-body page-body-1">
                                @yield('main_content')
                            </div>
                            @include('appLayouts.footer')
                        </div>
                    </div>
                    @include('appLayouts.scripts')
                    @include('appLayouts.comingsoon_layouts.scripts')

                    <script>
                        var deleteTrashGif = "{{ asset('assets/images/gif/trash.gif') }}";
                    </script>

                   


                </body>

</html>