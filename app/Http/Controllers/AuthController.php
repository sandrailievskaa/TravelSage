<?php

namespace App\Http\Controllers;

use App\Models\TravelSageUser;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('register');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = TravelSageUser::where('email', $request->email)->first();

        if ($user) {
            $request->session()->put('id_user', $user->id);

            return redirect()->route('preferences')->with('success', 'Успешно најавени!');
        } else {
            return back()->withErrors(['email' => 'Корисникот не постои. Ве молиме регистрирајте се.']);
        }
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone_number' => 'required|string|max:20',
            'birth_date' => 'required|date',
        ]);

        $user = TravelSageUser::where('email', $request->email)->first();

        if (! $user) {
            $user = new TravelSageUser;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->phone_number = $request->phone_number;
            $user->birth_date = $request->birth_date;
            $user->save();
        }

        return redirect()->route('preferences')->with('success', 'Успешно сте најавени!');
    }
}
