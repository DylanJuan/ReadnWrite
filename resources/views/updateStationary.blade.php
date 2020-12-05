@extends('header')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="img img-fluid" src="{{ asset("img/$stationary->image") }}" alt="">
            </div>
            <div class="col-md-7">
                <form action="/update" method="POST">
                    @csrf
                    <input name="stationaryID" type="hidden" value="{{ $stationary->id }}">
                    <label for="name">Stationary Type Name:</label>
                    <input class="my-1 form-control" type="text" name="name" id="">
                    <label for="name">Stationary Type Image:</label>
                    <input class="my-2" type="file" name="image" id="">

                    <button class="btn btn-primary" type="submit">Edit Type</button>
                </form>
            </div>
        </div>
    </div>

@endsection
