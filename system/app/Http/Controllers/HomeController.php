<?php
namespace App\Http\Controllers;


use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Slide;
use App\Models\Matakuliah;
use App\Models\Jenis_pelayanan;
use App\Models\Pelayanan;
use App\Models\Akreditasi;
use App\Models\Prodi;
use App\Models\Pegawai;
use App\Models\Pedoman;
use App\Models\Fasilitas;
use App\Models\Jenis_pedoman;
use App\Models\Visimisi;
use App\Models\Lulusan;
use App\Models\Galery_fasilitas;
use App\Models\Video;

class HomeController extends Controller
{

	public function index(){

        $data['list_berita'] = Berita::all();
        $data['list_slide'] = Slide::orderBy('id', 'DESC')->get();
        $data['list_prodi'] = Prodi::all();
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_visimisi'] = Visimisi::all();
		return view ('home.index', $data);
	}

    // Function Profil Prodi

    public function homeTracer()
    {
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_akreditasi'] = Akreditasi::orderBy('id', 'DESC')->get();
        $data['list_prodi'] = Prodi::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();

        return view('home.tracer', $data);
    }

    // function Akademik

    public function akreditasi(){
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_akreditasi'] = Akreditasi::orderBy('id', 'DESC')->get();
        $data['list_prodi'] = Prodi::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        return view('home/akademik.akreditasi',$data);
    }

   

    public function kurikulum(){
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_prodi'] = Prodi::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_matakuliah'] = Matakuliah::all();

        return view('home/akademik.kurikulum', $data);
    }

    // End function Profil Prodi

    // function Berita

    public function indexberita(){
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_berita'] = Berita::all();
        $data['list_prodi'] = Prodi::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        return view('home/berita.index', $data);
    }

    public function showberita($id){
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['berita'] = Berita::find($id);
        $data['list_prodi'] = Prodi::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_berita'] = Berita::orderBy('id', 'ASC')->get();
        return view('home/berita.show-berita',$data);
    }

    // End function Berita

    // function Pelayanan

    public function showpelayanan($id){
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_pelayanan'] = Pelayanan::all();
        $data['jenis_pelayanan'] = Jenis_pelayanan::find($id);
        $data['list_prodi'] = Prodi::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        return view('home/pelayanan.show-pelayanan', $data);
    }
    // End function Pelayanan

    // Function Fasilitas

    public function workspace(){
        
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_berita'] = Berita::all();
        $data['list_prodi'] = Prodi::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        return view('home.fasilitas.workspace', $data);
    }

    public function workshopShow(Fasilitas $fasilitas){
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();       
        $data['list_prodi'] = Prodi::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();

        $data['list_video'] = Video::all();
        $data['fasilitas'] = $fasilitas;
        $data['list_galery_fasilitas'] = Galery_fasilitas::all();
        return view('home.fasilitas.show-workshop', $data);   
    }

    public function risetShow(Fasilitas $fasilitas){
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();       
        $data['list_prodi'] = Prodi::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();

        $data['list_video'] = Video::all();
        $data['fasilitas'] = $fasilitas;
        $data['list_galery_fasilitas'] = Galery_fasilitas::all();
        return view('home.fasilitas.show-riset', $data);
        
    }

    public function ruangriset(){
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();       
        $data['list_prodi'] = Prodi::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        
        $data['list_fasilitas'] = Fasilitas::all();
        return view('home.fasilitas.ruang-riset', $data);
        
    }

    //End Function Fasilitas

    public function pimpinan(){
        
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['list_prodi'] = Prodi::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        return view('home.profil.pimpinan', $data);
    }

    public function dosen(){
        
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['list_prodi'] = Prodi::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        return view('home.profil.dosen', $data);
    }

    public function staff(){
        
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_pegawai'] = Pegawai::all();
        $data['list_prodi'] = Prodi::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        return view('home.profil.staff', $data);
    }

    public function showPedoman(Jenis_pedoman $jenis_pedoman)
    {
        $data['jenis_pedoman'] = $jenis_pedoman;
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_pedoman'] = Pedoman::all();
        return view('home.pedoman.show-pedoman', $data);
        
    }
    public function akademik(){
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_berita'] = Berita::all();
        $data['list_prodi'] = Prodi::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_pedoman'] = Pedoman::all();
        return view('home.pedoman.akademik', $data);
    }

    public function nonakademik(){
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();
        $data['list_berita'] = Berita::all();
        $data['list_prodi'] = Prodi::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        $data['list_pedoman'] = Pedoman::all();
        return view('home.pedoman.non-akademik', $data);
    }

    public function kerja(){
        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();       
        $data['list_prodi'] = Prodi::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        
        $data['list_fasilitas'] = Fasilitas::all();
        return view('home.fasilitas.workspace', $data);
        
    }

    public function visimisi()
    {

        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();       
        $data['list_prodi'] = Prodi::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        
        $data['list_visimisi'] = Visimisi::all();
        return view('home.profil.visi-misi', $data);
    }

    public function lulusan()
    {

        $data['list_jenis_pelayanan'] = Jenis_pelayanan::all();       
        $data['list_prodi'] = Prodi::all();
        $data['list_jenis_pedoman'] = Jenis_pedoman::all();
        
        $data['list_lulusan'] = Lulusan::all();
        return view('home.profil.profil-lulusan', $data);
    }
}
