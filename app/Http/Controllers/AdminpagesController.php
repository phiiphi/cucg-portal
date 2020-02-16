<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\SuperAdmin;


class AdminpagesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:super_admins');
    // }

    public function index()
    {
        return view('backend.pages.index');
    }

    public function login()
    {
        return view('backend.pages.login');
    }
}
