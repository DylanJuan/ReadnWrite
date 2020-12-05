@extends('header')

@section('content')

    <div class="container">
        <form action="/editItemPost" method="POST">
            @csrf

            <input type="hidden" name="itemID" value="{{ $items->id }}">
            <input class="form-control my-3  @error('name') is-invalid @enderror" type="text" placeholder="Item Name"
                name="name" value="{{ $items->name }}" id="">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input class="form-control my-3  @error('description') is-invalid @enderror" type="text"
                placeholder="Item Description" name="description" value="{{ $items->description }}" id="">
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input class="form-control my-3  @error('stock') is-invalid @enderror" type="number" placeholder="Item Stock"
                name="stock" value="{{ $items->stock }}" id="">
            @error('stock')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input class="form-control my-3  @error('price') is-invalid @enderror" type="number" placeholder="Item Price"
                name="price" value="{{ $items->price }}" id="">
            @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <button type="submit" class="btn btn-primary">Update Stationary Data</button>

        </form>
    </div>

@endsection
