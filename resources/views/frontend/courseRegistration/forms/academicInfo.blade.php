@extends('frontend.layout.courseapp')

@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8" id="personalInfo">
            <div class="card">
                <div class="card-header" id="wrapper1">ACADEMIC INFORMATION</div>

                {{--FACULTY--}}
                <div class="form-group row">
                    <label for="faculty" class="col-md-4 col-form-label text-md-right">Choose Faculty</label>

                    <div class="col-md-6">
                        <select name="faculty" id="faculty">
                            <option value="Select Your Faculty">Select Your Faculty</option>
                            <option value="Information Communication and Technology">Information Communication and Technology</option>
                            <option value="Economics and Business Adminstration">Economics and Business Adminstration</option>
                            <option value="Health and Allied Science">Health and Allied Science</option>
                            <option value="Nursing">Nursing</option>
                            <option value="Education">Education</option>
                            <option value="Religious Studies">Religious Studies</option>
                        </select>
                    </div>
                </div>

                {{--FACULTY--}}
                <div class="form-group row">
                    <label for="faculty" class="col-md-4 col-form-label text-md-right">Choose Session</label>

                    <div class="col-md-6">
                        <select name="faculty" id="faculty">
                            <option value="Select Your Faculty">Select Session</option>
                            <option value="Information Communication and Technology">2019</option>
                            <option value="Economics and Business Adminstration">2020</option>

                        </select>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="">
                        @csrf
                        {{--FIRST NAME--}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">S</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter First Name">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{--Middle Name--}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Enter Middle Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Optional">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{--Surname--}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Enter Surname</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Surname">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{--EMAIL--}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="example: charlesbasoah93@gmail.com">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0" id="btnStyle">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{route('courseRegistration.forms.academicInfo')}}" class="btn btn-info" role="button">Register</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
