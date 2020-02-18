<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\DB;


class ProgramOption extends Model
{
    // protected $primaryKey = 'ProgramOpt_id';
    // public $incrementing = false;
    protected $fillable = [
        #'ProgramOpt_id',
        'student_id','Option_name'
    ];

    // public static function boot()
    // {
    //     parent::boot();
    //     self::creating(function ($model) {
    //         $model->ProgramOpt_id = IdGenerator::generate(['table' => DB::table('program_options'), 'length' => 10, 'prefix' => 'POPT-']);
    //     });
    // }
}
