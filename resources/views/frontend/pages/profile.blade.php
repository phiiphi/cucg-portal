{{--Extending content from layouts.app--}}
@extends('frontend.layout.homeapp')

@section('content')
<!-- Page Wrapper -->
<div id="wrapper">

    {{--SIDE BAR--}}
    @include('frontend.includes.home_sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <!-- Topbar Navbar -->
        @include('frontend.includes.home_topbar')

    <!--profile banner-->
    <div class="profile-banner" style="background-image: url('assets/img/profile-banner.jpg')">
        <div class="row ">
            <div class="col-md-6 ml-auto text-lg-right">

                <div class="text-right">
                    <div class="dropdown mb-5">
                        <a href="#" class="btn btn-transparent text-light dropdown-hover p-0" data-toggle="dropdown">
                            <i class=" vl_ellipsis-fill-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                            <a class="dropdown-item" href="#"> Edit</a>
                            <a class="dropdown-item" href="#"> Delete</a>
                            <a class="dropdown-item" href="#"> Settings</a>
                        </div>
                    </div>
                </div>

                <div class="profile-follower-info">
                    <div class="d-inline-block px-4 text-left text-light">
                        <strong class="f14 d-block">Faculty</strong>
                        <p>ICST</p>
                    </div>
                    {{-- <div class="d-inline-block px-4 text-left text-light">
                        <strong class="f14 d-block"></strong>
                        <p>Following</p>
                    </div> --}}
                    <div class="d-inline-block px-4 text-left text-light">
                        <strong class="f14 d-block">Level</strong>
                        <p>400</p>
                    </div>
                </div>

                <div class="mt-4">
                    <a href="#" class="btn btn-sm btn-info btn-pill pl-5 pr-5">Edit Profile</a>
                    <a href="#" class="btn btn-sm btn-purple btn-pill pl-5 pr-5">Send Message</a>
                </div>
            </div>
        </div>
    </div>
    <!--/profile banner-->

    <!--profile nav-->
    <div class="profile-nav bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 ml-auto">
                    <div class="profile-nav-links">
                        <ul class="nav f12">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">TIMELINE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ACTIVITY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">COMPLETED SEMESTER</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">COMPLETED COURSES</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--/profile nav-->

    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-4 col-md-6 profile-info-position">
                <div class="card card-shadow mb-4 ">
                    <div class="card-body">
                        <div class="text-center">
                            <div class="mt-4 mb-3">
                                <img class="rounded-circle" src="assets/img/avatar/avatar-large3.jpg" width="85" alt=""/>
                            </div>
                            <h5 class="text-uppercase mb-0">Charles Adomako Basoah</h5>
                            <p class="text-muted mb-0">Computer Science </p>
                            <div class="rattings mb-4">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star-o text-warning"></i>
                            </div>
                            <div class="profile-social-link mb-4">
                                <a href="#" class="mx-2"><i class="fa fa-facebook-square"></i></a>
                                <a href="#" class="mx-2"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="mx-2"><i class="fa fa-youtube"></i></a>
                            </div>
                            <div class="badge-icon mb-4">
                                <img src="assets/img/badge/level.svg" width="50" alt="Level" data-toggle="tooltip" data-placement="top" title="Level 5"/>
                                <img src="assets/img/badge/status.svg" width="50" alt="Status" data-toggle="tooltip" data-placement="top" title="Status"/>
                                <img src="assets/img/badge/disable.svg" width="50" alt="Disable" data-toggle="tooltip" data-placement="top" title="Disable"/>
                                <img src="assets/img/badge/trendy.svg" width="50" alt="Trendy" data-toggle="tooltip" data-placement="top" title="Trendy"/>
                                <img src="assets/img/badge/monthly-top-seller.svg" width="50" alt="Monthly Top Seller" data-toggle="tooltip" data-placement="top" title="Monthly Top Seller"/>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-danger">
                            <div class="custom-title">Completed Semester</div>
                        </div>
                        <div class="progress mt-4" style="height: 5px;">
                            <div class="progress-bar bg-purple-light" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-2">
                            <span class="float-left f12 text-muted">Total 7250</span>
                            <span class="float-right f12 text-muted">1250 Left</span>
                        </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="card-body">
                        <div class="row f12 mb-3">
                            <div class="col-6">Article Read</div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-6">900/1200</div>
                                    <div class="col-6">
                                        <div class="progress mt-2" style="height: 5px;">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row f12 mb-3">
                            <div class="col-6">Comments</div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-6">145/450</div>
                                    <div class="col-6">
                                        <div class="progress mt-2" style="height: 5px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row f12 mb-3">
                            <div class="col-6">Likes</div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-6">370/750</div>
                                    <div class="col-6">
                                        <div class="progress mt-2" style="height: 5px;">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row f12">
                            <div class="col-6">Share</div>
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-6">30/100</div>
                                    <div class="col-6">
                                        <div class="progress mt-2" style="height: 5px;">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <a href="#" class="btn btn-sm btn-pill btn-outline-primary">View All</a>
                        </div>
                    </div>
                </div>

                <div class="card card-shadow mb-4">
                    <div class="card-header border-0">
                        <div class="custom-title-wrap bar-success">
                            <div class="custom-title">Completed Courses</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="media text-muted mb-3">
                            <img class="rounded mr-3" src="" width="80" alt="image"/>
                            <p class="media-body pb-3 mb-0">
                                <a href="#" class="d-block text-secondary"><strong class="">Bhawin Jagad</strong></a>
                                Donec id elit non mi porta gravida at eget metus.
                            </p>
                        </div>
                        <div class="media text-muted">
                            <img class="rounded mr-3" src="" width="80" alt="image"/>
                            <p class="media-body pb-3 mb-0">
                                <a href="#" class="d-block text-secondary"><strong class="">Bhawin Jagad</strong></a>
                                Donec id elit non mi porta gravida at eget metus.
                            </p>
                        </div>
                        <div class="text-center mt-4">
                            <a href="#" class="btn btn-sm btn-pill btn-outline-success">View All</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-8 col-md-6">
                <div class="timeline-title btn-pill bg-gray text-muted d-inline-block px-3 py-1 mb-5 mx-5">January 2018</div>
                <ul class="list-unstyled base-timeline activity-timeline">

                    <li class="">
                        <div class="timeline-icon bg-danger">
                            <i class="fa fa-tasks"></i>
                        </div>
                        <div class="act-time">Today</div>
                        <div class="base-timeline-info">
                            <a href="#" class="text-uppercase weight700 f12 text-danger">Task Added</a>
                            <span class="d-block">You have added task #26 Successfully to the project “Agile CRM”</span>
                        </div>
                        <small class="text-muted">
                            28 mins ago
                        </small>
                    </li>
                    <li class="">
                        <div class="timeline-icon bg-success">
                            <i class="fa fa-download"></i>
                        </div>
                        <div class="base-timeline-info">
                            <a href="#" class="text-uppercase weight700 f12 text-success">Download Complete</a>
                            <span class="d-block">You downloaded the pdf documentation file of Agile CRM</span>
                        </div>
                        <small class="text-muted">
                            45 mins ago
                        </small>
                    </li>
                    <li class="">
                        <div class="timeline-icon bg-primary">
                            <i class="fa fa-handshake-o"></i>
                        </div>
                        <div class="act-time">Yesterday</div>
                        <div class="base-timeline-info">
                            <a href="#" class="text-uppercase weight700 f12 text-primary">Deal Added</a>
                            <span class="d-block">Final deal with ABC Company is done and added to the “Upcoming deal” list</span>
                        </div>
                        <small class="text-muted">
                            12 mins ago
                        </small>
                    </li>
                    <li class="">
                        <div class="timeline-icon">
                            <img src="assets/img/avatar/avatar2.jpg" alt=""/>
                        </div>
                        <div class="base-timeline-info">
                            <a href="#" class="text-uppercase weight700 f12 text-info">Charlie Johnson</a>
                            <span class="d-block">joined DashLab last week.</span>
                        </div>
                        <small class="text-muted">
                            3 days ago
                        </small>
                    </li>
                    <li class="">
                        <div class="timeline-icon bg-purple">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="act-time">29 January</div>
                        <div class="base-timeline-info">
                            <a href="#" class="text-uppercase weight700 f12 text-purple">Task Complete</a>
                            <span class="d-block">5 tasks for 29 january is completed successfully and no task pending</span>
                        </div>
                        <small class="text-muted">
                            07:00 PM
                        </small>
                    </li>
                </ul>

                <br/>

                <div class="timeline-title btn-pill bg-gray text-muted d-inline-block px-3 py-1 mb-5 mx-5">February 2018</div>
                <ul class="list-unstyled base-timeline activity-timeline">

                    <li class="">
                        <div class="timeline-icon bg-dark">
                            <i class="fa fa-tasks"></i>
                        </div>
                        <div class="act-time">02 February</div>
                        <div class="base-timeline-info">
                            <a href="#" class="text-uppercase weight700 f12 text-dark">Task Added</a>
                            <span class="d-block">You have added task #26 Successfully to the project “Agile CRM”</span>
                        </div>
                        <small class="text-muted">
                            28 mins ago
                        </small>
                    </li>
                    <li class="">
                        <div class="timeline-icon bg-warning">
                            <i class="fa fa-handshake-o"></i>
                        </div>
                        <div class="act-time">04 february</div>
                        <div class="base-timeline-info">
                            <a href="#" class="text-uppercase weight700 f12 text-warning">Deal Added</a>
                            <span class="d-block">Final deal with ABC Company is done and added to the “Upcoming deal” list</span>
                        </div>
                        <small class="text-muted">
                            12 mins ago
                        </small>
                    </li>
                </ul>

                <br/>

                <div class="timeline-title btn-pill bg-gray text-muted d-inline-block px-3 py-1 mb-5 mx-5">March 2018</div>
                <ul class="list-unstyled base-timeline activity-timeline">

                    <li class="">
                        <div class="timeline-icon bg-purple">
                            <i class="fa fa-tasks"></i>
                        </div>
                        <div class="act-time">05 March</div>
                        <div class="base-timeline-info">
                            <a href="#" class="text-uppercase weight700 f12 text-purple">Task Added</a>
                            <span class="d-block">You have added task #26 Successfully to the project “Agile CRM”</span>
                        </div>
                        <small class="text-muted">
                            28 mins ago
                        </small>
                    </li>
                    <li class="">
                        <div class="timeline-icon bg-info">
                            <i class="fa fa-handshake-o"></i>
                        </div>
                        <div class="act-time">06 March</div>
                        <div class="base-timeline-info">
                            <a href="#" class="text-uppercase weight700 f12 text-info">Deal Added</a>
                            <span class="d-block">Final deal with ABC Company is done and added to the “Upcoming deal” list</span>
                        </div>
                        <small class="text-muted">
                            12 mins ago
                        </small>
                    </li>
                    <li class="">
                        <div class="timeline-icon bg-danger">
                            <i class="fa fa-calendar-o"></i>
                        </div>
                        <div class="act-time">06 March</div>
                        <div class="base-timeline-info">
                            <a href="#" class="text-uppercase weight700 f12 text-danger">Event Created</a>
                            <span class="d-block">Final deal with ABC Company is done and added to the “Upcoming deal” list</span>
                        </div>
                        <small class="text-muted">
                            43 mins ago
                        </small>
                    </li>
                </ul>

                <br/>

            </div>
        </div>

    
    </div>
    </div>
    {{-- logout model--}}
    @include('frontend.includes.logout')
</div>              
@endsection
