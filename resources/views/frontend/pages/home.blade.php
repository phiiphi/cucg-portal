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

        <!-- Topbar -->
          <!-- Topbar Navbar -->
          @include('frontend.includes.home_topbar')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-download fa-sm text-white-50"></i> Generate Forms</a>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-8 mb-4">
              <div class="row">
                <div class="col-lg-4 mb-4">
                  <div class="card shadow">
                    <div class="inner">
                      <img class="card-img-top img-fluid" src="{{asset('images/register.png')}}" alt="card image top">
                    </div>
                    <div class="card-body bg-success ">
                      <h5 class="card-title text-light"> Register Semester Courses</h5>
                      <a href="#" class="btn btn-outline-light">Register Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card shadow">
                      <div class="inner">
                        <img class="card-img-top" src="{{asset('images/RegisterIcon2.png')}}" alt="card image top">
                      </div>
                          <div class="card-body bg-primary">
                            <h5 class="card-title text-light"> Check Results</h5>
                            <a href="#" class="btn btn-outline-light">Check Now</a>

                          </div>
                      </div>
                </div>
                <div class="col-lg-4 mb-4">
                  <div class="card shadow">
                    <div class="inner">
                      <img class="card-img-top" src="{{asset('images/timetable.png')}}" alt="card image top">
                    </div>
                        <div class="card-body bg-info">
                          <h5 class="card-title text-light"> Check Semester Timetable</h5>
                          <a href="#" class="btn btn-outline-light">Check Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                  <div class="card shadow">
                    <div class="inner">
                      <img class="card-img-top" src="{{asset('images/calendar.jpg')}}" alt="card image top">
                    </div>
                        <div class="card-body bg-warning">
                          <h5 class="card-title text-light"> View Semester Calander</h5>
                          <a href="{{route('calendar.index')}}" class="btn btn-outline-light">View Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                  <div class="card shadow">
                    <div class="inner">
                      <img class="card-img-top" src="{{asset('images/forms.png')}}" alt="card image top">
                    </div>
                        <div class="card-body bg-danger">
                          <h5 class="card-title text-light"> Student Forms</h5>
                          <a href="#" class="btn btn-outline-light">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                  <div class="card shadow">
                    <div class="inner">
                      <img class="card-img-top" src="{{asset('images/mining.jpg')}}" alt="card image top">
                    </div>
                        <div class="card-body bg-secondary">
                          <h5 class="card-title text-light"> Announcement</h5>
                          <a href="#" class="btn btn-outline-light">Check Now</a>
                        </div>
                    </div>
                </div>
              </div>

            </div>

            <div class="col-lg-4 mb-4">

              <!--Todays Announcement-->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Today's Announcement</h6>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                  </div>
                  <p>
                    Add some quality, svg illustrations to your project courtesy of , a constantly updated collection of beautiful svg images that you can use completely free and without attribution!
                </p>
                  <a rel="nofollow" href="#">SEE MORE &rarr;</a>
                </div>
              </div>

            <!-- Older Announcement-->
            {{-- <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Older Announcement</h6>
              </div>
              <div class="card-body">
                <div class="text-center">
                  <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                </div>
                <p>
                  Add some quality, svg illustrations to your project courtesy of , a constantly updated collection of beautiful svg images that you can use completely free and without attribution!
              </p>
                <a rel="nofollow" href="#">SEE MORE &rarr;</a>
              </div>
            </div>  --}}
            
            {{--Semester Activities--}}
            <div class="card card-shadow mb-4">
              <div class="card-header border-0">
                  <div class="custom-title-wrap bar-primary">
                      <div class="custom-title">Semester Activities</div>
                  </div>
              </div>
              <div class="card-body">
                @if (count($activities) > 0)
                  <ul class="list-unstyled base-timeline">
                    @foreach ($activities as $activity)
                      <li class="time-dot-danger">
                          <div class="base-timeline-info">
                              <a href="#" class="text-danger">{{$activity->week}}</a> 
                              {{$activity->activity}}
                          </div>
                          <small class="text-muted">
                            <b>From:</b> {{$activity->start}} <br>
                            <b>To:</b> {{$activity->end}}
                          </small>
                      </li>
                      @endforeach
                  </ul>
                  @endif
              </div>
          </div>
      </div>
  </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#">
        <i class="fas fa-angle-up"></i>
      </a>
    
      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                {{-- <span aria-hidden="true">good</span> --}}
              </button>
            </div>
            <div class="modal-body">Select Logout below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="{{ route('pages.login')}}">Logout</a>
            </div>
          </div>
        </div>
      </div>
@endsection
