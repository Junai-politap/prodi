<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;


class BeritaController extends Controller
{
    public function index()
    {
        $data['list_berita'] = Berita::all();
        return view('admin.berita.index', $data);
    }

    public function store(Request $request)
    {
        $berita = New Berita;
        $berita->nama_berita = request('nama_berita');
        $berita->detail = request('detail');
        $berita->handleUploadGambarBerita();
        $berita->save();
        return redirect('page-berita')->with('success', 'Data Berhasil di Simpan');

    }

    public function show($id)
    {
        $data['berita'] = Berita::find($id);
        return view('admin.berita.show', $data);
    }

    public function edit($id)
    {
        $data['berita'] = Berita::find($id);

        return view('admin.berita.edit', $data);
    }

    public function update($id)
    {
        $berita = Berita::find($id);
        $berita->nama_berita = request('nama_berita'); 
        $berita->detail = request('detail');
        $berita->handleUploadGambarBerita();
        $berita->save();
        return redirect('page-berita')->with('success', 'Data Berhasil di Simpan');
    }

    public function destroy($id)
    {
        Berita::destroy($id);

        return redirect('page-berita')->with('error', 'Data Berhasil di Hapus');
    }
}
