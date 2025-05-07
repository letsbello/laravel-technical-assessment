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
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                        <tr>
                            <th scope="col" class="py-3.5 pr-3 pl-4 text-left text-sm font-semibold text-white sm:pl-0">
                                {{ __('Name') }}
                            </th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">
                                {{ __('Birth Year/Color') }}
                            </th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">
                                {{ __('Height/Mass') }}
                            </th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">
                                {{ __('Eye color') }}
                            </th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">
                                {{ __('Hair color') }}
                            </th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">
                                {{ __('Movies Count') }}
                            </th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                        @foreach($actors as $actor)
                            <tr>
                                <td class="px-3 py-5 text-sm whitespace-nowrap text-gray-400">
                                    <div class="text-white">{{ $actor->name }}</div>
                                    <div class="mt-1 text-gray-400">{{ $actor->gender }}</div>
                                </td>
                                <td class="px-3 py-5 text-sm whitespace-nowrap text-gray-400">
                                    <div class="text-white">{{ $actor->birth_year }}</div>
                                    <div class="mt-1 text-gray-400">{{ $actor->skin_color }}</div>
                                </td>
                                <td class="px-3 py-5 text-sm whitespace-nowrap text-gray-400">
                                    <div class="text-white">{{ $actor->height }}</div>
                                    <div class="mt-1 text-gray-400">{{ $actor->mass }}</div>
                                </td>
                                <td class="px-3 py-5 text-sm whitespace-nowrap text-white">
                                    {{ $actor->eye_color }}
                                </td>
                                <td class="px-3 py-5 text-sm whitespace-nowrap text-white">
                                    {{ $actor->hair_color }}
                                </td>
                                <td class="px-3 py-5 text-sm whitespace-nowrap text-gray-500 cursor-pointer">
                                    <a href="{{ route('actors.show', $actor) }}" class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-green-600/20 ring-inset">
                                        {{ $actor->movies_count }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
