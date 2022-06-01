<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ChatController;
use App\Http\Controllers\Api\MessageController;

// check if room is exists
Route::get('/rooms/check', [ChatController::class, 'checkRoomExists'])->middleware('api');

// create chat room
Route::post('/users/{user}/{partner}/rooms/create', [ChatController::class, 'createRoom'])->middleware('api');

// get room data
Route::get('/room/data', [ChatController::class, 'getRoomData'])->middleware('api');

// write new message
Route::post('/rooms/{room}/users/{user}/write', [MessageController::class, 'writeMessage'])->middleware('api');
