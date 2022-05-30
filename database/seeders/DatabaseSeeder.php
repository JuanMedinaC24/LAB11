<?php

namespace Database\Seeders;

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
        \App\Models\user::factory(100)->create();
        \App\Models\perfilclientes::factory(100)->create();
        \App\Models\admins::factory(100)->create();
        \App\Models\productos::factory(100)->create();

    }
}
