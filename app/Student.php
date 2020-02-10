<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    #mass assignable attributes/fields
    protected $fillable = [
        'name', 'index_number', 'faculty', 'email', 'phone', 'country', 'password'
    ];

    public function verifyUser()
    {
    return $this->hasOne('App\VerifyUser');
    }
}
