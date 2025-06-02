<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicamentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

// Authentification (routes publiques)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Accueil public
Route::get('/', [HomeController::class, 'index'])->name('accueil.client');

// Routes accessibles uniquement après authentification
Route::middleware(['auth'])->group(function () {

    // Pour les utilisateurs simples
    Route::get('/dashboard', fn () => view('pages.dashboard'))->name('dashboard');
    Route::get('/factures', fn () => view('invoice'));
    Route::get('/user', [UserController::class, 'show'])->name('users.show');
    Route::get('/user/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/user/update', [UserController::class, 'update'])->name('users.update');
    Route::delete('/user/delete', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/commande/{id}', [OrderController::class, 'show'])->name('orders.show');
    Route::get('/mes-commandes', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/commande/{id}/facture', [OrderController::class, 'generateInvoice'])->name('orders.invoice');
    Route::post('/order/{medicament}', [OrderController::class, 'store'])->name('orders.store');

    // Pour l'admin uniquement
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin', [MedicamentController::class, 'index'])->name('medicaments.index');
        Route::get('/medicaments/create', [MedicamentController::class, 'create'])->name('medicaments.create');
        Route::post('/medicaments', [MedicamentController::class, 'store'])->name('medicaments.store');
        Route::get('/medicaments/{id}', [MedicamentController::class, 'show'])->name('medicaments.show');
        Route::get('/medicaments/{id}/edit', [MedicamentController::class, 'edit'])->name('medicaments.edit');
        Route::put('/medicaments/{id}', [MedicamentController::class, 'update'])->name('medicaments.update');
        Route::delete('/medicaments/{id}', [MedicamentController::class, 'destroy'])->name('medicaments.destroy');
        Route::get('/admin/orders', [OrderController::class, 'allOrders'])->name('admin.orders.index');
        Route::get('/medicament', fn () => view('pages.medicament.create'))->name('medicam');
        Route::get('/inde-med', fn () => view('pages.medicament.index'));
        Route::get('/commandes',[OrderController::class,'index'])->name('orders.indexe');
    });
});

