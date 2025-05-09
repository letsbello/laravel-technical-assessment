<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Actor;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Title;

class ActorList extends Component
{
    public $search = '';
    public $actors;
    public $selectedActorId = null;
    public $movies = [];

    public function openModal()
    {
        $this->dispatch('open-modal');
    }

    public function closeModal() { $this->showModal = false; }

    public function showMovies($actorId)
    {
        $this->selectedActorId = $actorId;
        $actor = Actor::with('movies')->find($actorId);
        $this->movies = $actor?->movies ?? [];
    }
    
    public function openModalWithActor($actorId)
    {
        $actor = Actor::with('movies')->find($actorId);

        $this->dispatch('open-modal', actor: $actor->toArray());
    }


    #[Title('Actor List')]
    public function render()
    {
        $this->actors = Actor::with('movies')
            ->when($this->search, fn($query) =>
                $query->where('name', 'like', '%' . $this->search . '%')
            )
            ->orderBy('name')
            ->get();
        return view('livewire.actor-list', [
            'actors' => $this->actors,
        ]);
    }
}
