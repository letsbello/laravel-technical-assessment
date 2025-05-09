
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">


        <title>{{ $title ?? 'Actors' }}</title>
        <tallstackui:script /> 
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/layout.css'])
        @livewireStyles
        @livewireScripts
    </head>
    <body>
      <nav>
        <div>
          <img src="{{ asset('logo.png') }}" alt="Logo" class="w-40 h-auto mx-auto" />
          <a
            wire:navigate
            @class(['text-white tab','active' => request()->is('/')]) 
            href="/">
            Actors List
          </a>
          <a
            wire:navigate
            @class(['text-white tab','active' => request()->is('browse_characters')]) 
            href="/browse_characters">
            Browse Characters
          </a>
        </div>
      </nav>
      <main>
        {{ $slot }}
        @for ($i = 0; $i < 500; $i++)
          <div class="star"></div>
        @endfor
      </main>
          @livewire('livewire-ui-modal')
    </body>
</html>