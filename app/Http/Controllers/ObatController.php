<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    //
    public function listdataobat (){
        $obat= Obat::all();
        return view('obat.listdataobat');
    }

    public function tambahobat (){
        

        
      
    // Membuat nomor registrasi baru dengan format yang diinginkan
        return view('obat.tambahobat');
    }

    public function storeobat(Request $request){
        
        $obat= Obat::create([
            'satuan'=>$request->satuan,
            'stok'=>$request->stok,
            'harga'=>$request->harga,

        ]);

        return redirect();
    }

    public function updateobat(Request $request){

    }

    public function registerobat($id_pemeriksaan){
        $query=Pemeriksaan::find($id_pemeriksaan);
       return view('obat.registerobat',['query'=>$query]);

    }

    // public function registerobat(){
 
    //     return view('obat.registerobat');
 
    //  }

}
