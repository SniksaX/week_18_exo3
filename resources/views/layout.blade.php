<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion des cadeaux</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('gifts.index') }}">accueil</a>
        </nav>
        <hr>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>