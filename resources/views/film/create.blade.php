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
    <title>Tambah Film</title>
</head>
@section('main')
<body>
    <div class=" card card-transparent shadow mx-auto" style="width: 400px; margin-top: 150px">
        <div class="card-body">
            <form action="{{ route('film.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control" style="height: 50" value="{{ old('title') }}" required>
                </div>
                <div class="form-group">
                    <label for="sinopsis">Sinopsis</label>
                    <textarea name="sinopsis" class="form-control" value="{{ old('sinopsis') }}" required></textarea>
                </div>
                <div class="form-group">
                    <label for="path">Path</label>
                    <textarea name="path" class="form-control" value="{{ old('path') }}" required></textarea>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" class="form-control" value="{{ old('harga') }}" required>
                </div>
                <div class="form-group" style="margin-top: 10px">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('film.index') }}"><button class="btn btn-secondary" type="button">Kembali</button></a>
                </div>
            </form>
        </div>
    </div>        
</body>
@endsection
</html>