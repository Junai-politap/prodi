<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use App\Models\Model;

class Video extends Model
{

	protected $table = "video";

	function handleUploadVideo()
    {
        if (request()->hasFile('video')) {
            $video = request()->file('video');
            $destination = "video";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $video->extension();
            $url = $video->storeAs($destination, $filename);
            $this->video = "app/" . $url;
            $this->save();

        }
    }   

	function Fasilitas(){
		return $this->belongsTo('\App\Models\Fasilitas', 'id_fasilitas');
	}

}
