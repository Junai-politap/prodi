<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bagian;
use App\Models\Soal;
use App\Models\Jawaban;
use App\Models\Pilihan;


class PilihanController extends Controller
{   

    public function pilihan(Jawaban $jawaban)
    {
        $data['jawaban'] = $jawaban;
        
        $data['list_pilihan'] = Pilihan::all();
        return view('admin.bagian.pilihan', $data);
    }
    public function store(Request $request)
    {
        $pilihan = New Pilihan;
        $pilihan->id_jawaban = request('id_jawaban');
        $pilihan->soal = request('soal');
        $pilihan->save();
        return back()->with('success', 'Data Berhasil di Simpan');

    }

    public function detail($id)
    {
        $data['list_soal'] =Soal::all();
        $data['list_jawaban'] = Jawaban::all();
        $data['bagian'] = Bagian::find($id);

        return view('admin.bagian.detail', $data);
    }

    public function update(Pilihan $pilihan)
    {
        $pilihan->soal = request('soal');
        $pilihan->save();
        return back()->with('success', 'Data Berhasil di Simpan');
    }

    public function destroy($id)
    {
        Bagian::destroy($id);

        return redirect('page-form')->with('error', 'Data Berhasil di Hapus');
    }
}
