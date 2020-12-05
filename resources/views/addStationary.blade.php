@extends('header')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <table class="table table-bordered table-light shadow rounded">
                    <thead>
                        <tr>
                            <th class="text-center" scope="col">No.</th>
                            <th class="text-center" scope="col">Stationary Type Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $number = 0; ?>
                        @foreach ($stationary as $item)

                            <?php $number++; ?>

                            <tr>
                                <th class="text-center">{{ $number }}</th>
                                <td class="text-center">{{ $item->name }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="col-md-7">
                <form action="/addStationaryPost" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="my-2">
                        <strong>Browse Photos:</strong> <input class="@error('image') is-invalid @enderror" type="file"
                            name="image" id="">
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <input class="my-2 form-control @error('name') is-invalid @enderror" type="text" name="name"
                        placeholder="Stationary Type">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <button type="submit" class="my-2 btn btn-primary">Add New Stationary Type</button>
                </form>
            </div>
        </div>
    </div>

@endsection
