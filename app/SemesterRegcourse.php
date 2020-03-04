<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SemesterRegcourse extends Model
{
    protected $fillable = [
        'id','course_name','academicyear_id', 'semester', 'program_id', 'programOption_id','level','admission_type','stream'
    ];

}
