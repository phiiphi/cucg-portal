<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\DB;

class Faculty extends Model
{
    protected $primaryKey = 'faculty_id';
    public $incrementing = false;
    protected $fillable = [
        'faculty_id','index_number','faculty_name'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->faculty_id = IdGenerator::generate(['table' => DB::table('faculties'), 'length' => 10, 'prefix' => 'FAC-']);
        });
    }
}
