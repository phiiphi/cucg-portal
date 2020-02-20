<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisteredCourse extends Model
{
    protected $table = 'registered_courses';
    // protected $primaryKey = 'studentid';
    // public $incrementing  = false;

    protected $fillable = [
        'studentid','name','phone','email','dob','nationality','programme','level','semester','academic_year','status','courses'
    ];

    protected $hidden = [
        'password'
    ];

}
