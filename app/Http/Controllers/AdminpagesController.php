<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminpagesController extends Controller
{
    #login method
    public function login()
    {
        return view('backend.pages.login');
    }

    #index method
    public function index()
    {
        return view('backend.pages.index');
    }
}
