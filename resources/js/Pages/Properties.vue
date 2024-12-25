
<template>
  <Layout>
    <div v-for="(property, index) in properties" :key="property.id">
      <PropertyCard :property="property"/>
    </div>
  </Layout>
</template>
<script setup lang="ts">
import PropertyCard from '../Components/PropertyCard.vue';
import Layout from './Layout/Layout.vue';

const props = defineProps({
  properties:Array
})
</script>