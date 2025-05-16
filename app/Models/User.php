<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;



class User extends AuthenticableModel
{
    
    use HasFactory, Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'last_name',
        'user_name',
        'password',
        'password_text',
        'email',
        'phone',
        'address',
        'avatar_url',
        'birthdate',
        'doc_type',
        'doc_number',
        'sex',
        'sex_orientation',
        'rh',
        'data_value',
        'state',
        'id_user_type',
        'id_city',
        'id_role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'id_user_type',
        'id_city',
        'id_role',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    public function userType()
    {
        return $this->belongsTo(UserType::class, 'id_user_type');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'id_city');
    }
}
