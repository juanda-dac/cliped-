<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{

    use HasFactory;
    
    protected $table = 'actions';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'letter'
    ];

    public function permissions()
    {
        return $this->hasMany(Permission::class, 'id_action');
    }

}
