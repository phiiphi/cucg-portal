<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramOption extends Model
{
    protected $table = 'program_options';
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
        'id','Option_name'
    ];

    public function SemesterRegcourse()
    {
        return $this->hasMany('App\SemesterRegcourse');
    }

}
