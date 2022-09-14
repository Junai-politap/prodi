<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\Jawaban;


class Pilihan extends Model
{

	protected $table = "pilihan";


	function Jawaban(){
		return $this->belongsTo(Jawaban::class, 'id_pilihan');
	}
	
}
