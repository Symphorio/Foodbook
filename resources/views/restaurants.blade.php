<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants - Foodbook</title>
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
            <a href="/restaurants" class="text-gray-600 dark:text-gray-300 hover:text-blue-500">Restaurants</a>
            <a href="/reservations" class="text-gray-600 dark:text-gray-300 hover:text-blue-500">Réservations</a>
            <a href="/commandes" class="text-gray-600 dark:text-gray-300 hover:text-blue-500">Commandes</a>
            <a href="/contact" class="text-gray-600 dark:text-gray-300 hover:text-blue-500">Contact</a>
        </div>

        <!-- Recherche et Profil -->
        <div class="flex items-center space-x-4">
        

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

<!-- Contenu principal -->
<div class="pt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-bold text-gray-800 dark:text-white text-center my-8">Types de Restaurants</h1>

        <!-- Barre de recherche et bouton filtre -->
        <div class="flex justify-between items-center mb-8">
            <form action="/search" method="GET" class="relative w-full max-w-md">
                <input type="text" name="query" placeholder="Rechercher..." 
                       class="px-4 py-2 border rounded-md text-gray-600 dark:text-gray-300 dark:bg-gray-700 w-full">
                <button type="submit" class="absolute right-2 top-2 text-gray-400 hover:text-blue-500">
                    🔍
                </button>
            </form>
            <button class="ml-4 px-4 py-2 bg-blue-500 text-white rounded-lg shadow-lg hover:bg-blue-700 transition" @click="open = !open">
                Filtrer
            </button>
        </div>

        <!-- Logos des types de restaurants -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
            <div class="relative group">
                <img src="{{ asset('images/gasronomique.jpg') }}" alt="Gastronomiques" class="w-full h-32 object-cover rounded-lg shadow-lg">
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-center py-2 opacity-0 group-hover:opacity-100 transition">
                Gastronomiques
                </div>
            </div>
            <div class="relative group">
                <img src="{{ asset('images/fast_food.jpg') }}" alt="Fast-food" class="w-full h-32 object-cover rounded-lg shadow-lg">
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-center py-2 opacity-0 group-hover:opacity-100 transition">
                Fast-food
                </div>
            </div>
            <div class="relative group">
                <img src="{{ asset('images/familiaux.jpg') }}" alt="Familiaux" class="w-full h-32 object-cover rounded-lg shadow-lg">
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-center py-2 opacity-0 group-hover:opacity-100 transition">
                Familiaux
                </div>
            </div>
            <div class="relative group">
                <img src="{{ asset('images/vegetarien.png') }}" alt="végétariens" class="w-full h-32 object-cover rounded-lg shadow-lg">
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-center py-2 opacity-0 group-hover:opacity-100 transition">
                végétariens 
                </div>
            </div>
            <div class="relative group">
                <img src="{{ asset('images/fruits-mer.jpg') }}" alt="fruits de mer" class="w-full h-32 object-cover rounded-lg shadow-lg">
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-center py-2 opacity-0 group-hover:opacity-100 transition">
                fruits de mer
                </div>
            </div>
            <div class="relative group">
                <img src="{{ asset('images/desserts.webp') }}" alt="Desserts" class="w-full h-32 object-cover rounded-lg shadow-lg">
                <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 text-white text-center py-2 opacity-0 group-hover:opacity-100 transition">
                Desserts
                </div>
            </div>
            
            <!-- Ajoutez plus de types de restaurants ici -->
        </div>
    </div>
</div>

</body>
</html>