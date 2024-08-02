<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
// Home page
Route::get('/', [HomeController::class, 'home'])->name('index');


// About Us page
Route::view('/about', 'about')->name('about');

// Contacts routes
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');

// Projects routes
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');

// Services routes
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');

// Auth routes
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin routes
Route::get('/admin', [DashboardController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/admin/contacts', [ContactController::class, 'admin'])->name('admin.contacts')->middleware('admin');

// admin projects routes
Route::get('/admin/projects', [ProjectController::class, 'admin'])->name('admin.projects')->middleware('admin');
Route::get('/admin/projects/create', [ProjectController::class, 'create'])->name('admin.projects.create')->middleware('admin');
Route::post('/admin/projects', [ProjectController::class, 'store'])->name('admin.projects.store')->middleware('admin');
Route::get('/admin/projects/{id}/edit', [ProjectController::class, 'edit'])->name('admin.projects.edit')->middleware('admin');
Route::put('/admin/projects/{id}', [ProjectController::class, 'update'])->name('admin.projects.update')->middleware('admin');
Route::delete('/admin/projects/{id}', [ProjectController::class, 'destroy'])->name('admin.projects.destroy')->middleware('admin');

// admin services routes
Route::get('/admin/services', [ServiceController::class, 'admin'])->name('admin.services')->middleware('admin');
Route::get('/admin/services/create', [ServiceController::class, 'create'])->name('admin.services.create')->middleware('admin');
Route::post('/admin/services', [ServiceController::class, 'store'])->name('admin.services.store')->middleware('admin');
Route::get('/admin/services/{id}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit')->middleware('admin');
Route::put('/admin/services/{id}', [ServiceController::class, 'update'])->name('admin.services.update')->middleware('admin');
Route::delete('/admin/services/{id}', [ServiceController::class, 'destroy'])->name('admin.services.destroy')->middleware('admin');