<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActiveAcademicYear extends Model
{

    protected $fillable = [
        'activeacademic_id','academicyear_id','status'
    ];


    protected $primaryKey = 'id';
    public $incrementing = false;



}
