<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepartmentSupervisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DepartmentSupervisor::factory()
        ->count(10)
        ->create();
    }
}
