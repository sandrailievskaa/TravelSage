<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class MeteorologicalCondition extends Controller
{
    public function show($location)
    {
        $apiKey = env('WEATHER_API_KEY');

        $response = Http::get('https://api.openweathermap.org/data/2.5/forecast', [
            'q' => $location,
            'units' => 'metric',
            'appid' => $apiKey,
        ]);

        if ($response->successful()) {
            $data = $response->json();

            return view('weather.show', compact('data', 'location'));
        } else {
            abort(404, 'Не може да се пронајде временската прогноза.');
        }
    }
}
