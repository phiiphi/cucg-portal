<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Model;


class SuperAdmin extends Model
{
    use SoftDeletes;

    public $table = 'super_admins';

    protected $guard = 'superadmin';

    #mass assignable attributes/fields
    protected $fillable = [
        'email', 'password'
    ];

    protected $hidden = [
        'password'
    ];

    public function getAuthPassword()
    {
     return $this->password;
    }
}
