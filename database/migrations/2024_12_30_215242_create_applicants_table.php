<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->foreignId('organization_id')->constrained()->cascadeOnDelete();
            $table->dateTime('desired_move_in');
            $table->boolean('applying_as_group');
            $table->text('group_names')->nullable();
            $table->text('discovery_method')->nullable();
            $table->string('full_legal_name');
            $table->dateTime('date_of_birth');
            $table->string('current_address');
            $table->string('cell_phone');
            $table->string('parents_address')->nullable();
            $table->string('parents_phone')->nullable();
            $table->string('school')->nullable();
            $table->boolean('ever_been_evicted');
            $table->boolean('willfully_intentionally_refused_rent');
            $table->boolean('caused_more_$150_property_damage');
            $table->boolean('convicted_of_felony_misdemeanor');
            $table->boolean('credit_problems_previous_2_years');
            $table->boolean('under_18');
            $table->boolean('military_enlistment');
            $table->boolean('bringing_pets');
            $table->text('if_yes_any_explain')->nullable();
            $table->string('driver_license_number');
            $table->string('driver_license_state');
            $table->boolean('owns_vehicle');
            $table->string('vehicle_make')->nullable();
            $table->string('vehicle_year')->nullable();
            $table->string('vehicle_license_plate')->nullable();
            $table->string('vehicle_license_state')->nullable();
            $table->boolean('has_bicycle');
            $table->boolean('has_boat');
            $table->boolean('has_motorcycle');
            $table->boolean('has_camper');
            $table->boolean('is_employed');
            $table->string('current_employer')->nullable();
            $table->string('employer_phone')->nullable();
            $table->string('employer_address')->nullable();
            $table->decimal('current_monthly_salary', 8, 2)->nullable();
            $table->string('employer_supervisor')->nullable();
            $table->string('employer_length_of_employment')->nullable();
            $table->text('if_not_employed_who_provides_living_expenses')->nullable();
            $table->string('provider_phone')->nullable();
            $table->string('provider_email')->nullable();
            $table->string('provider_address')->nullable();
            $table->string('previous_rental_1_name');
            $table->string('previous_rental_1_phone');
            $table->string('previous_rental_1_address');
            $table->dateTime('previous_rental_1_start_date');
            $table->dateTime('previous_rental_1_end_date');
            $table->string('previous_rental_2_name')->nullable();
            $table->string('previous_rental_2_phone')->nullable();
            $table->string('previous_rental_2_address')->nullable();
            $table->dateTime('previous_rental_2_start_date')->nullable();
            $table->dateTime('previous_rental_2_end_date')->nullable();
            $table->string('previous_rental_3_name')->nullable();
            $table->string('previous_rental_3_phone')->nullable();
            $table->string('previous_rental_3_address')->nullable();
            $table->dateTime('previous_rental_3_start_date')->nullable();
            $table->dateTime('previous_rental_3_end_date')->nullable();
            $table->string('previous_rental_4_name')->nullable();
            $table->string('previous_rental_4_phone')->nullable();
            $table->string('previous_rental_4_address')->nullable();
            $table->dateTime('previous_rental_4_start_date')->nullable();
            $table->dateTime('previous_rental_4_end_date')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
