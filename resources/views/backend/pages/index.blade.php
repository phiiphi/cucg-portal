{{--Extending content from layouts.app--}}
@extends('backend.layouts.app')

{{--MAIN CONTENT--}}
@section('content')
<div class="container-fluid">
        <!--creative states-->
        <div class="creative-state-area">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <h4 class="creative-state-title">Dashboard</h4>
                </div>
                <div class="col-lg-5  col-12 text-lg-right">
                    <div class="row short-states mb-lg-0 mb-4">
                        <div class="col-6">
                            <span class="pr-2">unique visitors</span>
                            <span id="unique_visitors"></span>
                        </div>
                        <div class="col-6">
                            <span class="pr-2">total visitors</span>
                            <span id="total_visitors"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="creative-state-icon bg-danger text-center pull-left">
                        <i class="vl_clip-board"></i>
                    </div>
                    <div class="creative-state-info text-center pull-left">
                        <h3 class="mt-4">9808</h3>
                        <p class="mb-0">Registered Student</p>
                        <div class=" widget-action-link ">
                            <small class="text-danger weight700">5% <i class="fa fa-long-arrow-down"></i></small>
                        </div>

                        <div class="">
                            <canvas id="state_order_chart" height="80"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="creative-state-icon bg-warning text-center pull-left">
                        <i class="vl_cart-full"></i>
                    </div>
                    <div class="creative-state-info text-center pull-left">
                        <h3 class="mt-4">1231</h3>
                        <p class="mb-0">total Courses</p>
                        <div class=" widget-action-link">
                            <small class="text-success weight700">5% <i class="fa fa-long-arrow-up"></i></small>
                        </div>
                        <div class="">
                            <canvas id="state_sale_chart" height="80"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="creative-state-icon bg-purple text-center pull-left">
                        <i class="vl_dollar-on-hand"></i>
                    </div>
                    <div class="creative-state-info text-center pull-left">
                        <h3 class="mt-4">23214</h3>
                        <p class="mb-0">total Students</p>
                        <div class=" widget-action-link">
                            <small class="text-success weight700">5% <i class="fa fa-long-arrow-up"></i></small>
                        </div>
                        <div class="">
                            <canvas id="state_profit_chart" height="80"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/creative states-->

    <div class="row">
        <div class="col-md-6 col-sm-12">
            {{--ADD CONTENT HERE--}}
        </div>

        {{--aCTIVE USERS--}}
        <div class="col-md-6 col-sm-12">
            <div class="card text-light mb-4 basic-gradient bubble-shadow">
                <div class="widget-action-link">
                    <div class="dropdown">
                        <a href="#" class="btn btn-transparent text-white dropdown-hover p-0" data-toggle="dropdown">
                            <i class=" vl_ellipsis-fill-h"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                            <a class="dropdown-item" href="#"> Edit</a>
                            <a class="dropdown-item" href="#"> Delete</a>
                            <a class="dropdown-item" href="#"> Settings</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="widget-active-user">
                        <h5 class="mt-3 b-b1 mb-4">Active user right now</h5>
                        <h1 class="mb-4">13</h1>
                        <h5 class="mt-3 b-b1 mb-5">Page view per minutes</h5>
                        <div id="active_users" class="text-center"></div>
                        <h5 class="mt-5 mb-0">Top active pages</h5>
                        <ul class="list-unstyled active-page-link">
                            <li><small>/product/dashlab/sample-one.html</small> <span>1</span></li>
                            <li><small>/product/flatlab/ui-components.php</small> <span>3</span></li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
</div>

@endsection
