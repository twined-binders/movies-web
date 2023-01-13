@extends('template')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Detail</title>
    @section('style')
      body {
        background-color: #484848;
      }
    @endsection
</head>
@section('main')
<body>
    <div class="container" style="margin-top: 50px">
      
        <!-- Portfolio Item Row -->
        <div class="row">
      
          <div class="col-md-4">
            <img class="img-thumbnail" src="{{ asset($film->path) }}" style="height: 500px">
          </div>
      
          <div class="col-md-8 text-white">
            <h2 class="my-3">{{$film->judul}}</h3>
            <p>{{$film->sinopsis}}</p>
            <h5 class="my-3">Harga</h5>
            <p>Rp. {{$film->harga}}</p>
              <hr class="md">
            <div class="col-md-3">
              <a href="{{ route('checkout.show',$film->id) }}" class="btn btn-success">Checkout</a>
            </div>
          </div>
      
        </div>
        <!-- /.row -->
      
      </div>
</body>
@endsection
</html>