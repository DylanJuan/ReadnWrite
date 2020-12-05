@extends('header')

@section('content')

    @guest

        <div class="container bg-white rounded shadow">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-fluid rounded-lg p-2" src="{{ asset("img/$detail->image") }}" alt="">
                </div>
                <div class="col-md-8 my-2">
                    <h4>{{ $detail->name }}</h4>
                    <p>Price: Rp. {{ $detail->price }}</p>
                    <p>Stock: {{ $detail->stock }} Barang</p>
                    <p>Stationary Type: <a href="/stationary/{{ $detail->stationary_id }}">{{ $detail->stationary->name }}</a>
                    </p>
                    <p>Description: {{ $detail->description }}</p>

                    <form class="form-row" action="">
                        <input class="form-control w-25 mr-2 disabled" type="number" name="quantity" id="">
                        <button class="btn btn-dark disabled">Add to Cart</button>
                        <p class="text-danger">You must login first!</p>
                    </form>
                </div>
            </div>
        </div>

    @else

        @if (auth()->user()->role == 'Member')
            <div class="container bg-white rounded shadow">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-fluid rounded-lg p-2" src="{{ asset("img/$detail->image") }}" alt="">
                    </div>
                    <div class="col-md-8 my-2">
                        <h4>{{ $detail->name }}</h4>
                        <p>Price: Rp. {{ $detail->price }}</p>
                        <p>Stock: {{ $detail->stock }} Barang</p>
                        <p>Stationary Type: <a
                                href="/stationary/{{ $detail->stationary_id }}">{{ $detail->stationary->name }}</a></p>
                        <p>Description: {{ $detail->description }}</p>

                        <form class="form-row" method="POST" action="/addToCart/{{ $detail->id }}">
                            @csrf
                            <input class="form-control w-25 mr-2" type="number" name="quantity" id="">
                            <button type="submit" class="btn btn-dark">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        @endif

        @if (auth()->user()->role == 'Admin')
            <div class="container bg-white rounded shadow">
                <div class="row">
                    <div class="col-md-4">
                        <img class="img-fluid rounded-lg p-2" src="{{ asset("img/$detail->image") }}" alt="">
                    </div>
                    <div class="col-md-8 my-2">
                        <h4>{{ $detail->name }}</h4>
                        <p>Price: Rp. {{ $detail->price }}</p>
                        <p>Stock: {{ $detail->stock }} Barang</p>
                        <p>Stationary Type: <a
                                href="/stationary/{{ $detail->stationary_id }}">{{ $detail->stationary->name }}</a></p>
                        <p>Description: {{ $detail->description }}</p>

                        <div class="row">
                            <a class="btn btn-danger mx-1" href="/deleteItem/{{ $detail->id }}">Delete</a>
                            <a class="btn btn-primary mx-1" href="/editItem/{{ $detail->id }}">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    @endguest



@endsection
