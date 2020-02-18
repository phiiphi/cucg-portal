<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\DB;

class Program extends Model
{
    // protected $primaryKey = 'program_id';
    // public $incrementing = false;
    protected $fillable = [
        #'program_id',
        'student_id','program_name'
    ];

    // public static function boot()
    // {
    //     parent::boot();
    //     self::creating(function ($model) {
    //         $model->program_id = IdGenerator::generate(['table' => DB::table('programs'), 'length' => 10, 'prefix' => 'PRO-']);
    //     });
    // }
}
