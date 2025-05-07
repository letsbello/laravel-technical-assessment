<?php

namespace App\Livewire\Actor;

use App\Models\Actor;
use Livewire\Attributes\Url;
use Livewire\Component;

class Index extends Component
{
    #[URL]
    public $search = '';

    #[URL]
    public $page = 1;

    public function updatedSearch()
    {
        $this->reset('page');
    }

    public function render()
    {
        $actors = Actor::where('name', 'like', '%'.$this->search.'%')
            ->withCount('movies')
            ->paginate(5);

        return view('livewire.actor.index', compact('actors'));
    }
}
