<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Pelayanan;
use App\Models\Pemeriksaan;
use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Writer\PDF;
use PhpOffice\PhpWord\Writer\Word2007;
use PhpOffice\PhpWord\Writer\Word2013;


class PasienController extends Controller
{
    //
   
    public function listdatapasien(){
        $pasien= Pasien::all();

        return view('pasien.listdatapasien',['pasien'=>$pasien]);
    }

    public function listdatapelayanan(){
       

            $query=Pemeriksaan::with(['pelayanans'])
            ->Leftjoin('pelayanans', 'pemeriksaans.pelayanan', '=', 'pelayanans.id')
            ->Leftjoin('pasiens', 'pemeriksaans.pasien', '=', 'pasiens.id')
            ->where('status', 'Dalam Antrian')
            // ->select('pemeriksaans.*', 'pelayanans.nama_pelayanan as nama_pelayanan,pasiens.name')
            ->orderBy('no_registrasi', 'desc') // Ganti 'nama_kolom_urutan' dengan kolom yang ingin Anda urutkan
            ->get();

            $query2=Pemeriksaan::with(['pelayanans'])
            ->Leftjoin('pelayanans', 'pemeriksaans.pelayanan', '=', 'pelayanans.id')
            ->Leftjoin('pasiens', 'pemeriksaans.pasien', '=', 'pasiens.id')
            ->Leftjoin('users', 'pemeriksaans.dokter', '=', 'users.id')
            ->select('pemeriksaans.id AS id_pemeriksaan','pemeriksaans.*','pelayanans.*', 'users.name AS nama_dokter', 'pasiens.name AS nama_pasien') // Sertakan kolom 'name' dari tabel 'pelayanans'
            ->where('status', 'Sudah Diperiksa')

            ->orderBy('no_registrasi', 'desc') // Ganti 'nama_kolom_urutan' dengan kolom yang ingin Anda urutkan
            ->get();

        
        $pelayanan= Pelayanan::all();
        
        // return dd($query);
        return view('pasien.listdatapelayanan',['query'=>$query,'query2'=>$query2,'pelayanan'=>$pelayanan]);
        
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
        $dokter= User::whereHas('roles',function($query){
            $query->where('name','dokter');
        })->get();
       
    //     $currentDate = now();
    //      // Membuat format nomor registrasi yang diinginkan
    // $noRegisterFormat = $currentDate->format('Ymd') . '%04d';

    // // Mendapatkan nomor registrasi terakhir yang digenerate
    // $lastRegister = Pemeriksaan::latest('no_registrasi')->first();

    // // Jika sudah ada nomor registrasi sebelumnya
    // if ($lastRegister) {
    //     // Mendapatkan nomor registrasi terakhir yang digenerate
    //     $lastRegisterNumber = substr($lastRegister->no_registrasi, 8);

    //     // Mengecek apakah tahun, bulan, dan hari sama dengan tanggal saat ini
    //     if ($currentDate->isSameDay($lastRegister->created_at)) {
    //         // Increment nomor registrasi
    //         $nextRegisterNumber = intval($lastRegisterNumber) + 1;
    //     } else {
    //         // Jika tanggal berbeda, reset nomor registrasi
    //         $nextRegisterNumber = 1;
    //     }
    // } else {
    //     // Jika belum ada nomor registrasi sebelumnya
    //     $nextRegisterNumber = 1;
    // }

    // // Membuat nomor registrasi baru dengan format yang diinginkan
    // $noRegister = sprintf($noRegisterFormat, $nextRegisterNumber);

 // Mendapatkan dua digit terakhir tahun saat ini
 $year = date('y');

 // Mendapatkan nomor rekam medis terakhir yang digenerate
 $lastRekamMedis = Pemeriksaan::latest('no_registrasi')->first();

 // Jika sudah ada nomor rekam medis sebelumnya
 if ($lastRekamMedis) {
     // Mendapatkan nomor rekam medis terakhir yang digenerate
     $lastRekamMedisNumber = substr($lastRekamMedis->nomor_rekam_medis, 2);

     // Increment nomor rekam medis
     $nextRekamMedisNumber = intval($lastRekamMedisNumber) + 1;
 } else {
     // Jika belum ada nomor rekam medis sebelumnya
     $nextRekamMedisNumber = 1;
 }

 // Membuat nomor rekam medis baru dengan format yang diinginkan
 $noRegister = $year . sprintf("%04d", $nextRekamMedisNumber);

        
      return view('pasien.registerpelayanan',['pelayanan'=>$pelayanan,'noRegister'=>$noRegister,'dokter'=>$dokter]);
        // return dd($dokter);
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

    public function prosespemeriksaan( Request $request){
        $tgl_pemeriksaan= now();
        $request->validate([
            'no_registrasi' => 'required',
            // Pastikan pelayanan dengan ID yang dipilih ada
        ]);
        
        // $registrasi->save();
        try{
            $registrasi= new Pemeriksaan();
            $registrasi->tgl_pemeriksaan= now();
            $registrasi->no_registrasi= $request->input('no_registrasi');
            $registrasi->pasien= $request->input('pasien');
            $registrasi->keluhan = json_encode($request->keluhan); // Simpan keluhan dalam bentuk JSON      
            $registrasi->dokter= $request->input('dokter');
            $registrasi->save(); // Simpan pemeriksaan untuk mendapatkan ID
          
            // return redirect()->route('listdatapelayanan')->with('success', 'Pelayanan berhasil disimpan pada pemeriksaan.');
            return response()->json(['success' => true, 'message' => 'Pelayanan berhasil disimpan pada pemeriksaan.']);
        }catch(\Exception $e){
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        }
    
    }

    public function formpemeriksaan($id){
        $query = Pemeriksaan::findOrFail($id);


        return view('pasien.formpemeriksaan',['query'=>$query]);
    }

    public function updatepemeriksaan(Request $request,$id){
        //  try{
         $query = Pemeriksaan::find($id);
         $query->berat_badan= $request->berat_badan;
         $query->suhu= $request->suhu;
         $query->pelayanan= $request->pelayanan;
         $query->status= "Sudah Diperiksa";
         $query->save();

         return dd($query);
         //  return response()->json(['success' => true, 'message' => 'Pelayanan berhasil disimpan pada pemeriksaan.']);
        // }catch(\Exception $e){
        //     return response()->json(['success' => false, 'message' => 'Terjadi kesalahan: ' . $e->getMessage()], 500);
        // }
    }



    public function cetakdata(Request $request){
          // Mendapatkan data pasien dari permintaan AJAX
        $pasienIds = $request->input('pasien_ids');

        // Mengambil data pasien berdasarkan ID yang dipilih
        $dataPasien = Pasien::whereIn('id', $pasienIds)->get();


         // Buat dokumen DOCX menggunakan PhpWord
         $phpWord = new Phpword();
         $section = $phpWord->addSection();
         $section->addText('Data Pasien yang Dipilih:');
        
         foreach ($dataPasien as $pasien) {
            $section->addText("Nama: {$pasien['nama']}");
            $section->addText("No. KK: {$pasien['no_kk']}");
            $section->addText("Pekerjaan: {$pasien['pekerjaan']}");
            $section->addText("Status Pernikahan: {$pasien['status_pernikahan']}");
            $section->addText("Asuransi: {$pasien['asuransi']}");
            $section->addText("Email: {$pasien['email']}");
            $section->addText("------------------------");
        }

        // Simpan dokumen ke file dengan format Word 2013
        $filename = storage_path('app/public/dokumen_pasien.docx');
        $objWriter = new Word2007($phpWord);
        $objWriter->save($filename);
        // Respon ke klien
        return response()->json(['status' => 'success', 'file_path' => asset('storage/dokumen_pasien.docx')]);
    }

    public function cetakPDF(Request $request)
    {
        // Ambil ID pasien yang dicentang dari request
        $selectedIds = $request->input('ids');

        // Ambil data pasien berdasarkan ID yang dicentang
        $pasien = Pasien::whereIn('id', $selectedIds)->get();

        // Buat dokumen PDF menggunakan DomPDF
        $pdf = PDF::loadView('nama-view-pdf', compact('pasien'));

        // Contoh mengunduh dokumen PDF
        return $pdf->download('dokumen.pdf');
    }

 

  

    }





    

