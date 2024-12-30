<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Occupant;
use App\Models\Payment;

class PaymentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payment::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'amount' => $this->faker->randomFloat(2, 0, 999999.99),
            'type' => $this->faker->word(),
            'notes' => $this->faker->text(),
            'is_paid' => $this->faker->boolean(),
            'invoice_date' => $this->faker->dateTime(),
            'paid_date' => $this->faker->dateTime(),
            'occupant_id' => Occupant::factory(),
        ];
    }
}
