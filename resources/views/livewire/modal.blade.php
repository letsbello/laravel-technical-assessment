
<div>
    @if ($showModal)
    <div class="fixed inset-0 bg-black/50 bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded shadow-md max-w-md w-full">
            <h2 class="text-xl font-bold mb-4">{{ $actor['name'] ?? 'No name' }}</h2>

            @if (!empty($actor['movies']))
                <ul class="list-disc pl-4">
                    @foreach ($actor['movies'] as $movie)
                        <li>{{ $movie['title'] }}</li>
                    @endforeach
                </ul>
            @endif

            <button wire:click="closeModal" class="mt-4 bg-red-500 text-white px-4 py-2 rounded cursor-pointer">
                Close
            </button>
        </div>
    </div>
    @endif
</div>