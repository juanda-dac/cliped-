<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Permission extends Model
{

    use HasFactory;

    protected $table = 'permissions';
    
    protected $fillable = [
        'id_action',
        'id_role',
        'id_process',
    ];

    protected function casts(): array
    {
        return [
            'hidden' => 'boolean',
        ];
    }

    public function actions()
    {
        return $this->belongsTo(Action::class, 'id_action');
    }

    public function roles()
    {
        return $this->belongsTo(Role::class, 'id_role');
    }

    public function processes()
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
            ->select(
                'actions.id as action_id',
                'actions.name as action',
                'actions.letter',
                'roles.id',
                'roles.name as role',
                'processes.id as process_id',
                'processes.id_top as process_id_top',
                'processes.name as process',
                'processes.description as process_description',
                'processes.url as process_url',
                'processes.order as process_order',
                'processes.hidden as process_hidden',
                )
            ->get()
            ->map(function ($item){
                return [
                    'action' => [
                        'id' => $item->action_id,
                        'name' => $item->action,
                        'letter' => $item->letter,
                    ],
                    'role' => [
                        'id' => $item->id,
                        'name' => $item->role,
                    ],
                    'process' => [
                        'id' => $item->process_id,
                        'idTop' => $item->process_id_top,
                        'name' => $item->process,
                        'description' => $item->process_description,
                        'url' => $item->process_url,
                        'order' => $item->process_order,
                        'hidden' => (bool) $item->process_hidden,
                    ]
                ];
            });
    }

    public static function permissionsWithRoles()
    {
        return DB::table('permissions')
            ->join('actions', 'permissions.id_action', '=', 'actions.id')
            ->join('roles', 'permissions.id_role', '=', 'roles.id')
            ->join('processes', 'permissions.id_process', '=', 'processes.id')
            ->select(
                'actions.id as action_id',
                'actions.name as action',
                'actions.letter',
                'roles.id',
                'roles.name as role',
                'processes.id as process_id',
                'processes.id_top as process_id_top',
                'processes.name as process',
                'processes.description as process_description',
                'processes.url as process_url',
                'processes.order as process_order',
                'processes.hidden as process_hidden',
                )
            ->get()
            ->map(function ($item){
                return [
                    'action' => [
                        'id' => $item->action_id,
                        'name' => $item->action,
                        'letter' => $item->letter,
                    ],
                    'role' => [
                        'id' => $item->id,
                        'name' => $item->role,
                    ],
                    'process' => [
                        'id' => $item->process_id,
                        'idTop' => $item->process_id_top,
                        'name' => $item->process,
                        'description' => $item->process_description,
                        'url' => $item->process_url,
                        'order' => $item->process_order,
                        'hidden' => (bool) $item->process_hidden,
                    ]
                ];
            });
    }

}
