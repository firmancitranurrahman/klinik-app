<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $user = User::create([
            'name' => 'Buyono',
            'email' => 'superadmin@gmail.com',
            // 'ip_address'=>'192.168.223.221',
            // 'status'=>'actived',
            // 'is_password_changed'=>'1',
            'email_verified_at' => now(),
            // 'kota' => Reffkota::all()->random()->id,

            'password' => bcrypt('12345678'),
        ]);
        $user->assignRole('superadmin');
        $user = User::create([
            'name' => 'Buyono',
            'email' => 'admin@gmail.com',
            // 'ip_address'=>'192.168.223.221',
            // 'status'=>'actived',
            // 'is_password_changed'=>'1',
            'email_verified_at' => now(),
            // 'kota' => Reffkota::all()->random()->id,

            'password' => bcrypt('12345678'),
        ]);
        $user->assignRole('admin');

        $user = User::create([
            'name' => 'Buyono',
            'email' => 'dokter@gmail.com',
            // 'ip_address'=>'192.168.223.221',
            // 'status'=>'actived',
            // 'is_password_changed'=>'1',
            'email_verified_at' => now(),
            // 'kota' => Reffkota::all()->random()->id,
            'spesialisasi'=>'spesialis jantung',
            'password' => bcrypt('12345678'),
        ]);
        $user->assignRole('dokter');
        $user = User::create([
            'name' => 'Buyono',
            'email' => 'pasien@gmail.com',
            // 'ip_address'=>'192.168.223.221',
            // 'status'=>'actived',
            // 'is_password_changed'=>'1',
            'email_verified_at' => now(),
            // 'kota' => Reffkota::all()->random()->id,

            'password' => bcrypt('12345678'),
        ]);
        $user->assignRole('pasien');


    }
}
