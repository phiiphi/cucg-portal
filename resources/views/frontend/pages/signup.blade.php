@extends('frontend.layout.registerapp')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-8" id="signup">
        <div class="card">
            <div class="card-header text-center"><img src="{{asset('/images/slogo1.png')}}" alt="school logo"/> CATHOLIC UNIVERSITY COLLEGE OF GHANA</div>

            <div class="card-body">
                <form method="post" action="{{route('pages.registerstore')}}">
                    @csrf
                    {{--LAST NAME--}}
                    <div class="form-group row">
                        <label for="last_name" class="col-md-2 col-form-label text-md-right">Last Name</label>
                        <div class="col-md-3">
                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus placeholder="please enter last name" minlength="3" maxlength="100">

                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <label for="other_names" class="col-md-2 col-form-label text-md-right">Other Names</label>
                        <div class="col-md-3">
                            <input id="other_names" type="text" class="form-control @error('other_names') is-invalid @enderror" name="other_names" value="{{ old('other_names') }}" required autocomplete="other_names" autofocus placeholder="please enter other names" minlength="3" maxlength="100">

                            @error('other_names')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{--INDEX NUMBER--}}
                    <div class="form-group row">
                        <label for="index_number" class="col-md-2 col-form-label text-md-right">Index Number</label>
                        <div class="col-md-3">
                            <input id="index_number" type="text" class="form-control @error('index_number') is-invalid @enderror" name="index_number" value="{{ old('index_number') }}" required autocomplete="index_number" autofocus placeholder="example: ugr0201610162" minlength="13" maxlength="13">

                            @error('index_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        {{--Gender--}}
                        <label for="gender" class="col-md-2 col-form-label text-md-right"> Gender</label>
                            <div class="col-md-3">
                                <select name="gender" id="gender" required>
                                    <option value="Select Your Faculty">Select Your Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                    </div>

                        {{--EMAIL--}}
                    <div class="form-group row">
                        <label for="email" class="col-md-2 col-form-label text-md-right">E-Mail Address</label>
                        <div class="col-md-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="eg: charlesbasoah93@gmail.com">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- PHONE NUMBER--}}
                        <label for="phone" class="col-md-2 col-form-label text-md-right">Phone Number</label>
                        <div class="col-md-3">
                            <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="example: 054XXXXXXX" minlength="10" maxlength="10">

                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    {{--FACULTY--}}
                    <div class="form-group row">
                        <label for="faculty" class="col-md-2 col-form-label text-md-right">Faculty</label>
                        <div class="col-md-3">
                            <select name="faculty" id="faculty" required>
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

                {{--PRograms--}}
                <div class="form-group row">
                    <label for="program" class="col-md-2 col-form-label text-md-right">Program</label>
                    <div class="col-md-3">
                        <select name="program" id="program" required>
                            <option value="Select Your Program">Select Your Program</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Acutrial Science">Acutrial Science</option>
                            <option value="Nursing">Nursing</option>
                        </select>
                    </div>

                    {{--PRograms options--}}
                    <label for="program_option" class="col-md-2 col-form-label text-md-right">Program Option</label>
                    <div class="col-md-3">
                        <select name="program_option" id="program_option" required>
                            <option value="Select Your Program">Select Your Program Option</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Managment">Managment</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Nursing">Nursing</option>
                            <option value="Computer Science">Computer Science</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Acutrial Science">Acutrial Science</option>

                        </select>
                    </div>
                </div>

                    {{--COUNTRY--}}
                    <div class="form-group row">
                        <label for="country" class="col-md-2 col-form-label text-md-right">Choose Country</label>
                        <div class="col-md-3">
                            <select name="country" id="country">
                                <option value="Select Your country">Select Your Country</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="cote d'ivore">Cote d'ivove</option>
                                <option value="Togo">Togo</option>
                                <option value="Benin">Benin</option>
                            </select>
                        </div>

                        {{--level--}}
                        <label for="level" class="col-md-2 col-form-label text-md-right">Level</label>
                        <div class="col-md-3">
                            <select name="level" id="level">
                                <option value="Select Your level">Select Your level</option>
                                <option value="100">100</option>
                                <option value="200">200</option>
                                <option value="300">300</option>
                                <option value="400">400</option>
                            </select>
                        </div>
                    </div>

                    {{--Student status--}}
                    <div class="form-group row">
                    <label for="student_status" class="col-md-2 col-form-label text-md-right">Student Status</label>
                    <div class="col-md-3">
                        <select name="student_status" id="student_status">
                            <option value="Select Student Type">Select Student Type</option>
                            <option value="Regular">Regular</option>
                            <option value="Weekend">Weekend</option>
                            <option value="Sandwhich">Sandwhich</option>
                        </select>
                    </div>

                    {{--program status--}}
                    <label for="program_status" class="col-md-2 col-form-label text-md-right">Program Status</label>
                    <div class="col-md-3">
                        <select name="program_status" id="program_status">
                            <option value="Select Your Program Status">Select Your Program Status</option>
                            <option value="Bachelor Of Science">Bachelor Of Science</option>
                            <option value="Bachelor Of Education">Bachelor Of Education</option>
                            <option value="Diploma">Diploma</option>
                        </select>
                    </div>
                </div>
                    {{--PASSWORD--}}
                    <div class="form-group row">
                        <label for="password" class="col-md-2 col-form-label text-md-right">Password</label>
                        <div class="col-md-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="please enter password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{--Confirm PASSWORD--}}
                        <label for="password-confirm" class="col-md-2 col-form-label text-md-right">Confirm Password</label>
                        <div class="col-md-3">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="please repeat password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
