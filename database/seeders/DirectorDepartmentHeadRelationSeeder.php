<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DirectorDepartmentHeadRelation;

class DirectorDepartmentHeadRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DirectorDepartmentHeadRelation::factory()
            ->count(10)
            ->create();
    }
}
