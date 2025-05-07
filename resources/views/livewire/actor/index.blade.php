<div>
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold text-white">{{ __('Actors') }}</h1>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <div>
                    <label for="search" class="block text-sm/6 font-medium ">{{__('Search actors:')}}</label>
                    <div class="mt-2">
                        <div
                            class="flex rounded-md bg-white outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <input type="text" name="search" id="search"
                                   wire:model.live.debounce.500ms="search"
                                   class="block min-w-0 grow px-3 py-1.5 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6">
                            <div class="flex py-1.5 pr-1.5">
                                <kbd
                                    class="inline-flex items-center rounded-sm border border-gray-200 px-1 font-sans text-xs text-gray-400">⌘K</kbd>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <!-- Actor Table Component Rendering -->
                <x-actor-table :$actors/>
            </div>

            <!-- Pagination Links -->
            <div class="mt-4">
                {{ $actors->links() }}
            </div>
        </div>
    </div>
</div>
