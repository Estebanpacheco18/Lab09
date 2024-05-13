<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
//Controlador de eventos
use App\Http\Controllers\EventController;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about'); 
Route::get('/services', [SiteController::class, 'services'])->name('services'); 
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
// Nuevo
Route::post('/contact', [SiteController::class, 'handleContact'])->name('contact.submit');
//Tarea
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);