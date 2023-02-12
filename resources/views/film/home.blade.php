@extends('template')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
    @section('style')
      body {
        background-color: #484848;
      }
    @endsection

</head>
@section('main')
<body>
    {{-- <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark shadow-lg">
        <div class="container-fluid">
          
            <a class="navbar-brand d-inline-block align-text-middle" href="#"><img src="{{ asset('assets/img/Bootstrap_logo.png') }}" alt="logo" height="30">  Bontol</a>
                <div class="navbar-nav d-flex">
                    <a class="nav-link" aria-current="page" href="#">Home</a> 
                    <a class="nav-link" aria-current="page" href="{{ url('film/trending') }}">Trending</a> 
                    <a class="nav-link" aria-current="page" href="{{ url('film/checkout') }}">Checkout</a> 
                    <a class="nav-link" aria-current="page" href="{{ url('film/about') }}">About</a> 
                </div>
        </div>
    </nav> --}}
    
      <div class="album py-5">
        <div class="container"> 
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
           @forelse ($films as $film)   
            <div class="col-lg-4">
              <div class="card shadow">
                <a href="{{ route('film.show', $film->id) }}" style="text-decoration: none; color: black">
                <img src="{{ asset($film->path) }}" class="img-thumbnail" style="height: 10%">
    
                {{-- <div class="card-body">
                  <p class="card-text">{{$film->sinopsis}}</p>
                </div> --}}
                </a>
              </div>
            </div>
           @empty
            <div>
               <p>error</p>
            </div>     
           @endforelse 
          </div>
        </div>
      </div>
</body>
@endsection
</html>