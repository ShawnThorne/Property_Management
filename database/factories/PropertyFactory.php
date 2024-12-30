<?php

namespace Database\Factories;

use App\Models\Organization;
use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Property::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'about' => $this->faker->word(),
            'address' => $this->faker->word(),
            'num_of_baths' => $this->faker->randomFloat(0, 0, 9999999999.),
            'organization_id' => Organization::factory(),
        ];
    }
}
