<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Facture</title>
    <style>
        body { font-family: sans-serif; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 8px; text-align: left; }
    </style>
</head>
<body>
    <h2>Facture n°{{ $order->id }}</h2>
    <p><strong>Date :</strong> {{ $order->created_at->format('d/m/Y') }}</p>

    <h3>Client</h3>
    <p>{{ $order->user->name }} ({{ $order->user->email }})</p>

    <h3>Détails de la commande</h3>
    <table>
        <tr>
            <th>Médicament</th>
            <th>Quantité</th>
            <th>Prix unitaire</th>
            <th>Montant HT</th>
        </tr>
        <tr>
            <td>{{ $order->medicament->nom }}</td>
            <td>{{ $order->quantity }}</td>
            <td>{{ $order->medicament->prix }} FCFA</td>
            <td>{{ $montant_HT }} FCFA</td>
        </tr>
        <tr>
            <td colspan="3"><strong>TVA (18%)</strong></td>
            <td>{{ $montant_TVA }} FCFA</td>
        </tr>
        <tr>
            <td colspan="3"><strong>Total TTC</strong></td>
            <td><strong>{{ $montant_TTC }} FCFA</strong></td>
        </tr>
    </table>
</body>
</html>
