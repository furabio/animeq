<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $fillable = [
        'name', 'slug_name', 'sinopse', 'image', 'author', 'studio', 'status', 'year'
    ];

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
