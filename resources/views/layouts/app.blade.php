<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacie - @yield('title', 'Accueil')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px #ccc;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        a {
            margin-right: 10px;
            text-decoration: none;
            color: blue;
        }

        a:hover {
            text-decoration: underline;
        }

        button {
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        button:hover {
            opacity: 0.8;
        }

        .success {
            color: green;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    @if(session()->has('user_name'))
    <p>Connecté en tant que {{ session('user_name') }}
    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
        @csrf
        <button type="submit">Déconnexion</button>
    </form></p>
@else
    <a href="{{ route('login') }}">Connexion</a>
@endif

    <div class="container">
        <h2>🧪 Application de gestion de pharmacie</h2>
        <hr>
        @yield('content')
    </div>
</body>
</html>
