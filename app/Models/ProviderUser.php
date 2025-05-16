<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProviderUser extends BaseModel
{
    
    protected $table = 'providers_users';

    public $timestamps = false;

    protected $fillable = [
        'id_provider',
        'id_user'
    ];

    protected $hidden = [
        'id_provider',
        'id_user'
    ];

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'id_provider');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

    /**
     * ## withAll()
     * 
     * Retorna un JOIN para validar cuáles usuarios pertenecen a un proveedor
     */
    public static function withAll()
    {
        return DB::table('providers_users', 'pu')
            ->join('providers', 'pu.id_provider', '=', 'providers.id')
            ->join('users', 'pu.id_user', '=', 'users.id')
            ->select('providers.name as provider', 'users.*')
            ->get();
    }

}
