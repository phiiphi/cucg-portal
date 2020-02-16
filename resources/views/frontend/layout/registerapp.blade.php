<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Students Portal') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/formstyle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/formhack.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div id="app">

        {{-- PRE-LOADER--}}
        {{-- @include('frontend.includes.preloader') --}}

        {{--Alert --}}
        @include('sweetalert::alert')

        {{-- NAVBAR --}}
        @include('frontend.includes.navbar')

            <div class="content-wrapper mt-5">

                {{--MAIN CONTENT--}}
                @yield('content')

                {{-- FOOTER --}}
                {{-- @include('frontend.includes.footer') --}}
            </div>

    </div>

    <!--js link-->
    <script src="{{ asset('js/validator.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="js/typewriter.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</body>
</html>
