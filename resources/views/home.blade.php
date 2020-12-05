<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <title>Read n Write</title>
</head>

<body>

    @guest

        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
            </div>
        </nav>

        <div class="container" style="margin-top: 12rem">
            <h1 class="display-3 text-center">ReadAndWrite</h1>

            <form method="GET" action="/search">
                @csrf
                <div class="form-group">
                    <input type="search" name="search" class="form-control" placeholder="Search for stationary">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>

            <div class="row mt-5">

                @foreach ($stationary as $item)
                    <div class="col-md-3">
                        <a href="/stationary/{{ $item->id }}"><img class="img img-fluid"
                                src="{{ asset("img/$item->image") }}" alt=""></a>
                    </div>
                @endforeach


            </div>


        </div>

    @else

        @if (auth()->user()->role == 'Member')
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Member
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/logout">Logout</a>
                            </div>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link " href="#">Cart</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" href="#">History</a>
                        </li>
                </div>
            </nav>

            <div class="container" style="margin-top: 12rem">
                <h1 class="display-3 text-center">ReadAndWrite</h1>

                <form method="GET" action="/search">
                    @csrf
                    <div class="form-group">
                        <input name="search" type="search" class="form-control" placeholder="Search for stationary">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>

                <div class="row mt-5">

                    @foreach ($stationary as $item)
                        <div class="col-md-3">
                            <a href="/stationary/{{ $item->id }}"><img class="img img-fluid"
                                    src="{{ asset("img/$item->image") }}" alt=""></a>
                        </div>
                    @endforeach


                </div>


            </div>
        @endif

        @if (auth()->user()->role == 'Admin')
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Admin
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/logout">Logout</a>
                            </div>
                        </li>
                </div>
            </nav>

            <div class="container" style="margin-top: 12rem">
                <h1 class="display-3 text-center">ReadAndWrite</h1>

                <form method="GET" action="/search">
                    @csrf
                    <div class="form-group">
                        <input name="search" type="search" class="form-control" placeholder="Search for stationary">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </form>

                <div class="row mt-5">

                    @foreach ($stationary as $item)
                        <div class="col-md-3">
                            <a href="/stationary/{{ $item->id }}"><img class="img img-fluid"
                                    src="{{ asset("img/$item->image") }}" alt=""></a>
                        </div>
                    @endforeach



                </div>

            </div>
        @endif

    @endguest





</body>

</html>
