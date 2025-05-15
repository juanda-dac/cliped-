<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    
    protected $table = 'branches';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'id_customer'
    ];

    public function customers()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }

}
