@extends('frontend.layout.courseapp')

@section('content')
    @if (count($course_registration) > 1)
        @foreach($course_registration as $course_registrations)
            <div class="well">
                <h3>{{$course_registrations->session}}</h3>
                <h3>{{$course_registrations->department}}</h3>
                <h3>{{$course_registrations->level}}</h3>
                <h3>{{$course_registrations->semester}}</h3>
                <h3>{{$course_registrations->course}}</h3>

            </div>
        @endforeach
    @else
        <p>No event recently</p>
    @endif

@endsection
