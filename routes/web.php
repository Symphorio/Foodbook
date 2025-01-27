<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\AdminDashboardController;

// Route pour la page d'accueil
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Routes d'authentification
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Groupes de routes pour les utilisateurs connectés
Route::middleware('auth')->group(function () {
    // Redirection de /profile vers /dashboard
    Route::get('/profile', function () {
        return redirect()->route('dashboard');
    })->name('profile');

    // Afficher la page de profil
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route pour le tableau de bord
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Dashboard utilisateur
    Route::middleware(['role:user'])->get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');

    // Dashboard administrateur
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
    ->middleware(['auth', \App\Http\Middleware\AdminRoleMiddleware::class])  // Utilisation directe de la classe
    ->name('admin.dashboard');

});

// Routes pour les visiteurs
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');
});

Route::get('/restaurants', function () {
    return view('restaurants');
})->name('restaurants');

require __DIR__ . '/auth.php';
