<script setup>
import store from '@/store';
import { computed } from 'vue';

const test = computed(() => store.state.test);
</script>

<template>
  <div>
    <h1 class="text-5xl">Login</h1>

    {{ test }}
  </div>
</template>

<style lang="scss" scoped></style>
