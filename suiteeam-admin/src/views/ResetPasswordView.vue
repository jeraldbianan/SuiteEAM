<script setup>
import { onMounted, onUnmounted, ref } from 'vue';
import { useFocusTrap } from '@vueuse/integrations/useFocusTrap';

import GuestLayout from '@/components/GuestLayout.vue';
import InputField from '@/components/ui/InputField.vue';
import CustomButton from '@/components/ui/CustomButton.vue';

const resetPasswordForm = ref();
const { activate, deactivate } = useFocusTrap(resetPasswordForm, { immediate: true });

onMounted(() => {
  activate();
});

onUnmounted(() => {
  deactivate();
});
</script>

<template>
  <GuestLayout title="Reset your password">
    <form @submit.prevent="resetPassword" method="POST" ref="resetPasswordForm" class="space-y-6">
      <div>
        <label for="new-password" class="block text-sm/6 font-medium text-dark">New Password</label>
        <div class="mt-2">
          <InputField id="new-password" name="password" type="password" required />
        </div>
      </div>

      <div>
        <label for="confirm_password" class="block text-sm/6 font-medium text-dark"
          >Confirm Password</label
        >
        <div class="mt-2">
          <InputField id="confirm_password" name="confirm_password" type="password" required />
        </div>
      </div>

      <div>
        <CustomButton type="submit" class="w-full py-2">Reset Password</CustomButton>
      </div>
    </form>
  </GuestLayout>
</template>
