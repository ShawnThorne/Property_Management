<template>
  <div class="w-full">
    <div class="font-medium mb-2 text-sm">{{ label }}</div>
    <div class="relative">
      <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
        </svg>
      </div>
      <input v-model="dateRef" datepicker :id="id" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
    </div>
  </div>
</template>

<script setup>
import { onMounted } from 'vue';
import { Datepicker, initFlowbite } from 'flowbite';
import { useApplicantFormStore } from '../Stores/ApplicantStore';

const props = defineProps({
  label:{
    type: String,
    required: true
  },
  formObjName:{
    type: String,
    required: true
  },
  id: {
    type: String,
    required: true
  }
})

const form = useApplicantFormStore();

const dateRef = form[props.formObjName];

onMounted(()=>{
  initFlowbite();

  const $datepickerEl = document.getElementById(props.id);

  const datepicker = new Datepicker($datepickerEl);
})
</script>