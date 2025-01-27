<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodbook</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900 selection:bg-red-500 selection:text-white">

<!-- Barre de navigation -->
    <nav class="bg-white dark:bg-gray-800 shadow-md fixed w-full top-0 left-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="/" class="text-lg font-bold text-gray-800 dark:text-white">Foodbook</a>
    
            <!-- Liens de navigation -->
            <div class="hidden md:flex space-x-6" id="nav-links">
                <a href="/" class="text-gray-600 dark:text-gray-300 hover:text-blue-500">Accueil</a>
                <a href="{{ route('restaurants') }}" class="text-gray-600 dark:text-gray-300 hover:text-blue-500">Restaurants</a>
                <a href="/reservations" class="text-gray-600 dark:text-gray-300 hover:text-blue-500">Réservations</a>
                <a href="/commandes" class="text-gray-600 dark:text-gray-300 hover:text-blue-500">Commandes</a>
                <a href="/contact" class="text-gray-600 dark:text-gray-300 hover:text-blue-500">Contact</a>
            </div>
    
            <!-- Recherche et Profil -->
            <div class="flex items-center space-x-4">
                <!-- Barre de recherche -->
                <form action="/search" method="GET" class="relative">
                    <input type="text" name="query" placeholder="Rechercher..." 
                           class="px-4 py-2 border rounded-md text-gray-600 dark:text-gray-300 dark:bg-gray-700">
                    <button type="submit" class="absolute right-2 top-2 text-gray-400 hover:text-blue-500">
                        🔍
                    </button>
                </form>
    
<!-- Menu utilisateur -->
<div class="relative" x-data="{ open: false }">
    <!-- Bouton du profil -->
    <button @click="open = !open" class="flex items-center text-gray-600 dark:text-gray-300">
        <img src="{{ asset('images/profile.png') }}" alt="Profil" class="w-8 h-8 rounded-full">
    </button>

    <!-- Menu déroulant -->
    <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 bg-white dark:bg-gray-800 shadow-lg rounded-md w-48">
        <a href="/profile" class="block px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Mon Profil</a>
        <a href="/reservations" class="block px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Mes Réservations</a>
        <a href="/settings" class="block px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">Paramètres</a>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-left px-4 py-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                Déconnexion
            </button>
        </form>
    </div>
</div>

            </div>
        </div>
    </nav>
    
<!-- Contenu de la page -->


    <!-- Conteneur principal -->
    <div class="min-h-screen flex flex-col justify-center items-center px-4">
        <!-- Header -->
        <header class="text-center mb-8">
            <h1 class="text-5xl font-extrabold text-gray-800 dark:text-white">Bienvenue sur Foodbook</h1>
            <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">Réservez des tables et commandez dans vos restaurants préférés.</p>
        </header>

        <!-- Boutons de connexion/inscription -->
        @if (Route::has('login'))
        <div class="flex space-x-4 mt-6">
            @guest
                <a href="{{ route('login') }}" class="px-6 py-3 bg-blue-500 text-white rounded-lg shadow-lg hover:bg-blue-700 transition">
                    Log in
                </a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="px-6 py-3 bg-green-500 text-white rounded-lg shadow-lg hover:bg-green-700 transition">
                        Register
                    </a>
                @endif
            @endguest
        </div>
        @endif

        <!-- Section de contenu -->
        <div class="mt-16 text-center max-w-2xl">
            <h2 class="text-3xl font-bold text-gray-700 dark:text-gray-300">Découvrez des restaurants près de chez vous</h2>
            <p class="mt-4 text-lg text-gray-500 dark:text-gray-400 leading-relaxed">
                Utilisez notre plateforme pour explorer les meilleures offres, réserver des tables ou commander directement chez vos restaurants favoris.
            </p>
        </div>
    </div>


  

</body>
</html>
