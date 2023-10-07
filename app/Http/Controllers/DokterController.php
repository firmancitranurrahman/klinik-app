<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Dokter;

class DokterController extends Controller
{
    //
    public function tambahdatadokter(){
        return view('dokter.tambahdokter');
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
        // $user->assignRole('dokter');
        // return redirect('listdatadokter');
        return dd($dokter);
    }
      

    public function jadwalpraktekdokter(){
        $dokter = User::role('dokter')->select('name','spesialisasi', 'alamat')->get();
        
        return view('dokter.jadwalpraktekdokter',['dokter'=>$dokter]);
    }
}
