<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'providers';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

}
