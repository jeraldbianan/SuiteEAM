<script setup>
import { onMounted, onUnmounted, ref } from 'vue';
import { useFocusTrap } from '@vueuse/integrations/useFocusTrap';

import GuestLayout from '@/components/GuestLayout.vue';
import InputField from '@/components/ui/InputField.vue';
import CustomButton from '@/components/ui/CustomButton.vue';

const forgotPasswordForm = ref();
const { activate, deactivate } = useFocusTrap(forgotPasswordForm, { immediate: true });

onMounted(() => {
  activate();
});

onUnmounted(() => {
  deactivate();
});
</script>

<template>
  <GuestLayout title="Forgot password">
    <form
      @submit.prevent="requestPasswordReset"
      method="POST"
      ref="forgotPasswordForm"
      class="space-y-6"
    >
      <div>
        <label for="email" class="block text-sm/6 font-medium text-dark">Email address</label>
        <div class="mt-2">
          <InputField
            id="email"
            name="email"
            type="email"
            autocomplete="email"
            placeholder="johndoe@test.com"
            required
          />
        </div>
      </div>

      <div>
        <CustomButton type="submit" class="w-full py-2">Send Link</CustomButton>
      </div>

      <p class="text-center">
        Remember your password?
        <RouterLink :to="{ name: 'login' }" class="font-semibold text-primary hover:text-primary/80"
          >Login</RouterLink
        >
      </p>
    </form>
  </GuestLayout>
</template>
