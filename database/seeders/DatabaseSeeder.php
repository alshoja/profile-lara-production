<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;
use Database\Seeders\SectionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DepartmentSeeder::class,
            SectionSeeder::class,
            EmploySeeder::class,
            DepartmentHeadsSeeder::class,
            // DirectorGdRelationSeeder::class,
            // DirectorDepartmentHeadRelationSeeder::class
            Profile::class
        ]);
    }
}
