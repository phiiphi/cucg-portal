<?php

namespace App\Http\Controllers;

use App\AcademicCalendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;
use App\Student;
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
            'name'               =>     'required|min:10|max:255',
            'index_number'       =>     'required|min:13|max:13|unique:students,index_number',
            'faculty'            =>     'required',
            'email'              =>     'required|email|unique:students|max:255',
            'phone'              =>     'required|min:10|min:10|numeric|unique:students,phone,except,id',  #regex:/(0233)[0-9]{9}/
            'country'            =>     'required',
            'password'           =>     'required|confirmed|min:8|max:50',
        ]);
    }


    public function registerstore(Request $request)
    {
        $this->formvalidation($request);
        $request['password'] = bcrypt($request->password);

        #create instance of student table and save data
        Student::create($request->all());
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

        if (Auth::attempt(['index_number' => $request->index_number, 'password' => $request->password]))
        {
            Alert::toast('You have successfully login','success');
            return redirect()->route('pages.home');
        } else {
            Alert::error('Oops!','something went wrong! make sure you are logging in with correct details.');
            return redirect()->route('pages.login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('pages.login');
    }
}
