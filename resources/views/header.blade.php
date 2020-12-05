<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/public.css') }}">

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
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/menu">ReadAndWrite</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <form class="form-inline" method="GET" action="/search">
                            @csrf
                            <input name="search" class="form-control" type="search" placeholder="Search"
                                aria-label="Search">
                            <input class="btn btn-primary ml-2" type="submit" value="Search">
                        </form>
                        <li class="nav-item ml-1">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        <li class="nav-item ml-1">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                    </ul>

                </div>
            </div>

        </nav>
    @else

        @if (auth()->user()->role == 'Member')
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="/menu">ReadAndWrite</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <form class="form-inline" method="GET" action="/search">
                                @csrf
                                <input class="form-control ml-2" name="search" type="search" placeholder="Search"
                                    aria-label="Search">
                                <input class="btn btn-primary ml-2" type="submit" value="Search">
                            </form>
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
                                <a class="nav-link  btn btn-primary text-white" href="/cart">Cart</a>
                            </li>
                            <li class="nav-item mx-1">
                                <a class="nav-link btn btn-primary text-white" href="/transactionHistory">History</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </nav>
        @endif

        @if (auth()->user()->role == 'Admin')
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="/menu">ReadAndWrite</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <form class="form-inline" method="GET" action="/search">
                                @csrf
                                <input name="search" class="form-control ml-2" type="search" placeholder="Search"
                                    aria-label="Search">
                                <input class="btn btn-primary ml-2" type="submit" value="Search">
                            </form>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Admin
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/logout">Logout</a>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>

            </nav>
        @endif

    @endguest


    <div class="bodyBackground" style="padding-top: 5rem">
        @yield('content')
    </div>

</body>

</html>
