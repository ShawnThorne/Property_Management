<template>
  <div>
    <div class="text-xl font-bold">
      Vehicles and Related Information
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
      <FwbInput v-model="form.driver_license_number" label="Driver's license number"/>
      <FwbInput v-model="form.driver_license_state" label="Driver's license state"/>
      <FwbCheckbox v-model="form.owns_vehicle" label="Do you own a vehicle?"/>
      <FwbInput v-if="form.owns_vehicle" v-model="form.vehicle_make" label="Vehicle Make"/>
      <FwbInput v-if="form.owns_vehicle" v-model="form.vehicle_model" label="Vehicle Model"/>
      <FwbInput v-if="form.owns_vehicle" v-model="form.vehicle_year" label="Vehicle Year"/>
      <FwbInput v-if="form.owns_vehicle" v-model="form.vehicle_license_plate" label="Vehicle License Plate"/>
    </div>
    <div class="grid grid-cols-2 mt-4 gap-2">
      <FwbCheckbox v-model="form.has_bicycle" label="Do you have a bicycle?"/>
      <FwbCheckbox v-model="form.has_boat" label="Do you have a boat?"/>
      <FwbCheckbox v-model="form.has_motorcyle" label="Do you have a motorcyle?"/>
      <FwbCheckbox v-model="form.has_camper" label="Do you have a camper?"/>
    </div>
  </div>
</template>

<script setup>
import { FwbCheckbox, FwbInput } from 'flowbite-vue';
import { useApplicantFormStore } from '../../Stores/ApplicantStore';

const form = useApplicantFormStore();

</script>