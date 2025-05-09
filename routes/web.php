<?php

use App\Livewire\ActorList;
use App\Livewire\BrowseCharacters;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', ActorList::class);
Route::get('/browse_characters', BrowseCharacters::class);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
