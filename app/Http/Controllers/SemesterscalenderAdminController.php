<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AcademicCalendar;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class SemesterscalenderAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = AcademicCalendar::all();
        return view('backend.semestercalendar.index')->with('activities', $activities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.semestercalendar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filledData = $this->validate($request, [
            "week"          => "required",
            "start_date"    => 'required',
            "end_date"      => 'required',
            "activity"      => 'required',
        ]);

        #instance of academic calendar
        $calendar = new AcademicCalendar();
        $calendar->week            = $request->input('week');
        $calendar->activity      = $request->input('activity');
        $calendar->start            = $request->input('start_date');
        $calendar->end              = $request->input('end_date');

        #saving into the database using the save method
        $calendar->save();

        return redirect('/admin/semestercalendar')->with('success', 'Activity Added to Calendar');
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
                $fileName = resource_path('pending-calendar-files/'.date('y-m-d-H-i-s').$index.'.'.$extension);
                file_put_contents($fileName,$part);
            }

            $submit = new AcademicCalendar();
            $submit->importToDatabase();

            Alert::toast('data queued for importing', 'success');
            return redirect()->route('admin.calendar.create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $activity_single = AcademicCalendar::find($id)->findOrFail($id);
        // return view('backend.semestercalendar.index')->with('activity_single', $activity_single);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
