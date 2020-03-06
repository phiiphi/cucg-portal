<?php

namespace App;

use App\Jobs\UploadCalendarCsv;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AcademicCalendar extends Model
{
    use SoftDeletes;

    #mass assignable attributes/fields
    protected $fillable = [
        'week', 'activity', 'start', 'end'
    ];

    public function importToDatabase()
    {
        $path = resource_path('pending-calendar-files/*.csv');
        $files = glob($path);

        foreach($files as $file)
        {
            UploadCalendarCsv::dispatch($file);
        }
    }

}
