<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <title>Foodbook</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<!-- Barre de navigation avec arrière-plan -->
<div id="bg_1" >
    <nav>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="/" class="text-lg font-bold" style="color: rgb(233, 185, 56);">Foodbook</a>
    
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

    <!-- Nom de l'application et description -->
    <div id="ti_de" >
        <h1 class="text-5xl font-bold">Foodbook</h1>
        <p class="mt-4 text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        <p>Vivamus lacinia odio vitae vestibulum vestibulum.</p>
        <p>Vivamus lacinia odio vitae vestibulum vestibulum.</p>
         <!-- Boutons Login et Register -->
         <div class="mt-6">
            <a href="{{ route('login') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">Login</a>
            <a href="{{ route('register') }}" class="ml-4 px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-700">Register</a>
        </div>
    </div>
</div>

<!-- Section des restaurants -->
 <div id="titre_et_description_2">

     <h1  id="ti_2" class="text-5xl font-bold">Foodbook</h1>
        <p class="mt-4 text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        <p>Vivamus lacinia odio vitae vestibulum vestibulum consectetur adipiscing.</p>
<!-- From Uiverse.io by gharsh11032000 --> 
<div class="cards-container">
    <div id="fleche">
            <p id="text1">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem animi quas, nam dicta non tempora Vivamus lacinia odio vitae vestibulum vestibulum!</p>
            <img  class="" src="{{ asset('images/curve-arrow.png') }}" alt="Flèche">
    </div>

        <div id = "card1" class="card1">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"></path></svg>
        <div class="card1__content">
            <p class="card1__title">Card Title</p>
            <p class="card1__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
        </div>

       <div id = "card2"  class="card">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"></path></svg>
         <div class="card__content">
           <p class="card__title">Card Title</p>
           <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
         </div>
       </div>

       <div id = "card3"  class="card">
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 5H4V19L13.2923 9.70649C13.6828 9.31595 14.3159 9.31591 14.7065 9.70641L20 15.0104V5ZM2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11Z"></path></svg>
         <div class="card__content">
           <p class="card__title">Card Title</p>
           <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
         </div>
       </div>

 </div>

 </div>
<p>egwvudycyvueywvcuyewc</p>

</body>
</html>
