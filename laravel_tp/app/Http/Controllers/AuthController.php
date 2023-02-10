<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Permet d'afficher la page de connexion
     * @return Application|Factory|View
     */
    


    public function authenticate(Request $request)
    {
        $request->validate([
           'email' => 'required|email',
           'password' => 'required'
        ]);

        if(auth()->attempt($request->only('email', 'password'))){
            return redirect('/services');
        }
        return redirect()->back()->withErrors('Les identifiants ne correspondent pas');
    }

    public function logout()
    {
        auth()->logout();
    }
}