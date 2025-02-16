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
<div id="bg_1">
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
    <div id="ti_de">
        <h1 class="text-5xl font-bold">Foodbook</h1>
        <p class="mt-4 text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        <p>Vivamus lacinia odio vitae vestibulum vestibulum.</p>
        <p>Vivamus lacinia odio vitae vestibulum vestibulum.</p>
        
        <!-- Boutons Login et Register -->
        <div class="mt-6">
            <button onclick="showLoginModal()" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">Login</button>
            <a href="{{ route('register') }}" class="ml-4 px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-700">Register</a>
        </div>
    </div>
</div>

<!-- Modal pour choisir le type de connexion -->
<div id="loginModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-lg font-bold mb-4">Se connecter en tant que :</h2>
        <button onclick="redirectToLogin('user')" class="block w-full text-left px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700 mb-2">Utilisateur</button>
        <button onclick="redirectToLogin('admin')" class="block w-full text-left px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-700">Admin</button>
        <button onclick="closeLoginModal()" class="block mt-4 w-full text-center text-gray-600 hover:underline">Annuler</button>
    </div>
</div>

<!-- Section des restaurants -->
<div id="titre_et_description_2">
    <h1 id="ti_2" class="text-5xl font-bold">Foodbook</h1>
    <p class="mt-4 text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
    <p>Vivamus lacinia odio vitae vestibulum vestibulum consectetur adipiscing.</p>
</div>

<script>
    function showLoginModal() {
        document.getElementById('loginModal').classList.remove('hidden');
    }

    function closeLoginModal() {
        document.getElementById('loginModal').classList.add('hidden');
    }

    function redirectToLogin(type) {
    if (type === 'user') {
        window.location.href = "{{ route('login') }}";
    } else if (type === 'admin') {
        window.location.href = "{{ route('admin.login') }}";  // Cette ligne doit rediriger vers la page admin
    }
}
</script>

</body>
</html>
