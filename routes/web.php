<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PreferencesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TravelActivityController;
use App\Http\Controllers\TravelEventController;
use App\Http\Controllers\TravelPackageController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ActivityController;
use \App\Http\Controllers\PackageController;
use \App\Http\Controllers\WeatherConditionController;

Route::get('/', [DestinationController::class, 'home'])->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::resource('destinations', DestinationController::class)->only('index', 'show');
Route::get('destinations/{imelokacija}/events', [DestinationController::class, 'events'])->name('events.index');
Route::get('destinations/{imelokacija}/activities', [DestinationController::class, 'activities'])->name('activity.index');
Route::get('destinations/{imelokacija}/packages', [DestinationController::class, 'packages'])->name('package.index');
Route::get('/destinations/{destination}/travel-events', [EventController::class, 'travelEvents'])->name('travelEvents.index');
Route::get('/destinations/{destination}/travel-activities', [ActivityController::class, 'travelActivities'])->name('travelActivities.index');
Route::get('/destinations/{destination}/travel-packages', [PackageController::class, 'travelPackages'])->name('travelPackages.index');
Route::get('/weather/{imelokacija}', [WeatherConditionController::class, 'show'])->name('weather.show');


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');


Route::get('/preferences', function () {
    return view('preferences');
})->name('preferences');



/* manager side */
Route::post('/travel-events', [TravelEventController::class, 'store'])->name('travel-events.store');
Route::resource('travel-events', TravelEventController::class);

Route::post('/travel-activities', [TravelActivityController::class, 'store'])->name('travel-activities.store');
Route::resource('travel-activities', TravelActivityController::class);

Route::post('/travel-packages', [TravelPackageController::class, 'store'])->name('travel-packages.store');
Route::resource('travel-packages', TravelPackageController::class);
