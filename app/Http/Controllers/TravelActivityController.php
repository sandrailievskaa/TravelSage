<?php

namespace App\Http\Controllers;

use App\Http\Requests\TravelActivityRequest;
use App\Models\TravelActivity;
use Illuminate\Http\Request;

class TravelActivityController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $travelActivities = TravelActivity::all();

        return view('travel-activities/index', compact('travelActivities'));
    }

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('travel-activities.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validatedData = $request->validate([
            'imeaktivnost' => 'required|string|max:255',
            'informacii' => 'nullable|string|max:255',
            'kategorija' => 'required|string|max:255',
            'iznos' => 'nullable|numeric',
        ]);

        TravelActivity::create($validatedData);

        return redirect()->route('travel-activities.index')->with('success', 'Активноста е успешно креирана!');
    }

    public function edit(TravelActivity $travelActivity): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
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
