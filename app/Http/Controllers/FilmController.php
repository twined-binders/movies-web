<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::orderBy('created_at', 'desc')->simplePaginate(5);
        return view('film.index', compact('films'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('film.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'sinopsis' => 'required',
            'path' => 'required',
            'harga' => 'required'

        ]);

        $film = Film::create([
            'judul' => $request->judul,
            'sinopsis' => $request->sinopsis,
            'path' => $request->path,
            'harga' => $request->harga
        ]);

        if ($film) {
            return redirect()
                ->route('film.index')
                ->with([
                    'berhasil' => 'data berhasil disimpan'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Data gagal disimpan, mohon coba lagi'
                ]);
        }
      }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = Film::findOrFail($id);
        return view('film.detail', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = Film::findOrFail($id);
        return view('film.edit', compact('film'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required',
            'sinopsis' => 'required',
            'path' => 'required',
            'harga' => 'required'

        ]);
        $film = Film::findOrFail($id);
        $film -> update([
            'judul' => $request->judul,
            'sinopsis' => $request->sinopsis,
            'path' => $request->path,
            'harga' => $request->harga
        ]);
      

        if ($film) {
            return redirect()
                ->route('film.index')
                ->with([
                    'berhasil' => 'data berhasil disimpan'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Data gagal disimpan, mohon coba lagi'
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $film = Film::findOrFail($id);
        $film->delete();

        if ($film) {
            return redirect()
                ->back()->with('message','Data berhasil dihapus !');
                // ->with([
                //     'success' => 'Post has been deleted successfully'
                // ]);
        } else {
            return redirect()
            ->back()->with('message','Data gagal dihapus !');
        }
    }
}
