<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmploySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Employ::factory()
            ->count(10)
            ->create();
    }
}
