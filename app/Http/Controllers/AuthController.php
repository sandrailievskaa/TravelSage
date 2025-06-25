<?php

namespace App\Http\Controllers;

use App\Models\TravelSageUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegisterForm(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('register');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'ime' => 'required|string|max:255',
            'prezime' => 'required|string|max:255',
            'eposhta' => 'required|email',
            'telbr' => 'required|string|max:20',
            'datumragjanje' => 'required|date',
        ]);

        $korisnik = TravelSageUser::where('eposhta', $request->eposhta)->first();

        if (!$korisnik) {
            $korisnik = new TravelSageUser();
            $korisnik->ime = $request->ime;
            $korisnik->prezime = $request->prezime;
            $korisnik->eposhta = $request->eposhta;
            $korisnik->telbr = $request->telbr;
            $korisnik->datumragjanje = $request->datumragjanje;
            $korisnik->save();
        }

        return redirect()->route('preferences')->with('success', 'Успешно сте најавени!');
    }

}
