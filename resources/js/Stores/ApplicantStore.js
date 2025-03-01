import { defineStore } from 'pinia'
import { ref } from 'vue'

export const useApplicantFormStore = defineStore('applicantForm',() => {
  // personal info
  const name = ref(null) ;
  const email = ref(null) ;
  const phone = ref(null) ;
  const cell_phone = ref(null) ;
  const full_legal_name = ref(null) ;
  const current_address = ref(null) ;
  const school = ref(null) ;
  const date_of_birth = ref(null) ;

  // parents info
  const parents_address = ref(null) ;
  const parents_phone = ref(null) ;

  // properties applying for and related info
  const properties_applying_for = ref([]);
  const desired_move_in_date = ref(null) ;
  const applying_as_group = ref(false) ;
  const group_names = ref(null) ;
  const discovery_method = ref(null) ;

  // driver's license and related infor
  const driver_license_number = ref('') ;
  const driver_license_state = ref('') ;
  const owns_vehicle = ref(false) ;
  const vehicle_make = ref('') ;
  const vehicle_model = ref('') ;
  const vehicle_year = ref('') ;
  const vehicle_license_plate = ref('') ;
  const has_bicycle = ref(false) ;
  const has_boat = ref(false) ;
  const has_motorcycle = ref(false) ;
  const has_camper = ref(false) ;

  // employment info
  const is_employed = ref(false) ;
  const current_employer = ref('') ;
  const employer_phone = ref('') ;
  const employer_address = ref('') ;
  const current_monthly_salary = ref(0) ;
  const employer_supervisor = ref('') ;
  const employer_length_of_employment = ref('') ;
  const if_not_employed_who_provides_living_expenses = ref('') ;
  const provider_phone = ref('') ;
  const provider_email = ref('') ;
  const provider_address = ref('') ;

  // previous rental history
  const ever_been_evicted = ref(false) ;
  const willfully_intentionally_refused_to_pay_rent = ref(false) ;
  const caused_more_$150_property_damage = ref(false) ;
  const previousRentals = ref([]) ;

  // extraneous info
  const convicted_of_felony_misdemeanor = ref(false) ;
  const credit_problems_previous_2_years = ref(false) ;
  const under_18 = ref(false) ;
  const military_enlistment = ref(false) ;
  const bringing_pets = ref(false) ;
  const if_yes_any_explain = ref(null) ;
  const notes = ref('') ;

  return {
    name,
    email,
    phone,
    properties_applying_for,
    desired_move_in_date,
    applying_as_group,
    group_names,
    discovery_method,
    full_legal_name,
    date_of_birth,
    current_address,
    cell_phone,
    parents_address,
    parents_phone,
    school,
    ever_been_evicted,
    willfully_intentionally_refused_to_pay_rent,
    caused_more_$150_property_damage,
    convicted_of_felony_misdemeanor,
    credit_problems_previous_2_years,
    under_18,
    military_enlistment,
    bringing_pets,
    if_yes_any_explain,
    driver_license_number,
    driver_license_state,
    owns_vehicle,
    vehicle_make,
    vehicle_model,
    vehicle_year,
    vehicle_license_plate,
    has_bicycle,
    has_boat,
    has_motorcycle,
    has_camper,
    is_employed,
    current_employer,
    employer_phone,
    employer_address,
    current_monthly_salary,
    employer_supervisor,
    employer_length_of_employment,
    if_not_employed_who_provides_living_expenses,
    provider_phone,
    provider_email,
    provider_address,
    notes,
    previousRentals,
  }
})