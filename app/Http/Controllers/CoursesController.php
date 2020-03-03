<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Course;


class CoursesController extends Controller
{
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

    }
}
