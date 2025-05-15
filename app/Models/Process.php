<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    
    use HasFactory;

    protected $table = 'processes';

    protected $fillable = [
        'name',
        'description',
        'url',
        'icon',
        'order',
        'hidden',
        'state',
        'id_top'
    ];

    protected $casts = [
        'hidden' => 'boolean',
        'state' => 'boolean',
    ];

    public function parent()
    {
        return $this->belongsTo(Process::class, 'id_top');
    }

    public function childrens()
    {
        return $this->hasMany(Process::class, 'id_top');
    }

    public function permissions()
    {
        return $this->hasMany(Permission::class, 'id_process');
    }
}
