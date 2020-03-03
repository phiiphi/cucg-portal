<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActiveAcademicYear extends Model
{
    protected $guarded = [];

    #establishing relationship
    public function AcademicYear()
    {
        return $this->hasMany('App\AcademicYear');
    }

}
