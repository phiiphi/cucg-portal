<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\DB;

class ProgramStatus extends Model
{
    protected $primaryKey = 'ProgStatus_id';
    public $incrementing = false;
    protected $fillable = [
        'ProgStatus_id','index_number','ProgStatus'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->ProgStatus_id = IdGenerator::generate(['table' => DB::table('program_statuses'), 'length' => 10, 'prefix' => 'PGS-']);
        });
    }
}
