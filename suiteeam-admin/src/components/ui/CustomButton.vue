<script setup>
defineProps({
  type: {
    type: String,
    required: false,
    default: 'button',
  },
  disabled: {
    type: Boolean,
    default: false,
  },
});

const emit = defineEmits(['click']);

const onClick = () => {
  emit('click');
};
</script>

<template>
  <button
    @click="onClick"
    :type="type"
    :disabled="disabled"
    class="flex items-center justify-center rounded-md bg-primary text-sm/6 font-semibold text-light shadow-sm transition-all hover:bg-primary/90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:scale-[.98]"
    :class="{ 'cursor-not-allowed': disabled, 'hover:bg-primary/60': disabled }"
  >
    <slot></slot>
  </button>
</template>
