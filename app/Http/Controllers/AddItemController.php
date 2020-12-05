<?php

namespace App\Http\Controllers;

use App\Item;
use App\Stationary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddItemController extends Controller
{
    public function view()
    {
        $stationary = Stationary::all();
        return view('addItem')->with('stationary', $stationary);
    }

    public function addItem(Request $request)
    {
        $request->validate([
            'types' => 'required',
            'name' => 'required|min:5',
            'stock' => 'required|numeric|min:1',
            'price' => 'required|numeric|min:5000',
            'description' => 'required|min:10',
            'image' => 'required|mimes:jpg,jpeg,png'
        ]);
        $file = $request->file('image');
        $path = 'img/';
        $file->move($path, $request->image->getClientOriginalName());
        DB::table('items')->insert([
            'stationary_id' => $request->types,
            'name' => $request->name,
            'stock' => $request->stock,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $request->image->getClientOriginalName()
        ]);
        return redirect()->action('HomeController@viewMenu');
    }

    public function edit($item_id)
    {
        $items = Item::where('id', $item_id)->first();
        return view('editItem')->with('items', $items);
    }

    public function editItem(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'stock' => 'required|numeric|min:1',
            'price' => 'required|numeric|min:5000',
            'description' => 'required|min:10',
        ]);
        DB::table('items')->where('id', $request->itemID)->update([
            'name' => $request->name,
            'description' => $request->description,
            'stock' => $request->stock,
            'price' => $request->price
        ]);
        return redirect()->action('HomeController@viewMenu');
    }

    public function deleteItem($item_id)
    {
        DB::table('items')->where('id', $item_id)->delete();
        return redirect()->action('HomeController@viewMenu');
    }
}
