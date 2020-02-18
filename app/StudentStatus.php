<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\DB;

class StudentStatus extends Model
{
    protected $primaryKey = 'StudStatus_id';
    public $incrementing = false;
    protected $fillable = [
        'StudStatus_id','index_number','status'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->StudStatus_id = IdGenerator::generate(['table' => DB::table('student_statuses'), 'length' => 10, 'prefix' => 'STS-']);
        });
    }
}
