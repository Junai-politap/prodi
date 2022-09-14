<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\Jawaban;


class DataPilihan extends Model
{

	protected $table = "data_pilihan";


	function Jawaban(){
		return $this->belongsTo(Jawaban::class, 'id_jawaban');
	}
	
}
