<template>
  <div class="container grid grid-cols-1 gap-16">
    <ApplicantInfo/>
    <ApplicantWorkHistory/>
    <RentalHistory/>
  </div>
</template>

<script setup>
import { initFlowbite } from 'flowbite';
import { onMounted} from 'vue';
import ApplicantInfo from '../Components/PropertyApplicationSections/ApplicantInfo.vue';
import ApplicantWorkHistory from '../Components/PropertyApplicationSections/ApplicantWorkHistory.vue';
import RentalHistory from '../Components/PropertyApplicationSections/RentalHistory.vue';

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
})
</script>

<style scoped>

</style>