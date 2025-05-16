<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class AuthenticableModel extends Authenticatable
{
    use CastCamelCase;
}
