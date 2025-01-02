<template>
  <div class="grid grid-cols-2">
    <div class="h-full w-full aspect-square flex justify-center items-center"
          :class="index && index > 0 && index % 2 === 1 ? 'order-last':''">
      image
      {{index}}
    </div>
    <div class="h-full w-full flex justify-center items-center">
      <div>
        <div class="text-2xl font-bold text-center">{{ property.name }}</div>
        <div class="line-clamp-4 text-ellipsis">{{ property.about }}</div>
        <div>{{ property.address }}</div>
        <div class="mt-4">
          <Link :href="'/property/' + property.id">
            <FwbButton>
              View more details
            </FwbButton>
          </Link>
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
import { FwbButton } from 'flowbite-vue';

  const props = defineProps({
    property:Object,
    index: {
      required: true,
    }
  });
</script>