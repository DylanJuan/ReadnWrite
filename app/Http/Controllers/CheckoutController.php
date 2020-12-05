<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Item;
use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class CheckoutController extends Controller
{

    public function cart()
    {
        $userID = Auth::user()->id;
        $carts = Cart::where('user_id', $userID)->get();
        $items = [];
        foreach ($carts as $cart) {
            $item = Item::where('id', $cart->item_id)->first();
            array_push($items, [
                'cartID' => $cart->id,
                'itemID' => $item->id,
                'name' => $item->name,
                'price' => $item->price,
                'quantity' => $cart->quantity
            ]);
        }
        return view('cart')->with('items', $items);
    }

    public function addToCart(Request $request, $item_id)
    {
        $userID = Auth::user()->id;
        DB::table('carts')->insert([
            'user_id' => $userID,
            'item_id' => $item_id,
            'quantity' => $request->quantity
        ]);
        return redirect()->action('HomeController@viewMenu');
    }

    public function updateCart($item_id)
    {
        $detail = Item::where('id', $item_id)->first();
        return view('updateCart')->with('detail', $detail);
    }

    public function updatedCart(Request $request, $item_id)
    {
        DB::table('carts')->where('item_id', $item_id)->update([
            'quantity' => $request->quantity
        ]);
        return redirect()->action('CheckoutController@cart');
    }

    public function deleteCart($item_id)
    {
        DB::table('carts')->where('id', $item_id)->delete();
        return redirect()->action('CheckoutController@cart');
    }

    public function checkout()
    {
        $userID = Auth::user()->id;
        $date = Carbon::now();
        DB::table('transactions')->insert([
            'user_id' => $userID,
            'transactionDate' => $date
        ]);
        $transactions = Transaction::where('user_id', $userID)->get()->last();
        $carts = Cart::where('user_id', $userID)->get();
        foreach ($carts as $cart) {
            DB::table('transactionDetails')->insert([
                'transaction_id' => $transactions->id,
                'item_id' => $cart->item_id,
                'quantity' => $cart->quantity
            ]);
        }
        Cart::truncate();
        return redirect()->action('HomeController@viewMenu');
    }
}
