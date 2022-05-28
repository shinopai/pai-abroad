<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreDest;
use App\Models\Dest;
use App\Models\User;
use App\Models\Area;
use App\Models\Study;

class DestController extends Controller
{
    public function create(User $user){
        $areas = Area::all()->pluck('name');
        $studies = Study::all()->pluck('name');

        return view('dests.create', compact('user', 'areas', 'studies'));
    }

    public function store(StoreDest $request, User $user){
      $image = request()->file('image')->getClientOriginalName();
        request()->file('image')->storeAs('public/dests/'.$user->id, $image);

        $user->dests()->create([
          'title' => $request->title,
          'description' => $request->description,
          'price' => $request->price,
          'image' => $image,
          'area_id' => $request->area_id,
          'study_id' => $request->study_id
        ]);

        return redirect('/')->with('flash', '新たな留学先を追加しました');
    }

    public function show(User $user, Dest $dest){
      return view('dests.show', compact('user', 'dest'));
    }
}
