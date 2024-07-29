<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pemeriksaan extends Model
{
    use HasFactory;
    protected $table='pemeriksaans';

    protected $fillable=[  
        'id',
        'no_registrasi',
        'tgl_pemeriksaan',
        'pelayanan',
        'dokter',
        'keluhan',
        'pasien',
        'status',
        'tgl_pemeriksaan'
    ];

   
    public function pelayanans()
    {
        // return $this->hasMany(Pelayanan::class);
        return $this->belongsToMany(Pelayanan::class, 'pelayanan_pemeriksaan');    }

        public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
    
}
