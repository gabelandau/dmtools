<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

/**
 * Game
 *
 * @mixin Eloquent
 */
class Game extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'campaign', 'rule_set', 'user_id',
    ];
}
