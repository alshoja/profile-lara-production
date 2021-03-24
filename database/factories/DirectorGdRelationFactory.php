<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\User;
use App\Models\DirectorGdRelation;
use Illuminate\Database\Eloquent\Factories\Factory;

class DirectorGdRelationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DeparmentDirector::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'director_id' => User::factory()->state(['role' => 'director']),
            'general_director_id' => User::factory()->state(['role' => 'general_director']),
            'general_director_id' => User::factory()->state(['role' => 'general_director']),
            'dep_id' => Department::factory(),
        ];
    }
}
