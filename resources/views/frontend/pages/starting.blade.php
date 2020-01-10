{{--Extending content from layouts.app--}}
@extends('frontend.layout.app')

{{-- Main content of Welcome Page--}}
@section('content')
<div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                <h2>{{$welcome_msg}}</h2>
                <div>
                    <p><span class="text-type" data-wait="3000" data-type='["PAY FEES", "REGISTER YOUR COURSES", "CHECK RESULTS", "VIEW ACADEMIC TIMETABLE","ANNOUNCEMENT"]'></span></p>
                </div>
                <div>
                    <a href="{{route('pages.signup')}}" class="btn btn-primary btn-lg text-white text-uppercase"><i class="fa fa-sticky-note-o"></i> Please SignUp</a>
                    {{-- <button onclick="{{route('pages.signup')}}" class="btn btn-primary btn-lg text-white text-uppercase"> <i class="fa fa-sticky-note-o"> <a href="{{route('pages.signup')}}"></a>Please SignUp</i></button> --}}
                </div>
            </div>
        </div>
</div>
@endsection