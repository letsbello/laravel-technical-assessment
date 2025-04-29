<?php

namespace App\Services;

use App\Services\Interfaces\StarWarsServiceInterface;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class StarWarsService implements StarWarsServiceInterface
{
    /**
     * The base URL for Star Wars API.
     *
     * @var string
     */
    protected string $baseUrl = 'https://swapi.py4e.com/api';
    /**
     * Search Star Wars people by name.
     *
     * @param string $searchTerm
     * @return array
     */
    public function searchPeople(string $searchTerm): array
    {
        try {
            if (empty($searchTerm)) {
                return ['results' => [], 'error' => null];
            }

            // The Swapi API does not valid certificate as of today, so we need to use withoutVerifying()
            $response = Http::withoutVerifying()->get("{$this->baseUrl}/people", [
                'search' => $searchTerm,
            ]);

            if ($response->successful()) {
                return [
                    'results' => $response->json('results'),
                    'error' => null,
                ];
            }

            Log::error('Star Wars API error', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            return ['results' => [], 'error' => 'Failed to fetch data from Star Wars API'];
        } catch (ConnectionException $e) {
            Log::error('Star Wars API connection error', [
                'message' => $e->getMessage(),
            ]);

            return ['results' => [], 'error' => 'Connection error to Star Wars API'];
        } catch (\Exception $e) {
            Log::error('Star Wars API unexpected error', [
                'message' => $e->getMessage(),
            ]);

            return ['results' => [], 'error' => 'Unexpected error when fetching data from Star Wars API'];
        }
    }
}