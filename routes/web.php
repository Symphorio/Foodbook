<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\AdminDashboardController;

// Route pour la page d'accueil
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Groupes de routes pour les utilisateurs connectés
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Dashboard utilisateur
    Route::middleware(['role:user'])->get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');

    // Dashboard administrateur
    Route::middleware(['role:admin'])->get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});

// Routes pour les visiteurs
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');
    Route::get('/login', [AuthController::class, 'create'])->name('login');
    Route::post('/login', [AuthController::class, 'store'])->name('login.store');
});

require __DIR__ . '/auth.php';
