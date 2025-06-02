<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(Request $request)
    {
        $user = User::findOrFail($request->session()->get('user_id'));
        return view('users.show', compact('user'));
    }

    public function edit()
    {
        $user = User::findOrFail(session('user_id'));
        return view('users.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::findOrFail(session('user_id'));

        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        $user->update([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('users.show')->with('success', 'Profil mis à jour.');
    }

    public function destroy(Request $request)
    {
        $user = User::findOrFail(session('user_id'));
        $request->session()->forget('user_id');
        $user->delete();

        return redirect()->route('register');
    }
}
