<?php

namespace App;

use App\Jobs\UploadCsv;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_code','course_title','credit_hours'
    ];

    protected $primaryKey = 'course_code';

    public function importToDatabase()
    {
        $path = resource_path('pending-course-files/*.csv');
        $files = glob($path);

        foreach($files as $file)
        {
            UploadCsv::dispatch($file);
        }
    }

    #establishing relationships
    public function SemesterCourses()
    {
        return $this->belongsTo('App\SemesterCourses');
    }
}
