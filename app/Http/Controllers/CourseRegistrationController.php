<?php

namespace App\Http\Controllers;

use App\courseRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\RegisteredCourse;
use App\SemesterRegcourse;
use App\Course;

class CourseRegistrationController extends Controller
{
    public function index()
    {
        # stepq1: gets the fields for verifying. that is fields to select the right courses for the student
        #program,programOption,academic year,level and semester

        #get the login user
        $currentStudent = Session::get('currentUserId');

        $studentProgramme = RegisteredCourse::where('studentid',$currentStudent)->value('programme');
        $studentProgrammeOption = RegisteredCourse::where('studentid',$currentStudent)->value('ProgrammeOption');
        $studentAcademicYear = RegisteredCourse::where('studentid',$currentStudent)->value('academic_year');
        $studentLevel = RegisteredCourse::where('studentid',$currentStudent)->value('level');
        $studentSemester = RegisteredCourse::where('studentid',$currentStudent)->value('semester');

        #step2: verify and select the required coreses to display
        $matchFields = ['semester' => $studentSemester, 'level' => $studentLevel, 'programeOption' => $studentProgrammeOption,
                    'program' => $studentProgramme, 'academicYear' => $studentAcademicYear];

            $course = SemesterRegcourse::where($matchFields)->get();
            return view('frontend.courseRegistration.index',compact('course'));
            
        // $studentCourses = SemesterRegcourse::all();
        // foreach($studentCourses as $studentCourse)
        // {
        //     $studentProg = $studentCourse->program;
        //     $studentProgOption = $studentCourse->programeOption;
        //     $studentAcaYear    = $studentCourse->academicYear;
        //     $level           = $studentCourse->level;
        //     $Semester        = $studentCourse->semester;
        // }

        // dd($Semester);
        // if($studentProg == $studentProgramme && $studentProgOption == $studentProgrammeOption && $studentAcaYear == $studentAcademicYear && $level == $studentLevel && $Semester == $studentSemester){
        //     return view('frontend.courseRegistration.index',compact('studentCourses'));
        // }
        // else{
        //     return redirect()->back();
        // }
    }

}