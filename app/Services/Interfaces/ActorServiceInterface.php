<?php

namespace App\Services\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface ActorServiceInterface
{
    /**
     * Get all actors with their associated movies.
     *
     * @return Collection
     */
    public function getAllWithMovies(): Collection;

    /**
     * Filter actors by name.
     *
     * @param string|null $searchTerm
     * @return Collection
     */
    public function filterByName(?string $searchTerm): Collection;
}