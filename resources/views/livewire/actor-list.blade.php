<div class="p-4">
    <h1 class="text-xl font-bold mb-4 text-white">Star Wars Actors</h1>
<livewire:modal />
    <div x-data="{ show: false }"
        x-on:show-actor-modal.window="show = true"
        x-show="show"
        class="modal">
        <h2>Olá</h2>
    </div>
    <input type="text"
        wire:model.live="search"
        placeholder="Search for Actors..."
        class="w-full text-white hover:bg-gray-700 p-2 border border-gray-300 rounded mb-4 h-10">

    <ul class="list-disc pl-6">
        <ul class="grid grid-cols-4 gap-4">
            @foreach ($actors as $actor) 
            <li class="flex flex-col items-center text-center text-white">
                <div class="w-40 h-56 bg-center bg-cover rounded shadow mb-4" style="background-image: url('{{ $actor->image }}');"></div>
                <strong>{{ $actor->name }}</strong> 
                <button wire:click="openModalWithActor({{ $actor->id }})" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded cursor-pointer flex gap-2">
                   <x-svg path="icons/movie.svg" fill="#ffffff" height="20px" width="20px" />
                   Show Movies
                </button>
            </li>
            @endforeach
        </ul>
    </ul>
</div>
