<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;

// Home page
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Us page
Route::view('/about', 'about')->name('about');

// Contacts routes
Route::resource('contacts', ContactController::class);

// Projects routes
Route::resource('projects', ProjectController::class);

// Services routes
Route::resource('services', ServiceController::class);

