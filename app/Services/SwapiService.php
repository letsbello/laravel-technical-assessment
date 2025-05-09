<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SwapiService
{
    public function search(string $query): array
    {
        $response = Http::withOptions(['verify' => false])
            ->get("https://swapi.dev/api/people", [
                'search' => $query,
            ]);

        if ($response->failed()) {
            return [];
        }


        return $response->json('results') ?? [];
    }
}
