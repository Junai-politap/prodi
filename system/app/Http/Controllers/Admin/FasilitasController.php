<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fasilitas;
use App\Models\Video;
use App\Models\Galery_fasilitas;

class FasilitasController extends Controller
{
    public function index()
    {
        $data['list_fasilitas'] = Fasilitas::all();
        return view('admin.fasilitas.index', $data);
    }

    public function store(Request $request)
    {
        $fasilitas = New Fasilitas;
        $fasilitas->nama_fasilitas = request('nama_fasilitas'); 
        $fasilitas->detail_fasilitas = request('detail_fasilitas');
        $fasilitas->jenis_fasilitas = request('jenis_fasilitas');
        $fasilitas->handleUploadFoto();
        $fasilitas->save();
        return redirect('page-fasilitas')->with('success', 'Data Berhasil di Simpan');

    }

    public function show(Fasilitas $fasilitas)
    {
        $data['fasilitas'] = $fasilitas;
        $data['list_galery_fasilitas'] = Galery_fasilitas::orderBy('foto', 'DESC')->get();
        $data['list_video'] = Video::all();
        return view('admin.fasilitas.show', $data);
    }

    public function edit($id)
    {
        $data['fasilitas'] = Fasilitas::find($id);

        return view('admin.fasilitas.edit', $data);
    }

    public function update($id)
    {
        $fasilitas = Fasilitas::find($id);
        $fasilitas->nama_fasilitas = request('nama_fasilitas'); 
        $fasilitas->detail_fasilitas = request('detail_fasilitas');
        $fasilitas->jenis_fasilitas = request('jenis_fasilitas');
        $fasilitas->handleUploadFoto();
        $fasilitas->save();
        return redirect('page-fasilitas')->with('success', 'Data Berhasil di Simpan');
    }

    public function destroy($id)
    {
        Fasilitas::destroy($id);

        return redirect('page-fasilitas')->with('error', 'Data Berhasil di Hapus');
    }
}
