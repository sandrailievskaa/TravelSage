<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\TravelPackage;
use Faker\Factory;
use Illuminate\View\View;
use Symfony\Component\Console\Application;

class PackageController extends Controller
{
    public function travelPackages(Destination $destination): View|Factory|Application
    {
        $packages = TravelPackage::query()
            ->where('package_name', 'like', "%$destination->recommended_season%")
            ->get();

        return view('destinations.packages', compact('destination', 'packages'));
    }
}
