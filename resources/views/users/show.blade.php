<h1>Mon Profil</h1>
<p>Nom: {{ $user->name }}</p>
<p>Email: {{ $user->email }}</p>

<a href="{{ route('users.edit') }}">Modifier</a>
<form action="{{ route('users.destroy') }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer mon compte</button>
</form>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Se déconnecter</button>
</form>
