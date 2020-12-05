@extends('header')

@section('content')

    <div class="container">
        <div class="card">
            <h5 class="card-header">Login</h5>
            <div class="card-body">
                <form action="/loginPost" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-md-4 mt-1">
                            <p class="text-right">E-Mail Address</p>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="email" name="email" id="">
                        </div>

                        <div class="col-md-4 mt-1">
                            <p class="text-right">Password</p>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="password" name="password" id="">
                        </div>

                        <div class="col-md-4 mt-1">

                        </div>
                        <div class="col-md-6">
                            <input class="custom-checkbox" type="checkbox" name="RememberMe" id=""> Remember Me
                        </div>

                        <div class="col-md-4 mt-1">

                        </div>
                        <div class="col-md-6">
                            <input class="btn btn-primary mt-3" type="submit" name="submit" value="Login" id="">
                        </div>


                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
