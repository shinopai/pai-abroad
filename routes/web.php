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

Route::get('/users/{user}/dests', [UserController::class, 'showDests'])->name('users.dests');

Route::get('/users/{user}/rooms', [UserController::class, 'showRooms'])->name('users.rooms');

// dest
Route::resource('users.dests', DestController::class, ['except' => 'index']);

// routing for vue
Route::get('/rooms/{any}', function(){
    return view('vue-base');
})->where('any', '.*');

require __DIR__.'/auth.php';

// measures for mixed content
if (config('app.env') === 'production' or config('app.env') === 'heroku') {
    URL::forceScheme('https');
}
