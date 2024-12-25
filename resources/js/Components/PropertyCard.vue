<template>
  <div class="grid grid-cols-2">
    <div class="h-full w-full aspect-square flex justify-center items-center"
          :class="index && index > 0 && index % 2 === 0 ? 'order-last':''">
      image
      {{index}}
    </div>
    <div class="h-full w-full flex justify-center items-center">
      <div>
        <div class="text-2xl font-bold text-center">{{ property.name }}</div>
        <div class="line-clamp-4 text-ellipsis">{{ property.about }}</div>
        <div>{{ property.address }}</div>
      </div>
    </div>
  </div>
</template>
<script setup>
  const props = defineProps({
    property:Object,
    index: {
      default: false
    }
  });
</script>