<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\TravelEvent;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class EventController extends Controller
{
    public function travelEvents(Destination $destination): View|Factory|Application
    {
        $location = $destination->location_name;

        $events = TravelEvent::where('event_name', 'LIKE', "%$location%")
            ->orWhere('details', 'LIKE', "%$location%")
            ->get();

        return view('destinations.events', compact('destination', 'events'));
    }
}
