<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    // protected $primaryKey = 'index_number';
    // public $incrementing  = false;
    #mass assignable attributes/fields 'last_name', 'other_names', 'email', 'phone','gender','level', 'password'
    protected $fillable = [
        'index_number','code','isverified'
    ];

    // protected $hidden = [
    //     'password','remember_token'
    // ];

    public function verifyUser()
    {
    return $this->hasOne('App\VerifyUser');
    }
}
