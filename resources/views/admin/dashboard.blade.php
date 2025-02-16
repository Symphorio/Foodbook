<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tableau de Bord - Administrateur')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        /* Image de fond */
        body {
            background: url('{{ asset('images/chef-cuisinier.jpeg') }}') no-repeat center center;
            background-size: cover;
            min-height: 100vh;
        }
        /* Overlay sombre pour améliorer la lisibilité */
        .overlay {
            background: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body class="relative text-white">

    <!-- Overlay sombre pour améliorer la visibilité du contenu -->
    <div class="overlay"></div>

    <!-- Header -->
    <header class="text-center py-6 bg-gray-900 bg-opacity-75 shadow-lg relative">
        <h1 class="text-3xl font-bold">Administrateur</h1>

        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
    </header>

    <div class="container mx-auto mt-10 relative">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Gérer les Réservations -->
            <a href="{{ route('reservation.index') }}" class="block bg-blue-600 hover:bg-blue-500 text-white text-center p-6 rounded-lg shadow-lg transform hover:scale-105 transition">
                <i class="fas fa-calendar-alt text-3xl"></i>
                <h2 class="text-xl font-semibold mt-3">Gérer les Réservations</h2>
            </a>

            <!-- Gérer les Commandes -->
            <a href="{{ route('commande.index') }}" class="block bg-green-600 hover:bg-green-500 text-white text-center p-6 rounded-lg shadow-lg transform hover:scale-105 transition">
                <i class="fas fa-shopping-cart text-3xl"></i>
                <h2 class="text-xl font-semibold mt-3">Gérer les Commandes</h2>
            </a>

            <!-- Gérer le Menu -->
            <a href="{{ route('menu.index') }}" class="block bg-yellow-600 hover:bg-yellow-500 text-white text-center p-6 rounded-lg shadow-lg transform hover:scale-105 transition">
                <i class="fas fa-utensils text-3xl"></i>
                <h2 class="text-xl font-semibold mt-3">Gérer le Menu</h2>
            </a>

        </div>
    </div>

    <!-- Font Awesome pour les icônes -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>
