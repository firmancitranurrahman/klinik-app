<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Dokter;
use App\Models\Spesialisasi;

class DokterController extends Controller
{
    //
    public function tambahdatadokter(){
        $spesialisasi=Spesialisasi::all();
        return view('dokter.tambahdokter',['spesialisasi'=>$spesialisasi]);
    }

    public function storedokter(Request $request){
        $request->validate([
            'name'=>'required',
            'alamat'=>'required',
            'spesialisasi'=>'required',
            'no_hp'=>'required',
            'email'=>'required',
        ]);
        // $this->validate($request,[
           
        // ]);
        $dokter=Dokter::create([
            'name'=>$request->name,
            'alamat'=>$request->alamat,
            'spesialisasi'=>$request->spesialisasi,
            'no_hp'=>$request->no_hp,
            'email'=>$request->email,
            
        ]);
        // $dokter->assignRole('dokter');
        // return redirect('listdatadokter');
        return dd($dokter);
    }
      

    public function prosesaturjadwal(Request $request,$id){

    }

    public function jadwalpraktekdokter(){
        $dokter = User::role('dokter')->select('name','spesialisasi', 'alamat')->get();
        $spesialisasi= Spesialisasi::all();
        return view('dokter.jadwalpraktekdokter',['spesialisasi'=>$spesialisasi,'dokter'=>$dokter]);
    }

    public function registerpelayanan(Request $request){
        return view('pasien.registerpelayanan');
    }

   

}
