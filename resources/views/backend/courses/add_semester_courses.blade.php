@extends('backend.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-shadow mb-4">
        <div class="card-header border-0">
            <div class="custom-title-wrap bar-primary">
                <div class="custom-title">Add Semester Courses</div>
            </div>
        </div>
            <div class="card-body">
                <form class="needs-validation" method="POST" action="{{route('semestercourses.process')}}">
                    {{ csrf_field() }}
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label class="text-uppercase" for="start_date">ACADEMIC YEAR</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class=" fa fa-calendar"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="academic_year" id="academic_year" placeholder="eg: 2020/2021">
                                </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="text-uppercase" for="week">SEMESTER</label>
                            <select class="custom-select" id="inputGroupSelect01" name="semester">
                                <option selected>Choose...</option>
                                <option value="First Semester" name="semester">First Semester</option>
                                <option value="Second Semester" name="semester">Second Semester</option>
                            </select>
                        </div>
                        
                        <div class="col-md-4 mb-3">
                            <label class="text-uppercase" for="week">PROGRAMME</label>
                            <select class="custom-select" id="inputGroupSelect01" name="programme">
                                <option selected>Choose...</option>
                                <option value="BSC Computer Science" name="programme">BSC Computer Science</option>
                                <option value="BSC Actuarial Science" name="programme">BSC Actuarial Science</option>
                                <option value="BSC Information Technology" name="programme">BSC Information Technology</option>
                                <option value="BSC Economics and Bussiness Adminstration" name="programme">BSC Economics and Bussiness Adminstration</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label class="text-uppercase" for="week">PROGRAMME OPTION</label>
                            <select class="custom-select" id="inputGroupSelect01" name="programme_option">
                                <option selected>Choose...</option>
                                <option value="Accounting" name="programme_option">Accounting</option>
                                <option value="Marketing" name="programme_option">Marketing</option>
                                <option value="Economics" name="programme_option">Economics</option>
                                <option value="Procumment and Inventory Management" name="programme_option">Procumment and Inventory Management</option>
                                <option value="Human Resource Management" name="programme_option">Human Resource Management</option>
                                <option value="Banking and Finance" name="programme_option">Banking and Finance</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="text-uppercase" for="week">LEVEL</label>
                            <select class="custom-select" id="inputGroupSelect01" name="level">
                                <option selected>Choose...</option>
                                <option value="level 100" name="level">level 100</option>
                                <option value="level 200" name="level">level 200</option>
                                <option value="level 300" name="level">level 300</option>
                                <option value="level 400" name="level">level 400</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="text-uppercase" for="week">ADMISSION TYPE</label>
                            <select class="custom-select" id="inputGroupSelect01" name="admission_type">
                                <option selected>Choose...</option>
                                <option value="Undergraduate" name="admission_type">Undergraduate</option>
                                <option value="Postgraduate" name="admission_type">Postgraduate</option>
                                <option value="Sandwhich" name="admission_type">Sandwhich</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label class="text-uppercase" for="week">STREAM</label>
                            <select class="custom-select" id="inputGroupSelect01" name="stream">
                                <option selected>Choose...</option>
                                <option value="Regular" name="stream">Regular</option>
                                <option value="Weekend" name="stream">Weekend</option>
                            </select>
                        </div>

                        <div class="col-md-8 mb-3">
                            <label class="text-uppercase" for="activity">COURSE NAME</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-book"></i></span>
                                </div>
                                <textarea class="form-control" name="activity" aria-label="With textarea"></textarea>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="ADD SEMESTER COURSES" name="submit" class="btn btn-primary">
                </form>
            </div>
    </div>
@endsection