<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends BaseModel
{

    protected $table = 'companies';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'doc_type',
        'doc_number',
        'address',
        'zone',
        'email',
        'phone',
        'logo',
        'instagram_url',
        'tiktok_url',
        'youtube_url',
        'twitter_url',
        'id_city'
    ];

    protected $hidden = [
        'id_city',
    ];

    public function city()
    {
        return $this->belongsTo(City::class, 'id_city');
    }

    public function departments()
    {
        return $this->hasMany(Department::class, 'id_company');
    }
    
}
