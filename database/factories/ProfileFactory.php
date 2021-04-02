<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\User;
use App\Models\Profile;
use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name,
            "nationality" => $this->faker->country,
            "dob" => '2021-03-24 08:31:45',
            "gender" => 'male',
            "citizen_status" => 1,
            "citizen_location" => $this->faker->country,
            "citizen_id" => $this->faker->randomDigit,
            "citizen_uid" => $this->faker->randomDigit,
            "passport_no" => $this->faker->randomDigit,
            "passport_type" => 'type',
            "entered_by" => 'ALshoja',
            "bought_by" => 'Sachu',
            "belongs_to" => 2,
            "entity" => 'entity',
            "entry_date" => '2021-03-24 08:31:45',
            "entity_location" => $this->faker->country,
            "shipping_no" => $this->faker->randomDigit,
            "coming_from" => 'india',
            "going_to" => 'dubai',
            "final_destination" => 'usa',
            "profile_image" => 'image.png',
            "product_image" => 'image.png',
            "doc_image" => 'image.png',
            "record_status" => 'completed',
            "record_dep_transfer" => 'Done',
            "note" => "some note",
            "dep_id" => Department::factory(),
            "section_id" => Section::factory(),
            "employ_id" => User::factory()->state(['role' => 'employ']),
        ];
    }
}
