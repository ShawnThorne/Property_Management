<?php

namespace Database\Factories;

use App\Models\Occupant;
use App\Models\PropertyRoom;
use Illuminate\Database\Eloquent\Factories\Factory;

class OccupantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Occupant::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'room_id' => PropertyRoom::factory(),
        ];
    }
}
