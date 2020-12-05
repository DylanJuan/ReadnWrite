@extends('header')

@section('content')

    <div class="container">

        <form action="/addItemPost" method="post" enctype="multipart/form-data">
            @csrf
            <strong>Browse Photos:</strong> <input placeholder="Item Name" class="my-3 @error('image') is-invalid @enderror"
                type="file" name="image" id="">
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input placeholder="Item Name" class="form-control my-3 @error('name') is-invalid @enderror" type="text"
                name="name" id="">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input placeholder="Item Description" class="form-control my-3 @error('description') is-invalid @enderror"
                type="text" name="description" id="">
            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">Types</div>
                </div>
                <select class="form-control @error('types') is-invalid @enderror" name="types" id="">
                    @foreach ($stationary as $stationary)
                        <option value="{{ $stationary->id }}">{{ $stationary->name }}</option>
                    @endforeach
                    @error('types')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </select>
            </div>

            <input placeholder="Item Stock" class="form-control my-3 @error('stock') is-invalid @enderror" type="number"
                name="stock" id="">
            @error('stock')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">Rp.</div>
                </div>
                <input class="form-control @error('price') is-invalid @enderror" type="number" name="price" id="">
                @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button class="btn btn-primary my-3" type="submit">Add New Stationary</button>
        </form>

    </div>

@endsection
