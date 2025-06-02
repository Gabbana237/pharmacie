<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/factures', function () {
    return view('invoice');
});



Route::get('/medicament', function () {
    return view('pages.medicament.create');
})->name("medicam");

Route::get('/inde-med', function () {
    return view('pages.medicament.index');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name("dashboad");

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");


Route::post('/contact/envoyer', [ContactController::class, 'envoyer'])->name('contact.envoyer');