<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori;
use App\Tag;
use Auth;
use Session;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $artikel = Artikel::orderBy('created_at', 'desc')->get();
        return view('backend.artikel.index', compact('artikel'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('backend.artikel.create', compact('kategori', 'tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $artikel = new Artikel();
        $artikel->judul = $request->judul;
        $artikel->slug = str_slug($request->judul, '-');
        $artikel->konten = $request->konten;
        $artikel->id_user = Auth::user()->id;
        $artikel->id_kategori = $request->kategori;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $Path = public_path() . '/assets/img/artikel/';
            $filename = str_random(6) . '-' . $file->getClientOriginalName();
            $upload = $file->move($Path, $filename);
            $artikel->foto = $filename;
        }
        $artikel->save();

        $artikel->tag()->attach($request->tag);
        Session::flash("flash_notification", [
            "level" => "primary",
            "message" => "Berhasil mengubah artikel<b>.$artikel->judul.</b>!"
        ]);
        return redirect()->route('artikel.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        $tag = Tag::all();
        $kategori = Kategori::all();
        $selected = $artikel->tag->pluck('id')->toArray();
        return view('backend.artikel.show', compact('artikel', 'selected', 'tag', 'kategori'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        $kategori = Kategori::all();
        $tag = Tag::all();
        $selected = $artikel->tag->pluck('id')->toArray();
        return view('backend.artikel.edit', compact('artikel', 'selected', 'kategori', 'tag'));
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
        $request->validate([
            'judul' => 'required|unique:artikels',
            'konten' => 'required',
            'foto' => 'required|mimes:jpeg.jpg.png.gif|required|max:2048',
            'id_kategori' => 'required',
            'id_tag' => 'required'
        ]);
        $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->slug = str_slug($request->judul);
        $artikel->konten = $request->konten;
        $artikel->id_user = Auth::user()->id;
        $artikel->id_kategori = $request->id_kategori;

        if ($request->hasFile('foto')) {
            $file  = $request->file('foto');
            $destinationPath = public_path() . '/data/img/artikel/';
            $filename = str_random(6) . '-' . '/data/img/artikel';
            $upload = $file->move('destinationPath', $filename);
        }

        if ($artikel->foto) {
            $old_foto = $artikel->foto;
            $filepath = public_path() . '/data/img/' . $artikel->foto;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) { }

            $artikel->save();
            $artikel->tag()->sync($request->tag);
            Session::flash("flash_notification", [
                "level" => "primary",
                "message" => "Berhasil mengubah data  artikel berjudul<b>$artikel->judul</b>!"
            ]);
            return redirect()->route('artikel.index');
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
        $artikel = Artikel::findOrFail($id);
        if ($artikel->foto) {
            $old_foto = $artikel->foto;
            $filepath = public_path() . '/data/img/artikel/'  . $artikel->foto;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) { }
        }

        $artikel->tag()->detach($artikel->id);
        $artikel->delete();
        Session::flash("flash_notification", [
            "level" => "primary",
            "message" => "Berhasil mengubah artikel<b>$artikel->judul</b>!"
        ]);
        return redirect()->route('artikel.index');
    }
}
