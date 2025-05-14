<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    
    protected $table = 'actions';

    protected $fillable = [
        'name',
        'letter'
    ];

    public function permissions()
    {
        return $this->hasMany(Permission::class, 'id_action');
    }

}
