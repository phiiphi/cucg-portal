<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Jobs\UploadCsvOption;

class SemesterRegcourse extends Model
{
    protected $table = 'semester_regcourses';
    protected $primaryKey = 'course_code';
    public $incrementing = false;

    protected $fillable = [
        'course_code','course_name','credit_hours', 'semester', 'programeOption', 'program','academicYear','level','admission_type','stream'
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
