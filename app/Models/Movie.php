<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movie extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'release_year',
        'description',
        'actor_id',
    ];

    /**
     * Get the actor that owns the movie.
     */
    public function actor(): BelongsTo
    {
        return $this->belongsTo(Actor::class);
    }
}