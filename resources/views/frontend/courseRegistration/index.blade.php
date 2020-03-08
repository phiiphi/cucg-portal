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
            <div class="text-center"><h3>COURSES TO BE TAKEN IN THIS SEMESTER</h3></div>
            @if (count($course) > 0)
                <ul class="text-center list-unstyled">
                    @foreach ($course as $item)
                    
                        <li>{{$item->course_name}}</li> 
                        
                    @endforeach 
                    <button class=" btn btn-primary"> proceed to register courses</button>
                </ul>
            @else
                <div>No Data Found</div>
            @endif
            
        </div><!--end of main content -->

    </div> <!--end of wrapper -->
</div>
@endsection
