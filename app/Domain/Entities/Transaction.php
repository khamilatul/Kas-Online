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
        'description', 'amount', 'member_id', 'month',
    ];

}
