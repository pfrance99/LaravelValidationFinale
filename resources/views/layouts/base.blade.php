<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div>
        <ul>
            <li><a href="/"></a>Accueil</li>
            <li><a href="/read">Voir le stock</a></li>
            <li><a href="/create">Ajouter un Album</a></li>
            <li><a href="/createGenre">Ajouter un Genre</a></li>
        </ul>
    </div>
    @yield('content')
</body>
</html>