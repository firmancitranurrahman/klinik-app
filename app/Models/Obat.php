<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;
    protected $table='obats';

    protected $fillable=[  
        'id',
        'kode_obat', 
        'nama_obat',
        'satuan',
        'isi',
        'harga_jual',
        'harga_beli', 
        'stok'
    ];

    
}
