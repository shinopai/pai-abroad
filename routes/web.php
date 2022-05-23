<?php

use Illuminate\Support\Facades\Route;

// LP
Route::get('/paiabroad', function () {
    return view('/paiabroad');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
