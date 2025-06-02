<?php

namespace App\Http\Controllers;

use App\Models\Medicament;
use Illuminate\Http\Request;

class MedicamentController extends Controller
{
    // Affiche la liste des médicaments
    public function index()
    {
        $medicaments = Medicament::all();
        return view('medicaments.index', compact('medicaments'));
    }

    // Affiche le formulaire de création
    public function create()
    {
        return view('medicaments.create');
    }

    // Enregistre un nouveau médicament
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string',
            'description' => 'nullable|string',
            'quantite_en_stock' => 'required|integer',
            'prix' => 'required|numeric',
            'date_expiration' => 'nullable|date',
            'categorie' => 'nullable|string',
        ]);

        Medicament::create($validated);

        return redirect()->route('medicaments.index')->with('success', 'Médicament ajouté avec succès.');
    }

    // Affiche un médicament en détail
    public function show($id)
    {
        $medicament = Medicament::findOrFail($id);
        return view('medicaments.show', compact('medicament'));
    }

    // Affiche le formulaire d’édition
    public function edit($id)
    {
        $medicament = Medicament::findOrFail($id);
        return view('medicaments.edit', compact('medicament'));
    }

    // Met à jour un médicament
    public function update(Request $request, $id)
    {
        $medicament = Medicament::findOrFail($id);

        $validated = $request->validate([
            'nom' => 'required|string',
            'description' => 'nullable|string',
            'quantite_en_stock' => 'required|integer',
            'prix' => 'required|numeric',
            'date_expiration' => 'nullable|date',
            'categorie' => 'nullable|string',
        ]);

        $medicament->update($validated);

        return redirect()->route('medicaments.index')->with('success', 'Médicament mis à jour avec succès.');
    }

    // Supprime un médicament
    public function destroy($id)
    {
        $medicament = Medicament::findOrFail($id);
        $medicament->delete();

        return redirect()->route('medicaments.index')->with('success', 'Médicament supprimé avec succès.');
    }
}
