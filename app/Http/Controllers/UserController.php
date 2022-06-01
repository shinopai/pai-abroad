<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showProfile(User $user){
      return view('users.profile', compact('user'));
    }

    public function showDests(User $user){
      return view('users.dests', compact('user'));
    }

    public function showRooms(User $user){
      return view('users.rooms', compact('user'));
    }
}
