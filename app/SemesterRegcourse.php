<?php

namespace App;

use App\Jobs\UploadCsv;
use Illuminate\Database\Eloquent\Model;

class SemesterRegcourse extends Model
{
    protected $table = 'semester_regcourses';
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id','course_name', 'semester', 'programeOption', 'program','academicYear','level','admission_type','stream'
    ];

    public function SubmitToDatabase()
    {
        $path = resource_path('pending-course-files/*.csv');
        $files = glob($path);

        foreach($files as $file)
        {
            UploadCsv::dispatch($file);
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
