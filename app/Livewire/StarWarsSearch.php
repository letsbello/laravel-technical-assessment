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

    public $people = [];

    public function searchPeople()
    {
        $this->validate();
        $response = Http::withoutVerifying()
            ->get('https://swapi.dev/api/people', [
                'search' => $this->query,
            ]);
        if ($response->successful()) {
            $this->people = $response->json()['results'] ?? [];
        }

    }

    public function render()
    {
        return view('livewire.star-wars-search');
    }
}
