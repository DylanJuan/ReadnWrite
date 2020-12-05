<?php

namespace App\Http\Controllers;

use App\Item;
use App\Stationary;


class HomeController extends Controller
{
    public function viewHome()
    {
        $stationary = Stationary::all();
        return view('home')->with('stationary', $stationary);
    }

    public function viewMenu()
    {
        $items = Item::paginate(6);
        return view('menu')->with('items', $items);
    }
}
