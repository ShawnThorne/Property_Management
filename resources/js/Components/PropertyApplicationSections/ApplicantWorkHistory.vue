<template>
<div>
  <div class="font-bold text-xl">
    Applicant Work History
  </div>
  <!-- body of the component -->
   <div>
    <FwbCheckbox class="mt-4" v-model="form.is_employed" label="Are you employed currently?"/>
   </div>
  <div v-if="form.is_employed" class="mt-4 grid grid-cols-1 lg:grid-cols-2 gap-4">
      <FwbInput v-model="form.current_employer" type="text" label="Current Employer" />
      <FwbInput v-model="form.employer_address" type="text" label="Employer Address" />
      <FwbInput v-model="form.employer_phone" type="text" label="Employer Phone"/>
      <FwbInput v-model="form.current_monthly_salary" type="number" label="Monthly Income" />
      <FwbInput v-model="form.employer_supervisor" type="text" label="Name of Current Supervisor"/>
      <FwbInput v-model="form.employer_length_of_employment" type="text" label="Length of Employment"/>
  </div>
  <div v-else class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-4">
      <FwbInput v-model="form.if_not_employed_who_provides_living_expenses" label="Who is providing for your living expenses"/>
      <FwbInput v-model="form.provider_email" label="Provider Email"/>
      <FwbInput v-model="form.provider_address" label="Provider Address"/>
      <FwbInput v-model="form.provider_phone" label="Provider Phone"/>
  </div>
</div>
</template>
<script setup>
import { FwbCheckbox, FwbInput } from 'flowbite-vue';
import { useApplicantFormStore } from '../../Stores/ApplicantStore';


const form = useApplicantFormStore();

</script>