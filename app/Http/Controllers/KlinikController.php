<?php

namespace App\Http\Controllers;

use App\Models\Klinik;
use Illuminate\Http\Request;

class KlinikController extends Controller
{
    //
    public function listdataklinik(){
        return view('klinik.listdataklinik');
    }

    public function tambahdataklinik(){
        return view('klinik.tambahklinik');

    }
    
    public function storeklinik(Request $request){
        $request->validate([
            'no_registrasi_klinik'=>'required',
            'nama_klinik'=>'required',
            'alamat_klinik'=>'required'	,
            'no_telp_klinik'=>'required',
        ]);
        $klinik=Klinik::create([
            'no_registrasi_klinik'=>$request->no_registrasi_klinik,
            'nama_klinik'=>$request->nama_klinik,
            'alamat_klinik'=>$request->alamat_klinik	,
            'no_telp_klinik'=>$request->no_telp_klinik	,
        ]);
        $klinik->save();
        return back();
    }
}
