<script setup>
import { onMounted, onUnmounted, ref } from 'vue';

import Sidebar from '@/components/SideBar.vue';
import NavBar from '@/components/NavBar.vue';
import LoadingSpinner from '@/components/ui/LoadingSpinner.vue';

const sidebarOpened = ref(true);

onMounted(() => {
  if (window.innerWidth < 768) {
    sidebarOpened.value = false;
  }

  window.addEventListener('resize', handleSidebarUpdate);
});

onUnmounted(() => {
  window.removeEventListener('resize', handleSidebarUpdate);
});

const handleSidebarUpdate = () => {
  if (window.innerWidth < 768) {
    sidebarOpened.value = false;
  } else {
    sidebarOpened.value = true;
  }
};

const toggleSidebar = () => {
  sidebarOpened.value = !sidebarOpened.value;
};
</script>

<template>
  <div v-if="true" class="flex min-h-full">
    <!-- sidebar -->
    <Sidebar :class="{ '-ml-[200px]': !sidebarOpened }" :status="sidebarOpened" />

    <!-- main content -->
    <div class="flex-1">
      <!-- header -->
      <NavBar @toggle-sidebar="toggleSidebar" />

      <!-- content -->
      <main class="p-6">
        <div class="rounded-md bg-light p-4">
          <RouterView v-slot="{ Component }">
            <Transition name="fade" mode="out-in">
              <component :is="Component"></component>
            </Transition>
          </RouterView>
        </div>
      </main>

      <!-- content -->
    </div>
  </div>
  <div v-else class="flex h-screen items-center justify-center">
    <div class="flex flex-col items-center gap-4">
      <LoadingSpinner class="w-16 animate-spin text-primary" />
      <p class="animate-pulse text-xl">Please wait...</p>
    </div>
  </div>
</template>

<style scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.3s;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}
</style>
