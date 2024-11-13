<script setup>
import { onMounted, onUnmounted, ref } from 'vue';
import { useFocusTrap } from '@vueuse/integrations/useFocusTrap';

import GuestLayout from '@/components/GuestLayout.vue';
import CustomButton from '@/components/ui/CustomButton.vue';
import InputField from '@/components/ui/InputField.vue';
import LoadingSpinner from '@/components/ui/LoadingSpinner.vue';

const user = {
  email: '',
  password: '',
  remember: false,
};

const signinForm = ref();
const { activate, deactivate } = useFocusTrap(signinForm, { immediate: true });

onMounted(() => {
  activate();
});

onUnmounted(() => {
  deactivate();
});
</script>

<template>
  <GuestLayout title="Sign in to your account">
    <form @submit.prevent="login" class="space-y-6" method="POST" ref="signinForm">
      <!-- <div v-if="authStore.errorMsg" class="text-danger font-semibold">
        {{ authStore.errorMsg }}
      </div> -->

      <div>
        <label for="email" class="block text-sm/6 font-medium text-dark">Email address</label>
        <div class="mt-2">
          <InputField
            v-model="user.email"
            ref="loginRef"
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
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm/6 font-medium text-dark">Password</label>
          <div class="text-sm">
            <RouterLink
              :to="{ name: 'requestPasswordReset' }"
              class="p-1 font-semibold text-primary hover:text-primary/80 focus-visible:outline-primary"
              >Forgot password?
            </RouterLink>
          </div>
        </div>
        <div class="mt-2">
          <InputField
            v-model="user.password"
            id="password"
            name="password"
            type="password"
            required
          />
        </div>
      </div>

      <div class="flex items-center gap-2">
        <input
          v-model="user.remember"
          id="remember"
          name="remember"
          type="checkbox"
          class="h-4 w-4 rounded border-primary text-primary focus:!ring-primary"
          aria-labelledby="remember-label"
        />
        <label for="remember" class="block text-sm/6 font-medium text-dark">Remember me</label>
      </div>

      <div>
        <CustomButton type="submit" class="w-full py-2">
          <LoadingSpinner v-if="false" class="mr-2 h-5 w-5 animate-spin font-black text-white" />
          <div v-else>Sign in</div>
        </CustomButton>
      </div>
    </form>
  </GuestLayout>
</template>

<style lang="scss" scoped></style>
