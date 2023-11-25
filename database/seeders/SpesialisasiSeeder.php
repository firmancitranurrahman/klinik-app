<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Spesialisasi;

class SpesialisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Spesialisasi::create([
            'nama_spesialisasi' => 'Spesialis Jantung',
        ]);
        
        Spesialisasi::create([
            'nama_spesialisasi' => 'Spesialis Jantung',
        ]);
        Spesialisasi::create([
            'nama_spesialisasi' => 'Spesialis Jantung',
        ]);
    }
}
