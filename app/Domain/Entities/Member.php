<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contact
 * @package App\Domain\Entities
 */
class Member extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */
     protected $table ='members';
    protected $fillable = [
        'name', 'class', 'email', 'phone','users_id',
    ];

    protected $with = ['users'];

    public function users()
    {
        return $this->belongsTo('App\Domain\Entities\User', 'users_id');
    }



}
