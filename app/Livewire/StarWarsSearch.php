<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Url;
use Livewire\Attributes\Validate;
use Livewire\Component;

class StarWarsSearch extends Component
{
    #[Url]
    #[Validate('required|min:1')]
    public $query = ''; // Search query input

    #[Url]
    public $page = 1; // Current page number for API pagination

    public $next = ''; // URL for the next page of results

    public $previous = ''; // URL for the previous page of results

    public $people = []; // List of people fetched from the API

    /**
     * Perform a search request to the Star Wars API (swapi.dev)
     * and update the component properties with the results.
     */
    public function searchPeople()
    {
        // Validate the search query
        $this->validate();

        // Make an HTTP GET request to fetch people data from the Star Wars API
        $response = Http::withoutVerifying()
            ->get('https://swapi.dev/api/people', [
                'search' => $this->query,
                'page' => $this->page,
            ]);
        if ($response->successful()) {
            $this->people = $response->json()['results'] ?? [];
            $this->previous = $response->json()['previous'] ?? null;
            $this->next = $response->json()['next'] ?? null;
        }
    }

    /**
     * Navigate to the previous page and fetch data.
     */
    public function previousPage()
    {
        $this->page--;
        $this->searchPeople();
    }

    /**
     * Navigate to the next page and fetch data.
     */
    public function nextPage()
    {
        $this->page++;
        $this->searchPeople();
    }

    public function render()
    {
        // Trigger search if a query is present when rendering
        if ($this->query) {
            $this->searchPeople();
        }

        return view('livewire.star-wars-search');
    }
}
