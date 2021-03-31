<?php

namespace Database\Seeders;

use App\Models\DepartmentHead;
use Illuminate\Database\Seeder;

class DepartmentHeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DepartmentHead::factory()
            ->count(10)
            ->create();
    }
}
