<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VTE0BQ0WFB"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-VTE0BQ0WFB');
    </script>

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset('alertausil/css/bootstrap.min.css') : secure_asset('alertausil/css/bootstrap.min.css') }}">
    
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset('alertausil/css/all.min.css') : secure_asset('alertausil/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset('alertausil/css/splide.min.css') : secure_asset('alertausil/css/splide.min.css') }}">
    <link rel="stylesheet" href="{{ env('APP_ENV') === 'local' ? asset('alertausil/css/styles.css') : secure_asset('alertausil/css/styles.css')}}">

    @stack('styles')
</head>
<body>

    <div id="app" >
            @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    @stack('scripts')


</body>
</html>
