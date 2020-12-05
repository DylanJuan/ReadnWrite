@extends('header')

@section('content')

    <div class="container">

        @if ($items)
            @foreach ($items as $item)
                <div class="col-md-12 p-4 bg-white my-2">
                    <h4>Stationary Name: {{ $item['name'] }} </h4>
                    <ul class="my-4">
                        <li>
                            <p>Stationary Price: Rp.{{ $item['price'] }}</p>
                        </li>
                        <li>
                            <p>Quantity: {{ $item['quantity'] }}</p>
                        </li>
                    </ul>
                    <?php $totalHarga = $item['quantity'] * $item['price']; ?>
                    <hr>
                    <h6>Total: Rp.{{ $totalHarga }}</h6>
                    <div class="text-right">
                        <a class="btn btn-primary" href="/updateCart/{{ $item['itemID'] }}">Edit Item</a>
                        <a class="btn btn-danger" href="/deleteCart/{{ $item['cartID'] }}">Delete Item</a>
                    </div>
                </div>
            @endforeach

            <form method="post" action="/checkout">
                @csrf
                <button class="btn btn-danger my-2">Checkout</button>
            </form>

        @else

            <h3>Do Some Transaction to see your products in cart</h3>

        @endif




    </div>

@endsection
