<?php

namespace Database\Seeders;

use App\Models\TimeLine;
use Illuminate\Database\Seeder;

class TimelineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\TimeLine::factory()
        ->count(10)
        ->create();
    }
}
