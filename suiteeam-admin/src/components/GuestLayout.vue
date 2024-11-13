<script setup>
import EAMLogo from '@/assets/images/EAM.webp';

defineProps({
  title: String,
});
</script>

<template>
  <div
    class="flex min-h-screen w-screen items-center justify-center bg-[url('@/assets/images/login-bg.webp')] bg-cover bg-center bg-no-repeat px-4 md:px-0"
  >
    <div
      class="flex max-w-[400px] flex-1 -translate-y-20 flex-col items-center rounded-lg bg-light p-10"
    >
      <img :src="EAMLogo" alt="EAM Logo" class="h-32 w-32" loading="lazy" />

      <h1 class="text-center text-2xl/3 font-medium leading-none text-dark">
        {{ title }}
      </h1>

      <div class="mb-5 mt-8 w-full">
        <slot></slot>
      </div>
    </div>
  </div>
</template>
