<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(200)->create();
        \App\Models\Item::factory(200)->create();
    }
}
