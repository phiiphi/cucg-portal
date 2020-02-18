<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    // protected $primaryKey = 'index_number';
    // public $incrementing  = false;
    #mass assignable attributes/fields
    protected $fillable = [
        'index_number','last_name', 'other_names', 'email', 'phone','gender','level', 'password'
    ];

    public function verifyUser()
    {
    return $this->hasOne('App\VerifyUser');
    }
}
