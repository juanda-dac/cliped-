<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CustomeUser extends Model
{
    
    protected $table = 'customers_users';

    public $timestamps = false;

    protected $fillable = [
        'id_user',
        'id_branch'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'id_branch');
    }

    /**
     * #withAll()
     * 
     * Retorna un JOIN para validar cuáles usuarios son clientes.
     */
    public static function withAll(int $userId)
    {
        return DB::table('customers_users', 'cu')
            ->join('users', 'cu.id_user', '=', 'users.id')
            ->join('branches', 'cu.id_branch', '=', 'branches.id')
            ->select('users.*', 'branches.id as id_branch','branches.name as branch')
            ->get();
    }

}
