import { createRouter, createWebHistory } from 'vue-router';

const routes = [
  {
    path: '/login',
    name: 'login',
    component: () => import('@/views/LoginView.vue'),
    meta: {
      requiresGuest: true,
    },
  },
  {
    path: '/request-password-reset',
    name: 'requestPasswordReset',
    component: () => import('@/views/RequestPasswordResetView.vue'),
    meta: {
      requiresGuest: true,
    },
  },
  {
    path: '/reset-password/:token',
    name: 'resetPassword',
    component: () => import('@/views/ResetPasswordView.vue'),
    meta: {
      requiresGuest: true,
    },
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
