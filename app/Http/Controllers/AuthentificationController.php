<?php

namespace App\Http\Controllers;

use App\Models\Docteurs;
use App\Models\Rendezvous;
use App\Models\Patients;
use App\Models\Specialites;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AuthentificationController extends Controller
{
    public function accueil()
    {
        return view('welcome');
    }

    public function login(Request $request)
    {

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        }
        return view('login')->with('status', 'identifiant ou mot de passe incorrect');
    }

    public function logout()
    {
        Auth::logout();
        return view('welcome');
    }

    public function dashboard()
    {
        $docteurs = Docteurs::all();
        $patients = Patients::all();
        $specialites = Specialites::all();
        $rendezvous = Rendezvous::all();
        return view ('dashboard', compact('docteurs','patients','specialites','rendezvous'));
    }
}
