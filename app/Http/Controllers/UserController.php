<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showProfile(User $user){
      return view('users.profile', compact('user'));
    }
}
