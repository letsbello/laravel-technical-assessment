<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http; 

class SwapiController extends Controller
{
    public function searchPeople(Request $request)
    {
        $query = $request->input('q');

        if (!$query) {
            return response()->json(['error' => 'Query parameter "q" is required'], 400);
        }

        $response = Http::withOptions(['verify' => false])->get("https://swapi.dev/api/people", [
            'search' => $query,
        ]);

        if ($response->failed()) {
            return response()->json(['error' => 'Failed to fetch data from SWAPI'], 502);
        }

        return $response->json();
    }
}
