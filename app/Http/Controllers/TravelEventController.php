<?php

namespace App\Http\Controllers;

use App\Http\Requests\TravelEventRequest;
use App\Models\TravelEvent;
use Illuminate\Http\Request;

class TravelEventController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $travelEvents = TravelEvent::all();

        return view('travel-events/index', compact('travelEvents'));
    }

    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('travel-events.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validatedData = $request->validate([
            'naziv' => 'required|string|max:255',
            'vidovi' => 'required|string|max:255',
            'detali' => 'nullable|string',
            'pochetendatum' => 'required|date',
            'kraendatum' => 'required|date',
        ]);

        TravelEvent::create($validatedData);

        return redirect()->route('travel-events.index')->with('success', 'Настанот е успешно креиран!');
    }

    public function edit(TravelEvent $travelEvent): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('travel-events/edit', compact('travelEvent'));
    }

    public function update(TravelEvent $travelEvent, TravelEventRequest $request): \Illuminate\Http\RedirectResponse
    {
        $travelEvent->update($request->validated());

        return redirect()->route('travel-events.index')->with('success', 'Настанот е успешно изменет!');
    }

    public function destroy(TravelEvent $travelEvent): \Illuminate\Http\RedirectResponse
    {
        $travelEvent->delete();
        return redirect()->route('travel-events.index')->with('success', 'Настанот е успешно избришан!');
    }
}
