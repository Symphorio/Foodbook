<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <title>Foodbook</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-100 dark:bg-gray-900 selection:bg-red-500 selection:text-white">

<!-- Barre de navigation avec arrière-plan -->
<div id="bg_1" >
    <nav>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="/" class="text-lg font-bold text-yellow-800 dark:text-yellow">Foodbook</a>
    
            <!-- Liens de navigation -->
            <div class="hidden md:flex space-x-6" id="nav-links">
                <a href="/" class="text-gray-600 dark:text-bleu-300 hover:text-blue-500">Accueil</a>
                <a href="{{ route('restaurants') }}" class="text-gray-600 dark:text-bleu-300 hover:text-blue-500">Restaurants</a>
                <a href="/reservations" class="text-gray-600 dark:text-bleu-300 hover:text-blue-500">Réservations</a>
                <a href="/commandes" class="text-gray-600 dark:text-bleu-300 hover:text-blue-500">Commandes</a>
                <a href="/contact" class="text-gray-600 dark:text-bleu-300 hover:text-blue-500">Contact</a>
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
                </div>
            </div>
        </div>
    </nav>

    <!-- Nom de l'application et description -->
    <div id="ti_de" >
        <h1 class="text-5xl font-bold">Foodbook</h1>
        <p class="mt-4 text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        <p>Vivamus lacinia odio vitae vestibulum vestibulum.</p>
    </div>
</div>

</body>
</html>
