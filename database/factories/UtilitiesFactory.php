<?php

namespace Database\Factories;

use App\Models\Property;
use App\Models\Utilities;
use Illuminate\Database\Eloquent\Factories\Factory;

class UtilitiesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Utilities::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2, 0, 999999.99),
            'property_id' => Property::factory(),
        ];
    }
}
