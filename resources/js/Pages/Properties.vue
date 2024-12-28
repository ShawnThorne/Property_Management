
<template>
  <Layout>
    <div class="flex flex-col gap-8" v-for="(property, index) in properties" :key="property.id">
      <PropertyCard :property="property" :index="index"/>
    </div>
  </Layout>
</template>
<script setup lang="ts">
import PropertyCard from '../Components/PropertyCard.vue';
import Layout from './Layout/Layout.vue';

const props = defineProps({
  properties:Array<Object>
})
</script>