<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SemesterRegcourse extends Model
{
    protected $table = 'semester_regcourses';
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id','course_name', 'semester', 'programeOptionId', 'programId','academicYearId','level','admission_type','stream'
    ];

}
