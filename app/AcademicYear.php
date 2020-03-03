<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    protected $guarded = [];

    #establishing relationship
    public function ActiveAcademicYear()
    {
        return $this->belongsTo('App\ActiveAcademicYear');
    }
}
