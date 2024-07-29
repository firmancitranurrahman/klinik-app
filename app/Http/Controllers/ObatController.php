<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Pasien;
use App\Models\Pelayanan;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    //
    public function listdataobat (){
        $obat= Obat::all();
        return view('obat.listdataobat',['obat'=>$obat]);

        // $pemeriksaan= Pemeriksaan::all();
        // return view('obat.listdataobat',['pemeriksaan'=>$pemeriksaan]);

    }

    public function tambahobat (){
        
      
    // Membuat nomor registrasi baru dengan format yang diinginkan
        return view('obat.tambahobat');
    }
    public function editobat($id){
        $obat= Obat::find($id);
        return view('obat.editobat',['obat'=>$obat]); 

        // $pemeriksaan= Pemeriksaan::find($id);
        // return view('obat.editobat',['pemeriksaan'=>$pemeriksaan]);
        
    }
    public function storeobat(Request $request){
        
        try {
            Obat::create([
                'kode_obat'=>$request->kode_obat,
                'nama_obat'=>$request->nama_obat,
                'satuan'=>$request->satuan,

                'stok'=>$request->stok,
                'harga_beli'=>$request->harga_beli,
                'harga_jual'=>$request->harga_jual,
    
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

    public function registerobat($id){
        $obat= Obat::all();
        $pemeriksaan = Pemeriksaan::with(['pelayanans'])
        ->leftJoin('pasiens', 'pemeriksaans.pasien', '=', 'pasiens.id')
        ->where('pemeriksaans.id', $id)
        ->select('pemeriksaans.*','pasiens.name as nama_pasien','pasiens.no_rekam_medis')
        ->first(); // Mengambil satu data yang cocok
 
        return view('obat.registerobat',['obat'=>$obat,'pemeriksaan'=>$pemeriksaan]);
// return dd($pemeriksaan);
}

 public function ambilNamaObat($nama_obat){
    $obat = Obat::where('nama_obat',$nama_obat)->first();

    if ($obat) {
        $dataObat = [
            'satuan' => $obat->satuan,
            'stok' => $obat->stok,
            'kode_obat' => $obat->kode_obat,
            'harga_jual'=> $obat->harga_jual
        ];
    } else {
        $dataObat = [];
    }

    return response()->json($dataObat);
 }

 public function updateStok(Request $request){
    $pembelian = $request->input('pembelian');

            try {
                foreach ($pembelian as $item) {
                    // Cari obat berdasarkan kode_obat
                    $obat = Obat::where('kode_obat', $item['kode_obat'])->first();
                    if ($obat) {
                        // Kurangi stok obat
                        $obat->stok -= $item['jumlah'];
                        $obat->save();
                    } else {
                        return response()->json([
                            'success' => false,
                            'message' => 'Obat dengan kode ' . $item['kode_obat'] . ' tidak ditemukan.'
                        ], 404);
                    }
                }

                return response()->json([
                    'success' => true,
                    'message' => 'Stok obat berhasil diperbarui.'
                ]);

            } catch (\Exception $e) {
                return response()->json([
                    'success' => false,
                    'message' => 'Terjadi kesalahan: ' . $e->getMessage()
                ], 500);
            }

}
}