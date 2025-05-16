<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends BaseModel
{
    protected $table = 'providers';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

}
