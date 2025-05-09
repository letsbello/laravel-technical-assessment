<div class="p-4 z-1">
    <h1 class="text-xl font-bold mb-4 text-white">Browse Star Wars Characters</h1>
    <div class="flex gap-2 mb-4">
        <input type="text" 
               class="w-full p-2 border border-gray-300 rounded text-white" 
               placeholder="Search for Characters..." 
               wire:model.debounce.500ms="query">
        <button wire:click="search" 
                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 cursor-pointer">
            Search
        </button>
    </div>


    <div class="mt-4">

        @if ($this->results)
            <div class="space-y-4">
                @foreach ($this->results as $person)
                    <div class="border rounded p-4 shadow-sm bg-white">
                        <h2 class="text-lg font-bold mb-2">{{ $person['name'] }}</h2>
                        <div class="grid grid-cols-2 gap-2 text-sm text-gray-700">
                            <div><strong>Height:</strong> {{ $person['height'] }} cm</div>
                            <div><strong>Mass:</strong> {{ $person['mass'] }} kg</div>
                            <div><strong>Hair Color:</strong> {{ $person['hair_color'] }}</div>
                            <div><strong>Skin Color:</strong> {{ $person['skin_color'] }}</div>
                            <div><strong>Eye Color:</strong> {{ $person['eye_color'] }}</div>
                            <div><strong>Birth Year:</strong> {{ $person['birth_year'] }}</div>
                            <div><strong>Gender:</strong> {{ $person['gender'] }}</div>
                            <div><strong>Films:</strong> {{ count($person['films']) }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        @elseif ($query)
            <p class="text-gray-500 mt-4">No results found.</p>
        @endif
    </div>
</div>
