<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Movie extends Model 
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'release_date',
    ];

    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }
}