<template>
<div class="w-full">
  <div class="text-xl font-bold">
    Applicant Info
  </div>
  <div class="grid grid-cols-1 gap-2 pt-4">
    <div class="flex flex-col lg:flex-row gap-2 w-full justify-center">
      <FwbInput class="w-full" v-model="form.name" type="text" label="Full Name" id="name" name="name" />
      <DatePicker formObjName="date_of_birth" id="DOB_picker" label="Date Of Birth"/>
    </div>
    <div>
      <FwbInput v-model="form.current_address" type="text" label="Current Address" id="current_address" name="current_address" />
    </div>
    <div class="flex flex-col lg:flex-row gap-2 w-full">
      <FwbInput class="w-full" v-model="form.phone" label="Cell Phone"/>
      <FwbInput class="w-full" v-model="form.email" label="Email"/>
    </div>
    <div class="flex flex-col lg:flex-row gap-2 w-full">
      <FwbInput class="w-full" v-model="form.parents_phone" label="Parent's Phone Number"/>
      <FwbInput class="w-full" v-model="form.parents_address" label="Parent's Address"/>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2">
      <DatePicker id="desired_move_in_date_picker" formObjName="desired_move_in_date" label="Desired move-in date" />
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

onMounted(()=>{
  initFlowbite();
})
</script>