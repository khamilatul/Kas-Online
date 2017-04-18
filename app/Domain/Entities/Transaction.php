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
        'description', 'amount', 'members_id', 'month',
    ];

    protected $with = ['members'];

    public function members()
    {
        return $this->belongsTo('App\Domain\Entities\Member', 'members_id');
    }

}
