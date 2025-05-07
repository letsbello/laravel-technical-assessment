<div>
    <div class="px-4 sm:px-0 mb-4">
        <h3 class="font-semibold text-white text-2xl">{{ $actor->name }}</h3>
        <p class="mt-1 max-w-2xl text-sm/6 text-gray-300">
          <span class="font-bold mr-1 underline">{{ __('Bio:') }}</span>  {{ $actor->bio }}
        </p>
    </div>

    <div>
        <h3 class="text-base/7 font-semibold text-white">{{ __('Movies') }}</h3>

        <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($actor->movies as $movie)
                <li class="col-span-1 divide-y divide-gray-200 rounded-lg bg-white shadow-sm">
                    <div class="flex w-full items-center justify-between space-x-6 p-6">
                        <div class="flex-1 truncate">
                            <div class="flex items-center space-x-3">
                                <h3 class="truncate text-sm font-medium text-gray-900">{{ $movie->title }}</h3>
                                <span class="inline-flex shrink-0 items-center rounded-full bg-green-50 px-1.5 py-0.5 text-xs font-medium text-green-700 ring-1 ring-green-600/20 ring-inset">
                                {{$movie->release_date->format('d M Y')}}
                            </span>
                            </div>
                            <p class="mt-1 truncate text-sm text-gray-500">
                                {{ $movie->opening_crawl }}
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="-mt-px flex divide-x divide-gray-200 text-gray-900">
                            <div class="flex w-0 flex-1 ">
                                <span>{{ __('Director') }}</span>
                            </div>
                            <div class="-ml-px flex w-0 flex-1">
                                <span>{{ $movie->director }}</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="-mt-px flex divide-x divide-gray-200 text-gray-900">
                            <div class="flex w-0 flex-1 ">
                                <span>{{ __('Producer') }}</span>
                            </div>
                            <div class="-ml-px flex w-0 flex-1">
                                <span>{{ $movie->producer }}</span>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
