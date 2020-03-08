<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
    protected $table = 'academic_years';
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id','academic_year','start_date','end_date'
    ];

    #establishing relationship
    public function ActiveAcademicYear()
    {
        return $this->belongsTo('App\ActiveAcademicYear');
    }

    public function SemesterRegcourse()
    {
        return $this->hasMany('App\SemesterRegcourse');
    }
}
