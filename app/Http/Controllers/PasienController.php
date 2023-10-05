<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    //
   
    public function listdatapasien(){
        return view('pasien.listdatapasien');

    }
    public function tambahdatapasien(){
        return view('pasien.tambahpasien');
    }
}
