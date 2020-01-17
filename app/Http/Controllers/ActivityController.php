<?php

namespace App\Http\Controllers;

use App\AcademicCalendar;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    #handles loading of semesters activies in json format
    public function loadActivities()
    {
        $activities = AcademicCalendar::all();
        return response()->json($activities);
    }
}
