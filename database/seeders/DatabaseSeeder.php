<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\City;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\City::factory(3)->create();

        City::truncate();

        City::create([
            'name' => 'Jeddah'
        ]);

        City::create([
            'name' => 'Riyadh'
        ]);

        City::create([
            'name' => 'Dammam'
        ]);




    }
}
