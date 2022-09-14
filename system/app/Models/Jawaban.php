<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\Form_2;


class Jawaban extends Model
{

	protected $table = "jawaban";

    function Soal(){
		return $this->belongsTo('\App\Models\Soal', 'id_soal');
	}

	function Form_1(){
		return $this->belongsTo('\App\Models\Tracer\Form_1', 'id');
	}

	function Form_2(){
		return $this->belongsTo(Form_2::class, 'id');
	}
	
}
