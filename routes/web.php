<?php

use Illuminate\Database\Schema\IndexDefinition;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/acceuil', [HomeController::class, 'index'])->name("acceuil");
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact',  [ContactController::class,'store'])->name('contact_store');
Route::get('/liste_contact',[ContactController::class, 'liste_contact']);
Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact_destroy');
Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contact_edit');
Route::put('/contact/{id}', [ContactController::class,'update'])->name('contact_update');

// Routes publiques
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Routes protégées
Route::middleware('auth')->group(function () {
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
