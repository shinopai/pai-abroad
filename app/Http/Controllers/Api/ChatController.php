<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\User;

class ChatController extends Controller
{
    public function checkRoomExists(Request $request){
      $res = Room::where('partner_id', $request->partner_id)->where('user_id', $request->user_id)->get();

      return $res;
    }

    public function createRoom(Request $request, User $user){
      $res = $user->rooms()->create([
          'partner_id' => $request->partner_id
      ]);

      return $res->id;
    }

    public function getRoomData(Request $request){
      $res = Room::find($request->room_id);
      $partner = User::find($res->partner_id);
      $res->load('user', 'messages');

      return [$res, $partner];
    }
}
