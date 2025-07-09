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
        $type = $request->input('tipovimesta');
        $season = $request->input('preporachanasezona');
        $popularity = $request->input('popularnost');

        $destinations = Destination::query()
            ->when($season && $season !== 'any', fn ($query) => $query->where('preporachanasezona', $season))
            ->when($popularity, function (Builder $query) use ($popularity) {
                $popularnost = explode('-', $popularity);

                return $query->whereBetween('popularnost', [$popularnost[0], $popularnost[1]]);
            })
            ->when($type && $type !== 'any', fn ($query) => $query->where('tipovimesta', 'like', "%$type%"))
            ->get();

        return view('destinations/index', compact('destinations'));
    }

    public function show(Destination $destination): View|Factory|Application
    {
        return view('destinations/show', compact('destination'));
    }

    public function home(): View|Factory|Application
    {
        $locations = DB::table('travel_sage.destinacii')->pluck('imelokacija');
        $locationCounts = [];

        foreach ($locations as $location) {
            $lowerLocation = mb_strtolower($location, 'UTF-8');

            $count = DB::table('travel_sage.nastani')
                ->whereRaw('LOWER(naziv) LIKE ?', ['%'.$lowerLocation.'%'])
                ->orWhereRaw('LOWER(detali) LIKE ?', ['%'.$lowerLocation.'%'])
                ->count();

            $locationCounts[$location] = $count;
        }

        arsort($locationCounts);
        $topLocations = collect(array_slice($locationCounts, 0, 5, true));

        $cheapActivities = TravelActivity::query()
            ->where('iznos', '<', 500)
            ->get();

        $data = ViewProcentCheapDestination::all();

        return view('home', compact('topLocations', 'cheapActivities', 'data'));
    }
}
