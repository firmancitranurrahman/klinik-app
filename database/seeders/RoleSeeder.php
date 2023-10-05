<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create(['name'=>'superadmin']);
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'dokter']);
        Role::create(['name'=>'pasien']);

        Permission::create(['name' => 'crud-user']);
        Permission::create(['name' => 'crud-va']);


    }
}
