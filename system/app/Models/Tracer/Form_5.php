<?php

namespace App\Models\Tracer;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\Mahasiswa;
use App\Models\Jawaban;

class Form_5 extends Model
{

	public $table = "form_5";

	function Mahasiswa(){
		return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
	}

    function Jawaban(){
		return $this->belongsTo(Jawaban::class, 'id_jawaban');
	}

}
