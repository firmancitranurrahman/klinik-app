<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    //
    public function listdataobat (){
        $obat= Obat::all();
        return view('obat.listdataobat');
    }

    public function tambahobat (){
        return view('obat.tambahobat');
    }

    public function storeobat(Request $request){
        $obat= Obat::create([
            'nama_obat'=>$request->nama_obat,
        ]);

        return redirect();
    }

    public function updateobat(Request $request){

    }

}
