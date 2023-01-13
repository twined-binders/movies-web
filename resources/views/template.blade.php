<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Film</title>
    <style>
        @yield('style');
    </style>
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-inline-block align-text-middle" href="{{ url('film/home') }}"><img src="{{ asset('assets/img/Bootstrap_logo.png') }}" alt="logo" height="30">  Bontol</a>
            <div class="navbar-nav d-flex">
                <a class="nav-link" aria-current="page" href="{{ url('film/home') }}">Home</a>
                <a class="nav-link" aria-current="page" href="{{ url('film/trending') }}">Trending</a>
                <a class="nav-link" aria-current="page" href="{{ url('film') }}">CRUD</a>
                <a class="nav-link" aria-current="page" href="{{ url('film/about') }}">About</a>
            </div>
        </div>
    </nav>


    @yield('main')

    {{-- Footer --}}
    <footer class="d-flex shadow flex-wrap justify-content-between align-items-center py-3 my-4 border-top container container-fluid mx-auto rounded " style="background-color: #fcfcfc">
        <div class="col-lg-8 d-flex align-items-center">
            <a href="{{ url('film/home') }}" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
            Bontol
            </a>
            <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Kelompok 2</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            {{-- <li class="mx-1">Fahmi</li>
            <li class="mx-1">Firsta</li>
            <li class="mx-1">Indra</li>
            <li class="mx-1">Elda</li> --}}
            <li class="mx-1"><img src="{{ asset('assets/img/footer/fahmi.gif')}}" width="50px" height="50px"></li>
            <li class="mx-1"><img src="{{ asset('assets/img/footer/firsta.gif')}}" width="50px" height="50px"></li>
            <li class="mx-1"><img src="{{ asset('assets/img/footer/indra.gif')}}" width="50px" height="50px"></li>
            <li class="mx-1"><img src="{{ asset('assets/img/footer/elda.gif')}}" width="50px" height="50px"></li>
        </ul>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
