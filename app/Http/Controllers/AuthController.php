<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $request->session()->put('user_id', $user->id);

        return redirect()->route('home');
    }

   public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        // Redirection conditionnelle selon l'email
        if (Auth::user()->email === 'admin@pharma.com') {
         return redirect()->route('medicaments.index');

        } else {
            return redirect('/');
        }
    }

    return back()->withErrors([
        'email' => 'Identifiants invalides.',
    ]);
}


    public function logout(Request $request)
    {
        $request->session()->forget('user_id');
        return redirect()->route('login');
    }
}
