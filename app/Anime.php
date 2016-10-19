<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use Sluggable;

    protected $fillable = [
        'name',
        'slug_name',
        'sinopse',
        'genre',
        'image',
        'release',
        'director',
        'studio',
        'status',
        'year'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug_name' => [
                'source' => 'name'
            ]
        ];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
