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

        </div><!--end of main content -->

    </div> <!--end of wrapper -->
</div>
@endsection
