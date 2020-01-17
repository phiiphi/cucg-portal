<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AcademicCalendar;

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
        //
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
