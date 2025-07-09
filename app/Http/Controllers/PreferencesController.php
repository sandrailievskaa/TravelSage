<?php

namespace App\Http\Controllers;

class PreferencesController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('preferences');
    }
}
