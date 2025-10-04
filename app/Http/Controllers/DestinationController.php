<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\TravelActivity;
use App\Models\ViewProcentCheapDestination;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestinationController extends Controller
{
    public function index(Request $request): View|Factory|Application
    {
        $type = $request->input('types_of_places');
        $season = $request->input('recommended_season');
        $popularity = $request->input('popularity');

        $destinations = Destination::query()
            ->when($season && $season !== 'any', fn ($query) => $query->where('recommended_season', $season))
            ->when($popularity, function (Builder $query) use ($popularity) {
                $popularity_location = explode('-', $popularity);

                return $query->whereBetween('popularity', [$popularity_location[0], $popularity_location[1]]);
            })
            ->when($type && $type !== 'any', fn ($query) => $query->where('types_of_places', 'like', "%$type%"))
            ->get();

        return view('destinations/index', compact('destinations'));
    }

    public function show(Destination $destination): View|Factory|Application
    {
        return view('destinations/show', compact('destination'));
    }

    public function home(): View|Factory|Application
    {
        $locations = DB::table('travel_sage.destination')->pluck('location_name');
        $locationCounts = [];

        foreach ($locations as $location) {
            $lowerLocation = mb_strtolower($location, 'UTF-8');

            $count = DB::table('travel_sage.event')
                ->whereRaw('LOWER(event_name) LIKE ?', ['%'.$lowerLocation.'%'])
                ->orWhereRaw('LOWER(details) LIKE ?', ['%'.$lowerLocation.'%'])
                ->count();

            $locationCounts[$location] = $count;
        }

        arsort($locationCounts);
        $topLocations = collect(array_slice($locationCounts, 0, 5, true));

        $cheapActivities = TravelActivity::query()
            ->where('amount', '<', 500)
            ->get();

        $data = ViewProcentCheapDestination::all();

        return view('home', compact('topLocations', 'cheapActivities', 'data'));
    }
}
