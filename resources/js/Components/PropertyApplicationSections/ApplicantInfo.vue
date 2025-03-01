<template>
<div class="w-full">
  <div class="text-xl font-bold">
    Applicant Info
  </div>
  <div class="grid grid-cols-1 gap-2 pt-4">
    <div class="flex flex-col lg:flex-row gap-2 w-full justify-center">
      <FwbInput class="w-full" v-model="form.name" type="text" label="Full Name" id="name" name="name" />
      <DatePicker dateRef="date_of_birth" label="Date Of Birth"/>
    </div>
    <div>
      <FwbInput v-model="form.current_address" type="text" label="Current Address" id="current_address" name="current_address" />
    </div>
    <div class="flex flex-col lg:flex-row gap-2 w-full">
      <FwbInput class="w-full" v-model="form.phone" label="Cell Phone"/>
      <FwbInput class="w-full" v-model="form.email" label="Email"/>
    </div>
    <div class="flex flex-col lg:flex-row gap-2 w-full">
      <FwbInput class="w-full" v-model="form.driver_license_number" label="Drivers License Number"/>
      <FwbInput class="w-full" v-model="form.driver_license_state" label="Drivers License State"/>
    </div>
  </div>
</div>
</template>

<script setup>
import { FwbInput } from 'flowbite-vue';
import { useApplicantFormStore } from '../../Stores/ApplicantStore';
import DatePicker from '../DatePicker.vue';
import { onMounted } from 'vue';


const form = useApplicantFormStore();

const martialStatusOptions = [
  {value: 'single', name: 'Single'},
  {value: 'married', name: 'Married'},
  {value: 'divorced', name: 'Divorced'},
  {value: 'widowed', name: 'Widowed'},
  {value: 'other', name: 'Other'},
];

onMounted(()=>{
  initFlowbite();
})
</script>