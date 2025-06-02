@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Détails du médicament</h1>

        <p><strong>Nom :</strong> {{ $medicament->nom }}</p>
        <p><strong>Description :</strong> {{ $medicament->description }}</p>
        <p><strong>Quantité :</strong> {{ $medicament->quantite_en_stock }}</p>
        <p><strong>Prix :</strong> {{ $medicament->prix }} FCFA</p>
        <p><strong>Date d'expiration :</strong> {{ $medicament->date_expiration }}</p>
        <p><strong>Catégorie :</strong> {{ $medicament->categorie }}</p>

        <a href="{{ route('medicaments.index') }}">Retour à la liste</a>
    </div>
@endsection
