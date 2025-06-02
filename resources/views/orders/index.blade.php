<h1>Mes commandes</h1>

@if($orders->isEmpty())
    <p>Vous n'avez pas encore passé de commande.</p>
@else
    <table border="1">
        <tr>
            <th>Médicament</th>
            <th>Quantité</th>
            <th>Statut</th>
            <th>Date</th>
        </tr>
        @foreach($orders as $order)
        <tr>
            <td>{{ $order->medicament->nom }}</td>
            <td>{{ $order->quantity }}</td>
            <td>{{ $order->status }}</td>
            <td>{{ $order->created_at->format('d/m/Y') }}</td>
        </tr>
        @endforeach
    </table>
@endif

<a href="{{ url()->previous() }}">← Retour</a>
