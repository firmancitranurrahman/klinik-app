<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Pelayanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pelayanan',
        'harga'
    ];

   
    public function pemeriksaans()
    {
        return $this->belongsToMany(Pemeriksaan::class,'pelayanan_pemeriksaan');
    }
}
