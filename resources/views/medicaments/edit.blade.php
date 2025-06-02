@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifier le médicament</h1>

        <form action="{{ route('medicaments.update', $medicament->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('medicaments.form', ['medicament' => $medicament])
            <button type="submit">Mettre à jour</button>
        </form>

        <a href="{{ route('medicaments.index') }}">Retour à la liste</a>
    </div>
@endsection
