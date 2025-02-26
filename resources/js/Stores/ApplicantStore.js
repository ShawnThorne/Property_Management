import { defineStore } from 'pinia'
import { ref } from 'vue'

// You can name the return value of `defineStore()` anything you want,
// but it's best to use the name of the store and surround it with `use`
// and `Store` (e.g. `useUserStore`, `useCartStore`, `useProductStore`)
// the first argument is a unique id of the store across your application
export const useApplicantFormStore = defineStore('applicantForm',() => {
  const name = ref(null) ;
  const email = ref(null) ;
  const phone = ref(null) ;
  const properties_applying_for = ref([]);
  const desired_move_in_date = ref(null) ;
  const applying_as_group = ref(false) ;
  const group_names = ref(null) ;
  const discovery_method = ref(null) ;
  const full_legal_name = ref(null) ;
  const date_of_birth = ref(null) ;
  const current_address = ref(null) ;
  const cell_phone = ref(null) ;
  const parents_address = ref(null) ;
  const parents_phone = ref(null) ;
  const school = ref(null) ;
  const ever_been_evicted = ref(false) ;
  const willfully_interntionally_refused_to_pay_rent = ref(false) ;
  const caused_more_$150_property_damage = ref(false) ;
  const convicted_of_felony_misdemeanor = ref(false) ;
  const credit_problems_previous_2_years = ref(false) ;
  const under_18 = ref(false) ;
  const military_enlistment = ref(false) ;
  const bringing_pets = ref(false) ;
  const if_yes_any_explain = ref(null) ;
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
  const notes = ref('') ;
  const previousRentals = ref([]) ;
})