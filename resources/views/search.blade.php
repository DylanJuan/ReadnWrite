@extends('header')

@section('content')

    @guest
        <div class="container">
            <div class="row">
                @if ($items)
                    @foreach ($items as $item)
                        <div class="col-md-4">
                            <div class="card my-3" style="min-height: 30rem">
                                <img src="{{ asset("img/$item->image") }}" class="card-img-top">
                                <div class="card-body">
                                    <a href="/itemDetail/{{ $item->id }}">
                                        <h5 class="card-title">{{ $item->name }}</h5>
                                    </a>
                                    <p class="card-text text-justify">{{ $item->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>Item does not exist</p>
                @endif
            </div>
        </div>
    @else

        @if (auth()->user()->role == 'Member')
            <div class="container">
                <div class="row">
                    @if ($items)
                        @foreach ($items as $item)
                            <div class="col-md-4">
                                <div class="card my-3" style="min-height: 30rem">
                                    <img src="{{ asset("img/$item->image") }}" class="card-img-top">
                                    <div class="card-body">
                                        <a href="/itemDetail/{{ $item->id }}">
                                            <h5 class="card-title">{{ $item->name }}</h5>
                                        </a>
                                        <p class="card-text text-justify">{{ $item->description }}</p>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    @else
                        <p>Item does not exist</p>
                    @endif
                </div>
            </div>
        @endif

        @if (auth()->user()->role == 'Admin')
            <div class="container">
                <a class="btn btn-primary mx-1" href="/addItem">Add New Stationary</a>
                <a class="btn btn-primary mx-1" href="/addStationary">Add New Stationary Type</a>
                <a class="btn btn-primary mx-1" href="/editStationary">Edit Stationary Stationary Type</a>
                <div class="row">
                    @if ($items)
                        @foreach ($items as $item)
                            <div class="col-md-4">
                                <div class="card my-3" style="min-height: 30rem">
                                    <img src="{{ asset("img/$item->image") }}" class="card-img-top">
                                    <div class="card-body">
                                        <a href="/itemDetail/{{ $item->id }}">
                                            <h5 class="card-title">{{ $item->name }}</h5>
                                        </a>
                                        <p class="card-text text-justify">{{ $item->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>Item does not exist</p>
                    @endif
                </div>
            </div>
        @endif
    @endguest




@endsection
