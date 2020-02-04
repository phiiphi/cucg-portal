@extends('backend.layouts.app')

@section('content')
<div class="container-fluid">
<!--page title-->
    <div class="page-title mb-4 d-flex align-items-center">
        <div class="mr-auto">
            <h4 class="weight500 d-inline-block pr-3 mr-3 border-right">Student Portal</h4>
                <nav aria-label="breadcrumb" class="d-inline-block ">
                    <ol class="breadcrumb p-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">academic calendar</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create Activity</li>
                    </ol>
                </nav>
        </div>
    </div>
<!--/page title-->
<div class="col-xl-12">
    <div class="card card-shadow mb-4">
        <div class="card-header border-0">
            <div class="custom-title-wrap bar-primary">
                <div class="custom-title">Add Activity To Semester Calendar</div>
            </div>
        </div>
        <div class="card-body">
            <form class="needs-validation" method="POST" action="{{route('admin.calendar.store')}}">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label class="text-uppercase" for="week">Week</label>
                        <select class="custom-select" id="inputGroupSelect01" name="week">
                            <option selected>Choose...</option>
                            <option value="Week 1" name="week">Week 1</option>
                            <option value="Week 2" name="week">Week 2</option>
                            <option value="Week 3" name="week">Week 3</option>
                            <option value="Week 4" name="week">Week 4</option>
                            <option value="Week 5" name="week">Week 5</option>
                            <option value="Week 6" name="week">Week 6</option>
                            <option value="Week 7" name="week">Week 7</option>
                            <option value="Week 8" name="week">Week 8</option>
                            <option value="Week 9" name="week">Week 9</option>
                            <option value="Week 10" name="week">Week 10</option>
                            <option value="Week 11" name="week">Week 11</option>
                            <option value="Week 12" name="week">Week 12</option>
                            <option value="Week 13" name="week">Week 13</option>
                            <option value="Week 14" name="week">Week 14</option>
                            <option value="Week 15" name="week">Week 15</option>
                            <option value="Week 16" name="week">Week 16</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="text-uppercase" for="start_date">Start</label>
                            <div class="input-group">
                                <div class="input-group date dpYears" data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2020-01-01">
                                    <input type="text" name="start_date" class="form-control" placeholder="2020-01-01" aria-label="Right Icon" aria-describedby="dp-ig">
                                    <div class="input-group-append">
                                        <button id="dp-ig" class="btn btn-outline-secondary" type="button"><i class="fa fa-calendar f14"></i></button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="text-uppercase" for="end_date">End</label>
                            <div class="input-group">
                                <div class="input-group date dpYears" data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2020-01-01">
                                    <input type="text" name="end_date" class="form-control" placeholder="2020-01-01" aria-label="Right Icon" aria-describedby="dp-ig">
                                    <div class="input-group-append">
                                        <button id="dp-ig" class="btn btn-outline-secondary" type="button"><i class="fa fa-calendar f14"></i></button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label class="text-uppercase" for="activity">Enter Activity</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Activity</span>
                            </div>
                            <textarea class="form-control" name="activity" aria-label="With textarea"></textarea>
                        </div>
                    </div>
                </div>
                {{-- <button class="btn btn-primary" type="submit">Create Activity</button> --}}
                <input type="submit" value="submit" name="submit" class="btn btn-primary">
            </form>

        </div>
    </div>
</div>

</div>
    
@endsection