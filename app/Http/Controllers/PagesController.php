<?php

namespace App\Http\Controllers;

use App\AcademicCalendar;
use Illuminate\Http\Request;

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

    public function home()
    {
        $activities = AcademicCalendar::all();
        return view('frontend.pages.home')->with('activities', $activities);
    }

    public function profile()
    {
        return view('frontend.pages.profile');
    }

    #METHOD FOR VALIDATING,STORING LOGIN DATA INTO THE DATATBASE
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginstore(Request $request)
    {
        //validate all login input field
        // $data =  $this->validate($request, [
        //     'index_number'  =>  'required|min:11|max:11',
        //     'password'      =>  'require'
        // ]);

        return redirect()->route('pages.home');
    }
}
