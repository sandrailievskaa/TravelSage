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
        $paketi = TravelPackage::query()
            ->where('imepaket', 'like', "%$destination->preporachanasezona%")
            ->get();

        return view('destinations.packages', compact('destination', 'paketi'));
    }

}
