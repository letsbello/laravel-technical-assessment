<?php

namespace App\Livewire\Actor;

use App\Models\Actor;
use Livewire\Attributes\Url;
use Livewire\Component;

class Index extends Component
{
    #[URL]
    public $search = '';

    public function render()
    {
        $actors = Actor::where('name', 'like', '%'.$this->search.'%')
            ->withCount('movies')
            ->get();

        return view('livewire.actor.index', compact('actors'));
    }
}
