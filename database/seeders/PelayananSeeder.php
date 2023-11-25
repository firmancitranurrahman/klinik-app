<?php

namespace Database\Seeders;

use App\Models\Pelayanan;
use Illuminate\Database\Seeder;

class PelayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Pelayanan::create([
            'nama_pelayanan' => 'Rawat Luka',
        ]);
        
        Pelayanan::create([
            'nama_pelayanan' => 'Umum Dewasa',
        ]);
        Pelayanan::create([
            'nama_pelayanan' => 'Umum Anak',
        ]);
        Pelayanan::create([
            'nama_pelayanan' => 'Suntik KB',
        ]);
        Pelayanan::create([
            'nama_pelayanan' => 'Nebulizer',
        ]);Pelayanan::create([
            'nama_pelayanan' => 'Bedah',
        ]);Pelayanan::create([
            'nama_pelayanan' => 'Medical Check Up',
        ]);
        Pelayanan::create([
            'nama_pelayanan' => 'Khitan',
        ]);
        Pelayanan::create([
            'nama_pelayanan' => 'Perawatan Kecantikan',
        ]);
    }
}
