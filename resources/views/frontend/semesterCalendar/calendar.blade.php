@extends('frontend.layout.homeapp')

@section('content')
<!-- Page Wrapper -->
<div id="wrapper">

    {{--SIDE BAR--}}
    @include('frontend.includes.home_sidebar')

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

    <!-- Topbar Navbar -->
    @include('frontend.includes.home_topbar')
    <div>
        <h3  class="text-center">CUCG ACADEMIC CALENDAR</h3>
        <h4 class="text-center"> 2019/2020 ACADEMIC YEAR</h4>
        <h5 class="text-center">SEMESTER CONTINUING STUDENTS/FIRST SEMESTER (JANUARY - MAY, 2020)</h5>
    </div>
    {{-- <div id='calendar' data-route-load-activities="{{route('routeLoadActivities')}}"></div> --}}

    {{-- SEMESTER CALENDAR --}}
    <div class="row ml-2">
        <div class="col-xl-12">
            <div class="card card-shadow mb-4">
                <div class="card-header border-0">
                    <div class="custom-title-wrap bar-primary">
                        <div class="custom-title">FIRST SEMESTER ACADEMIC CALENDAR</div>
                    </div>
                </div>
                <div class="card-body- pt-3 pb-4">
                    @if (count($activities) > 0)
                    <div class="table-responsive">
                        <table id="data_table" class="table table-bordered table-striped" cellspacing="0">
                            <thead>
                            <tr>
                                <th>WEEK</th>
                                <th>DATE</th>
                                <th>ACTIVITY</th>
                            </tr>
                            </thead>
                            <tfoot>
                            </tfoot>
                            <tbody>
                            @foreach ($activities as $activity)
                            <tr>
                                <td>{{$activity->week}}</td>
                                <td><b>Start:</b> {{$activity->start}} - <b>End:</b> {{$activity->end}}</td>
                                <td>{{$activity->activity}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                        <p class="text-danger"> No Data Yet</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    {{-- END OF SEMESTER CALENDAR --}}
    </div><!--end of main content -->

    </div> <!--end of wrapper -->
</div>
@endsection



