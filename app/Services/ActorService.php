<?php

namespace App\Services;

use App\Models\Actor;

class ActorService
{
    public function searchActors(string $searchTerm): array
    {
        if (empty($searchTerm)) {
            return [];
        }

        $actors = Actor::with('movies')
                       ->where('name', 'like', '%' . $searchTerm . '%')
                       ->orderBy('name')
                       ->get();

        return $actors->toArray();
    }
}