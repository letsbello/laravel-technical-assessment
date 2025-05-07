<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /** @use HasFactory<\Database\Factories\MovieFactory> */
    use HasFactory;

    protected $fillable = ['title', 'opening_crawl', 'director', 'producer', 'release_date'];

    protected $casts = [
        'release_date' => 'date:Y-m-d',
    ];

    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }
}
