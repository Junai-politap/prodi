<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bagian;
use App\Models\Soal;
use App\Models\Jawaban;
use App\Models\Mahasiswa;
use App\Models\Tracer\Form_1;

class BagianController extends Controller
{
    public function index()
    {
        $data['list_bagian'] = Bagian::all();
        return view('admin.bagian.index', $data);
    }

    public function store(Request $request)
    {
        $bagian = New Bagian;
        $bagian->nama = request('nama');
        $bagian->title = request('title');
        $bagian->save();
        return redirect('page-form')->with('success', 'Data Berhasil di Simpan');

    }

    public function detail($id)
    {
        $data['list_soal'] =Soal::all();
        $data['list_jawaban'] = Jawaban::all();
        $data['bagian'] = Bagian::find($id);

        return view('admin.bagian.detail', $data);
    }

    public function update($id)
    {
        $bagian = Bagian::find($id);
        $bagian->nama = request('nama');
        $bagian->title = request('title');
        $bagian->save();
        return redirect('page-form')->with('success', 'Data Berhasil di Simpan');
    }

    public function destroy($id)
    {
        Bagian::destroy($id);

        return redirect('page-form')->with('error', 'Data Berhasil di Hapus');
    }

    public function hasil($id)
    {   
        $data['list_soal'] =Soal::all();
        $data['list_jawaban'] = Jawaban::all();
        $data['bagian'] = Bagian::find($id);
        $data['list_form_1'] = Form_1::all();

        $data['list_mahasiswa'] = Mahasiswa::all();


        $data['data_form_1'] = Form_1::all();
        $data['list_form_1'] = Form_1::orderBy('id', 'ASC')->take(1)->get();

        return view('admin.bagian.hasil', $data);
    }
}
