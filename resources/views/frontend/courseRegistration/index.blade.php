@extends('frontend.layout.courseapp')

@section('content')
      @if (count($courseRegistration)>1)
          @foreach($course_registration as $courseRegistration)
              <div class="well">
                  <h3>{{$courseRegistration->department}}</h3>
                  <small>Written on{{$course_registration->created_at}}</small>
              </div>
           @endforeach
      @else
          <p>No entry found</p>
      @endif
@endsection
