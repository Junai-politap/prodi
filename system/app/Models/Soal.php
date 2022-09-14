<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;


class Soal extends Model
{

	protected $table = "soal";

	function Bagian(){
		return $this->belongsTo('\App\Models\Bagian', 'id_bagian');
	}

    function Jawaban(){
		return $this->belongsTo('\App\Models\Jawaban', 'id');
	}

	function Form_I(){
		return $this->belongsTo('\App\Models\Tracer\Form_I', 'id');
	}
}
