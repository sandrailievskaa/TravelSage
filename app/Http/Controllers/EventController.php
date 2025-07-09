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
        $lokacija = $destination->imelokacija;

        $nastani = TravelEvent::where('naziv', 'LIKE', "%$lokacija%")
            ->orWhere('detali', 'LIKE', "%$lokacija%")
            ->get();

        return view('destinations.events', compact('destination', 'nastani'));
    }
}
