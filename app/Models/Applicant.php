<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Applicant extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'organization_id',
        'desired_move_in',
        'applying_as_group',
        'group_names',
        'discovery_method',
        'full_legal_name',
        'date_of_birth',
        'current_address',
        'cell_phone',
        'parents_address',
        'parents_phone',
        'school',
        'ever_been_evicted',
        'willfully_intentionally_refused_rent',
        'caused_more_$150_property_damage',
        'convicted_of_felony_misdemeanor',
        'credit_problems_previous_2_years',
        'under_18',
        'military_enlistment',
        'bringing_pets',
        'if_yes_any_explain',
        'driver_license_number',
        'driver_license_state',
        'owns_vehicle',
        'vehicle_make',
        'vehicle_year',
        'vehicle_license_plate',
        'vehicle_license_state',
        'has_bicycle',
        'has_boat',
        'has_motorcycle',
        'has_camper',
        'is_employed',
        'current_employer',
        'employer_phone',
        'employer_address',
        'current_monthly_salary',
        'employer_supervisor',
        'employer_length_of_employment',
        'if_not_employed_who_provides_living_expenses',
        'provider_phone',
        'provider_email',
        'provider_address',
        'previous_rental_1_name',
        'previous_rental_1_phone',
        'previous_rental_1_address',
        'previous_rental_1_start_date',
        'previous_rental_1_end_date',
        'previous_rental_2_name',
        'previous_rental_2_phone',
        'previous_rental_2_address',
        'previous_rental_2_start_date',
        'previous_rental_2_end_date',
        'previous_rental_3_name',
        'previous_rental_3_phone',
        'previous_rental_3_address',
        'previous_rental_3_start_date',
        'previous_rental_3_end_date',
        'previous_rental_4_name',
        'previous_rental_4_phone',
        'previous_rental_4_address',
        'previous_rental_4_start_date',
        'previous_rental_4_end_date',
        'notes',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'organization_id' => 'integer',
        'desired_move_in' => 'datetime',
        'applying_as_group' => 'boolean',
        'date_of_birth' => 'datetime',
        'ever_been_evicted' => 'boolean',
        'willfully_intentionally_refused_rent' => 'boolean',
        'caused_more_$150_property_damage' => 'boolean',
        'convicted_of_felony_misdemeanor' => 'boolean',
        'credit_problems_previous_2_years' => 'boolean',
        'under_18' => 'boolean',
        'military_enlistment' => 'boolean',
        'bringing_pets' => 'boolean',
        'owns_vehicle' => 'boolean',
        'has_bicycle' => 'boolean',
        'has_boat' => 'boolean',
        'has_motorcycle' => 'boolean',
        'has_camper' => 'boolean',
        'is_employed' => 'boolean',
        'current_monthly_salary' => 'decimal:2',
        'previous_rental_1_start_date' => 'datetime',
        'previous_rental_1_end_date' => 'datetime',
        'previous_rental_2_start_date' => 'datetime',
        'previous_rental_2_end_date' => 'datetime',
        'previous_rental_3_start_date' => 'datetime',
        'previous_rental_3_end_date' => 'datetime',
        'previous_rental_4_start_date' => 'datetime',
        'previous_rental_4_end_date' => 'datetime',
    ];

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class);
    }
}
