<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActiveAcademicYear extends Model
{
    protected $primaryKey = 'activeacademic_id';
    public $incrementing = false;

    protected $fillable = [
        'activeacademic_id','academicyear_id','status'
    ];

    #establishing relationship
    public function AcademicYear()
    {
        return $this->hasMany('App\AcademicYear');
    }

}
