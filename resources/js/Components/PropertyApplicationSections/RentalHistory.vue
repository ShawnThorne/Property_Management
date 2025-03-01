<template>
  <div>
    <div class="font-bold text-xl">
      Rental History
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
      <FwbSelect :options="yesNoOptions" class="mt-4" v-model="form.ever_been_evicted" label="Have you ever been evicted?"/>
      <FwbSelect :options="yesNoOptions" class="mt-4" v-model="form.willfully_intentionally_refused_to_pay_rent" label="Have you ever willfully or intentionally refused to pay rent?"/>
      <FwbSelect :options="yesNoOptions" class="mt-4" v-model="form.caused_more_$150_property_damage" label="Have you ever caused more than $150 in property damage?"/>
    </div>
    <div>
      <div class="font-bold text-xl mt-4">
        Previous Rental Details
      </div>
      <div class="overflow-y-auto max-h-96">
        <div v-for="(rental, index) in form.previousRentals" :key="index" class="mt-4">
          <div class="font-bold flex justify-between text-lg">
            <div>Previous Rental {{ index + 1 }}</div>
            <div @click="deletePreviousRental(rental.id)" class="bg-red-600 hover:bg-red-700 transition cursor-pointer text-white p-2 rounded text-medium font-medium px-4 mr-2">
              Delete
            </div>
          </div>
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
            <FwbInput v-model="rental.name" type="text" label="Name of Rental Property" />
            <FwbInput v-model="rental.phone" type="text" label="Phone"/>
            <FwbInput v-model="rental.address" type="text" label="Address" />
            <FwbInput v-model="rental.reason_for_leaving" type="text" label="Reason for Leaving"/>
          </div>
          <hr class="mt-4">
        </div>
        <div @click="addPreviousRental" class="flex justify-center mt-4 cursor-pointer">
          <div class="bg-blue-500 font-bold text-white flex p-2 px-4 rounded-lg">
            <svg class="w-6 h-6 mr-1 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
            </svg>
            <div>Add Previous Rental</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { FwbSelect, FwbInput } from 'flowbite-vue';
import { useApplicantFormStore } from '../../Stores/ApplicantStore';

const form = useApplicantFormStore();

function addPreviousRental(){
  form.previousRentals.push({
    id: form.previousRentals.length + 1,
    address: '',
    landlord: '',
    phone: '',
    rent: '',
    reason_for_leaving: '',
    start_date: '',
    end_date: '',
  });
}

function deletePreviousRental(id){
  form.previousRentals = form.previousRentals.filter(rental => rental.id !== id);
}

const yesNoOptions = [
  {value: 1, name: 'Yes'},
  {value: 0, name: 'No'},
];

</script>