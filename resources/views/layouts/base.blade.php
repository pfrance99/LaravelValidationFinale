<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
</head>
<body>
    <header>
        <ul>
            <li><a href="/">ACCEUIL</a></li>
            <li><a href="/read">VOIR STOCK</a></li>
            <li class="title">MUSICALZ</li>
            <li><a href="/create">INSERER ALBUM</a></li>
            <li><a href="/createGenre">INSERER GENRE</a></li>
        </ul>
    </header>
    @yield('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>