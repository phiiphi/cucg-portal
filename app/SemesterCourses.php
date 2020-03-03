<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SemesterCourses extends Model
{
    protected $guarded = [];

    #establishing relationships
    public function Course()
    {
        return $this->hasMany('App\Course');
    }
}
