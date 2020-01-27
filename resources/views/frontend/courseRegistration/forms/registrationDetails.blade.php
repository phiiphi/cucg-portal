@extends('frontend.layout.courseapp')

@section('content')
   <h3>POSTS</h3>
    @if (count($course_registration) > 1)
        @foreach($course_registrations as $course_registration)
            <div>
                <h3>{{$course_registration->department}}</h3>
            </div>
        @endforeach

    @else
        <p>No event recently</p>

    @endif

@endsection
