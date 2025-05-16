<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends BaseModel
{
    use HasFactory;

    protected $table = 'states';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'state_cod',
        'id_country',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'id_country');
    }

    public function cities()
    {
        return $this->hasMany(City::class, 'id_state');
    }
}
