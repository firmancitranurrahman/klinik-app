<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    //
   
    public function listdatapasien(){
        $pasien= Pasien::all();

        return view('pasien.listdatapasien',['pasien'=>$pasien]);

    }
    public function tambahdatapasien(){
        return view('pasien.tambahpasien');
    }

    public function storepasien(Request $request){
        $request->validate([
            'name'=>'required',
            'umur'=>'required',
            'golongan_darah'=>'required',
            'no_kk'=>'required',
            'tgl_lahir'=>'required',
            'pekerjaan'=>'required',
            'status_pernikahan'=>'required',
            'asuransi'=>'required',
            'email'=>'required'
        ]);
        $pasien=Pasien::create([
            'name'=>$request->name,
            'umur'=>$request->umur,
            'golongan_darah'=>$request->golongan_darah,
            'no_kk'=>$request->no_kk,
            'tgl_lahir'=>$request->tgl_lahir,
            'pekerjaan'=>$request->pekerjaan,
            'status_pernikahan'=>$request->status_pernikahan,
            'asuransi'=>$request->asuransi,
            'email'=>$request->email,
            
        ]);
        return back();
    }
    
    public function registerpelayanan(){
      return view('pasien.registerpelayanan');
    }  
    
    public function ceknik(Request $request){
        $nik=$request->input('nik');

        $pasien = Pasien::where('nik', $nik)->first();
        if ($pasien) {
            return response()->json([
                'status' => 'available',
                'nama' => $pasien->name,
                'alamat' => $pasien->alamat,
            ]);
        } else {
            return response()->json(['status' => 'unavailable']);
        }


    }



   



    
}
