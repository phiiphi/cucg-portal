<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class courseRegistration extends Model
{
    //Table Name
    protected $table = 'courseRegistration';
    //Primary KEY
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}
