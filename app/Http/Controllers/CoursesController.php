<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Course;
use App\Program;
use App\SemesterRegcourse;
use App\ProgramOption;
use App\AcademicYear;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class CoursesController extends Controller
{
    protected $semester_reg_course, $program, $program_option, $academic_year,$course;

    public function __construct()
    {
        $this->semester_reg_course = new SemesterRegcourse();
        $this->program             = new Program();
        $this->program_option      = new ProgramOption();
        $this->academic_year       = new AcademicYear();
        $this->course              = new Course();
    }

    #IMPORT CSV FILE INTO DATABASE
    public function importFile()
    {
        return view('backend.courses.add_courses');
    }

    public function exportFile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|max:10000|mimes:xlsx,xls,csv,txt'
        ]);

        if ($validator->fails()) {
            # display error messages
            Alert::toast('The file format is not supported','error');
            return redirect()->back();
        } else {
            #retrieve file
            $file = file($request->file->getRealPath());
            $extension = $request->file->getClientOriginalExtension();
            $data = array_slice($file,1);

            #break the huge data into parts
            $parts = (array_chunk($data, 1000));

            foreach($parts as $index=>$part)
            {
                $fileName = resource_path('pending-course-files/'.date('y-m-d-H-i-s').$index.'.'.$extension);
                file_put_contents($fileName,$part);
            }

            $submit = new Course();
            $submit->importToDatabase();

            Alert::toast('data queued for importing', 'success');
            return redirect()->route('courses.add');
        }
    }


    public function createSemesterCourses()
    {
        return view('backend.courses.add_semester_courses');
    }

    public function formvalidation($request)
    {
        return $this->validate($request, [
            'course_name'        =>     'required',
            'semester'           =>     'required',
            'level'              =>     'required',
            'academic_year'      =>     'required',
            'programme'          =>     'required',
            'programme_option'   =>     'required',
            'admission_type'     =>     'required',
            'stream'             =>     'required'

        ]);

    }

    #UPLOADING SEMESTER COURSES
    public function processSemesterCourses(Request $request)
    {
        $this->formvalidation($request);

        // DB::beginTransaction();
        // try
        // {

            #assign random id
           // $progOptRandom = IdGenerator::generate(['table' => 'program_options', 'length' => 9, 'prefix'=>'PO-']);
            // DB::table('program_options')->insert(['ProgramOpt_id' => $progOptRandom]);
            // $program_option = $this->program_option->create([
            //     'id'                =>      $progOptRandom, 
            //     'Option_name'       =>      $request->programme_option
            // ]);
            
            #assign random id
           // $progRandom = IdGenerator::generate(['table' => 'programs', 'length' => 8, 'prefix'=>'P-']);
            // DB::table('program_options')->insert(['ProgramOpt_id' => $progRandom]);
            // $program = $this->program->create([
            //     'id'               =>   $progRandom,
            //     'program_name'     =>   $request->programme,
            // ]);
        
            #assign random id
           // $acaRandom = IdGenerator::generate(['table' => 'academic_years', 'length' => 9, 'prefix'=>'AY-']);
            // DB::table('program_options')->insert(['ProgramOpt_id' => $acaRandom]);
            // $academic_year = $this->academic_year->create([
            //     'id'                    => $acaRandom,
            //     'academic_year'         => $request->academic_year
            // ]);
            //$academic_year->academicyear_id = $acaRandom;
            
            #assign random id
            $regcourseRandom = IdGenerator::generate(['table' => 'semester_regcourses', 'length' => 9, 'prefix'=>'RC-']);
            // $programOptionId =$program_option->id;
            // $programId = $program->id;
            // $academicYearId = $academic_year->id;
            //dd($programOptionId,$programId,$academicYearId);
            $semester_reg_course = $this->semester_reg_course->create([
                'id'               =>       $regcourseRandom,
                'course_name'       =>      $request->course_name,
                'semester'          =>      $request->semester,
                'level'             =>      $request->level,
                'admission_type'    =>      $request->admission_type,
                'stream'            =>      $request->stream,
                'programeOption'  =>        $request->programme_option,
                'program'         =>        $request->programme,
                'academicYear'    =>        $request->academic_year
            ]);
            
            // $semesterRegcourseId = $semester_reg_course->id;
            // $course = $this->course->create([
            //     'semesterRegcourse_id' => $semesterRegcourseId
            // ]);

            if ( $semester_reg_course) 
            {
                DB::commit();
                Alert::toast('Successfully Uploaded','success');
                return redirect()->back();
            }
            else{
                DB::rollBack();
                Alert::toast('Sorry! something went wrong','error');
                return redirect()->back();
            }
        // }
        // catch (\Exception $exception) {
        //     DB::rollBack();
        //     Alert:toast('Sorry! couldnt create tables','error');
        //     return redirect()->back();
            
        // }

    }
}
