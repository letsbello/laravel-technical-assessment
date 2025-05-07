@props([
    'actors',
    'fromAPI' => false
])

<div>
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
            @forelse($actors as $actor)
                <tr>
                    <td class="px-3 py-5 text-sm whitespace-nowrap text-gray-400">
                        <div class="text-white">{{ data_get($actor, 'name') }}</div>
                        <div class="mt-1 text-gray-400">{{ data_get($actor, 'gender') }}</div>
                    </td>
                    <td class="px-3 py-5 text-sm whitespace-nowrap text-gray-400">
                        <div class="text-white">{{ data_get($actor, 'birth_year') }}</div>
                        <div class="mt-1 text-gray-400">{{ data_get($actor, 'skin_color') }}</div>
                    </td>
                    <td class="px-3 py-5 text-sm whitespace-nowrap text-gray-400">
                        <div class="text-white">{{ data_get($actor, 'height') }}</div>
                        <div class="mt-1 text-gray-400">{{ data_get($actor, 'mass') }}</div>
                    </td>
                    <td class="px-3 py-5 text-sm whitespace-nowrap text-white">
                        {{ data_get($actor, 'eye_color') }}
                    </td>
                    <td class="px-3 py-5 text-sm whitespace-nowrap text-white">
                        {{ data_get($actor, 'hair_color') }}
                    </td>
                    @if($fromAPI)
                        <td class="px-3 py-5 text-sm whitespace-nowrap text-gray-500">
                            <span
                                class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-green-600/20 ring-inset">
                                {{ count(data_get($actor, 'films')) }}
                            </span>
                        </td>
                    @else
                        <td class="px-3 py-5 text-sm whitespace-nowrap text-gray-500 cursor-pointer">
                            <a href="{{ route('actors.show', $actor) }}"
                               class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-green-600/20 ring-inset">
                                {{ data_get($actor, 'movies_count') }}
                            </a>
                        </td>
                    @endif
                </tr>
            @empty
                <tr>
                    <td class="text-2xl">
                        <span>{{ __('No data found') }}</span>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
