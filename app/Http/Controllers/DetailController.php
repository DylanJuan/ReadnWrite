<?php

namespace App\Http\Controllers;

use App\Item;

class DetailController extends Controller
{
    public function detail($item_id)
    {
        $detail = Item::where('id', $item_id)->first();
        return view('detail')->with('detail', $detail);
    }
}
