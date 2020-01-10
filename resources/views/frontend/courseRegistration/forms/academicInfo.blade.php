@extends('frontend.layout.courseapp')

@section('content')
    <div class="row justify-content-center mt-5 was-validated" >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ACADEMIC INFORMATION</div>
                {{--FACULTY--}}
                <div class="form-group row mt-5">
                    <label for="faculty" class="col-md-4 col-form-label text-md-right">Faculty</label>
                    <div class="col-md-6">
                        <select name="faculty" id="faculty">
                            <option value="Select Your Faculty">Select Your Faculty</option>
                            <option value="Information Communication and Technology">Information Communication and Technology</option>
                            <option value="Economics and Business Administration">Economics and Business Administration</option>
                            <option value="Health and Allied Science">Health and Allied Science</option>
                            <option value="Nursing">Nursing</option>
                            <option value="Education">Education</option>
                            <option value="Religious Studies">Religious Studies</option>
                        </select>
                    </div>
                </div>
                {{--FACULTY--}}
                <div class="form-group row">
                    <label for="faculty" class="col-md-4 col-form-label text-md-right">Session</label>

                    <div class="col-md-6">
                        <select name="faculty" id="faculty">
                            <option value="Select Your Faculty">Select Session</option>
                            <option value="Information Communication and Technology">2019</option>
                            <option value="Economics and Business Administration">2020</option>
                        </select>
                    </div>
                </div>

                {{--FACULTY--}}
                <div class="form-group row">
                    <label for="faculty" class="col-md-4 col-form-label text-md-right">Level</label>
                    <div class="col-md-6">
                        <select name="faculty" id="faculty">
                            <option value="Select Your Course">Select Level</option>
                            <option value="Level 100">Level 100</option>
                            <option value="Level 200">Level 200</option>
                            <option value="Level 300">Level 300</option>
                            <option value="Level 400">Level 400</option>
                        </select>
                    </div>
                </div>     {{--FACULTY--}}
                <div class="form-group row">
                    <label for="faculty" class="col-md-4 col-form-label text-md-right">Depa</label>
                    <div class="col-md-6">
                        <select name="faculty" id="faculty">
                            <option value="Select Your Course">Choose Course</option>
                            <option value="Computer  Science">Computer  Science/option>
                            <option value="Management">Management</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Information Technology">Information Technology</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="faculty" class="col-md-4 col-form-label text-md-right">Semester</label>
                    <div class="col-md-6">
                        <select name="faculty" id="faculty">
                            <option value="Select Your Course">Choose Semester</option>
                            <option value="Computer  Science">Semester 1</option>
                            <option value="Computer  Science">Semester 2</option>


                        </select>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <a href="{{route('courseRegistration.forms.academicInfo')}}" class="btn btn-info" role="button">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
