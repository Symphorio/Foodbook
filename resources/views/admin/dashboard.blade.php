<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Administrateur de Bord')</title>
</head>
<body>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="row">
        <div class="col-md-4">
            <a href="#" class="btn btn-primary w-100">Gérer les Réservations</a>
        </div>
        <div class="col-md-4">
            <a href="#" class="btn btn-success w-100">Gérer les Commandes</a>
        </div>
        <div class="col-md-4">
            <a href="{{ route('menu.index') }}" class="btn btn-warning w-100">Gérer le Menu</a>
        </div>
    </div>
            </div>
        </div>
    </div>
</body>
</html>
