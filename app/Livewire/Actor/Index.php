<?php

namespace App\Livewire\Actor;

use App\Models\Actor;
use Livewire\Attributes\Url;
use Livewire\Component;

class Index extends Component
{
    /**
     * URL binding for the search query parameter.
     * When the URL changes, this property is updated automatically.
     */
    #[URL]
    public $search = '';

    #[URL]
    public $page = 1;

    /**
     * Reset the pagination to page 1 whenever the search term is updated.
     */
    public function updatedSearch()
    {
        $this->reset('page');
    }

    public function render()
    {
        // Fetch actors matching the search query and count the number of related movies
        $actors = Actor::where('name', 'like', '%'.$this->search.'%')
            ->withCount('movies')
            ->paginate(5);

        return view('livewire.actor.index', compact('actors'));
    }
}
