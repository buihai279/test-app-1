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
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};

      $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</head>
<body>
        @include('layouts.menu')
        <div class="container" style="min-height: 600px">
            @include('layouts.notify')
            @yield('content')
        </div>
        <footer style="height: 50px;background:#f2f3f4;line-height: 50px;border-radius: 5px;padding-left: 10px" >
            {{ config('app.name', 'Laravel') }} - Bùi Văn Hải
        </footer>
</body>
</html>
