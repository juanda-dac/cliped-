<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends BaseModel
{

    use HasFactory;

    protected $table = 'cities';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'city_code',
        'id_state',
    ];

    public function state()
    {
        return $this->belongsTo(State::class, 'id_state');
    }

    public function companies()
    {
        return $this->hasMany(Company::class, 'id_city');
    }

}
