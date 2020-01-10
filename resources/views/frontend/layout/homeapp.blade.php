<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Students Portal') }}</title>

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}
    <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home_style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        {{-- PRE-LOADER--}}
        {{-- @include('frontend.includes.preloader') --}}

        {{-- NAVBAR --}}
        {{-- @include('frontend.includes.home_nav') --}}

            <div class="container-fluid">

                {{--MAIN CONTENT--}}
                @yield('content')

            </div>

        {{-- FOOTER --}}
        @include('frontend.includes.footer_home')
    </div>


    <!--js link-->
    <script src="{{ asset('jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('jquery/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('js/app.js')}}" defer></script>
    <script src="{{ asset('js/home_script.js')}}" defer></script>
    <script src="{{ asset('js/chart-area-demo.js')}}" defer></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</body>
</html>
