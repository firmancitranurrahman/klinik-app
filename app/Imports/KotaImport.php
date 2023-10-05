<?php

namespace App\Imports;

use App\Models\Kota;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class KotaImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
      foreach($rows as $row){
        $nama_kota = $row[0];
      }
      Kota::create([
        'nama_kota'=>$nama_kota
      ]);
    }
}
