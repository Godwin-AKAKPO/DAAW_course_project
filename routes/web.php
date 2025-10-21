<?php

use Illuminate\Database\Schema\IndexDefinition;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/acceuil', [HomeController::class, 'index'])->name("acceuil");
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact',  [ContactController::class,'store'])->name('contact_store');
Route::get('/liste_contact',[ContactController::class, 'liste_contact']);
Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact_destroy');