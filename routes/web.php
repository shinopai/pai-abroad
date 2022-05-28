<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DestController;

// LP
Route::get('/paiabroad', function () {
    return view('/paiabroad');
});

// root
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// search
Route::get('/search', [HomeController::class, 'search'])->name('home.search');

// user
Route::get('/users/{user}/profile', [UserController::class, 'showProfile'])->name('users.profile');

// dest
Route::resource('users.dests', DestController::class);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
