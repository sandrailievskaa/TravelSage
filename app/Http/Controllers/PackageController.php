<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\TravelPackage;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\Console\Application;

class PackageController extends Controller
{
    public function travelPackages(Destination $destination): View|Factory|Application
    {
        $sezona = strtolower($destination->preporachanasezona);

        $paketi = TravelPackage::where('imepaket', 'LIKE', "%{$sezona}%")->get();

        return view('destinations.packages', compact('destination', 'paketi'));
    }

}
