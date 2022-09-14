<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Bagian;
use App\Models\Soal;
use App\Models\Jawaban;
use App\Models\Tracer\Form_1;
use App\Models\Tracer\Form_2;
use App\Models\Tracer\Form_3;
use App\Models\Tracer\Form_4;
use App\Models\Tracer\Form_5;
use Auth;

class MahasiswaController extends Controller
{

    public function index(){
        $data['mahasiswa'] = $mahasiswa = auth()->guard('mahasiswa')->user();
        $data['list_bagian'] = Bagian::all();
        return view('mahasiswa.index', $data);
    }

    public function profil()
    {
        $data['mahasiswa'] = $mahasiswa = auth()->guard('mahasiswa')->user();
        return view('mahasiswa.profil', $data);
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = request('nim');
        $mahasiswa->nama = request('nama');
        $mahasiswa->username = request('username');
        $mahasiswa->confirmasi_pass = request('confirmasi_pass');
        $mahasiswa->password = request('confirmasi_pass');
        $mahasiswa->nik = request('nik');
        $mahasiswa->jenis_kelamin = request('jenis_kelamin');
        $mahasiswa->agama = request('agama');
        $mahasiswa->tempat_lahir = request('tempat_lahir');
        $mahasiswa->tanggal_lahir = request('tanggal_lahir');
        $mahasiswa->alamat = request('alamat');
        $mahasiswa->hp = request('hp');
        $mahasiswa->email = request('email');
        $mahasiswa->handleUploadFoto();
        $mahasiswa->save();

        return redirect('mahasiswa-page');
    }

    public function tracer(Request $request)
    {
        $data['mahasiswa'] = $mahasiswa = auth()->guard('mahasiswa')->user();
        $data['list_bagian'] = Bagian::all();
        $data['list_soal'] = $list_soal = Soal::all();
        $data['list_jawaban'] = $list_jawaban = Jawaban::all();
        

    
        return view('mahasiswa.tracer-study', $data);
        
    }

    public function formTwo(){
        
        $data['mahasiswa'] = $mahasiswa = auth()->guard('mahasiswa')->user();
        $data['list_bagian'] = Bagian::all();
        $data['list_soal'] = Soal::all();
        $data['list_jawaban'] = Jawaban::all();

        $data['list_form_2'] = Form_2::all();


        return view('mahasiswa.tracer-study-form-ii', $data);

    }

    public function form3(){
        
        $data['mahasiswa'] = $mahasiswa = auth()->guard('mahasiswa')->user();
        $data['list_bagian'] = Bagian::all();
        $data['list_soal'] = Soal::all();
        $data['list_jawaban'] = Jawaban::all();



        return view('mahasiswa.tracer-study-form-iii', $data);

    }

    public function form4(){
        
        $data['mahasiswa'] = $mahasiswa = auth()->guard('mahasiswa')->user();
        $data['list_bagian'] = Bagian::all();
        $data['list_soal'] = Soal::all();
        $data['list_jawaban'] = Jawaban::orderBy('id', 'DESC')->get();


        return view('mahasiswa.tracer-study-form-iv', $data);

    }

    public function form5(){
        
        $data['mahasiswa'] = $mahasiswa = auth()->guard('mahasiswa')->user();
        $data['list_bagian'] = Bagian::all();
        $data['list_soal'] = Soal::all();
        $data['list_jawaban'] = Jawaban::orderBy('id', 'DESC')->get();


        return view('mahasiswa.tracer-study-form-v', $data);

    }

    public function tracerForm_I(Request $request)
    {
        foreach (request('jawaban') as $id_jawaban => $value) {

        $form_1 = New Form_1;
        $form_1->id_mahasiswa = request('id_mahasiswa'); 
        $form_1->id_jawaban = $id_jawaban;
        $form_1->level = 1;
        $form_1->save();

        $id_mahasiswa = request('id_mahasiswa');
		$mahasiswa = Mahasiswa::where('id', $id_mahasiswa)->get();
		foreach ($mahasiswa  as $tr) {
			$tr->status_tracing = 1;
			$tr->update();
		}

        }

        return back()->with('success', 'Terima Kasih Anda Sudah Mengisi Formulir');
    }


    public function tracerForm_II(Request $request)
    {
        
        $form_1 = New Form_2;
        $form_1->id_mahasiswa = request('id_mahasiswa'); 
        $form_1->id_jawaban = request('id_jawaban');
        $form_1->level = 1;
        $form_1->save();

        $id_mahasiswa = request('id_mahasiswa');
		$mahasiswa = Mahasiswa::where('id', $id_mahasiswa)->get();
		foreach ($mahasiswa  as $tr) {
			$tr->status_tracing_2 = 1;
			$tr->update();
		}

        return back()->with('success', 'Terima Kasih Anda Sudah Mengisi Formulir');
    }

    public function tracerForm_III(Request $request)
    {
        foreach (request('jawaban') as $id_jawaban => $value) {

        $form_1 = New Form_3;
        $form_1->id_mahasiswa = request('id_mahasiswa'); 
        $form_1->id_jawaban = $id_jawaban;
        $form_1->level = 1;
        $form_1->save();

        $id_mahasiswa = request('id_mahasiswa');
		$mahasiswa = Mahasiswa::where('id', $id_mahasiswa)->get();
		foreach ($mahasiswa  as $tr) {
			$tr->status_tracing_3 = 1;
			$tr->update();
		}

        }

        return back()->with('success', 'Terima Kasih Anda Sudah Mengisi Formulir');
    }


    public function tracerForm_IV(Request $request)
    {
        foreach (request('jawaban') as $id_jawaban => $value) {

        $form_1 = New Form_4;
        $form_1->id_mahasiswa = request('id_mahasiswa'); 
        $form_1->id_jawaban = $id_jawaban;
        $form_1->level = 1;
        $form_1->save();

        $id_mahasiswa = request('id_mahasiswa');
		$mahasiswa = Mahasiswa::where('id', $id_mahasiswa)->get();
		foreach ($mahasiswa  as $tr) {
			$tr->status_tracing_4 = 1;
			$tr->update();
		}

        }

        return back()->with('success', 'Terima Kasih Anda Sudah Mengisi Formulir');
    }


    public function tracerForm_V(Request $request)
    {
        foreach (request('jawaban') as $id_jawaban => $value) {

        $form_1 = New Form_5;
        $form_1->id_mahasiswa = request('id_mahasiswa'); 
        $form_1->id_jawaban = $id_jawaban;
        $form_1->level = 1;
        $form_1->save();

        $id_mahasiswa = request('id_mahasiswa');
		$mahasiswa = Mahasiswa::where('id', $id_mahasiswa)->get();
		foreach ($mahasiswa  as $tr) {
			$tr->status_tracing_5 = 1;
			$tr->update();
		}

        }

        return back()->with('success', 'Terima Kasih Anda Sudah Mengisi Formulir');
    }


}
