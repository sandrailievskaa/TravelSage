<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\TravelActivity;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
class ActivityController extends Controller
{
    public function travelActivities(Destination $destination): View|Factory|Application
    {
        $aktivnosti = TravelActivity::query()
            ->whereLike('aktivnosti', "%$destination->preporachanasezona%")
            ->get();

        return view('destinations.activities', compact('destination', 'aktivnosti'));
    }
}

