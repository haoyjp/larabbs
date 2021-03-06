<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,inital-scale=1">
    <!--CSRF Token-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','LaraBBS') -Laravel进阶教程</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app" class="{{ route_class() }}-page">
        @include('layouts._header')
        <div class="container">
            @include('layouts._message')
            @yield('content')
        </div>

        @include('layouts._footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('ja/app.js') }}"></script>
</body>
</html>