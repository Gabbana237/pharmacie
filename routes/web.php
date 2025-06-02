<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicamentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;

Route::middleware(['web', 'auth.custom'])->group(function () {
    Route::post('/order/{medicament}', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/commande/{id}', [OrderController::class, 'show'])->name('orders.show'); 
    Route::get('/mes-commandes', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/commande/{id}/facture', [OrderController::class, 'generateInvoice'])->name('orders.invoice');

});

Route::middleware(['web'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth.custom'])->group(function () {
    Route::get('/medicaments', [MedicamentController::class, 'index'])->name('medicaments.index');
    Route::get('/medicaments/create', [MedicamentController::class, 'create'])->name('medicaments.create');
    Route::post('/medicaments', [MedicamentController::class, 'store'])->name('medicaments.store');
    Route::get('/medicaments/{id}', [MedicamentController::class, 'show'])->name('medicaments.show');
    Route::get('/medicaments/{id}/edit', [MedicamentController::class, 'edit'])->name('medicaments.edit');
    Route::put('/medicaments/{id}', [MedicamentController::class, 'update'])->name('medicaments.update');
    Route::delete('/medicaments/{id}', [MedicamentController::class, 'destroy'])->name('medicaments.destroy');

      Route::get('/user', [UserController::class, 'show'])->name('users.show');
        Route::get('/user/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::post('/user/update', [UserController::class, 'update'])->name('users.update');
        Route::delete('/user/delete', [UserController::class, 'destroy'])->name('users.destroy');

});
});
Route::get('/', function () {
    return redirect()->route('medicaments.index');
});
