<?php

namespace App\Http\Controllers;

use App\AcademicYear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Course;
use  App\Program;
use  App\SemesterRegcourse;
use App\ProgramOption;
use Illuminate\Support\Facades\DB;




class CoursesController extends Controller
{
    protected $semester_reg_course, $program, $program_option, $academic_year;

    public function __construct()
    {
        $this->semester_reg_course = new SemesterRegcourse();
        $this->program = new Program();
        $this->program_option = new ProgramOption();
        $this->academic_year = new AcademicYear();

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
                $fileName = resource_path('pending-files/'.date('y-m-d-H-i-s').$index.'.'.$extension);
                file_put_contents($fileName,$part);
            }

            $submit = new Course();
            $submit->importToDatabase();

            Alert::toast('data queued for importing', 'success');
            return redirect()->route('courses.add');
        }
    }

    #UPLOADING SEMESTER COURSES
    public function createSemesterCourses()
    {
        return view('backend.courses.add_semester_courses');
    }

    public function processSemesterCourses(Request $request)
    {

            $this->validate($request, [
            'course_name'        =>     'required',
            'semester'           =>     'required|min:8|max:100',
            'level'              =>     'required|min:3|max:3',
            'academic_year'      =>     'required',
            'programme'          =>     'required',
            'programme_option'   =>     'required',
            'admission_type'     =>     'required',
            'stream'             =>     'required'
        ]);

        DB::beginTransaction();
        try
        {

            $semester_reg_course = $this->semester_reg_course->create([
                'course_name'       =>      $request['course_name'],
                'semester'          =>      $request['semester'],
                'level'             =>      $request['level'],
                'admission_type'    =>      $request['admission_type'],
                'stream'            =>      $request['stream']








                // 'course_name'       =>      $request->course_name,
                // 'semester'          =>      $request->semester,
                // 'level'             =>      $request->level,
                // 'admission_type'    =>      $request->admission_type,
                // 'stream'            =>      $request->stream,

            ]);


            $program_option = $this->program_option->create([
                'Option_name'       =>      $request['programme_option'],


            ]);

            $program = $this->program->create([
            'program_name'          =>      $request['programme'],
            ]);


            $academic_year = $this->academic_year->create([
            'academic_year'         =>      $request['academicyear'],


            ]);

            if ($semester_reg_course && $program_option && $program && $academic_year)
            {
                DB::commit();
            }
            else{
                DB::rollBack();
            }
            return redirect()->back();
        }
        catch (\Exception $exception) {
            DB::rollBack();

        }

    }
}
