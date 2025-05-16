<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends BaseModel
{
    protected $table = 'positions';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

}
