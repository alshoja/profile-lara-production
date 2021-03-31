<?php

namespace Database\Factories;

use App\Models\Timeline;
use Illuminate\Database\Eloquent\Factories\Factory;

class TimeLineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Timeline::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'note' => 'Some test notes which are under evaluation',
            'user_id' => 2,
            'profile_id' => $this->faker->randomElement([1, 8]),
            'is_approved' =>  $this->faker->randomElement([0, 1]),
        ];
    }
}
