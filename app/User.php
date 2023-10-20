<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    
    protected $fillable = ['name', 'email', 'password'];

    // Outros campos que você pode precisar
    protected $hidden = ['password', 'remember_token'];
}