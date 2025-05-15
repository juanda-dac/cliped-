<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    use HasFactory;

    protected $table = 'countries';
    protected $fillable = [
        'name',
        'iso_cod_3',
        'phone_prefix',
        'flag_img'
    ];

    public function states()
    {
        return $this->hasMany(State::class, 'id_country');
    }

}
