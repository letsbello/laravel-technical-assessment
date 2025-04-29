<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class StarWarsSearch extends Component
{
    public string $search = '';
    public array $results = [];
    public bool $searched = false;
    public ?string $error = null;

    public function searchPeople(): void
    {
        $this->validate([
            'search' => 'required|min:2',
        ]);

        try {
            $response = Http::withoutVerifying()->get('https://swapi.dev/api/people', [
                'search' => $this->search,
            ]);

            if ($response->successful()) {
                $this->results = $response->json('results') ?? [];
                $this->error = null;
            } else {
                $this->results = [];
                $this->error = 'Failed to fetch data from Star Wars API.';
            }
        } catch (\Throwable $e) {
            $this->results = [];
            $this->error = 'An error occurred: ' . $e->getMessage();
        }

        $this->searched = true;
    }

    public function render(): View
    {
        return view('livewire.star-wars-search');
    }
}