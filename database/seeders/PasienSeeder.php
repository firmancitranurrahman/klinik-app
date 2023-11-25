<?php

namespace Database\Seeders;

use App\Models\Pasien;
use Illuminate\Database\Seeder;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Pasien::create([
            'name'=>'Galih',
            'umur'=>'23',	
            'golongan_darah'=>'O',	
            'nik'=>'1111111111111111',	
            'tgl_lahir'=>'05-19-2020',
            'pekerjaan'=>'nelayan',
            'status_pernikahan'=>'menikah' ,
            'asuransi'=>'bpjs'	,
            'email'=>'koli@gmail.com'
        ]);

        	
       
    }
}
