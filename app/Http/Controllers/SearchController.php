<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Cache;

class SearchController extends Controller
{
    public function search($searchTerm)
    {
        if (empty($searchTerm)) {
            return response()->json([]);
        }

        $cacheExpirySeconds = 60 * 10; // 10 minutes
        // store DB results in cache by $searchTerm as cache key. Will make faster search results
        $results = Cache::remember($searchTerm, $cacheExpirySeconds, function () use ($searchTerm) {
            // if cache expires, query  DB users table for all names starting with the given searchTerm
            return User::select('name')
             ->where('name', 'LIKE', "$searchTerm%")
             ->orderBy('name')
             ->get()
             ->toArray();
        });

        return response()->json($results);
    }
}
