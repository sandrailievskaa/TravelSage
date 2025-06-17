<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function events($imelokacija): View|Factory|Application
    {
        $destination = Destination::where('imelokacija', $imelokacija)->firstOrFail();
        return view('destinations.events', compact('destination'));
    }

    public function activities($imelokacija): View|Factory|Application
    {
        $destination = Destination::where('imelokacija', $imelokacija)->firstOrFail();
        return view('destinations.activity', compact('destination'));
    }

    public function packages($imelokacija): View|Factory|Application
    {
        $destination = Destination::where('imelokacija', $imelokacija)->firstOrFail();
        return view('destinations.package', compact('destination'));
    }

    public function home(): View|Factory|Application
    {
        $locations = DB::table('travel_sage.destinacii')->pluck('imelokacija');
        $locationCounts = [];

        foreach ($locations as $location) {
            $lowerLocation = mb_strtolower($location, 'UTF-8');

            $count = DB::table('travel_sage.nastani')
                ->whereRaw('LOWER(naziv) LIKE ?', ['%' . $lowerLocation . '%'])
                ->orWhereRaw('LOWER(detali) LIKE ?', ['%' . $lowerLocation . '%'])
                ->count();

            $locationCounts[$location] = $count;
        }

        arsort($locationCounts);
        $topLocations = collect(array_slice($locationCounts, 0, 5, true));

        $cheapActivities = DB::table('travel_sage.aktivnosti')
            ->where('iznos', '<', 500)
            ->get();

        return view('home', compact('topLocations', 'cheapActivities'));
    }



    /* public function showCheapActivities(): View
    {
        $cheapActivities = DB::table('travel_sage.aktivnosti')
            ->where('iznos', '<', 500)
            ->get();

        return view('cheap', compact('cheapActivities'));
    } */

    public function explore(): View|Factory|Application
    {
        $locations = DB::table('travel_sage.destinacii')->pluck('imelokacija');
        $locationCounts = [];

        foreach ($locations as $location) {
            $lowerLocation = mb_strtolower($location, 'UTF-8');

            $count = DB::table('travel_sage.nastani')
                ->whereRaw('LOWER(naziv) LIKE ?', ['%' . $lowerLocation . '%'])
                ->orWhereRaw('LOWER(detali) LIKE ?', ['%' . $lowerLocation . '%'])
                ->count();

            $locationCounts[$location] = $count;
        }

        arsort($locationCounts);
        $topLocations = collect(array_slice($locationCounts, 0, 5, true));

        $cheapActivities = DB::table('travel_sage.aktivnosti')
            ->where('iznos', '<', 500)
            ->get();

        return view('explore', compact('topLocations', 'cheapActivities'));
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
