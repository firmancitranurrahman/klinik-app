<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Dokter extends Model
{
    use HasFactory,HasRoles;
    protected $table='dokters';

    protected $fillable=[  
        'name',
        'alamat',
        'spesialisasi',
        'no_hp',
        'email',
        'hari_praktek',
        'jam_praktek'	,
       
    ];
}
