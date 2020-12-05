@extends('header')

@section('content')
    <div class="container">
        <table class="table table-bordered table-light shadow rounded">
            <thead>
                <tr>
                    <th class="text-center" scope="col">No.</th>
                    <th class="text-center" scope="col">Stationary Type Name</th>
                    <th class="text-center" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $number = 0; ?>
                @foreach ($stationary as $item)
                    <?php $number++; ?>
                    <tr>
                        <th class="text-center">{{ $number }}</th>
                        <td class="text-center">{{ $item->name }}</td>
                        <td class="text-center">
                            <div class="text-center">
                                <a href="/updateStationary/{{ $item->id }}" class="btn btn-primary mx-2 w-25">Update</a>
                                <a href="/deleteStationary/{{ $item->id }}" class="btn btn-danger mx-2 w-25">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
