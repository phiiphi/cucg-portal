<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\DB;


class Nationality extends Model
{
    protected $primaryKey = 'country_id';
    public $incrementing = false;
    protected $fillable = [
        'country_id','index_number','country_name'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->country_id = IdGenerator::generate(['table' => DB::table('nationalities'), 'length' => 10, 'prefix' => 'CTY-']);
        });
    }
}
