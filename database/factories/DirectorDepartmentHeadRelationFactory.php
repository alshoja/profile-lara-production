<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\DirectorDepartmentRelation;
use Illuminate\Database\Eloquent\Factories\Factory;

class DirectorDepartmentHeadRelationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DirectorDepartmentHeadRelation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'director_id' => User::factory()->state(['role' => 'director']),
            'depart_head_id' => User::factory()->state(['role' => 'depart_head']),
        ];
    }
}
