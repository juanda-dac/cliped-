<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DepartmentUser extends BaseModel
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

    public function users()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'id_department');
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'id_position');
    }

    /**
     * #withAll()
     * 
     * Retorna un JOIN entre usuarios asociados a departamentos y así mismo retorna su posición.
     * 
     */
    public static function withAll()
    {
        return DB::table('department_users', 'du')
            ->join('users as u', 'du.id_user', '=', 'u.id')
            ->join('departments as dp', 'du.id_department', '=', 'dp.id')
            ->join('positions as ps', 'du.id_position', '=', 'ps-id')
            ->select('u.*', 'dp.*', 'ps.*')
            ->get();
    }
    
}
