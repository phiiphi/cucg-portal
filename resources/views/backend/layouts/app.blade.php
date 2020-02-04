<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from thevectorlab.net/dashlab-v1.3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Feb 2019 05:37:41 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">

    <!--cucg logo -->
    <link rel="icon" type="image/png" href="{{ asset('images/slogo1.png')}}">

    <title>Cucg Portal Admin</title>

    <!--web fonts-->
    <link href="http://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!--bootstrap styles-->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!--icon font-->
    <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/dashlab-icon/dashlab-icon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/themify-icons/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/weather-icons/css/weather-icons.min.css')}}" rel="stylesheet">

    <!--custom scrollbar-->
    <link href="{{ asset('assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

    <!--jquery dropdown-->
    <link href="{{ asset('assets/vendor/jquery-dropdown-master/jquery.dropdown.css')}}" rel="stylesheet">

    <!--jquery ui-->
    <link href="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">

    <!--iCheck-->
    <link href="{{ asset('assets/vendor/icheck/skins/all.css')}}" rel="stylesheet">

    <!--vector maps -->
    <link href="{{ asset('assets/vendor/vector-map/jquery-jvectormap-1.1.1.css')}}" rel="stylesheet" >

    <!--c3chart-->
    <link href="{{ asset('assets/vendor/c3chart/c3.min.css')}}" rel="stylesheet">

     <!--date picker-->
     <link href="{{ asset('assets/vendor/date-picker/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">

     <!--datetime & time picker-->
     <link href="{{ asset('assets/vendor/datetime-picker/css/datetimepicker.css')}}" rel="stylesheet">
     <link href="{{ asset('assets/vendor/timepicker/css/timepicker.css')}}" rel="stylesheet">
 
     <!--color picker-->
     <link href="{{ asset('assets/vendor/colorpicker/css/bootstrap-colorpicker.css')}}" rel="stylesheet">

    <!--custom styles-->
    <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
    
    <!--data table-->
    <link href="{{asset('assets/vendor/data-tables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/html5shiv.js"></script>
    <script src="assets/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fixed-nav leftnav-floating">
{{--ALERT MESSAGES--}}
@include('backend.includes.message')
    {{--NAVBAR--}}
    @include('backend.includes.admin_nav')

    <!--main content wrapper-->
    <div class="content-wrapper">

        {{--CONTERNT--}}
        @yield('content')

            <!--footer-->
        @include('backend.includes.admin_footer')
            <!--/footer-->
    </div>
    <!--/main content wrapper-->

    {{--RIGHT SIDEBAR--}}
    @include('backend.includes.admin_right_sidebar')

    <!--basic scripts-->
    <script src="{{ asset('js/main.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/popper.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/app.js')}}"></script> 

    <script src="{{ asset('assets/vendor/jquery-dropdown-master/jquery.dropdown.js')}}"></script>

    <script src="{{ asset('assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

    <!--sparkline-->
    <script src="{{ asset('assets/vendor/sparkline/jquery.sparkline.js')}}"></script>
    <!--sparkline initialization-->
    <script src="{{ asset('assets/vendor/js-init/sparkline/init-sparkline.js')}}"></script>

    <!--c3chart-->
    <script src="{{ asset('assets/vendor/c3chart/d3.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/c3chart/c3.min.js')}}"></script>
    <!--c3chart initialization-->
    <script src="{{ asset('assets/vendor/js-init/c3chart/init-c3chart.js')}}"></script>

    <!--chartjs-->
    <script src="{{ asset('assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <!--chartjs initialization-->
    <script src="{{ asset('assets/vendor/js-init/chartjs/init-creative-state-chart.js')}}"></script>
    <script src="{{ asset('assets/vendor/js-init/chartjs/init-area-chart.js')}}"></script>
    <script src="{{ asset('assets/vendor/js-init/chartjs/init-line-chart.js')}}"></script>
    <script src="{{ asset('assets/vendor/js-init/chartjs/init-doughnut-chart.js')}}"></script>
    <script src="{{ asset('assets/vendor/js-init/chartjs/init-doughnut-chart2.js')}}"></script>
    <script src="{{ asset('assets/vendor/js-init/chartjs/init-sales-report-chart.js')}}"></script>
    <script src="{{ asset('assets/vendor/js-init/chartjs/init-bubble-chart.js')}}"></script>

    <!--flot chart-->
    <script src="{{ asset('assets/vendor/flot/jquery.flot.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/flot/jquery.flot.pie.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/flot/jquery.flot.tooltip.min.js')}}"></script>
    <!--flot chart initialization-->
    <script src="{{ asset('assets/vendor/js-init/flot/init-flot-widget.js')}}"></script>

    <!--vectormap-->
    <script src="{{ asset('assets/vendor/vector-map/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/vector-map/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!--vectormap initialization-->
    <script src="{{ asset('assets/vendor/js-init/vmap/init-vmap-world.js')}}"></script>

     <!--date picker-->
     <script src="{{ asset('assets/vendor/date-picker/js/bootstrap-datepicker.min.js')}}"></script>
     <!--init date picker-->
     <script src="{{ asset('assets/vendor/js-init/pickers/init-date-picker.js')}}"></script>
 
     <!--datetime picker-->
     <script src="{{ asset('assets/vendor/datetime-picker/js/bootstrap-datetimepicker.js')}}"></script>
     <script src="{{ asset('assets/vendor/timepicker/js/bootstrap-timepicker.js')}}"></script>
     <!--init datetime picker-->
     <script src="{{ asset('assets/vendor/js-init/pickers/init-datetime-picker.js')}}"></script>
 
     <!--color picker-->
     <script src="{{ asset('assets/vendor/colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
     <!--init color picker-->
     <script src="{{ asset('assets/vendor/js-init/pickers/init-color-picker.js')}}"></script>
 
    <!--datatables-->
    <script src="{{asset('assets/vendor/data-tables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendor/data-tables/dataTables.bootstrap4.min.js')}}"></script>
    <!--init datatable-->
    <script src="{{asset('assets/vendor/js-init/init-datatable.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--basic scripts initialization-->
    <script src="{{ asset('assets/js/scripts.js')}}"></script> 
</body>
<!-- Mirrored from thevectorlab.net/dashlab-v1.3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Feb 2019 05:38:32 GMT -->
</html>

