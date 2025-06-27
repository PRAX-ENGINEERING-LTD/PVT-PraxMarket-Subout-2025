<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{asset('newAssets/img/favicon.ico')}}" />
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Home</title>
    <style>
        
       
        /* body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            overflow-x: hidden;
        }  */
    </style>
</head>

<body>
    @include('staticPages.layouts.header')

    <main>
        @include('staticPages.home.homeComponents.secondaryPage')
    </main>

    @include('staticPages.layouts.footer')
    @include('staticPages.components.back-to-top')





</body>

</html>