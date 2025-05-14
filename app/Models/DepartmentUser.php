<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DepartmentUser extends Model
{
    protected $table = 'departments_users';

    protected $fillable = [
        'state',
        'function',
        'leader',
        'id_user',
        'id_department',
        'id_position'
    ];


    
}
