<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController as DefaultLoginController;

class SuperadminController extends DefaultLoginController
{
    protected $redirectTo = '/backend/pages/login';

    public function __construct()
    {
        $this->middleware('guest:super_admins')->except('logout');
    }

    public function showAdminLoginForm()
    {
        return view('backend.pages.login');
    }

    public function username()
    {
        return 'email';
    }
    protected function guard()
    {
        return Auth::guard('super_admins');
    }
}
