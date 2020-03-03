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

    <!--data table-->
    <link href="{{asset('assets/vendor/data-tables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home_style.css') }}" rel="stylesheet">

    <!--custom styles-->
    <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app">
        {{-- Alert Messages--}}
        @include('sweetalert::alert')
        
        {{-- PRE-LOADER--}}
        @include('frontend.includes.preloader')

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
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('jquery/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('js/app.js')}}" defer></script>
    <script src="{{ asset('js/home_script.js')}}" defer></script>
    <script src="{{ asset('js/chart-area-demo.js')}}" defer></script>
    <!--datatables-->
    <script src="{{asset('assets/vendor/data-tables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendor/data-tables/dataTables.bootstrap4.min.js')}}"></script>
    <!--init datatable-->
    <script src="{{asset('assets/vendor/js-init/init-datatable.js')}}"></script>
</body>
</html>
