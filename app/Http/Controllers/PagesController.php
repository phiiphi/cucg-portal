<?php

namespace App\Http\Controllers;

use App\AcademicCalendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;
use App\Student;
use App\Faculty;
use App\Program;
use App\Nationality;
use App\ProgramOption;
use App\ProgramStatus;
use App\ProgranStatus;
use App\StudentStatus;
use RealRashid\SweetAlert\Facades\Alert;


class PagesController extends Controller
{
    public function starting()
    {
        $welcome_msg = "Catholic University Student Portal";
        return view('frontend.pages.starting')->with('welcome_msg', $welcome_msg);
    }


    public function signup()
    {
        return view('frontend.pages.signup');
    }


    public function login()
    {
        return view('frontend.pages.login');
    }

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function home()
    {
        if(!Auth::check())
        {
            Alert::toast('Sorry! only registered users can access that page. kindly register','error');
            return view('frontend.pages.login');

        }else{
            $student    = Auth::user();
            $activities = AcademicCalendar::all();
            return view('frontend.pages.home', compact('activities','student'));
        }

    }


    public function profile()
    {
        if(!Auth::check())
        {
            Alert::toast('Sorry! only registered users can access that page. kindly register','error');
            return view('frontend.pages.login');
        }else{
            $student = Auth::user();
            return view('frontend.pages.profile', compact('student'));
        }
    }


    public function formvalidation($request)
    {
        return $this->validate($request, [
            'last_name'          =>     'required|min:3|max:255',
            'other_names'        =>     'required|min:3|max:255',
            "gender"             =>     'required',
            'program'            =>     'required',
            'program_option'     =>     'required',
            'level'              =>     'required',
            'student_status'     =>     'required',
            'program_status'     =>     'required',
            'index_number'       =>     'required|min:13|max:13|unique:students,index_number',  #|exists:registry_biodatas,Student Number unique:students,index_number
            'faculty'            =>     'required',
            'email'              =>     'required|email|max:255|unique:students', 
            'phone'              =>     'required|min:10|min:10|numeric|unique:students,phone',  #regex:/(0233)[0-9]{9}/
            'country'            =>     'required',
            'password'           =>     'required|confirmed|min:8|max:50',
        ]);

    }


    public function registerstore(Request $request)
    {
        $this->formvalidation($request);
        $request['password'] = bcrypt($request->password);

        Student::create([
            'index_number'  =>  $request['index_number'],
            'last_name'     =>  $request['last_name'],
            'other_names'   =>  $request['other_names'],
            'phone'         =>  $request['phone'],
            'email'         =>  $request['email'],
            'gender'        =>  $request['gender'],
            'level'         => $request['level'],
            'password'      => $request['password']
        ]);

        Faculty::create([
            'index_number'  =>  $request['index_number'],
            'faculty'       => $request['faculty_name']
        ]);

        Program::create([
            'index_number'  =>  $request['index_number'],
            'program'       => $request['program_name']
        ]);

        ProgramOption::create([
            'index_number'  =>  $request['index_number'],
            'program_option'=> $request['Option_name']
        ]);

        ProgramStatus::create([
            'index_number'  =>  $request['index_number'],
            'program_status' => $request['ProgStatus']
        ]);

        Nationality::create([
            'index_number'  =>  $request['index_number'],
            'country'       => $request['country_name']
        ]);

        StudentStatus::create([
            'index_number'  =>  $request['index_number'],
            'student_status'=> $request['status']
        ]);

        Alert::success('Congratulation', 'You have successfully registered for an account');
        return redirect()->route('pages.login');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginstore(Request $request)
    {
        $this->validate($request, [
            'index_number'       =>     'required|min:13|max:13',
            'password'           =>     'required|min:8|max:100',
        ]);

        // if (Auth::attempt(['index_number' => $request->index_number, 'password' => $request->password]))
        // {
        //     Alert::toast('You have successfully login','success');
        //     return redirect()->route('pages.home');
        // } else {
        //     Alert::error('Oops!','something went wrong! make sure you are logging in with correct details.');
        //     return redirect()->route('pages.login');
        // }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('pages.login');
    }
}
