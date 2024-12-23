<script setup>
import { initFlowbite } from 'flowbite';
import Layout from './Layout/Layout.vue'

defineProps({ user: Object })

</script>

<template>
  <Layout>
    <h1>Welcome</h1>
    <div class="text-xl font-bold">Hello {{ user.name }}, welcome to your first Inertia app!</div>
  </Layout>
</template>