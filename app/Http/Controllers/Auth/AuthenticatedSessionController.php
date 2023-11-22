<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view(_AUTH_URL_ . 'login');
    }

    public function store(LoginRequest $request)
    {
        // 1. Valider les données de la requête à l'aide de la classe LoginRequest
        $credentials = $request->validated();

        // 2. Tenter de connecter l'utilisateur en utilisant les identifiants validés
        if (Auth::attempt($credentials)) {
            // 3. La tentative de connexion a réussi
            // 4. Régénérer la session pour des raisons de sécurité
            $request->session()->regenerate();

            // 5. Rediriger l'utilisateur vers la page
            return redirect()->back();
        }

        // 6. L'utilisateur n'a pas pu se connecter
        return back()
            ->withErrors([
                'email' => 'Les identifiants fournis ne correspondent pas à nos enregistrements.',
            ])
            ->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.create')->with('success', 'Deconnexion reussie');
    }
}
