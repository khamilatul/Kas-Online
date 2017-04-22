<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Notifications\Notifiable;



/**
 * Class Contact
 * @package App\Domain\Entities
 */
class User extends Model 
{
    use CanResetPassword,Notifiable;

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'class', 'email', 'phone','user_id','level','password'
    ];




}
