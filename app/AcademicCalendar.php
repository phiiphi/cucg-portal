<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AcademicCalendar extends Model
{
    use SoftDeletes;

    #mass assignable attributes/fields
    protected $fillable = [
        'title', 'description', 'color', 'start', 'end'
    ];
}
