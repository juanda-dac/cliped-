<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $table = 'customers';

    protected $fillable = [
        'name'
    ];

    public function branches()
    {
        return $this->hasMany(Branch::class, 'id_customer');
    }

}
