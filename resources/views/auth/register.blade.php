<h1>Inscription</h1>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <label>Nom:</label><input type="text" name="name"><br>
    <label>Email:</label><input type="email" name="email"><br>
    <label>Mot de passe:</label><input type="password" name="password"><br>
    <label>Confirmation:</label><input type="password" name="password_confirmation"><br>
    <button type="submit">S'inscrire</button>
</form>
