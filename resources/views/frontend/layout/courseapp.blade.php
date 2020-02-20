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
    <link href="{{ asset('css/courseRegistration_style.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    {{-- PRE-LOADER--}}
    {{-- @include('frontend.includes.preloader') --}}

    {{--     NAVBAR --}}
{{--    @include('frontend.includes.course_nav')--}}
    <div class="container-fluid">

        {{--MAIN CONTENT--}}
        @yield('content')

    </div>

    {{-- FOOTER --}}
    @include('frontend.includes.footer')
</div>


<!--js link-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
