<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Applicant;
use App\Models\ApplicantProperty;
use App\Models\Property;

class ApplicantPropertyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ApplicantProperty::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'applicant_id' => Applicant::factory(),
            'property_id' => Property::factory(),
        ];
    }
}
