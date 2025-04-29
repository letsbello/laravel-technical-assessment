<?php

namespace App\Services\Interfaces;

interface StarWarsServiceInterface
{
    /**
     * Search Star Wars people by name.
     *
     * @param string $searchTerm
     * @return array
     */
    public function searchPeople(string $searchTerm): array;
}