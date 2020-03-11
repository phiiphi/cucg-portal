<?php

namespace App;

use App\Jobs\UploadCsvOption;
use Illuminate\Database\Eloquent\Model;

class SemesterRegcourse extends Model
{
    protected $table = 'semester_regcourses';

    protected $fillable = [
        'course_code', 'course_name', 'semester', 'programeOption', 'program','academicYear','level','admission_type','stream', 'credit_hours'
    ];

    public function SubmitToDatabase()
    {
        $path = resource_path('pending-add-csv-option/*.csv');
        $files = glob($path);

        foreach($files as $file)
        {
            UploadCsvOption::dispatch($file);
        }
    }

    #establishing relationships
    public function Course()
    {
        return $this->hasMany('App\Course');
    }

    public function AcademicYear()
    {
        return $this->belongsTo('App\AcademicYear');
    }

    public function Program()
    {
        return $this->belongsTo('App\Program');
    }

    public function ProgramOption()
    {
        return $this->belongsTo('App\ProgramOption');
    }


}
