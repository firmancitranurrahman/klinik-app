<?php

namespace Database\Seeders;

use App\Models\Spesialisasi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);
        $this->call(PasienSeeder::class);
        $this->call(SpesialisasiSeeder::class);
        $this->call(PelayananSeeder::class);
    }
}
