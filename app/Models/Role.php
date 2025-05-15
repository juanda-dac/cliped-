<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    
    use HasFactory;

    protected $table = 'roles';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'id_user_type'
    ];

    public function userType()
    {
        return $this->belongsTo(UserType::class, 'id_user_type');
    }

    public function permissions()
    {
        return $this->hasMany(Permission::class, 'id_role');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'id_role');
    }

}
