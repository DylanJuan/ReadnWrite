<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use App\Transaction;
use App\Transactiondetail;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function view()
    {

        // $userID = Auth::user()->id;
        // $transactions = Transaction::where('user_id',$userID)->get();
        // dd($transactions);
        // $detail = Transactiondetail::where('transaction_id',$transactions)->first();
        // $items =[];
        // foreach($items as $item){
        //     $item = Item::where('id',$item->item_id)->first();
        //     array_push($items,[
        //         'name'=>$item->name,
        //         'price'=>$item->price,
        //         'quantity'=>$detail->quantity
        //     ]);
        // }


        return view('transactionHistory');
    }
}
