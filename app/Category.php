<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model for the categories table.
 *
 * @package App
 */
class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The channels that belong to the category.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Channel');
    }
}
