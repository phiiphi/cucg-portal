<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    // public function superLoginValidation(Request $request)
    // {
    //     $this->validate($request, [
    //         'email'     =>      'required|email|max:255|unique:table,column',
    //         'password'  =>      'required|min:8|max:50'
    //     ]);

    //     if(Auth::guard('superadmin')->attempt(['email' => $request->email, 'password' => $request->password]))
    //     {
    //         Alert::toast('You have successfully login as SuperAdmin','success');
    //         return redirect()->route('admin.index');
    //     }
    //     else{
    //         Alert::error('Oops!','something went wrong! make sure you are logging in with correct details.');
    //         return redirect()->route('admin.login');
    //     }
    // }
}
