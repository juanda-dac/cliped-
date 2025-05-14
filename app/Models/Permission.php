<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    
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

}
