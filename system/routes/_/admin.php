<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MasterMahasiswaController;
use App\Http\Controllers\Admin\ProdiController;
use App\Http\Controllers\Admin\PedomanController;
use App\Http\Controllers\Admin\FasilitasController;
use App\Http\Controllers\Admin\FasilitasGaleryController;
use App\Http\Controllers\Admin\TracerStudiController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\KurikulimController;
use App\Http\Controllers\Admin\PelayananController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\Admin\AkreditasiController;
use App\Http\Controllers\Admin\PegawaiController;
use App\Http\Controllers\Admin\VisiMisiController;
use App\Http\Controllers\Admin\LulusanController;
use App\Http\Controllers\Admin\SurveiController;
use App\Http\Controllers\Admin\PblController;
use App\Http\Controllers\Admin\TugasAkhirController;
use App\Http\Controllers\Admin\PengabdianController;
use App\Http\Controllers\Admin\PenelitianController;
use App\Http\Controllers\Admin\BagianController;
use App\Http\Controllers\Admin\SoalController;
use App\Http\Controllers\Admin\JawabanController;
use App\Http\Controllers\Admin\LaporanTracer\BekerjaController;
use App\Http\Controllers\Admin\LaporanTracer\StudiLanjutController;
use App\Http\Controllers\Admin\LaporanTracer\WirausahaController;
use App\Http\Controllers\Admin\PimpinanController;


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [AdminController::class, 'index']);

    Route::get('pegawai', [PegawaiController::class, 'index']);
    Route::post('pegawai/store', [PegawaiController::class, 'store']);
    Route::get('/pegawai/show/{id}', [PegawaiController::class, 'show']);
    Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
    Route::put('/pegawai/update/{id}', [PegawaiController::class, 'update']);
    Route::get('/pegawai/delete/{id}', [PegawaiController::class, 'destroy']);

    Route::get('pimpinan', [PimpinanController::class, 'index']);
    Route::post('pimpinan/store', [PimpinanController::class, 'store']);
    Route::get('/pimpinan/show/{id}', [PimpinanController::class, 'show']);
    Route::get('/pimpinan/edit/{id}', [PimpinanController::class, 'edit']);
    Route::put('/pimpinan/update/{id}', [PimpinanController::class, 'update']);
    Route::get('/pimpinan/delete/{id}', [PimpinanController::class, 'destroy']);

    Route::get('visi-misi', [VisiMisiController::class, 'index']);
    Route::post('visi-misi/store', [VisiMisiController::class, 'store']);
    Route::put('visi-misi/update/{id}', [VisiMisiController::class, 'update']);
    Route::get('visi-misi/delete/{id}', [VisiMisiController::class, 'destroy']);

    Route::get('lulusan', [LulusanController::class, 'index']);
    Route::post('lulusan/store', [LulusanController::class, 'store']);
    Route::put('lulusan/update/{id}', [LulusanController::class, 'update']);
    Route::get('lulusan/delete/{id}', [LulusanController::class, 'destroy']);

    Route::get('kurikulum', [KurikulimController::class, 'index']);
    Route::post('mata-kuliah/store', [KurikulimController::class, 'store']);
    Route::get('mata-kuliah/edit/{id}', [KurikulimController::class, 'edit']);
    Route::put('/mata-kuliah/update/{id}', [KurikulimController::class, 'update']);
    Route::get('/mata-kuliah/delete/{id}', [KurikulimController::class, 'destroy']);


    Route::get('pelayanan', [PelayananController::class, 'index']);
    Route::post('pelayanan/store-jenis', [PelayananController::class, 'storejenis']);
    Route::post('pelayanan/store-pelayanan', [PelayananController::class, 'storepelayanan']);
    Route::get('/pelayanan/show/{id}', [PelayananController::class, 'show']);
    Route::get('pelayanan/edit/{id}', [PelayananController::class, 'edit']);
    Route::put('/pelayanan/update/{id}', [PelayananController::class, 'update']);
    Route::get('/pelayanan/delete/{id}', [PelayananController::class, 'destroy']);

    Route::get('berita', [BeritaController::class, 'index']);
    Route::post('/berita/store', [BeritaController::class, 'store']);
    Route::get('/berita/{id}', [BeritaController::class, 'show']);
    Route::get('/berita/edit/{id}', [BeritaController::class, 'edit']);
    Route::put('berita/update/{id}', [BeritaController::class, 'update']);
    Route::put('/arsip-berita/{berita}', [BeritaController::class, 'arsip']);
    Route::put('/post-berita/{berita}', [BeritaController::class, 'post']);
    Route::get('/berita/delete/{id}', [BeritaController::class, 'destroy']);


    Route::get('slide', [SlideController::class, 'index']);
    Route::post('slide/store', [SlideController::class, 'store']);
    Route::get('/slide/show/{id}', [SlideController::class, 'show']);
    Route::get('/slide/edit/{id}', [SlideController::class, 'edit']);
    Route::put('/slide/update/{id}', [SlideController::class, 'update']);
    Route::get('/dslide/elete/{id}', [SlideController::class, 'destroy']);


    Route::get('akreditasi', [AkreditasiController::class, 'index']);
    Route::post('akreditasi/store', [AkreditasiController::class, 'store']);
    Route::get('/akreditasi/show/{id}', [AkreditasiController::class, 'show']);
    Route::get('/akreditasi/edit/{id}', [AkreditasiController::class, 'edit']);
    Route::put('/akreditasi/update/{id}', [AkreditasiController::class, 'update']);
    Route::get('/akreditasi/delete/{id}', [AkreditasiController::class, 'destroy']);

    Route::get('mahasiswa', [MasterMahasiswaController::class, 'index']);
    Route::get('create', [MasterMahasiswaController::class, 'create']);
    Route::post('mahasiswa/store', [MasterMahasiswaController::class, 'store']);
    Route::get('/mahasiswa/show/{id}', [MasterMahasiswaController::class, 'show']);
    Route::get('/mahasiswa/edit/{id}', [MasterMahasiswaController::class, 'edit']);
    Route::put('/mahasiswa/update/{id}', [MasterMahasiswaController::class, 'update']);
    Route::get('/mahasiswadelete/{id}', [MasterMahasiswaController::class, 'destroy']);

    Route::get('prodi', [ProdiController::class, 'index']);
    Route::post('store-prodi', [ProdiController::class, 'store']);
    Route::get('/edit-prodi/{id}', [ProdiController::class, 'edit']);
    Route::put('/update-prodi/{id}', [ProdiController::class, 'update']);
    Route::get('/delete-prodi/{id}', [ProdiController::class, 'destroy']);

    Route::get('tracer', [TracerStudiController::class, 'index']);

    Route::get('fasilitas', [FasilitasController::class, 'index']);
    Route::post('fasilitas/store', [FasilitasController::class, 'store']);
    Route::get('fasilitas/show/{fasilitas}', [FasilitasController::class, 'show']);
    Route::get('/fasilitas/edit/{id}', [FasilitasController::class, 'edit']);
    Route::put('/fasilitas/update/{id}', [FasilitasController::class, 'update']);
    Route::get('/fasilitas/delete/{id}', [FasilitasController::class, 'destroy']);

    Route::post('jenis-fasilitas/store', [FasilitasController::class, 'storeJenis']);

    Route::get('/delete-galery-fasilitas/{id}', [FasilitasGaleryController::class, 'destroy']);
    Route::get('/delete-video/{id}', [FasilitasGaleryController::class, 'destroyVideo']);

    Route::post('store-galery', [FasilitasGaleryController::class, 'store']);
    Route::post('store-video', [FasilitasGaleryController::class, 'videoStore']);

    Route::get('form', [BagianController::class, 'index']);
    Route::post('store-form', [BagianController::class, 'store']);
    Route::get('/detail/{id}', [BagianController::class, 'detail']);
    Route::put('/update-form/{id}', [BagianController::class, 'update']);
    Route::get('/delete-form/{id}', [BagianController::class, 'destroy']);
    Route::get('hasil-survey', [BagianController::class, 'hasil']);
    Route::get('show/{id}', [BagianController::class, 'show']);


    Route::get('soal', [SoalController::class, 'index']);
    Route::post('store-soal', [SoalController::class, 'store']);
    Route::get('/edit-soal/{id}', [SoalController::class, 'edit']);
    Route::put('/update-soal/{soal}', [SoalController::class, 'update']);
    Route::get('/delete-soal/{id}', [SoalController::class, 'destroy']);

    Route::post('store-jawaban', [JawabanController::class, 'store']);
    Route::put('/update-jawaban/{jawaban}', [JawabanController::class, 'update']);

    Route::post('jenis-pedoman/store', [PedomanController::class, 'pedomanStore']);
    Route::get('jenis-pedoman/show/{jenis_pedoman}', [PedomanController::class, 'pedomanShow']);
    Route::get('jenis-pedoman/edit/{jenis_pedoman}', [PedomanController::class, 'pedomanEdit']);
    Route::put('jenis-pedoman/update/{jenis_pedoman', [PedomanController::class, 'pedomanUpdate']);

    Route::get('pedoman', [PedomanController::class, 'index']);
    Route::post('pedoman/store', [PedomanController::class, 'store']);
    Route::get('/pedoman/edit/{id}', [PedomanController::class, 'edit']);
    Route::put('/pedoman/update/{id}', [PedomanController::class, 'update']);
    Route::get('/pedoman/delete/{id}', [PedomanController::class, 'destroy']);


    Route::get('pbl', [PblController::class, 'index']);
    Route::post('pbl/store', [PblController::class, 'store']);
    Route::put('/pbl/update/{pbl}', [PblController::class, 'update']);
    Route::get('/pbl/delete/{pbl}', [PblController::class, 'destroy']);

    Route::get('penelitian', [PenelitianController::class, 'index']);
    Route::post('penelitian/store', [PenelitianController::class, 'store']);
    Route::put('/penelitian/update/{penelitian}', [PenelitianController::class, 'update']);
    Route::get('/penelitian/delete/{penelitian}', [PenelitianController::class, 'destroy']);

    Route::get('pengabdian', [PengabdianController::class, 'index']);
    Route::post('pengabdian/store', [PengabdianController::class, 'store']);
    Route::put('/pengabdian/update/{pengabdian}', [PengabdianController::class, 'update']);
    Route::get('/pengabdian/delete/{pengabdian}', [PengabdianController::class, 'destroy']);

    Route::get('survei', [SurveiController::class, 'index']);
    Route::post('store-survei', [SurveiController::class, 'store']);
    Route::get('/show-survei/{survei}', [SurveiController::class, 'show']);
    Route::get('/edit-survei/{survei}', [SurveiController::class, 'edit']);
    Route::put('/update-survei/{survei}', [SurveiController::class, 'update']);
    Route::get('/delete-survei/{survei}', [SurveiController::class, 'destroy']);

    Route::get('tugas-akhir', [TugasAkhirController::class, 'index']);
    Route::post('tugas-akhir/store', [TugasAkhirController::class, 'store']);
    Route::get('/tugas-akhir/show/{id}', [TugasAkhirController::class, 'show']);
    Route::get('/tugas-akhir/edit/{tugas_akhir}', [TugasAkhirController::class, 'edit']);
    Route::put('/tugas-akhir/update/{tugas_akhir}', [TugasAkhirController::class, 'update']);
    Route::get('/tugas-akhir/delete/{tugas_akhir}', [TugasAkhirController::class, 'destroy']);

    Route::get('laporan-tracer/bekerja/cara-mendapatkan-pekerjaan', [BekerjaController::class, 'caraMendapatkanPekerjaan']);
    Route::get('laporan-tracer/bekerja/jenis-pekerjaan', [BekerjaController::class, 'jenisPekerjaan']);
    Route::get('laporan-tracer/bekerja/kategori-pekerjaan', [BekerjaController::class, 'kategoriPekerjaan']);
    Route::get('laporan-tracer/bekerja/kesesuaian', [BekerjaController::class, 'kesesuaian']);
    Route::get('laporan-tracer/bekerja/masa-tunggu', [BekerjaController::class, 'masaTunggu']);
    Route::get('laporan-tracer/bekerja/pendapatan-pertama', [BekerjaController::class, 'pendapatamPertama']);

    Route::get('laporan-tracer/wirausaha/kesesuaian', [WirausahaController::class, 'kesesuaian']);
    Route::get('laporan-tracer/wirausaha/masa-tunggu', [WirausahaController::class, 'masaTunggu']);
    Route::get('laporan-tracer/wirausaha/pendapatan-pertama', [WirausahaController::class, 'pendapatamPertama']);
    Route::get('laporan-tracer/wirausaha/posisi-jabatan', [WirausahaController::class, 'posisiJabatan']);


    Route::get('laporan-tracer/studi-lanjut/alasan-studi-lanjut', [StudiLanjutController::class, 'alasanStudi']);
    Route::get('laporan-tracer/studi-lanjut/biaya', [StudiLanjutController::class, 'biaya']);
    Route::get('laporan-tracer/studi-lanjut/jenjang-studi-lanjut', [StudiLanjutController::class, 'jenjangStudi']);

});
