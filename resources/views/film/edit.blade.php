@extends('template')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Film</title>
</head>
@section('main')
<body>
    <div class=" card card-transparent shadow mx-auto" style="width: 400px; margin-top: 100px">
        <div class="card-body">
            <form action="{{ route('film.update', $film->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control" value="{{ old('judul', $film->judul) }}" required>
                </div>
                <div class="form-group">
                    <label for="sinopsis">Sinopsis</label>
                    <textarea class="form-control" name="sinopsis" id="sinopsis" rows="5" required>{{ old('sinopsis', $film->sinopsis) }}</textarea><br>
                </div>
                <div class="form-group">
                    <label for="path">Path</label>
                    <textarea class="form-control" name="path" id="path" rows="5" required>{{ old('path', $film->path) }}</textarea><br>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" class="form-control" value="{{ old('harga', $film->harga) }}" required>
                </div>
                <div class="form-group" style="margin-top: 10px">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('film.index', $film->id) }}"><button class="btn btn-secondary" type="button">Kembali</button></a>
                </div>
            </form>
        </div>
    </div>        
</body>
@endsection
</html>