<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\TravelActivityController;
use App\Http\Controllers\TravelEventController;
use App\Http\Controllers\TravelPackageController;
use App\Http\Controllers\MeteorologicalCondition;
use Illuminate\Support\Facades\Route;

Route::get('/', [DestinationController::class, 'home'])->name('home');

Route::resource('destinations', DestinationController::class)->only('index', 'show');

Route::prefix('/destinations/{destination}')->group(function () {
    Route::get('/travel-events', [EventController::class, 'travelEvents'])->name('travelEvents.index');
    Route::get('/travel-activities', [ActivityController::class, 'travelActivities'])->name('travelActivities.index');
    Route::get('/travel-packages', [PackageController::class, 'travelPackages'])->name('travelPackages.index');
});

Route::get('/weather/{location_name}', [MeteorologicalCondition::class, 'show'])->name('weather.show');

Route::prefix('/register')->group(function () {
    Route::get('/', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/', [AuthController::class, 'store'])->name('register');
});

Route::prefix('/login')->group(function () {
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/', [AuthController::class, 'login'])->name('login.post');
});

Route::get('/preferences', function () {
    return view('preferences');
})->name('preferences');

Route::resource('travel-events', TravelEventController::class);
Route::resource('travel-activities', TravelActivityController::class);
Route::resource('travel-packages', TravelPackageController::class);
