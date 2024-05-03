<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Pasien;
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
        
        try {
            Obat::create([
                'kode_obat'=>$request->kode_obat,
                'nama_obat'=>$request->nama_obat,
                'satuan'=>$request->satuan,
                'stok'=>$request->stok,
                'harga'=>$request->harga,
    
            ]);
            return response()->json(['success' => true, 'message' => 'Pelayanan berhasil disimpan pada pemeriksaan.']);

            //code...
        } catch (\Exception $e) {
            //throw $th;

            return response()->json(['success' => true, 'message' => 'Pelayanan berhasil disimpan pada pemeriksaan.']);

        }
        

        return redirect();
    }

    public function updateobat(Request $request){

    }

    public function registerobat(){
    //    $pasien=Pasien::find($id); 
       return view('obat.registerobat');

    }

  

}
