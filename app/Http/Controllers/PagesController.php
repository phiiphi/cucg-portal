<?php

namespace App\Http\Controllers;

use App\AcademicCalendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Student;
use App\RegisteredCourse;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use App\SendCode;
use App\Libraries\CustompasswordClass;
use Illuminate\Support\Facades\Hash;

class PagesController extends Controller
{
   # protected $students,$faculty,$program,$programOption,$nationality,$programStatus,$studentStatus;
   protected $students;
    public function __construct()
    {
        $this->students      = new Student();
        // $this->faculty       = new Faculty();
        // $this->program       = new Program();
        // $this->programOption = new ProgramOption();
        // $this->nationality   = new Nationality();
        // $this->programStatus = new ProgramStatus();
        // $this->studentStatus = new StudentStatus();
    }

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
        $verify = Student::where('isverified', 1);
        // echo( $verify);

        if( !$verify )
        {
            Alert::toast('Sorry! only registered users can access that page. kindly register','error');
            return view('frontend.pages.login');

        }else{
            $student    = Auth::user();
            $activities = AcademicCalendar::all();
            Alert::toast('Great job! login successfully','success');
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
            // 'last_name'          =>     'required|min:3|max:255|exists:registry_biodatas,Lastname',
            // 'other_names'        =>     'required|min:3|max:255',
            // "gender"             =>     'required',
            // 'program'            =>     'required',
            // 'program_option'     =>     'required',
            // 'level'              =>     'required',
            // 'student_status'     =>     'required',
            // 'program_status'     =>     'required',
            'index_number'          =>     'required|min:13|max:13|unique:students,index_number|exists:registry_biodatas,Student Number',
            // 'faculty'            =>     'required',
            // 'email'              =>     'required|email|max:255|unique:students',
            // 'phone'              =>     'required|min:10|min:10|numeric|unique:students,phone',  #regex:/(0233)[0-9]{9}/
            // 'country'            =>     'required',
            //'password'           =>     'required|confirmed|min:8|max:50',
        ]);

    }


    public function registerstore(Request $request)
    {
        $this->formvalidation($request);
        try
        {
            #Retriving fields
            $phone_number = RegisteredCourse::where('studentid',$request->index_number)->value('phone');
            $index_number = RegisteredCourse::where('studentid',$request->index_number)->value('studentid');
            #$email = RegisteredCourse::where('index_number',$request->index_number)->value('email');

        #save index_number
        $students = $this->students->create([
            'index_number' => $index_number
        ]);
        #send verification code
        if($students)
        {
            $students->code = SendCode::sendCode($phone_number);
            $students->save();

        }
        #send success message
        Alert::success('Congratulation', 'You have successfully registered for an account');
        return view('frontend.pages.verify', ['phone_number'=>$phone_number]);

        }
        catch (\Exception $exception) {
            DB::rollBack();
            return view('frontend.pages.signup');
            Alert::toast('Regitration Unsecceful, Try again','error');
        }

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
            'index_number'       =>     'required|min:13|max:13|exists:registry_biodatas,Student Number',
            'password'           =>     'required|min:8|max:100',
        ]);

        $password =  RegisteredCourse::where('studentid',$request->index_number)->value('password');
        $customPassword = new CustompasswordClass();
        if($customPassword->convertPasswordToHash($request->password) == $password )
        {

            Alert::toast('You have successfully login','success');
            return redirect()->route('pages.home');
        }
        else{

            Alert::toast('Oops! incorrect password. try again ','error');
            return redirect()->route('pages.login');
        }

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
