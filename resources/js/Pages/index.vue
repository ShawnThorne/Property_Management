<script setup>
import { FwbButton } from 'flowbite-vue';
import Layout from './Layout/Layout.vue'

</script>

<template>
  <Layout>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:mt-12 gap-8">
      <div class="flex flex-col justify-center items-center">
        <div>
          <svg class="w-[120px] h-[120px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
          </svg>
        </div>
        <FwbButton href="/properties" class="text-xl font-bold">
          <div class="m-2">View available properties</div>
        </FwbButton>
      </div>

      <div class="flex flex-col justify-center items-center">
        <svg class="w-[120px] h-[120px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-6 7 2 2 4-4m-5-9v4h4V3h-4Z"/>
        </svg>
        <FwbButton  class="text-xl font-bold">
          <div class="m-2 ">Submit a service request</div>
        </FwbButton>
      </div>
    </div>
  </Layout>
</template>