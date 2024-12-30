<?php

namespace Database\Factories;

use App\Models\Lease;
use App\Models\Occupant;
use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lease::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'start_date' => $this->faker->dateTime(),
            'end_date' => $this->faker->dateTime(),
            'price_month' => $this->faker->randomFloat(2, 0, 999999.99),
            'deposit' => $this->faker->randomFloat(2, 0, 999999.99),
            'occupant_id' => Occupant::factory(),
            'property_id' => Property::factory(),
        ];
    }
}
