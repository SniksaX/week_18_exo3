<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Cadeaux</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('gifts.index') }}">Accueil (Liste des cadeaux)</a>
        </nav>
        <hr>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>