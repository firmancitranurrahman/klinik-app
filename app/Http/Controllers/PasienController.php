<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Pelayanan;
use App\Models\Pemeriksaan;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    //
   
    public function listdatapasien(){
        $pasien= Pasien::all();

        return view('pasien.listdatapasien',['pasien'=>$pasien]);
    }

    public function listdatapelayanan(){
        $query=DB::table('pemeriksaans as pem')
        ->join('pasiens as pas', 'pem.pasien', '=', 'pas.id')
        // ->join('orders', 'users.id', '=', 'orders.user_id')
        ->select('pem.*', 'pas.name')->get();

        return view('pasien.listdatapelayanan',['query'=>$query]);
    }
    public function tambahdatapasien(){
        return view('pasien.tambahpasien');
    }

    public function storepasien(Request $request){
        $request->validate([
            'name'=>'required',
            'umur'=>'required',
            'golongan_darah'=>'required',
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
            'nik'=>$request->nik,
            'tgl_lahir'=>$request->tgl_lahir,
            'pekerjaan'=>$request->pekerjaan,
            'status_pernikahan'=>$request->status_pernikahan,
            'asuransi'=>$request->asuransi,
            'email'=>$request->email,
            
        ]);
        return dd($pasien);
    }
    
    public function registerpelayanan(){
        $pelayanan= Pelayanan::all();
       
        $currentDate = now();
         // Membuat format nomor registrasi yang diinginkan
    $noRegisterFormat = $currentDate->format('Ymd') . '%04d';

    // Mendapatkan nomor registrasi terakhir yang digenerate
    $lastRegister = Pemeriksaan::latest('no_registrasi')->first();

    // Jika sudah ada nomor registrasi sebelumnya
    if ($lastRegister) {
        // Mendapatkan nomor registrasi terakhir yang digenerate
        $lastRegisterNumber = substr($lastRegister->no_registrasi, 8);

        // Mengecek apakah tahun, bulan, dan hari sama dengan tanggal saat ini
        if ($currentDate->isSameDay($lastRegister->created_at)) {
            // Increment nomor registrasi
            $nextRegisterNumber = intval($lastRegisterNumber) + 1;
        } else {
            // Jika tanggal berbeda, reset nomor registrasi
            $nextRegisterNumber = 1;
        }
    } else {
        // Jika belum ada nomor registrasi sebelumnya
        $nextRegisterNumber = 1;
    }

    // Membuat nomor registrasi baru dengan format yang diinginkan
    $noRegister = sprintf($noRegisterFormat, $nextRegisterNumber);


        
      return view('pasien.registerpelayanan',['pelayanan'=>$pelayanan,'noRegister'=>$noRegister]);
    }  
    
    public function ceknik(Request $request){
        $nik=$request->input('nik');

        $pasien = Pasien::where('nik', $nik)->first();

        if($pasien!== null){
            return response()->json([
                        'status' => true,
                        'id' => $pasien->id,
                        'nama' => $pasien->name,
                        'alamat' => $pasien->alamat,
                    ]);
        }else{
            return response()->json([
                'status' =>false ]
            );
        }  
    }

    public function prosespelayanan( Request $request){
        $tgl_pemeriksaan= now();
        $pemeriksaan = Pemeriksaan::create([
            'no_registrasi'=>$request->no_registrasi,
            'tgl_pemeriksaan'=>$tgl_pemeriksaan->toDateString(),
            'spesialisasi'=>$request->spesialisasi,
            'pasien'=>$request->pasien,
            // 'status'=>$request->pemeriksaan
        ]);

        return dd($pemeriksaan);
    }




   



    
}
