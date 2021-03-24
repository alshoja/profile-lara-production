<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DirectorGdRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DepartmentDirector::factory()
            ->count(10)
            ->create();
    }
}
