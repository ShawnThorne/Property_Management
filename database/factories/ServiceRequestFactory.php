<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Occupant;
use App\Models\ServiceRequest;

class ServiceRequestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ServiceRequest::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->text(),
            'status' => $this->faker->word(),
            'occupant_id' => Occupant::factory(),
            'urgency' => $this->faker->word(),
        ];
    }
}
