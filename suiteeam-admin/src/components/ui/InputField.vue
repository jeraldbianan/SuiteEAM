<script setup>
const model = defineModel();
</script>

<template>
  <input
    v-model="model"
    class="placeholder:text-gray-400 block w-full rounded-md border-0 px-2 py-1.5 text-dark shadow-sm focus:ring-2 focus:ring-primary sm:text-sm/6"
    v-bind="$attrs"
  />
</template>
