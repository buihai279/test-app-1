<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="https://laravel.com/favicon.png" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }} | Laravel application | Internship PHP</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" >

    <!-- Optional theme -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}" >

    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" ></script>
    
    <script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        @include('layouts.menu')
        <div class="container">
            @include('layouts.notify')
            @yield('content')
        </div>
    </div>

</body>
</html>
