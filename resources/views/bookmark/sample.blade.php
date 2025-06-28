

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{asset('new-assets/img/favicon.ico')}}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Prax Engineering</title>
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
</head>

<body>
    @include('newLayout.header')
    @include('newLayout.menus')
    
    <main>
        <!-- React components will be rendered into these divs -->
        <div id="machinery-details"></div>
    
    </main>

    @include('newLayout.footer')
</body>
</html>


