<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Maya\Installer\Database\Seeders\DatabaseSeeder as MayaDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MayaDatabaseSeeder::class);
    }
}
