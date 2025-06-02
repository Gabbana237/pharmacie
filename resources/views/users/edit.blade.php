@extends('layouts.app') {{-- Si tu as un layout commun, sinon supprime cette ligne --}}

@section('content')
<h1>Modifier mon profil</h1>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<form method="POST" action="{{ route('users.update') }}">
    @csrf

    <label>Nom :</label><br>
    <input type="text" name="name" value="{{ old('name', $user->name) }}"><br><br>

    <label>Email :</label><br>
    <input type="email" name="email" value="{{ old('email', $user->email) }}"><br><br>

    <button type="submit">Mettre à jour</button>
</form>

<a href="{{ route('users.show') }}">← Retour</a>
@endsection
