@extends('backend.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-shadow mb-4">
        <div class="card-header border-0">
            <div class="custom-title-wrap bar-primary">
                <div class="custom-title">Add Semester Courses</div>
                <a href="{{route('course.addcsv')}}" class="btn btn-primary float-right"> Upload a Csv file</a>
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
                                    <input type="text" class="form-control @error('academic_year') is-invalid @enderror" name="academic_year" id="academic_year" placeholder="eg: 2020/2021" required>
                                    @error('academic_year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="text-uppercase" for="week">SEMESTER</label>
                            <select class="custom-select @error('semester') is-invalid @enderror" id="inputGroupSelect01" name="semester">
                                <option selected>Choose...</option>
                                <option value="Semester 1" name="semester">Semester 1</option>
                                <option value="Semester 2" name="semester">Semester 2</option>
                            </select>
                            @error('semester')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="text-uppercase" for="week">PROGRAMME</label>
                            <select class="custom-select @error('programme') is-invalid @enderror" id="inputGroupSelect01" name="programme">
                                <option selected>Choose...</option>
                                <option value="B.Sc. Computer Science" name="programme">B.Sc Computer Science</option>
                                <option value="B.Sc. Actuarial Science" name="programme">B.Sc Actuarial Science</option>
                                <option value="B.Sc. Information Technology" name="programme">B.Sc Information Technology</option>
                                <option value="B.Sc. Economics and Bussiness Adminstration" name="programme">B.Sc Economics and Bussiness Adminstration</option>
                            </select>
                            @error('programme')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label class="text-uppercase" for="week">PROGRAMME OPTION</label>
                            <select class="custom-select @error('programme_option') is-invalid @enderror" id="inputGroupSelect01" name="programme_option">
                                <option selected>Choose...</option>
                                <option value="Accounting" name="programme_option">Accounting</option>
                                <option value="Marketing" name="programme_option">Marketing</option>
                                <option value="Economics" name="programme_option">Economics</option>
                                <option value="Procumment and Inventory Management" name="programme_option">Procumment and Inventory Management</option>
                                <option value="Human Resource Management" name="programme_option">Human Resource Management</option>
                                <option value="Banking and Finance" name="programme_option">Banking and Finance</option>
                            </select>
                            @error('programme_option')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="text-uppercase" for="week">LEVEL</label>
                            <select class="custom-select @error('programme_option') is-invalid @enderror" id="inputGroupSelect01" name="level">
                                <option selected>Choose...</option>
                                <option value="100" name="level">100</option>
                                <option value="200" name="level">200</option>
                                <option value="300" name="level">300</option>
                                <option value="400" name="level">400</option>
                            </select>
                            @error('level')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="text-uppercase" for="week">ADMISSION TYPE</label>
                            <select class="custom-select @error('admission_type') is-invalid @enderror" id="inputGroupSelect01" name="admission_type">
                                <option selected>Choose...</option>
                                <option value="Undergraduate" name="admission_type">Undergraduate</option>
                                <option value="Postgraduate" name="admission_type">Postgraduate</option>
                                <option value="Sandwhich" name="admission_type">Sandwhich</option>
                            </select>
                            @error('admission_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label class="text-uppercase" for="week">STREAM</label>
                            <select class="custom-select" id="inputGroupSelect01" name="stream">
                                <option selected>Choose...</option>
                                <option value="Regular" class="@error('stream') is-invalid @enderror" name="stream">Regular</option>
                                <option value="Weekend"class="@error('stream') is-invalid @enderror" name="stream">Weekend</option>
                            </select>
                            @error('stream')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-md-8 mb-3">
                            <label class="text-uppercase" for="course_name">COURSE NAME</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-book"></i></span>
                                </div>
                                <textarea class="form-control @error('course_name') is-invalid @enderror" name="course_name" aria-label="With textarea"></textarea>
                                @error('course_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="ADD SEMESTER COURSES" name="submit" class="btn btn-primary">
                </form>
            </div>
    </div>
@endsection
