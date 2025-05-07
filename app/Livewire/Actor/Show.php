<?php

namespace App\Livewire\Actor;

use App\Models\Actor;
use Livewire\Component;

class Show extends Component
{
    public Actor $actor;

    public function mount(Actor $actor)
    {
        $this->actor = $actor->load('movies');
    }

    public function render()
    {
        return view('livewire.actor.show');
    }
}
