<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DepartmentHeadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\DepartmentHead::factory(10)
            ->create();
    }
}
