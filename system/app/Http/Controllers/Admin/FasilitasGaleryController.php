<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fasilitas;
use App\Models\Galery_fasilitas;
use App\Models\Video;

class FasilitasGaleryController extends Controller
{
    public function store()
    {
        $fasilitas_galeri = New Galery_fasilitas;
        $fasilitas_galeri->id_fasilitas = request('id_fasilitas');
        $fasilitas_galeri->handleUploadFoto();
        $fasilitas_galeri->save();
        return back();

    }

    public function videoStore()
    {
        $video = New Video;
        $video->id_fasilitas = request('id_fasilitas');
        $video->link = request('link');
        $video->save();
        return back();

    }

    public function destroy($id)
    {
        Galery_fasilitas::destroy($id);

         return back()->with('error', 'Data Berhasil di Hapus');
    }

    public function destroyVideo($id)
    {
        Video::destroy($id);

         return back()->with('error', 'Data Berhasil di Hapus');
    }
}
