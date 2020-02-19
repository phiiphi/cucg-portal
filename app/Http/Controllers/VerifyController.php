<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;

class VerifyController extends Controller
{
    public function getVerify()
    {
        return view('frontend.pages.verify');
    }

    public function postVerify(Request $request)
    {
        if ($student = Student::where('code',$request->code)->first()) {
            $student->isverified = 1;
            $student->code = null;
            $student->save();
            return redirect()->route('pages.login')->withMessage('Your Account is Activated');

        }else{
            
            return back()->withMessage('Verification code is not correct, please try again');
        }

    }
}
