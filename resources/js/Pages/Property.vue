<template>
  <div>
    <div class="text-center">
      <div class="text-5xl font-bold">{{ property.name }}</div>
      <div class="mt-1 text-gray-60">{{ property.address }}</div>
    </div>
    <div class="w-full aspect-square flex items-center justify-center">first image</div>
    <div>
      {{ property.about }}
    </div>
    <div>
      <div class="text-xl font-bold mt-4">Property Details</div>
      <div>Beds: {{ property.num_of_spaces }}</div>
      <div>Baths: {{ property.num_of_baths }}</div>
    </div>
    <div>
      <Link :href="'/apply/' + property.id">
        <FwbButton class="mt-4 w-full text-xl font-bold capitalize">
          Apply now
        </FwbButton>
      </Link>
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import { FwbButton } from 'flowbite-vue';


const props = defineProps({
  property:{
    type: Object,
    required: true
  }
})
</script>