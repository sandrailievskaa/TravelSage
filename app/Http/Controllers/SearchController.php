<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $results = collect([]); // Празен резултат по дефиниција

        return view('destinations.search', compact('results'));
    }

    public function search(Request $request): \Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        $tipovimesta = $request->input('tipovimesta');
        $preporachanasezona = $request->input('preporachanasezona');
        $filter = $request->input('filter');

        $destinations = Destination::query();

        if ($tipovimesta && $tipovimesta !== 'allDest') {
            $destinations->where('tipovimesta', $tipovimesta);
        }

        if ($preporachanasezona && $preporachanasezona !== 'allSeasons') {
            $destinations->where('preporachanasezona', $preporachanasezona);
        }

        if ($filter === 'popularnost') {
            $destinations->orderBy('popularnost', 'desc');
        } elseif ($filter === 'season') {
            $destinations->orderBy('preporachanasezona');
        } elseif ($filter === 'typeDest') {
            $destinations->orderBy('tipovimesta');
        }

        $results = $destinations->get();

        return view('destinations.search', compact('results'));
    }
}
