<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Actor;
use Illuminate\View\View;

class ActorList extends Component
{
    public string $search = '';
    public array $actors = [];
    public bool $searched = false;
    public ?string $error = null;

    public function searchActors(): void
    {
        $this->validate([
            'search' => 'required|min:2',
        ]);

        try {
            $actors = Actor::with('movies')
                           ->where('name', 'like', '%' . $this->search . '%')
                           ->orderBy('name')
                           ->get()
                           ->toArray();

            if (count($actors) > 0) {
                $this->actors = $actors;
                $this->error = null;
            } else {
                $this->actors = [];
                $this->error = 'No actors found.';
            }
        } catch (\Throwable $e) {
            $this->actors = [];
            $this->error = 'An error occurred: ' . $e->getMessage();
        }

        $this->searched = true;
    }

    public function render(): View
    {
        return view('livewire.actor-list');
    }
}