@extends('layoutClient.app')

@section('content')
    <style>
        .order-container {
            max-width: 700px;
            margin: 40px auto;
            padding: 25px 30px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.06);
            font-family: 'Segoe UI', sans-serif;
        }

        .order-container h1, h3 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .order-container p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 12px;
        }

        .order-container strong {
            color: #34495e;
        }

        .success-message {
            padding: 12px 16px;
            background-color: #e8f5e9;
            color: #2e7d32;
            border: 1px solid #c8e6c9;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        .order-actions {
            margin-top: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
        }

        .order-actions a {
            display: inline-block;
            padding: 10px 18px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        .order-actions a:hover {
            background-color: #2980b9;
        }

        .order-actions a:first-child {
            background-color: #95a5a6;
        }

        .order-actions a:first-child:hover {
            background-color: #7f8c8d;
        }

        hr {
            margin: 25px 0;
            border: none;
            border-top: 1px solid #eee;
        }
    </style>

    <div class="order-container">
        <h1>Détails de la commande</h1>

        @if(session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif

        <p><strong>Nom du médicament :</strong> {{ $order->medicament->nom }}</p>
        <p><strong>Prix unitaire :</strong> {{ number_format($order->medicament->prix, 0, ',', ' ') }} FCFA</p>
        <p><strong>Quantité commandée :</strong> {{ $order->quantity }}</p>
        <p><strong>Montant total :</strong> {{ number_format($order->quantity * $order->medicament->prix, 0, ',', ' ') }} FCFA</p>

        <hr>

        <h3>Informations de l'utilisateur</h3>
        <p><strong>Nom :</strong> {{ $order->user->name }}</p>
        <p><strong>Email :</strong> {{ $order->user->email }}</p>

        <hr>

        <p><strong>Date de commande :</strong> {{ $order->created_at->format('d/m/Y à H:i') }}</p>
        <p><strong>Statut :</strong> {{ ucfirst($order->status ?? 'en attente') }}</p>

        <div class="order-actions">
            
            <a href="{{ route('orders.invoice', $order->id) }}" target="_blank">📄 Télécharger la facture</a>
        </div>
    </div>
@endsection
