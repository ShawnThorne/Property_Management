<?php

namespace Database\Factories;

use App\Models\Property;
use App\Models\PropertyRoom;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyRoomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PropertyRoom::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'room_designation' => $this->faker->word(),
            'num_of_occupants' => $this->faker->randomNumber(),
            'property_id' => Property::factory(),
        ];
    }
}
