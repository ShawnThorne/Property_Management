<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Applicant;
use App\Models\Organization;

class ApplicantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Applicant::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'organization_id' => Organization::factory(),
            'desired_move_in' => $this->faker->dateTime(),
            'applying_as_group' => $this->faker->boolean(),
            'group_names' => $this->faker->text(),
            'discovery_method' => $this->faker->text(),
            'full_legal_name' => $this->faker->word(),
            'date_of_birth' => $this->faker->dateTime(),
            'current_address' => $this->faker->word(),
            'cell_phone' => $this->faker->word(),
            'parents_address' => $this->faker->word(),
            'parents_phone' => $this->faker->word(),
            'school' => $this->faker->word(),
            'ever_been_evicted' => $this->faker->boolean(),
            'willfully_intentionally_refused_rent' => $this->faker->boolean(),
            'caused_more_$150_property_damage' => $this->faker->boolean(),
            'convicted_of_felony_misdemeanor' => $this->faker->boolean(),
            'credit_problems_previous_2_years' => $this->faker->boolean(),
            'under_18' => $this->faker->boolean(),
            'military_enlistment' => $this->faker->boolean(),
            'bringing_pets' => $this->faker->boolean(),
            'if_yes_any_explain' => $this->faker->text(),
            'driver_license_number' => $this->faker->word(),
            'driver_license_state' => $this->faker->word(),
            'owns_vehicle' => $this->faker->boolean(),
            'vehicle_make' => $this->faker->word(),
            'vehicle_year' => $this->faker->word(),
            'vehicle_license_plate' => $this->faker->word(),
            'vehicle_license_state' => $this->faker->word(),
            'has_bicycle' => $this->faker->boolean(),
            'has_boat' => $this->faker->boolean(),
            'has_motorcycle' => $this->faker->boolean(),
            'has_camper' => $this->faker->boolean(),
            'is_employed' => $this->faker->boolean(),
            'current_employer' => $this->faker->word(),
            'employer_phone' => $this->faker->word(),
            'employer_address' => $this->faker->word(),
            'current_monthly_salary' => $this->faker->randomFloat(2, 0, 999999.99),
            'employer_supervisor' => $this->faker->word(),
            'employer_length_of_employment' => $this->faker->word(),
            'if_not_employed_who_provides_living_expenses' => $this->faker->text(),
            'provider_phone' => $this->faker->word(),
            'provider_email' => $this->faker->word(),
            'provider_address' => $this->faker->word(),
            'previous_rental_1_name' => $this->faker->word(),
            'previous_rental_1_phone' => $this->faker->word(),
            'previous_rental_1_address' => $this->faker->word(),
            'previous_rental_1_start_date' => $this->faker->dateTime(),
            'previous_rental_1_end_date' => $this->faker->dateTime(),
            'previous_rental_2_name' => $this->faker->word(),
            'previous_rental_2_phone' => $this->faker->word(),
            'previous_rental_2_address' => $this->faker->word(),
            'previous_rental_2_start_date' => $this->faker->dateTime(),
            'previous_rental_2_end_date' => $this->faker->dateTime(),
            'previous_rental_3_name' => $this->faker->word(),
            'previous_rental_3_phone' => $this->faker->word(),
            'previous_rental_3_address' => $this->faker->word(),
            'previous_rental_3_start_date' => $this->faker->dateTime(),
            'previous_rental_3_end_date' => $this->faker->dateTime(),
            'previous_rental_4_name' => $this->faker->word(),
            'previous_rental_4_phone' => $this->faker->word(),
            'previous_rental_4_address' => $this->faker->word(),
            'previous_rental_4_start_date' => $this->faker->dateTime(),
            'previous_rental_4_end_date' => $this->faker->dateTime(),
            'notes' => $this->faker->text(),
        ];
    }
}
