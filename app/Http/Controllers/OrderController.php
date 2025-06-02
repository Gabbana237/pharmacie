<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Medicament;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderController extends Controller
{
    public function generateInvoice($id)
{
    $order = Order::with(['medicament', 'user'])->findOrFail($id);

    if ($order->user_id != session('user_id')) {
        abort(403);
    }

    $prix_unitaire = $order->medicament->prix;
    $quantite = $order->quantity;
    $montant_HT = $prix_unitaire * $quantite;
    $tva = 0.18; // 18%
    $montant_TVA = $montant_HT * $tva;
    $montant_TTC = $montant_HT + $montant_TVA;

    $pdf = Pdf::loadView('orders.invoice', compact('order', 'montant_HT', 'montant_TVA', 'montant_TTC'));

    return $pdf->download('facture_commande_'.$order->id.'.pdf');
}

   public function store(Request $request, $medicament_id)
{
    $request->validate([
        'quantity' => 'required|integer|min:1',
    ]);

    $medicament = Medicament::findOrFail($medicament_id);

    // Vérifier le stock disponible
    if ($request->quantity > $medicament->quantite_en_stock) {
        return redirect()->back()->with('error', 'Stock insuffisant pour ce médicament.');
    }

    // Créer la commande
    $order = Order::create([
        'user_id'       => session('user_id'),
        'medicament_id' => $medicament_id,
        'quantity'      => $request->quantity,
    ]);

    // Déduire le stock
    $medicament->quantite_en_stock -= $request->quantity;
    $medicament->save();

    return redirect()->route('orders.show', $order->id)
                     ->with('success', 'Commande effectuée avec succès !');
}



    public function index()
    {
        $orders = Order::with('medicament')->where('user_id', session('user_id'))->get();
        return view('orders.index', compact('orders'));
    }

    public function show($id)
{
    $order = Order::with(['medicament', 'user'])->findOrFail($id);

    // sécurité : s'assurer que l'utilisateur ne voit que ses commandes
    if ($order->user_id != session('user_id')) {
        abort(403, 'Accès interdit.');
    }

    return view('orders.show', compact('order'));
}

}

