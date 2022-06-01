<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMessage;
use App\Models\Room;
use App\Models\User;

class MessageController extends Controller
{
    public function writeMessage(StoreMessage $request, Room $room, User $user){
        $room->messages()->create([
            'content' => $request->content,
            'user_id' => $user->id
        ]);
    }
}
