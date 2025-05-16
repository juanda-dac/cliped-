<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends BaseModel
{

    protected $table = 'customers';

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function branches()
    {
        return $this->hasMany(Branch::class, 'id_customer');
    }

}
