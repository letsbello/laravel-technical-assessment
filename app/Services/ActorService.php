<?php

namespace App\Services;

use App\Models\Actor;
use App\Services\Interfaces\ActorServiceInterface;
use Illuminate\Database\Eloquent\Collection;

class ActorService implements ActorServiceInterface
{
    /**
     * Get all actors with their associated movies.
     *
     * @return Collection
     */
    public function getAllWithMovies(): Collection
    {
        return Actor::with('movies')->get();
    }

    /**
     * Filter actors by name.
     *
     * @param string|null $searchTerm
     * @return Collection
     */
    public function filterByName(?string $searchTerm): Collection
    {
        if (empty($searchTerm)) {
            return $this->getAllWithMovies();
        }

        return Actor::with('movies')
                    ->where('name', 'like', '%' . $searchTerm . '%')
                    ->get();
    }
}