<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about'); 
Route::get('/services', [SiteController::class, 'services'])->name('services'); 
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');