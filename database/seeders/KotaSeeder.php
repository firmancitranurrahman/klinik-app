<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
// use App\Imports\KotaImport;
use App\Models\Kota;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Excel::import(new Kota, 'kotas.csv'); // Ganti dengan nama file Excel Anda
        $data = Excel::toArray(new Kota(), storage_path('app/public/kotas.ods'));
        foreach ($data[0] as $row) {
           Kota::create([
               'nama_kota' => $row[0],
               // add more columns as needed
           ]);
        }
    }
}
