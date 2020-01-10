<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseRegistrationController extends Controller
{
    //
    public function personalInfo(){
        return view('frontend.courseRegistration.forms.personalInfo');
    }
    public function registrationDetails(){
        return view('frontend.courseRegistration.forms.registrationDetails');
    }

    public function academicInfo()
    {
        return view('frontend.courseRegistration.forms.academicInfo');
    }
    public function help(){
        return view('frontend.courseRegistration.help');
    }
}
