<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model for the channels table.
 *
 * @package App
 */
class Channel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'yt_channel_id'
    ];
}
