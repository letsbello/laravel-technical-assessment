<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    /** @use HasFactory<\Database\Factories\ActorFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'birth_year',
        'eye_color',
        'gender',
        'hair_color',
        'height',
        'mass',
        'skin_color',
        'bio'];

    protected $casts = [
        'birth_year' => 'custom_datetime:Y',
        'height' => 'integer',
    ];

    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
}
