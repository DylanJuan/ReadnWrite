<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class SortController extends Controller
{
    public function searchItem(Request $request)
    {

        if ($request->search == null) {
            return redirect()->action('HomeController@viewMenu');
        } else {
            $items = Item::where('name', 'like', '%' . $request->search . '%')->get();
            return view('search')->with('items', $items);
        }
    }

    public function stationaryItem($stationary_id)
    {
        $items = Item::where('stationary_id', $stationary_id)->get();
        return view('stationary')->with('items', $items);
    }
}
