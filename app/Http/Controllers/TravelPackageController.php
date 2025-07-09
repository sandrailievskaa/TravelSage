<?php

namespace App\Http\Controllers;

use App\Http\Requests\TravelPackageRequest;
use App\Models\TravelPackage;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TravelPackageController extends Controller
{
    public function index(): View|Factory|Application
    {
        $travelPackages = TravelPackage::all();

        return view('travel-packages.index', compact('travelPackages'));
    }

    public function create(): View|Factory|Application
    {
        return view('travel-packages.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        DB::transaction(function () use ($request) {
            $validatedData = $request->validate([
                'imepaket' => 'required|string|max:255',
                'cena' => 'required|numeric',
                'pochetok' => 'required|date_format:Y-m-d\TH:i',
                'kraj' => 'required|date_format:Y-m-d\TH:i|after_or_equal:pochetok',
            ]);

            TravelPackage::create($validatedData);
        });

        return redirect()->route('travel-packages.index')->with('success', 'Пакетот е успешно креиран!');
    }

    public function edit(TravelPackage $travelPackage): View|Factory|Application
    {
        return view('travel-packages.edit', compact('travelPackage'));
    }

    public function update(TravelPackage $travelPackage, TravelPackageRequest $request): \Illuminate\Http\RedirectResponse
    {
        $travelPackage->update($request->validated());

        return redirect()->route('travel-packages.index')->with('success', 'Пакетот е успешно изменет!');
    }

    public function destroy(TravelPackage $travelPackage): \Illuminate\Http\RedirectResponse
    {
        $travelPackage->delete();

        return redirect()->route('travel-packages.index')->with('success', 'Пакетот е успешно избришан!');
    }
}
