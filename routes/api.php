<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SwapiController;


Route::get('/swapi/people', [SwapiController::class, 'searchPeople'])->name('swapi.search');
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
