<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klinik extends Model
{
    use HasFactory;
    protected $table='kliniks';
    
    protected $fillable=[  
        'no_registrasi_klinik',
        'nama_klinik',
        'alamat_klinik'	,
        'no_telp_klinik'	,
    ];
}
