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
            {{-- <div class="row profile">
                <div class="col-md-6">
                    <div class="student-pi text-center ml-5">
                        <img src="{{asset('images/profile_avatar.svg')}}" alt="student pic" srcset="">
                    </div>
                </div>
            </div> --}}

            <div class="text-center">
                @if (count($student_info) > 0)
                <img src="{{asset('images/profile_avatar.svg')}}" alt="student pic" srcset="" class="rounded" style="height:100px; width:100px">
                @foreach ($student_info as $item)
                <div>
                    <h5 class="text-uppercase mt-3 student_name">{{$item->name}}</h5>
                    <h6 class="text-uppercase student_programe"> {{$item->programme}}</h6>
                </div>
                <div>
                    <h6 class="text-center text-uppercase">ACADEMIC YEAR: {{$item->academic_year}}</h6>
                    <h6 class="text-center text-uppercase">{{$item->semester}}</h6>
                </div>
                @endforeach
            </div>
                @else
                    <div class="text-danger text-center"> No Data Found</div>
                @endif

            <!-- Information table-->
            @if (count($course) > 0)
            <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>COURSE CODE</th>
                        <th>COURSE NAME</th>
                        <th>CREDIT HOURS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($course as $item)
                    <tr>
                        <td>{{$item->course_code}}</td>
                        <td>{{$item->course_name}}</td>
                        <td>{{$item->credit_hours}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class='text-center mb-5'>
            <a href="{{route('courseRegistration.payment')}}" class="btn btn-primary" > proceed to register courses</a>
            </div>
            </div>
            @else
                <div>No Data Found</div>
            @endif

        </div><!--end of main content -->

    </div> <!--end of wrapper -->
</div>
@endsection
