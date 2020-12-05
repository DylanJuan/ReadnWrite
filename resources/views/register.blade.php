@extends('header')

@section('content')

    <div class="container">
        <div class="card">
            <h5 class="card-header">Register</h5>
            <div class="card-body">
                <form action="/registerPost" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-md-4 mt-2">
                            <p class="text-right">Name</p>
                        </div>
                        <div class="col-md-6 mt-1">
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-4 mt-2">
                            <p class="text-right">E-Mail Address</p>
                        </div>
                        <div class="col-md-6 mt-1">
                            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email"
                                id="">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-4 mt-2">
                            <p class="text-right">Password</p>
                        </div>
                        <div class="col-md-6 mt-1">
                            <input class="form-control @error('password') is-invalid @enderror" type="password"
                                name="password" id="">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-4 mt-2">
                            <p class="text-right">Confirm Password</p>
                        </div>
                        <div class="col-md-6 mt-1">
                            <input class="form-control @error('confirm') is-invalid @enderror" type="password"
                                name="confirm" id="">
                            @error('confirm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-4 mt-2">

                        </div>
                        <div class="col-md-6">
                            <input class="btn btn-primary mt-1" type="submit" name="submit" value="Register" id="">
                        </div>


                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
