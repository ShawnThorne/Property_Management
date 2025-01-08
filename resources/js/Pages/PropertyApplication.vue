<template>
  <div>
    <form @submit.prevent="form.post('/apply')" class="grid grid-cols-1 gap-4">
      <div class="text-xl font-bold">Details</div>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        <div>
          <label for="name">Name</label>
          <FwbInput v-model="form.name" type="text" id="name" name="name" />
        </div>
        <div>
          <label for="phone">Phone Number</label>
          <FwbInput v-model="form.phone" type="text" id="phone" name="phone" />
        </div>
        <div>
          <label for="email">Email</label>
          <FwbInput v-model="form.email" type="text" id="email" name="email" />
        </div>
        <div>
          <label for="desired_move_in_date">Desired Move In Date</label>
          <div class="relative max-w-sm">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
              </svg>
            </div>
            <input datepicker id="default-datepicker" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
          </div>
        </div>
        <div class="flex items-center">
          <label class="mr-2" for="applying_as_group">Are you applying as part of a group?</label>
          <FwbToggle v-model="form.applying_as_group" id="applying_as_group" name="applying_as_group" />
        </div>
        <div v-if="form.applying_as_group">
          <label for="group_names">Names in Group</label>
          <FwbTextarea v-model="form.group_names" placeholder="Please type the names of the people you are applying with" type="text" id="group_names" label="" name="group_names" />
        </div>
        <div>
          <label for="discovery_method">How'd you find out about {{ organization.name }}?</label>
          <FwbInput v-model="form.discovery_method" type="text" id="discovery_method" name="discovery_method" />
        </div>
      </div>
      <div class="text-xl font-bold">Legal Information</div>
      <div>
        <div>
          <label for="full_legal_name">Full Legal Name</label>
          <FwbInput v-model="form.full_legal_name" type="text" id="full_legal_name" name="full_legal_name" />
        </div>
        <div>
          <label for="date_of_birth">Date of Birth</label>
          <div class="relative max-w-sm">
          <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
            </svg>
          </div>
          <input datepicker v-model="form.date_of_birth" id="date_of_birth" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
        </div>
        <div>
          <label for="current_address">Current Address</label>
          <FwbInput v-model="form.current_address" type="text" id="current_address" name="current_address" />
        </div>
        </div>
      </div>
    </form>
  </div>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3';
import { Datepicker, initFlowbite } from 'flowbite';
import { FwbInput, FwbTextarea, FwbToggle } from 'flowbite-vue';
import { onMounted, watch } from 'vue';

const props = defineProps({
  selected:{
    type: Number,
    required: true
  },
  properties:{
    type: Array,
    required: true
  },
  organization:{
    type: Object,
    required: true
  }
});

let datepicker;

onMounted(()=>{
  initFlowbite();

  const $datepickerEl = document.getElementById('default-datepicker');

  datepicker = new Datepicker($datepickerEl);
})

const form = useForm({
  name: '',
  email: '',
  phone: '',
  properties_applying_for: [props.selected],
  desired_move_in_date: null,
  applying_as_group: false,
  group_names: null,
  discovery_method: null,
  full_legal_name: '',
  date_of_birth: null,
  current_address: null,
  cell_phone: null,
  parents_address: null,
  parents_phone: null,
  school: null,
  ever_been_evicted: null,
  willfully_interntionally_refused_to_pay_rent: null,
  caused_more_$150_property_damage: null,
  convicted_of_felony_misdemeanor: null,
  credit_problems_previous_2_years: null,
  under_18: null,
  military_enlistment: null,
  bringing_pets: null,
  if_yes_any_explain: null,
  driver_license_number: null,
  driver_license_state: null,
  owns_vehicle: null,
  vehicle_make: null,
  vehicle_model: null,
  vehicle_year: null,
  vehicle_license_plate: null,
  has_bicycle: null,
  has_boat: null,
  has_motorcycle: null,
  has_camper: null,
  is_employed: null,
  current_employer: null,
  employer_phone: null,
  employer_address: null,
  current_monthly_salary: null,
  employer_supervisor: null,
  employer_length_of_employment: null,
  if_not_employed_who_provides_living_expenses: null,
  provider_phone: null,
  provider_email: null,
  provider_address: null,
  previous_rental_1_name: null,
  previous_rental_1_phone: null,
  previous_rental_1_address: null,
  previous_rental_1_start_date: null,
  previous_rental_1_end_date: null,
  previous_rental_2_name: null,
  previous_rental_2_phone: null,
  previous_rental_2_address: null,
  previous_rental_2_start_date: null,
  previous_rental_2_end_date: null,
  previous_rental_3_name: null,
  previous_rental_3_phone: null,
  previous_rental_3_address: null,
  previous_rental_3_start_date: null,
  previous_rental_3_end_date: null,
  previous_rental_4_name: null,
  previous_rental_4_phone: null,
  previous_rental_4_address: null,
  previous_rental_4_start_date: null,
  previous_rental_4_end_date: null,
  notes: null,
})

watch(form, (value)=>{
  console.log(document.getElementById('default-datepicker').value)
  
})
</script>

<style scoped>

</style>