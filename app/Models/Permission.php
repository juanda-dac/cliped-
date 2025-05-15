<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Permission extends Model
{

    protected $table = 'permissions';
    
    protected $fillable = [
        'id_action',
        'id_role',
        'id_process',
    ];

    public function action()
    {
        return $this->belongsTo(Action::class, 'id_action');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role');
    }

    public function process()
    {
        return $this->belongsTo(Process::class, 'id_process');
    }

    /**
     * #permissionsAndProcessByRoleId()
     * 
     * Retorna un JOIN para validar los permisos sobre cada módulo que tiene el ROL.
     */
    public static function permissionsAndProcessByRoleId(int $roleId)
    {
        return DB::table('permissions')
            ->join('actions', 'permissions.id_action', '=', 'actions.id')
            ->join('roles', 'permissions.id_role', '=', 'roles.id')
            ->join('processes', 'permissions.id_process', '=', 'processes.id')
            ->where('permission.id_role', '=', $roleId)
            ->select('actions.name as action', 'actions.letter', 'roles.id', 'roles.name as role')
            ->get();
    }

}
