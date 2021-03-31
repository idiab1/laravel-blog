<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', "unknown page") - eBlog</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
    <div id="app">
        <!-- Include navbar-->
        @include('layouts.navbar')

        <!-- Include Header -->
        @include('layouts.header')

        <main class="py-5">
            <div class="container">
                @yield('content')
            </div>
        </main>
        <!-- Include Header -->
        @include('layouts.footer')


    </div>
    <!-- Scripts -->
    @yield('scripts')
</body>
</html>
