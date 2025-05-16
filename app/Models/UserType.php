<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends BaseModel
{

    use HasFactory;

    protected $table = 'users_types';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'data_schema',
    ];

    protected function casts()
    {
        return [
            'data_schema' => 'json',
        ];
    }

    public function roles()
    {
        return $this->hasMany(Role::class, 'id_user_type');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'id_user_type');
    }

}
