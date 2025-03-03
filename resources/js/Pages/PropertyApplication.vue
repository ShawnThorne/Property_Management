<template>
  <div class="container grid grid-cols-1 gap-16">
    <ApplicantInfo/>
    <ApplicantWorkHistory/>
    <RentalHistory/>
    <Vehicles/>
    <Other/>
    <div class="w-full flex justify-center mb-12">
      <FwbButton @click="submitApplicationForm" class="w-1/2 text-xl">
        Submit Application
      </FwbButton>
    </div>
  </div>
</template>

<script setup>
import { initFlowbite } from 'flowbite';
import { onMounted} from 'vue';
import ApplicantInfo from '../Components/PropertyApplicationSections/ApplicantInfo.vue';
import ApplicantWorkHistory from '../Components/PropertyApplicationSections/ApplicantWorkHistory.vue';
import RentalHistory from '../Components/PropertyApplicationSections/RentalHistory.vue';
import Vehicles from '../Components/PropertyApplicationSections/Vehicles.vue';
import Other from '../Components/PropertyApplicationSections/Other.vue';
import { FwbButton } from 'flowbite-vue';
import axios, { formToJSON } from 'axios';
import { useApplicantFormStore } from '../Stores/ApplicantStore';
import { storeToRefs } from 'pinia';

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

onMounted(()=>{
  initFlowbite();
});

const form = useApplicantFormStore();

function submitApplicationForm()
{  
  axios.post('/submit_applicant_form', form)
  .then(res => {
    console.log('here');
  })
}
</script>

<style scoped>

</style>