<?php

namespace Database\Seeders;

use App\Models\Lists;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lists::factory(200)->create();
    }
}
