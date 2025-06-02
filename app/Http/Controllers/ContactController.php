<?php

namespace App\Http\Controllers;

use App\Models\MessageContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function envoyer(Request $request)
    {
        // Validation
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255', 
            'message' => 'required|string',
        ]);

        // Enregistrement dans la base de données
        MessageContact::create($validated);

        // Retour avec message de succès
        return back()->with('success', 'Votre message a été enregistré avec succès.');
    }
}
