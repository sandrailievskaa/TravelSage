<?php

namespace App\Http\Controllers;

use App\Http\Requests\TravelActivityRequest;
use App\Models\TravelActivity;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TravelActivityController extends Controller
{
    public function index(): View|Factory|Application
    {
        $travelActivities = TravelActivity::all();

        return view('travel-activities/index', compact('travelActivities'));
    }

    public function create(): View|Factory|Application
    {
        return view('travel-activities.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        DB::transaction(function () use ($request) {
            $validatedData = $request->validate([
                'activity_name' => 'required|string|max:255',
                'information' => 'nullable|string|max:255',
                'category' => 'required|string|max:255',
                'amount' => 'nullable|numeric',
            ]);

            TravelActivity::create($validatedData);
        });

        return redirect()->route('travel-activities.index')->with('success', 'Активноста е успешно креирана!');
    }

    public function edit(TravelActivity $travelActivity): View|Factory|Application
    {
        return view('travel-activities/edit', compact('travelActivity'));
    }

    public function update(TravelActivity $travelActivity, TravelActivityRequest $request): \Illuminate\Http\RedirectResponse
    {
        $travelActivity->update($request->validated());

        return redirect()->route('travel-activities.index')->with('success', 'Активноста е успешно изменета!');
    }

    public function destroy(TravelActivity $travelActivity): \Illuminate\Http\RedirectResponse
    {
        $travelActivity->delete();

        return redirect()->route('travel-activities.index')->with('success', 'Активноста е успешно избришана!');
    }
}
