<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
  
    //
    public function index(){
        return view('index.index');
    }

    // ====== SUPER ADMIN ====== //

                     // ====== DOKTER ===== //
    public function tambahdatadokter(){
        return view('dokter.tambahdatadokter');
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
        $user=User::create([
            'name'=>$request->name,
            'alamat'=>$request->alamat,
            'spesialisasi'=>$request->spesialisasi,
            'no_hp'=>$request->no_hp,
            'email'=>$request->email,
        ]);
        $user->assignRole('dokter');
        return back();
    }
                // ===== END DOKTER ===== //

        // =======  PASIEN ======= //
   
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
        $user=User::create([
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
        $user->assignRole('pasien');
        return back()->response()->json(['success' => 'success', 200]);
        ;
    }

        // ======= END PASIEN ======= //

        
    // public function listdatauser(){
    //     return view('user.listdatauser');
    // }

    // public function tambahdatauser(){
    //     $roles= Role::all();

    //     return view('user.tambahdatauser',['roles'=>$roles]);
    // }


    // public function storeuser(Request $request){
       
        
    //     $this->validate($request,[
    //         'name'=>'required',
    //         'ip_address'=>'required',
    //         'alamat'=>'required',
    //         'no_rekening'=>'required',
    //         'email'=>'required|email',
    //         'password'=>'min:8' ,
    //         [
    //             'name.required' => 'Kolom nama wajib diisi.',
    //             'alamat.required' => 'Kolom alamat wajib diisi.',
    //             'no_rekening.required' => 'Kolom nomor rekening wajib diisi.',
    //             'email.required' => 'Kolom email wajib diisi.',
    //             'email.email' => 'Format email tidak valid.',
    //             'password.min' => 'Password minimal harus terdiri dari 8 karakter.'
    //         ]
           
    //     ]);
        
    //     // $pass  = str_pad(mt_rand(1,999999),6,'0',STR_PAD_LEFT);

    //     $user= User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         // 'password'=>bcrypt($request->password),
    //         // 'password_default'=> Hash::make($pass),
    //         // 'password'=>$pass,
    //         // 'password_default'=> $pass,

    //         // 'alamat'=>$request->alamat,
    //         // 'ip_address'=>$request->ip_address,
    //         // 'kota'=>$request->kota,
    //         // 'status'=>$request->status,
    //         // 'no_rekening'=>$request->no_rekening,
    //         // 'created_by' => Auth::user()->name,

    //         // $this->kirimEmail($id)

    //         // 'token'=>(new Token())->Unique('users','token',16)
    //     ]);


    //     $role = Role::findOrFail($request->role_id);
    //     $user->assignRole($role);
    //     // if($user){
    //     //     return Response::json([
    //     //         'hello' => 200
    //     //     ]);
    //     // }
       
    //     // flash('data berhasil di simpan');
    //     // return response()->json($user, 200);

    //     return back();
    // }
}
