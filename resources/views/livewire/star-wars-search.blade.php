<div>
    <div>
        <label for="email" class="block text-sm/6 font-medium text-white">
            {{ __('Star Wars Search:') }}
        </label>
        <form wire:submit="searchPeople">
            <div class="mt-2 flex">
                <input type="text" name="search"
                       class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                       placeholder="Search actor name here..."
                       wire:model.defer="query">
                <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    {{ __('Go') }}
                </button>
            </div>
            <div class="text-red-500">
                @error('query')<span class="error ">{{ $message }}</span> @enderror
            </div>
        </form>

        <p class="mt-2 text-sm text-gray-400" id="email-description">
            {{ __('A People resource from the Star Wars universe.') }}
        </p>
    </div>

    @if($query)
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <x-actor-table :actors="$people" :fromAPI="true" :$next :$previous/>

            @if($people)
                <nav class="flex items-center justify-between border-t border-gray-200  px-4 py-3 sm:px-6"
                     aria-label="Pagination">
                    <div class="flex flex-1 justify-between sm:justify-end">
                        @if($previous)
                            <button type="button" wire:click="previousPage"
                                    class="relative inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus-visible:outline-offset-0">
                                {{__('Previous')}}
                            </button>
                        @endif
                        @if($next)
                            <button type="button" wire:click="nextPage"
                                    class="relative ml-3 inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 ring-1 ring-gray-300 ring-inset hover:bg-gray-50 focus-visible:outline-offset-0">
                                {{ __('Next') }}
                            </button>
                        @endif
                    </div>
                </nav>
            @endif
        </div>
    @endif
</div>
