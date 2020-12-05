<?php

namespace App\Http\Controllers;

use App\Stationary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StationaryController extends Controller
{
    public function view()
    {
        $stationary = Stationary::all();
        return view('editStationary')->with('stationary', $stationary);
    }

    public function addStationary()
    {
        $stationary = Stationary::all();
        return view('addStationary')->with('stationary', $stationary);
    }

    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);
        $file = $request->file('image');
        $path = 'img/';
        $file->move($path, $request->image->getClientOriginalName());
        DB::table('stationaries')->insert([
            'name' => $request->name,
            'image' => $request->image->getClientOriginalName()
        ]);
        return redirect()->action('HomeController@viewHome');
    }

    public function updateStationary($stationaryID)
    {
        $stationary = Stationary::where('id', $stationaryID)->first();
        return view('updateStationary')->with('stationary', $stationary);
    }

    public function update(Request $request)
    {
        DB::table('stationaries')->where('id', $request->stationaryID)->update([
            'name' => $request->name,
            'image' => $request->image
        ]);
        return redirect()->action('StationaryController@view');
    }

    public function delete($stationary_id)
    {
        DB::table('items')->where('stationary_id', $stationary_id)->delete();
        DB::table('stationaries')->where('id', $stationary_id)->delete();
        return redirect()->action('StationaryController@view');
    }
}
