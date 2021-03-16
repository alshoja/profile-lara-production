<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Department;
use App\Models\DepartmentHead;
use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentHeadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DepartmentHead::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'depart_head_id' => User::factory()->state(['role' => 'department_head',]),
            'dep_id' => Department::factory(),
        ];
    }
}
