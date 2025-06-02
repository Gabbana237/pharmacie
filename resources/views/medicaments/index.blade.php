@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des Médicaments</h1>

        @if (session('success'))
            <div style="color: green;">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div style="color: red;">{{ session('error') }}</div>
        @endif

        <a href="{{ route('medicaments.create') }}">Ajouter un nouveau médicament</a>

        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Quantité</th>
                    <th>Prix</th>
                    <th>Date expiration</th>
                    <th>Catégorie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($medicaments as $medicament)
                    <tr>
                        <td>
                            @if($medicament->image)
                                <img src="{{ asset('storage/medicaments/' . $medicament->image) }}" alt="image {{ $medicament->nom }}" width="60">
                            @else
                                <em>Pas d'image</em>
                            @endif
                        </td>
                        <td>{{ $medicament->nom }}</td>
                        <td>{{ $medicament->quantite_en_stock }}</td>
                        <td>{{ $medicament->prix }} FCFA</td>
                        <td>{{ $medicament->date_expiration }}</td>
                        <td>{{ $medicament->categorie }}</td>
                        <td>
                            <a href="{{ route('medicaments.show', $medicament->id) }}">Voir</a> |
                            <a href="{{ route('medicaments.edit', $medicament->id) }}">Modifier</a> |
                            <form action="{{ route('medicaments.destroy', $medicament->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Supprimer ce médicament ?')">Supprimer</button>
                            </form>
                            <br><br>
                            <form action="{{ route('orders.store', $medicament->id) }}" method="POST">
                                @csrf
                                <input type="number" name="quantity" value="1" min="1" max="{{ $medicament->quantite_en_stock }}" style="width: 60px;">
                                <button type="submit">Commander</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
