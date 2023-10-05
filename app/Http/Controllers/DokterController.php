<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
class DokterController extends Controller
{
    //
    public function tambahdatadokter(){
        return view('dokter.tambahdokter');
    }

    public function jadwalpraktekdokter(){
        $dokter = User::role('dokter')->select('name', 'alamat')->get();
        
        return view('dokter.jadwalpraktekdokter',['dokter'=>$dokter]);
    }
}
