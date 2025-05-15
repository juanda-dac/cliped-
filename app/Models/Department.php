<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'id_company'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'id_company');
    }
}
