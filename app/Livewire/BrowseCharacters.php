<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Computed;
use Illuminate\Support\Facades\Http;
use App\Services\SwapiService;
use Livewire\Attributes\Title;

class BrowseCharacters extends Component
{
    public string $query = '';
    public array $results = [];

    public function mount()
    {
        if (request()->has('q')) {
            $this->query = request()->query('q');
            $this->performSearch();
        }
    }

    public function search()
    {
        $this->performSearch();
    }

    private function performSearch()
    {
        $swapi = new SwapiService();
        $this->results = $swapi->search($this->query);
    }

    #[Title('Search Characters')]
    public function render()
    {
        return view('livewire.browse-characters');
    }

}
