<!DOCTYPE html>
<html lang="en" @if (Route::currentRouteName() == 'admin.rtl_layout') dir="rtl" @endif>

<head>
    
    @include('appLayouts.simple.css')
</head>

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
 

        <!-- Page Body Start-->
  
       

            <div class="page-body">
                @yield('main_content')
            </div>
            
        
        </div>
    </div>
    @include('appLayouts.simple.scripts')

</body>

</html>
