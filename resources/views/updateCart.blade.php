@extends('header')

@section('content')

    <div class="container bg-white rounded shadow">
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid rounded-lg p-2" src="{{ asset("img/$detail->image") }}" alt="">
            </div>
            <div class="col-md-8 my-2">
                <h4>{{ $detail->name }}</h4>
                <p>Price: Rp. {{ $detail->price }}</p>
                <p>Stock: {{ $detail->stock }} Barang</p>
                <p>Stationary Type: {{ $detail->stationary->name }}</p>
                <p>Description: {{ $detail->description }}</p>

                <form class="form-row" method="POST" action="/updateCartPost/{{ $detail->id }}">
                    @csrf
                    <input class="form-control w-25 mr-2" type="number" name="quantity" id="">
                    <button type="submit" class="btn btn-dark">Update Cart</button>
                </form>
            </div>
        </div>
    </div>

@endsection
