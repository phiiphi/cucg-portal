<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome()
    {
        $welcome_msg = "Catholic University Student Portal";

        return view('frontend.pages.welcome')->with('welcome_msg', $welcome_msg);
    }

    public function signup()
    {
        return view('frontend.pages.signup');
    }
    public function login()
    {
        return view('frontend.pages.login');
    }
}
