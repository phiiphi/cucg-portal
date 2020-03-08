<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegistryBiodata extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'Entry Numner';
    public $incrementing = false;

    protected $fillable = [
        'Entry Number','Student Number','Legon id','Lastname','Othername','Date of Birth','Gender','Permanent Address','Phone Number',
        'Home Town',"Marital Status",'Faculty','Programme','ProgrammeOption','Level','Level of Entry','Admission Type','Admission Type',
        'Student Stream','Year of Admission','Active Status','Entry Qualification','Admission Status','Aggregate','Nationality'
    ];
}
