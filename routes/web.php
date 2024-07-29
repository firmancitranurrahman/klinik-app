<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\KlinikController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index',[UserController::class,'index'])->name('index');

// ===== USER ===== //
Route::get('/listdatauser',[KlinikController::class,'listdatauser'])->name('listdatauser');

// ==== SPESIALISASI ==== //


// ==== KLINIK ==== //
Route::get('/listdataklinik',[KlinikController::class,'listdataklinik'])->name('listdataklinik');
Route::get('/tambahdataklinik',[KlinikController::class,'tambahdataklinik'])->name('tambahdataklinik');
Route::post('/storeklinik',[KlinikController::class,'storeklinik'])->name('storeklinik');


// ===== DOKTER ==== //
Route::get('/listdatadokter',[DokterController::class,'listdatadokter'])->name('listdatadokter');
Route::get('/tambahdatadokter',[DokterController::class,'tambahdatadokter'])->name('tambahdatadokter');
Route::post('/storedokter',[DokterController::class,'storedokter'])->name('storedokter');

// Route::post('/storedokter',[UserController::class,'storedokter'])->name('storedokter');
Route::get('/jadwalpraktekdokter',[DokterController::class,'jadwalpraktekdokter'])->name('jadwalpraktekdokter');
Route::get('/jadwalpraktekdokter/tambahjadwal',[DokterController::class,'jadwalpraktekdokter'])->name('tambahjadwal');

// === PASIEN === //
Route::get('/listdatapasien',[PasienController::class,'listdatapasien'])->name('listdatapasien');
Route::get('/tambahdatapasien',[PasienController::class,'tambahdatapasien'])->name('tambahdatapasien');

Route::post('/storepasien',[PasienController::class,'storepasien'])->name('storepasien');


Route::get('/registerpelayanan', [PasienController::class,'registerpelayanan'])->name('registerpelayanan');

Route::get('/dokter/{id}', [DokterController::class,'cekombak'])->name('cekombak');


Route::post('/cekrm', [PasienController::class, 'cekrm'])->name('cekrm');
Route::post('/ceknik2', [PasienController::class, 'ceknik2'])->name('ceknik2');

Route::get('/formpemeriksaan/{id}/', [PasienController::class,'formpemeriksaan'])->name('formpemeriksaan');
Route::put('/updatepemeriksaan/{id}', [PasienController::class,'updatepemeriksaan'])->name('updatepemeriksaan');


Route::post('/prosespemeriksaan', [PasienController::class, 'prosespemeriksaan'])->name('prosespemeriksaan');
Route::get('/listdatapelayanan', [PasienController::class,'listdatapelayanan'])->name('listdatapelayanan');

Route::get('/listdatabelumdiperiksa', [PasienController::class,'listdatabelumdiperiksa'])->name('listdatabelumdiperiksa');

Route::get('/listdatasudahdiperiksa', [PasienController::class,'listdatasudahdiperiksa'])->name('listdatasudahdiperiksa');

Route::get('/listdataobat', [ObatController::class,'listdataobat'])->name('listdataobat');
Route::get('/tambahobat', [ObatController::class,'tambahobat'])->name('tambahobat');


Route::get('/registerobat/{id}', [ObatController::class,'registerobat'])->name('registerobat');
Route::post('/storeobat', [ObatController::class,'storeobat'])->name('storeobat');
Route::get('/editobat/{id}', [ObatController::class,'editobat'])->name('editobat');

// Jika menggunakan web.php
Route::post('/updateStok', [ObatController::class, 'updateStok'])->name('updateStok');

Route::get('/ambilNamaObat/{nama_obat}',[ObatController::class,'ambilNamaObat'])->name('ambilNamaObat');

Route::post('/cetakdata', [PasienController::class, 'cetakdata'])->name('cetakdata');
Route::post('/cetak-pdf', 'PasienController@cetakPDF');


// Route::post('/ceknik', [PasienController::class,'ceknik'])->name('ceknik');

Route::get('/logout',function(){
    auth::logout();
    return redirect('login');
})->name('logout');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
