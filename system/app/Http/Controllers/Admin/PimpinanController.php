<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pimpinan;
use Illuminate\Http\Request;

class PimpinanController extends Controller
{
    public function index()
    {
        $data['list_pimpinan'] = Pimpinan::all();
        return view('admin.pimpinan.index', $data);
    }

    public function store(Request $request)
    {
        $pimpinan = New Pimpinan();
        $pimpinan->nip = request('nip');
        $pimpinan->nik = request('nik');
        $pimpinan->nama_lengkap = request('nama_lengkap');
        $pimpinan->gelar_belakang = request('gelar_belakang');
        $pimpinan->jabatan = request('jabatan');
        $pimpinan->unit_kerja = request('unit_kerja');
        $pimpinan->tempat_lahir = request('tempat_lahir');
        $pimpinan->tanggal_lahir = request('tanggal_lahir');
        $pimpinan->jenis_kelamin = request('jenis_kelamin');
        $pimpinan->agama = request('agama');
        $pimpinan->alamat = request('alamat');
        $pimpinan->hp = request('hp');
        $pimpinan->email = request('email');
        $pimpinan->handleUploadFoto();
        $pimpinan->save();
        return redirect('admin/pimpinan')->with('success', 'Data Berhasil di Simpan');

    }

    public function show($id)
    {
        $data['pimpinan'] = Pimpinan::find($id);
        return view('admin.pimpinan.show', $data);
    }

    public function edit($id)
    {
        $data['pimpinan'] = Pimpinan::find($id);

        return view('admin.pimpinan.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $pimpinan = Pimpinan::find($id);
        $pimpinan->nip = request('nip');
        $pimpinan->nik = request('nik');
        $pimpinan->nama_lengkap = request('nama_lengkap');
        $pimpinan->gelar_belakang = request('gelar_belakang');
        $pimpinan->jabatan = request('jabatan');
        $pimpinan->unit_kerja = request('unit_kerja');
        $pimpinan->tempat_lahir = request('tempat_lahir');
        $pimpinan->tanggal_lahir = request('tanggal_lahir');
        $pimpinan->jenis_kelamin = request('jenis_kelamin');
        $pimpinan->agama = request('agama');
        $pimpinan->alamat = request('alamat');
        $pimpinan->hp = request('hp');
        $pimpinan->email = request('email');
        $pimpinan->handleUploadFoto();
        $pimpinan->save();
        return redirect('admin/pimpinan')->with('success', 'Data Berhasil di Simpan');
    }

    public function destroy($id)
    {
        Pimpinan::destroy($id);

        return back()->with('error', 'Data Berhasil di Hapus');
    }
}
