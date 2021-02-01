<?php

namespace App\Modules\Admins\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'name',
        'id',
    ];

    public $timestamps = false;
}