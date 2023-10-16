<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function index()
    {
        $wisatas = Wisata::orderBy('created_at', 'desc')->get();
        return view('admin.wisata.index', compact('wisatas'));
    }

    public function create()
    {
        return view('admin.wisata.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_wisata' => 'required',
            'virtual_link' => 'required',
            'kabupatenkota' => 'required',
            'deskripsi' => 'required',
            'latitude' => '',
            'longitude' => '',
            'gambar' => 'image|mimes:png,jpeg,jpg,webp'
        ]);


        if ($request->gambar) {
            $fileGambar = time()  . $request->gambar->extension();
            $request->gambar->move(public_path('storage/gambar-wisata'), $fileGambar);
            $validatedData['gambar'] = $fileGambar;
        }

        Wisata::create($validatedData);
        return redirect('/wisata')->with('success', "Berhasil Tambah Wisata");
    }

    public function edit(Wisata $wisata)
    {
        return view('admin.wisata.edit', compact('wisata'));
    }

    public function update(Wisata $wisata, Request $request)
    {
        $validatedData = $request->validate([
            'nama_wisata' => 'required',
            'virtual_link' => 'required',
            'kabupatenkota' => 'required',
            'deskripsi' => 'required',
            'latitude' => '',
            'longitude' => '',
            'gambar' => 'nullable|image|mimes:png,jpeg,jpg'
        ]);

        if ($request->gambar) {
            $fileGambar = time()  . $request->gambar->extension();
            $request->gambar->move(public_path('storage/gambar-wisata'), $fileGambar);
            $validatedData['gambar'] = $fileGambar;
        }

        $wisata->update($validatedData);

        return back()->with('success', "Berhasil Update Wisata");
    }

    public function destroy(Wisata $wisata)
    {
        $wisata->delete();

        return back()->with('success', "Berhasil Hapus Wisata");
    }
}
