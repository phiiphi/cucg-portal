<?php

namespace App\Http\Controllers;

use App\AcademicCalendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Hash;
use App\Student;
use App\Faculty;
use App\Program;
use App\Nationality;
use App\ProgramOption;
use App\ProgramStatus;
use App\StudentStatus;
use App\RegisteredCourse;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;
use App\SendCode;

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
        if(!Auth::check())
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
        return redirect()->route('pages.verify')->with(compact('phone_number'));
        
                
            

        
    # $request['password'] = bcrypt($request->password);

        // DB::beginTransaction();

        // try {
        //     $students = $this->students->create([
        //         'index_number'  =>  $request->index_number,
        //         'last_name'     =>  $request->last_name,
        //         'other_names'   =>  $request->other_names,
        //         'phone'         =>  $request->phone,
        //         'isverified' =>  0,
        //         'email'         =>  $request->email,
        //         'gender'        =>  $request->gender,
        //         'level'         =>  $request->level,
        //         'password'      =>  $request->password
        //     ]);

        //     $faculty = $this->faculty->create([
        //         'student_id'    => $students->index_number,
        //         'faculty_name'       => $request->faculty
        //     ]);

        //     $program = $this->program->create([
        //         'student_id'    => $students->index_number,
        //         'program_name'       => $request->program
        //     ]);

        //     $programOption = $this->programOption->create([
        //         'student_id'  => $students->index_number,
        //         'Option_name'=> $request->program_option
        //     ]);

        //     $programStatus = $this->programStatus->create([
        //         'student_id'  =>  $students->index_number,
        //         'ProgStatus'  => $request->program_status
        //     ]);

        //     $nationality = $this->nationality->create([
        //         'student_id'   => $students->index_number,
        //         'country_name'       => $request->country
        //     ]);

        //     $studentStatus = $this->studentStatus->create([
        //         'student_id'  =>  $students->index_number,
        //         'status'=> $request->student_status
        //     ]);

        //     #send verification code
        //     if($students)
        //     {
        //         $students->code = SendCode::sendCode($students->phone);
        //         $students->save();
        //     }

        //     if ($students && $faculty && $program && $programOption && $nationality && $programStatus && $studentStatus)
        //     {
        //         DB::commit();
        //         Alert::success('Congratulation', 'You have successfully registered for an account');
        //         return redirect()->route('pages.verify');
        //     }else{
        //         DB::rollBack();
        //         Alert::error('oop!s', 'Something went wrong');
        //         return redirect()->route('pages.signup');
        //     }
        // } catch (\Exception $exception) {
        //     DB::rollBack();
        // }

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
        
        # $request['password'] = bcrypt($request->password);
        $password =  RegisteredCourse::where('studentid',$request->index_number)->value('password');
        if(Hash::check( $request->index_number, $password ))
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
