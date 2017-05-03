<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Transaction
 * @package App\Domain\Entities
 */
class Transaction extends Model
{
    use SoftDeletes;

    /**
     * @var array
     */

    protected $fillable = [
        'description', 'amount', 'members_id', 'month','users_id',
    ];

    protected $with = ['members','users'];

    public function members()
    {
        return $this->belongsTo('App\Domain\Entities\Member', 'members_id');
    }

     public function users()
    {
        return $this->belongsTo('App\Domain\Entities\User', 'users_id');
    }

}
