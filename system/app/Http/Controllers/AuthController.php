<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Mahasiswa;

class AuthController extends Controller
{

    public function login(){
        return View ('login');
    }


    public function loginproses(){
        if (auth()->attempt(['username' => request('username'), 'password' => request('password')])) {
            return redirect('admin');
        }

        if (auth()->guard('mahasiswa')->attempt(['username' => request('username'), 'password' => request('password')])){
            return redirect('mahasiswa-page');
        }

        return redirect('login');
    }

    public function logout(){
        auth()->logout();
		auth()->guard('mahasiswa')->logout();
        return redirect('/');
    }

    function test(){
		$user= new User;
		$user->nama= 'Super Admin';
		$user->username= 'teknologiinformasi';
		$user->password=bcrypt('12QwAsZx23WeSdXc');
		$user->save();

		return "Berhasil";


	}
}
