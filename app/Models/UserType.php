<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = 'users_types';

    protected $fillable = [
        'name',
        'data_schema',
    ];

    public function roles()
    {
        return $this->hasMany(Role::class, 'id_user_type');
    }

}
