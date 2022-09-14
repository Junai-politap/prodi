<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\ModelAuthenticate;
use App\Models\Model;
use App\Models\Tracer\Form_1;
use App\Models\Tracer\Form_2;
use App\Models\Tracer\Form_3;
use App\Models\Tracer\Form_4;
use App\Models\Tracer\Form_5;


class Mahasiswa extends ModelAuthenticate
{

	public $table = "ms_mahasiswa";
	
 
    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "mahasiswa";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function Form_1(){
		return $this->belongsTo(Form_1::class, 'id');
	}

    function Form_2(){
		return $this->belongsTo(Form_2::class, 'id');
	}

    function Form_3(){
		return $this->belongsTo(Form_3::class, 'id');
	}

    function Form_4(){
		return $this->belongsTo(Form_4::class, 'id');
	}

    function Form_5(){
		return $this->belongsTo(Form_5::class, 'id');
	}

    

}
