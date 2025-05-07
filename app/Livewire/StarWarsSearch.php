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
    public $query = '';

    #[Url]
    public $page = 1;

    public $next = '';

    public $previous = '';

    public $people = [];

    public function searchPeople()
    {
        $this->validate();
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

    public function previousPage()
    {
        $this->page--;
        $this->searchPeople();
    }

    public function nextPage()
    {
        $this->page++;
        $this->searchPeople();
    }

    public function render()
    {
        if ($this->query) {
            $this->searchPeople();
        }

        return view('livewire.star-wars-search');
    }
}
