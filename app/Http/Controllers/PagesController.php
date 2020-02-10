<?php

namespace App\Http\Controllers;

use App\AcademicCalendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;
use App\Student;

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
            return view('frontend.pages.login');

        }else{
            $student = Auth::user();
            $activities = AcademicCalendar::all();
            return view('frontend.pages.home', compact('activities','student'));
        }

    }


    public function profile()
    {
        if(!Auth::check())
        {
            return view('frontend.pages.login');
        }else{
            $student = Auth::user();
            return view('frontend.pages.profile', compact('student'));
        }
    }


    public function formvalidation($request)
    {
        return $this->validate($request, [
            'name'               =>     'required|min:10|max:255',
            'index_number'       =>     'required|min:13|max:13',
            'faculty'            =>     'required',
            'email'              =>     'required|email|unique:students|max:255',
            'phone'              =>     'required|min:10|numeric',  #regex:/(0233)[0-9]{9}/
            'country'            =>     'required',
            'password'           =>     'required|confirmed|min:8|max:100',
        ]);
    }


    public function registerstore(Request $request)
    {
        $this->formvalidation($request);
        $request['password'] = bcrypt($request->password);

        #create instance of student table and save data
        Student::create($request->all());

        return redirect()->route('pages.login')->with('success', "Registration was successful"); #NB: will create a success page

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

        if (Auth::attempt(['index_number' => $request->index_number, 'password' => $request->password])) {
            return redirect()->route('pages.home')->with('success', 'login successful');
        } else {
            return view('pages.login')->with('errors', 'Login failed, try again with the appropriate credentials');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('pages.login');
    }
}
