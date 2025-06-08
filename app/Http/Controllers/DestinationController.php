<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index(): View|Factory|Application
    {
        $destinations = Destination::all();

        return view('destinations/index', compact('destinations'));
    }

    public function show(Destination $destination): View|Factory|Application
    {
        return view('destinations/show', compact('destination'));
    }

    public function search(Request $request): Application|Factory|View
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

        return view('search', compact('results'));
    }


}
