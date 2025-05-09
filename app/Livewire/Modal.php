<?php

namespace App\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public array $actor = [];

    protected $listeners = ['open-modal' => 'openModal'];

    public bool $showModal = false;

    public function openModal($actor) {
        $this->actor = $actor;
        $this->showModal = true;
    }

    public function closeModal() { $this->showModal = false; }
    public function render()
    {
        return view('livewire.modal');
    }
}
