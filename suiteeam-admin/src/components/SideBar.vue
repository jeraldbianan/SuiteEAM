<script setup>
import EAMLogo from '@/assets/images/EAM.webp';
import { HomeIcon, UsersIcon } from '@heroicons/vue/24/outline';

defineProps({
  status: Boolean,
});

const links = [
  {
    name: 'app.dashboard',
    icon: HomeIcon,
    label: 'Dashboard',
  },
  {
    name: 'app.employees',
    icon: UsersIcon,
    label: 'Employees',
  },
];
</script>

<template>
  <aside
    class="flex min-h-screen w-[200px] flex-col items-center bg-light transition-all"
    aria-label="Sidebar"
    :aria-hidden="!status"
  >
    <img :src="EAMLogo" alt="Neonella Logo" class="h-32 w-32" />

    <nav class="w-full">
      <ul class="space-y-2">
        <li v-for="link in links" :key="link.name" class="px-2 transition-all">
          <RouterLink
            :to="{ name: link.name }"
            class="flex items-center rounded px-2 py-2 transition-transform duration-150 hover:bg-primary hover:text-white focus:outline-primary active:scale-95"
            exact-active-class="bg-primary text-white"
            :aria-label="`Navigate to ${link.label}`"
            :tabindex="status ? 0 : -1"
          >
            <span class="mr-2">
              <component :is="link.icon" class="w-5" aria-hidden="true"></component>
            </span>
            <span>{{ link.label }}</span>
          </RouterLink>
        </li>
      </ul>
    </nav>
  </aside>
</template>

<style lang="scss" scoped></style>
