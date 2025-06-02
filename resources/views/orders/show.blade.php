@extends('layouts.app')

@section('content')
    <h1>Détails de la commande</h1>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <p><strong>Nom du médicament :</strong> {{ $order->medicament->nom }}</p>
    <p><strong>Prix unitaire :</strong> {{ $order->medicament->prix }} FCFA</p>
    <p><strong>Quantité commandée :</strong> {{ $order->quantity }}</p>
    <p><strong>Montant total :</strong> {{ $order->quantity * $order->medicament->prix }} FCFA</p>

    <hr>

    <h3>Informations de l'utilisateur</h3>
    <p><strong>Nom :</strong> {{ $order->user->name }}</p>
    <p><strong>Email :</strong> {{ $order->user->email }}</p>

    <hr>

    <p><strong>Date de commande :</strong> {{ $order->created_at->format('d/m/Y H:i') }}</p>
    <p><strong>Statut :</strong> {{ $order->status }}</p>

    <br>
    <a href="{{ route('orders.index') }}">← Voir toutes mes commandes</a>
    <a href="{{ route('orders.invoice', $order->id) }}" target="_blank">
    📄 Télécharger la facture PDF
</a>
 
@endsection
