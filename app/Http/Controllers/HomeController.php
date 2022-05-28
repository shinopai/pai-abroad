<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Study;
use App\Models\Dest;

class HomeController extends Controller
{
    public function index(){
        $areas = Area::all()->pluck('name');
        $studies = Study::all()->pluck('name');
        $dests = Dest::latest()->get();

        return view('home.index', compact('areas', 'studies', 'dests'));
    }

    public function search(Request $request){
        $areas = Area::all()->pluck('name');
        $studies = Study::all()->pluck('name');

        $query = Dest::query();

        if($request->filled('price')){
          switch ($request->price) {
              case '1':
                  $query->whereBetween('price', [0, 298]);
                  break;
              case '2':
                  $query->whereBetween('price', [299, 598]);
                  break;
              case '3':
                  $query->whereBetween('price', [599, 898]);
                  break;
              case '4':
                  $query->whereBetween('price', [899, 1198]);
                  break;
              case '5':
                  $query->whereBetween('price', [1199, 1498]);
                  break;
              case '6':
                  $query->whereBetween('price', [1499, 1799]);
                  break;
              case '7':
                  $query->where('price', '>=', 1800);
                  break;
          }
        }

        if($request->filled('area')){
            $query->where('area_id', $request->area);
        }

        if($request->filled('study')){
            $query->where('study_id', $request->study);
        }

        $dests = $query->get();

        return view('home.search', compact('dests', 'areas', 'studies'));
    }
}
