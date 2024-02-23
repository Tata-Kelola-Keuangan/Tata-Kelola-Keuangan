<?php

namespace Database\Seeders;

use Database\Seeders\UnitSeeder as SeedersUnitSeeder;
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
        $this->call([
            AdminSeeder::class,
        ]);

        \App\Models\Unit::factory(3)->create();
        \App\Models\Perencanaan::factory(5)->create();
        // \App\Models\User::factory(10)->create();
        // \App\Models\Post::factory(100)->create();
    }
}
