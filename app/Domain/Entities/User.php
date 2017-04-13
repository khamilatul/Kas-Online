<?php

namespace App\Domain\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'class', 'level','phone','password',
    ];

    protected $hidden = [
        'name', 'class', 'level','phone','password',
    ];
}
