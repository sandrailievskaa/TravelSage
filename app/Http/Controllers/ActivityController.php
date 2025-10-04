<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\TravelActivity;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class ActivityController extends Controller
{
    public function travelActivities(Destination $destination): View|Factory|Application
    {
        $activities = TravelActivity::query()
            ->whereLike('activity_name', "%$destination->recommended_season%")
            ->get();

        return view('destinations.activities', compact('destination', 'activities'));
    }
}
