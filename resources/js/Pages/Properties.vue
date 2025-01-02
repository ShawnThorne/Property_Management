
<template>
  <div class="flex flex-col gap-8" v-for="(property, index) in properties" :key="property.id">
    <PropertyCard :property="property" :index="index"/>
  </div>
</template>
<script setup lang="ts">
import PropertyCard from '../Components/PropertyCard.vue';

const props = defineProps({
  properties:Array<Object>
})
</script>