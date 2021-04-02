<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Employ;
use App\Models\Section;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employ::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employ_id' => User::factory()->state(['role' => 'employ']),
            'dep_id' => Department::factory(),
            'section_id' => Section::factory(),
        ];
    }
}
