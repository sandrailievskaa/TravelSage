<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\TravelEvent;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function travelEvents(Destination $destination)
    {
        $lokacija = $destination->imelokacija;

        $nastani = TravelEvent::where('naziv', 'LIKE', "%$lokacija%")
            ->orWhere('detali', 'LIKE', "%$lokacija%")
            ->get();

        return view('destinations.events', compact('destination', 'nastani'));
    }

}
