@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ajouter un médicament</h1>

        <form action="{{ route('medicaments.store') }}" method="POST">
            @csrf
            @include('medicaments.form')
            <button type="submit">Enregistrer</button>
        </form>

        <a href="{{ route('medicaments.index') }}">Retour à la liste</a>
    </div>
@endsection
