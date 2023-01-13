@extends('template')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>List Film</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @section('style')
        body {
            background-color: #484848;
        }
    @endsection
</head>
@section('main')
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                <!-- Notifikasi menggunakan flash session data -->
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
                @endif

                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('film.create') }}" class="btn btn-md btn-success mb-3 float-right">Tambah</a>

                        <table class="table table-bordered mt-1">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col" class="col-md-2">Judul</th>
                                    <th scope="col" class="col-md-4">Sinopsis</th>
                                    <th scope="col" class="col-md-2">Path</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($films as $film)
                                <tr>
                                    <td class="col-md-2">{{ $film->judul }}</td>
                                    <td class="col-md-4">{{ $film->sinopsis }}</td>
                                    <td class="text-center col-md-2"><img src="{{ asset($film->path) }}" class="img-thumbnail"></td>
                                    <td>{{ $film->harga }}</td>
                                    <td>{{ $film->created_at->format('d-m-Y') }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                            action="{{ route('film.destroy', $film->id) }}" method="POST">
                                            <a href="{{ route('film.edit', $film->id) }}"
                                                class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                        <div>
                                            <a href="{{ route('film.show', $film->id) }}" class="btn btn-primary">Detail</a>
                                        </div>
                                    </td>
                                </tr>
                               
                                @empty
                                <tr>
                                    <td class="text-center text-mute" colspan="4">Data film tidak tersedia</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="text-right">
                            {{ $films->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
@endsection
</html>